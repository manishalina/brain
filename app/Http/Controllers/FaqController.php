<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use App\User;
use App\Faq;
use Auth;

class FaqController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::get(); 
        return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = array();
        return view('admin.faq.create',compact('blog'));
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:200||unique:faqs',
            ]);
   
        $data = $request->all();
        $faq =  Faq::create([          
          'title'                => $data['title'],
          'description'          => $data['description'],        
          'faq_type'          => $data['faq_type'],        
         ]);
       if(isset($faq)) {
        return redirect()->route('faq.index')
            ->with('message',
             'Faq successfully added.');
        }else{
            return redirect()->route('faq.index')
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
       $faq = Faq::findOrFail($id);
        return view('admin.faq.create', compact('faq'));
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
        $faq = Faq::findOrFail($id);
        $data = $request->all();
        $faq->title = $request->input('title');
        $faq->description = $request->input('description');
        $faq->faq_type = $request->input('faq_type');
        $faq = $faq->save();
       if(isset($faq)) {
        return redirect()->route('faq.index')
            ->with('message',
             'Faq successfully updated.');
        }else{
            return redirect()->route('faq.index')
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
        $faq = Faq::findOrFail($id);
        $delete = $faq->delete();

        if(isset($delete)) {
        return redirect()->route('faq.index')
            ->with('message',
             'Faq successfully Deleted.');
        }else{
            return redirect()->route('faq.index')
            ->with('message',
             'Action Failed Please try again.');
        }
    }

}
