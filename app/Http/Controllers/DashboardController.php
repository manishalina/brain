<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Comment;
use App\Event;
use App\Subscribe;
class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function user_dashboard()
    {
        $student = User::where('id',Auth::user()->id)->first();
        $comment = Comment::where('user_id',Auth::user()->id)->first();
        $events = Event::orderBy('id','DESC')->get();
        if($student->abilities){
            $abilities = explode(',', $student->abilities);
        }else{
            $abilities = array(0,0,0,0);
        }
        if($student->interest){
            $interest = unserialize($student->interest);
        }else{
            $interest = array(0,0,0,0,0,0);
        }
        arsort($interest);
        return view('user.profile',compact('student','abilities','interest','comment','events'));
    
    }

    public function studentupdate(Request $request)
    {

        $this->validate($request, [
            'fname'=>'required|max:100',
            'grade'=>'required',
            'board'=>'required',
            'stream'=>'required',
        ]);
        $path = 'public/assets/student/';        
        $image_file         = $request->file('file');

        $id=$request->input('user_id');
        $user = User::findOrFail($id);
        $oldLogoUrl=$user->image;
        $data = $request->all();
        if($image_file){
                        // file selected
            if($oldLogoUrl != ''){
                if(file_exists($path.$oldLogoUrl)){
                   if(unlink($path.$oldLogoUrl)){
                    //echo "success delete";
                   }
                }
            }
                    $destinationPath    = $path;
                    $image_name         = $image_file->getClientOriginalName();
                    $extention          = $image_file->getClientOriginalExtension();
                    $image = value(function() use ($image_file){
                    $filename = time().'.'. $image_file->getClientOriginalExtension();
                    return strtolower($filename);
                    });
                    $request->file('file')->move($destinationPath, $image);
                    $user->image   = $image;
        }


        $user->name = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->school = $request->input('school');
        $user->city = $request->input('city');
        $user->contact = $request->input('phone');
        $user->grade = $request->input('grade');
        $user->board = $request->input('board');
        $user->stream = $request->input('stream');
        $user->address = $request->input('address');
        $user = $user->save();

       if(isset($user)) {
        return redirect('profile')
            ->with('message',
             'Student successfully updated.');
        }else{
            return redirect('profile')
            ->with('message',
             'Action Failed Please try again.');
        }
    }


    public function subscribelist()
    {
       $subscribes = Subscribe::where('type','subscribe')->get();
       return view('admin.subscribelist',compact('subscribes'));
    
    }

     public function requestlist()
    {
        $requests = Subscribe::where('type','request')->get();
       return view('admin.requestlist',compact('requests'));
    
    }

     public function contactlist()
    {
       $contacts = Subscribe::where('type','contact')->get();
       return view('admin.contactlist',compact('contacts'));
    }
}
