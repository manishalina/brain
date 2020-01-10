<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get(); 
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = array();
        return view('admin.blog.create',compact('blog'));
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
            'title'=>'required|max:100||unique:blogs',
            ]);
        $image = '';
        if($_FILES['file']['name'] != ''){
            $path = 'assets/blog/';        
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
        
        $blog =  Blog::create([          
          'title'                => $data['title'],
          'image'                => $image,
          'description'          => $data['description'],
          'createdby'            => Auth::user()->id,         
         ]);
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
        return redirect()->route('blog.index')
            ->with('message',
             'Blog successfully added.');
        }else{
            return redirect()->route('blog.index')
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
       $blog = Blog::findOrFail($id);
        return view('admin.blog.create', compact('blog'));
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
            'title'=>'required|max:100||unique:blogs,title,'.$id,
        ]);
        $path = 'assets/blog/';        
        $image_file         = $request->file('file');
        $blog = blog::findOrFail($id);
        $oldLogoUrl=$blog->image;
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
                    $blog->image   = $image;
        }
        
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog = $blog->save();

       if(isset($blog)) {
        return redirect()->route('blog.index')
            ->with('message',
             'Blog successfully updated.');
        }else{
            return redirect()->route('blog.index')
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
