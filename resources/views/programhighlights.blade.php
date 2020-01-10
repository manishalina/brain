@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section style="padding: 179px 0px 90px;" class="page-title" style="background-image:url({{asset('assets/images/background/8.jpg')}} )">
      <div class="auto-container">
      <div class="content">
        <h1>Program  <span>Highpoints</span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Pages</li>
          <li>Program Highpoints</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
  
 <section class="about-section">
    <div class="auto-container">
      <div class="row clearfix">
        
        <!-- Content Column -->
        <div class="content-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            
            <!-- Sec Title -->
            <div class="sec-title">
              <div class="title">Program for Institutes</div>
              <h2> <span>Program Highpoints</span></h2>
            </div>
            
            <div class="text">
              <p>Our Programs for Institutes provide a platform which helps school develop an ecosystem where each student can we guided and coached.</p>
              <p>Application of advanced, scientific tools helps students to take conscious career decision based on their abilities, likes and best fit.</p>
                            <p>The program provides access to well researched information on plethora of careers available. This helps student chalk out a well-defined career path.</p>
            </div>
            <div class="row clearfix">
              <div class="column col-lg-6 col-md-6 col-sm-12">
                <ul class="list-style-one">
                  <li>In- house students Guidance.</li>
                </ul>
              </div>
              <div class="column col-lg-6 col-md-6 col-sm-12">
                <ul class="list-style-one">
                  <li>Brain Movers Dialogue.</li>
                </ul>
              </div>
              <div class="column col-lg-12 col-md-12 col-sm-12">
                <ul class="list-style-one">
                  <li>Educators Development Program.</li>
                </ul>
              </div>
               
            </div>
            <div class="question">Call to ask <a href="#">any question</a> <strong>+91 999 309 5707</strong> <span class="or">or</span> <strong>942 531 3607</strong></div>
             
          </div>
        </div>
        
        <!-- Video Column -->
        <div class="video-column col-lg-6 col-md-12 col-sm-12">
          <div class="inner-column">
            
            <!--Video Box-->
                        <div class="video-box">
                            <figure class="image">
                               <img src="{{asset('assets/images/personality.jpg')}}" alt="">
                            </figure>
                             
                        </div>
            
             
            
          </div>
        </div>
        
      </div>
    </div>
   </section>
    <!--End Page Title-->
  
  <!-- Case Section Three-->
   
  <!-- End Case Section Three-->
  
  <!-- Call To Action Two -->
  <section class="call-to-action-two">
    <div class="auto-container">
      <div class="clearfix">
        
        <div class="pull-left">
          <h2>Request for <span>Guidance</span></h2>
        </div>
        <div class="pull-right">
          <a href="contact.html" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Feature Section -->
@endsection
