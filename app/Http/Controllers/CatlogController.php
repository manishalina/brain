<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use App\User;
use App\Faq;
use App\Catlog;
use Auth;

class CatlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catlogs = Catlog::get(); 
        return view('admin.catlog.index',compact('catlogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = array();
        return view('admin.catlog.create',compact('blog'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:200||unique:faqs',
            ]);
   
        $data = $request->all();
        $faq =  Catlog::create([          
          'title'                => $data['title'],
          'description'          => $data['description'],        
         ]);
       if(isset($faq)) {
        return redirect()->route('catlog.index')
            ->with('message',
             'Faq successfully added.');
        }else{
            return redirect()->route('catlog.index')
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
       $faq = Catlog::findOrFail($id);
        return view('admin.catlog.create', compact('faq'));
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
        $faq = Catlog::findOrFail($id);
        $data = $request->all();
        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq = $faq->save();
       if(isset($faq)) {
        return redirect()->route('catlog.index')
            ->with('message',
             'Catalogue successfully updated.');
        }else{
            return redirect()->route('catlog.index')
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
        $faq = Catlog::findOrFail($id);
        $delete = $faq->delete();

        if(isset($delete)) {
        return redirect()->route('catlog.index')
            ->with('message',
             'Catalogue successfully Deleted.');
        }else{
            return redirect()->route('catlog.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }

}
