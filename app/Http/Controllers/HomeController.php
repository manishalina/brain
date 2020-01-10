<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class HomeController extends Controller
{
   
    public function index()
    {
         $blogs = Blog::with(['user_detail'])->orderBy('id','DESC')->limit(3)->get();
         //dd($blogs);
         return view('home', compact('blogs'));
    } 

    public function blog()
    {
         $blogs = Blog::with(['user_detail'])->orderBy('id','DESC')->get();
         return view('blog.index', compact('blogs'));
    }
    public function about()
    {
        return view('about');
    }

    public function team()
    {
            return view('team');
    } 
    public function contact()
    {
            return view('contact');
    } 
    public function gradeeight()
    {
            return view('gradeeight');
    } 
    public function gradeninth()
    {
            return view('gradeninth');
    }
    public function privacypolicy()
    {
            return view('privacypolicy');
    }
    public function disclaimer()
    {
            return view('disclaimer');
    }
    public function termsconditions()
    {
            return view('termsconditions');
    }
    public function gradeeleven()
    {
            return view('gradeeleven');
    }

    public function programhighlights()
    {
            return view('programhighlights');
    }
    public function programfeatures()
    {
            return view('programfeatures');
    }

    public function login()
    {
        return view('auth.userlogin');
    }

    public function register()
    {
    	return view('auth.userregister');
        //return view('home');
    }
}
