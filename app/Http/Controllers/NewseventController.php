<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use App\User;
use App\Event;
use Auth;

class NewseventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get(); 
        return view('admin.news.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = array();
        return view('admin.news.create',compact('event'));
    }


    public function slugify($text)
        {
          $text = preg_replace('~[^\pL\d]+~u', '-', $text);
          $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
          $text = preg_replace('~[^-\w]+~', '', $text);
          $text = trim($text, '-');
          $text = preg_replace('~-+~', '-', $text);
          $text = strtolower($text);
          if (empty($text)) {
            return 'n-a';
          }
          return $text;
        }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:200||unique:events',
            ]);
         $image = '';
         if($_FILES['file']['name'] != ''){
            $path = 'public/assets/event/';        
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
        $slugify=$this->slugify($data['title']);
        $news =  Event::create([          
          'title'                => $data['title'],
          'description'          => $data['description'], 
          'slug'                => $slugify,
          'document'                => $image     
         ]);
       if(isset($news)) {
        return redirect()->route('news.index')
            ->with('message',
             'News & Event successfully added.');
        }else{
            return redirect()->route('news.index')
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
       $event = Event::findOrFail($id);
        return view('admin.news.create', compact('event'));
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
            'title'=>'required|max:200||unique:faqs,title,'.$id,
        ]);     
         $path = 'public/assets/event/';        
        $image_file         = $request->file('file');
        $news = Event::findOrFail($id);
        $oldLogoUrl=$news->image;
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
                    $news->document   = $image;
        }

        $slugify=$this->slugify($request->input('title'));
        
        $news->title = $request->input('title');
        $news->slug = $slugify;
        $news->description = $request->input('description');
        $news = $news->save();
       if(isset($news)) {
        return redirect()->route('news.index')
            ->with('message',
             'News & Event successfully updated.');
        }else{
            return redirect()->route('news.index')
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
        $news = Event::findOrFail($id);
        $delete = $news->delete();

        if(isset($delete)) {
        return redirect()->route('news.index')
            ->with('message',
             'News & Event successfully Deleted.');
        }else{
            return redirect()->route('news.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }

}
