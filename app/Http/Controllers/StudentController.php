<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use App\User;
use Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $students = User::where('type','2')->get();
        return view('admin.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = array();
        return view('admin.student.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname'=>'required|max:100',
            'email'=>'required|unique:users',
        ]);
        $image = '';
        if($_FILES['file']['name'] != ''){
            $path = 'assets/student/';        
            $image_file         = $request->file('file');
            $destinationPath    = $path;
            $image_name         = $image_file->getClientOriginalName();
            $extention          = $image_file->getClientOriginalExtension();
            $image = value(function() use ($image_file){
            $filename = time().'.'. $image_file->getClientOriginalExtension();
            return strtolower($filename);
            });
            $request->file('file')->move($destinationPath, $image);
        }
        $data = $request->all();
        $user = array(          
          'name'                => $data['fname'],
          'lname'               => $data['lname'],
           'school'              => $data['school'],
           'city'                => $data['city'],
           'contact'             => $data['phone'],
           'grade'               => $data['grade'],
           'board'               => $data['board'],
           'stream'              => $data['stream'],
           'address'             => $data['address'],
           'image'               => $image,
           'type'                => 2,         
           'email'               => $data['email'],         
           'password'            => Hash::make($data['password'])         
         );
        $blog =  User::create($user);
       // //dd($client->id);

        // $getWebInfo = Websitesetting::select('website_name', 'website_logo', 'email', 'address', 'mobile')->first();
        //  //$org = Organizationmaster::find($data['OrgID']);
        //  $content = [
        //      'title'         => 'Registration with FirstAd', 
        //      'body'          => 'The body of your message.',
        //      'address'       => $getWebInfo->address,
        //      'mobile'        => $getWebInfo->mobile,
        //      'website_name'  => $getWebInfo->website_name,
        //      'website_logo'  => $getWebInfo->website_logo,
        //      'email'         => $getWebInfo->email,
        //      'client'       => $client,
        //      'name'          => $data['fname'].' '.$data['lname'],
        //      'password_flag'          => true,
        //      ];
        // //$receiverAddress = array('manish@nrt.co.in');
        // $receiverAddress = array($data['email']);
        // // //return view('emails.CandidateApply',compact('content'));
        // $mail = Mail::to($receiverAddress)->bcc('manish09.chakravarti@gmail.com')->send(new ClientMail($content) );
        // if (count(Mail::failures()) > 0) {
        //     //echo "There was one or more failures. They were: <br />";
        //     foreach (Mail::failures as $email_address) {
        //       //  echo " - $email_address <br />";
        //     }
        // }else {
        //     //echo "No errors, all sent successfully!";
        // }


       if(isset($blog)) {
        return redirect()->route('student.index')
            ->with('message',
             'Blog successfully added.');
        }else{
            return redirect()->route('student.index')
            ->with('message',
             'Action Failed Please try again.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $student = User::findOrFail($id);
        return view('admin.student.create', compact('student'));
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

        $this->validate($request, [
            'fname'=>'required|max:100',
            'grade'=>'required',
            'board'=>'required',
            'stream'=>'required',
        ]);
        $path = 'assets/student/';        
        $image_file         = $request->file('file');
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
        return redirect()->route('student.index')
            ->with('message',
             'Student successfully updated.');
        }else{
            return redirect()->route('student.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verify($id){
             $student = User::findOrFail($id);
             $student->IsVerify=1;
             $udate = $student->save();
            if(isset($udate)) {
                return redirect()->route('student.index')->with('message',
            'Student successfully Verify.');
            }else{
                return redirect()->route('student.index')->with('message','Action Failed Please try again.');
            }
    }

    public function interest($id){
        $student = User::findOrFail($id);
        return view('admin.student.interest', compact('student'));
    }
    public function saveinterest(Request $request){

             $data = $request->all();
             print_r($data);
             
             $id=$data['id'];
             $student = User::findOrFail($id);
             $name = array("Realistic","Investigative","Artistic","Social","Enterprising","Conventional");
             $first = $data['first']?$data['first']:0;
             $second = $data['second']?$data['second']:0;
             $third = $data['third']?$data['third']:0;
             $four = $data['four']?$data['four']:0;
             $five = $data['five']?$data['five']:0;
             $six = $data['six']?$data['six']:0;
             $interest = array($name[0]=>$first,$name[1]=>$second,$name[2]=>$third,$name[3]=>$four,$name[4]=>$five,$name[5]=>$six);
            $str =implode(',', $interest);
            $student->interest = serialize($interest);
             $udate = $student->save();
            if(isset($udate)) {
                return redirect()->route('student.index')->with('message',
            'Student interest save successfully.');
            }else{
                return redirect()->route('student.index')->with('message','Action Failed Please try again.');
            }
    }

    public function abilities($id){
             $student = User::findOrFail($id);
        return view('admin.student.abilities', compact('student'));
    }
        public function saveabilities(Request $request){

             $data = $request->all();
             $id=$data['id'];
             $student = User::findOrFail($id);
             $first = $data['first']?$data['first']:0;
             $second = $data['second']?$data['second']:0;
             $third = $data['third']?$data['third']:0;
             $four = $data['four']?$data['four']:0;

            $interest = array($first,$second,$third,$four);
            $str =implode(',', $interest);
            $student->abilities = $str;
             $udate = $student->save();
            if(isset($udate)) {
                return redirect()->route('student.index')->with('message',
            'Student Abilities save successfully.');
            }else{
                return redirect()->route('student.index')->with('message','Action Failed Please try again.');
            }
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $delete = $blog->delete();

        if(isset($delete)) {
        return redirect()->route('blog.index')
            ->with('message',
             'Blog successfully Deleted.');
        }else{
            return redirect()->route('blog.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }
}
