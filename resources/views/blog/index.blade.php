@extends('layouts.app')

@section('content')
<!--Page Title-->
    <section style="padding: 179px 0px 90px;" class="page-title" style="background-image:url({{asset('assets/images/background/8.jpg')}})">
      <div class="auto-container">
      <div class="content">
        <h1>Blog <span>grid</span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Blog grid</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
  
  <!-- Blog Grid Section -->
  <section class="blog-grid-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title">News grid</div>
        <h2>We are here to manage your <br> finance with <span>experience</span></h2>
      </div>
      <div class="row clearfix">
      
        <!-- News Block Three -->
         @foreach($blogs as $key=>$blog)
        <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="image">
              <img src="{{asset('assets/blog/'.$blog->image)}}" alt="" />
              <a href="{{asset('assets/blog/'.$blog->image)}}" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
            </div>
            <div class="lower-content">
              <ul class="post-meta">
                <li><span class="fa fa-calendar"></span>{{$blog->created_at}}</li>
                <li><span class="fa fa-user"></span>By {{$blog->user_detail->name}}</li>
              </ul>
              <h4><a href="#">{{$blog->title}}</a></h4>
            </div>
          </div>
        </div>
         @endforeach
        
      
      </div>
      
      <!--Styled Pagination-->
            <!-- <ul class="styled-pagination-two">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>       -->          
            <!--End Styled Pagination-->
      
    </div>
  </section>
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
