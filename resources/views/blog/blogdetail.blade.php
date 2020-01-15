@extends('layouts.app')

@section('content')
<!--Page Title-->
    <section style="padding: 179px 0px 90px;background-image:url({{asset('assets/images/background/8.jpg')}})" class="page-title" >
      <div class="auto-container">
      <div class="content">
        <h1>Blog <span>Details</span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Blog Details</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
  
  <!-- Blog Grid Section -->
  <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row clearfix">
        
        <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                  <div class="blog-single">
            <div class="inner-box">
              <div class="image">

                <img src="{{asset('assets/blog/'.$details->image)}}" alt="" />
               
              </div>
              <div class="lower-content">
                <ul class="post-meta">
                   <li><span class="fa fa-user"></span>Written By: {{$details->userDetail->name}}</li>
                   
                </ul>
                <h4>{{$details->title}}</h4>
                <div class="text">
                  <p> {!! $details->description !!}</p>
                                    <!-- <blockquote>
                    <div class="quote-icon flaticon-left-quote"></div>
                    <div class="quote-text">Framework atBrainMovers provides a robust analysis which is comprehensive, scientifically curated, research based & government approved. It hence provides a healthy base to begin with your quest on career choices!</div>
                  </blockquote>
              -->
                   
                   
                   
                </div>
                
              </div>
            </div>
            
            <!--post-share-options-->
             
            
           
           
            
          </div>
        </div>
        
        <!--Sidebar Side-->
                 
        
      </div>
    </div>
  </div>
  <!-- End Blog Grid Section -->
  
  <!-- Call To Action Two -->
  <section class="call-to-action-two">
    <div class="auto-container">
      <div class="clearfix">
        
        <div class="pull-left">
          <h2>Request for <span>quote</span></h2>
        </div>
        <div class="pull-right">
          <a href="contact.html" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
        </div>
        
      </div>
    </div>
  </section>
@endsection
