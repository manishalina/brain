@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section  class="page-title" style="background-image:url({{asset('assets/images/background/8.jpg')}} )">
      <div class="auto-container">
      <div class="content">
        <h1>Program  <span>Features</span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Pages</li>
          <li>Program Features</li>
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
              <h2> <span>Program Structure </span></h2>
            </div>
            
           
            <div class="row clearfix">
              <div class="column col-lg-12 col-md-12 col-sm-12">
                <ul class="list-style-one">
                  <li><strong>In- house students Guidance. </strong>
                                   
                                    
                                    </li>
                                    <p>  
Guidance programs focussing on helping students in the process of career decision making in collaboration with the student, parent, teacher and the school while providing an array of available options.  
</p>


<p>  
  With advanced tools of psychometry, psychology and physical mapping techniques we help students take wise career decisions. Continuous update to students on available platforms thereby making them aware of diverse options all across.  
</p>
                </ul>
              </div>
              <div class="column col-lg-12 col-md-12 col-sm-12">
                <ul class="list-style-one">
                  <li><strong>Brain Movers Dialogue.</strong></li>
                                    
                                    <p>    
  Students interface with successful professionals. Interactive dialogs and inspiring sessions with a view to create career awareness. Dialog session to build curiosity, inculcate focus & instil decision making skills to target aspirational goals.   
</p>
                </ul>
              </div>
              <div class="column col-lg-12 col-md-12 col-sm-12">
                <ul class="list-style-one">
                  <li><strong>Educators Development Program.</strong></li>
                                    <p>  
  With an aim to develop career coaching skills of educators, Our Educator Development program, helps teachers to understand and learn the nuances of career guidance. Furthermore,Educators connect and collaborate with BrainMovers to build professional relationships through school, parents and guardians. Helping teachers with leadership and organisingstudent career programs in coordination with BrainMovers.  
</p>
                </ul>
              </div>
              
            </div>
            
             
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
          <a href="{{URL('contact')}}" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Feature Section -->
@endsection
