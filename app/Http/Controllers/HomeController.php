<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Subscribe;
use App\Comment;
use App\Event;
use App\Faq;
use App\Catlog;
use Auth;
use App\Mail\SendMail;
use App\Mail\SubscribeMail;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
   
    public function index()
    {
         $blogs = Blog::with(['userDetail'])->orderBy('id','DESC')->limit(3)->get();
         $comments = Comment::with(['userDetail'])->orderBy('id','DESC')->get();
         //dd($blogs);
         return view('home', compact('blogs','comments'));
    } 

    public function blog()
    {
         $blogs = Blog::with(['userDetail'])->orderBy('id','DESC')->get();
         return view('blog.index', compact('blogs'));
    } 
    public function faq()
    {
         $faqs = Faq::Where('faq_type',1)->orderBy('id','DESC')->get();
         return view('faq.index', compact('faqs'));
    }

     public function catlog()
    {
         $faqs = Catlog::orderBy('id','DESC')->get();
         return view('catlog.index', compact('faqs'));
    }
    public function eventdetail($eventid)
    {
        $events = Event::where('id',$eventid)->first();
        $document='';
        if($events->document!='')
        {
           $url=asset("assets/event").'/'.$events->document;
           $document='<a target="_blank" href="'.$url.'">View Document</a>';
        }
        echo '<div class="blog-single">
            <div class="inner-box">
              <div class="lower-content" style="padding: 0px 20px;">
               <h4 style="margin-top: 6px;margin-bottom: 5px">'.$events->title.'</h4>
                <div class="text">
                  <p>
                     <span style="color: rgb(26, 30, 102); font-family: Muli, sans-serif;">'.$events->description.'</span>
                  </p> 
                  <p>'.$document.'</p>                 
                </div> 
              </div>
            </div>
         </div>';
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
        $faqs = Faq::Where('faq_type',2)->orderBy('id','DESC')->get();
            return view('gradeeight',compact('faqs'));
    } 
    public function gradeninth()
    {
        $faqs = Faq::Where('faq_type',2)->orderBy('id','DESC')->get();
            return view('gradeninth',compact('faqs'));
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
        $faqs = Faq::Where('faq_type',2)->orderBy('id','DESC')->get();
            return view('gradeeleven',compact('faqs'));
    }

    public function programhighlights()
    {
        $faqs = Faq::Where('faq_type',3)->orderBy('id','DESC')->get();
            return view('programhighlights',compact('faqs'));
    }
    public function programfeatures()
    {
        $faqs = Faq::Where('faq_type',3)->orderBy('id','DESC')->get();
            return view('programfeatures',compact('faqs'));
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
    public function subscribe(Request $req)
    {
       
        
        $list = Subscribe::where('email',$_POST['email'])->count();

        if($_POST['type']!='subscribe')
        {
           Subscribe::create([ 
                'email'=> $_POST['email'],
                'name'=> $_POST['name'],
                'mobile'=> $_POST['mobile'],
                'city'=> $_POST['city'],
                'topic'=> $_POST['topic'],
                'description'=> $_POST['message'],
                'type'=> $_POST['type']
            ]);
           Mail::to('jyotsnarajurs@yahoo.com')->bcc('jainshil@yahoo.com')->send(new ContactUsMail($req->all()));
             echo 'save';
        }
        else
        {
           if($list<1)
            {
             Subscribe::create([ 
                'email'=> $_POST['email'],
                'name'=> $_POST['name'],
                'mobile'=> $_POST['mobile'],
                'city'=> $_POST['city'],
                'topic'=> $_POST['topic'],
                'description'=> $_POST['message'],
                'type'=> $_POST['type']
            ]);
              Mail::to('jyotsnarajurs@yahoo.com')->bcc('jainshil@yahoo.com')->send(new SendMail($req->all()));
             Mail::to($_POST['email'])->send(new SubscribeMail('foobar'));
             echo 'save';
            }
            else
            {
                echo 'exist';
            }  
        }
       
        
    }

    public function savecomment()
    {
         $list = Comment::where('user_id',Auth::user()->id)->count();
         if( $list<1)
         {
            Comment::create([ 
                'user_id'=> Auth::user()->id,
                'title'=> $_POST['title'],
                'description'=> $_POST['comment'],
                'status'=> 0
            ]);
             echo 'save';  
         }
         else
         {
             $id=$_POST['comment_id'];
             $feedback = Comment::findOrFail($id);
             $feedback->title =$_POST['title'];
             $feedback->description =$_POST['comment'];
             $udate = $feedback->save();
              echo 'save';  
         }
       
       
        
    }


    public function blogdetail(Blog $blog)
    {
      $details=$blog->load('userDetail');
       return view('blog.blogdetail', compact('details'));
    }

     public function catlogdetail(Catlog $catlog)
    {
      $details=$catlog;
     // dd($catlog);
       return view('catlog.catlogdetail', compact('details'));
    }
}
