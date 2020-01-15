@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section  class="page-title" style="background-image:url({{asset('assets/images/background/8.jpg')}} )">
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
            <div class="question">Call to ask <a href="#">any question</a> <strong>+91-999 309 8707</strong> <span class="or">or</span> <strong>942 531 3607</strong></div>
             
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
   <section style="margin-top:10px; margin-bottom: 20px;">
<div class="row">
    <div class="col-10 mx-auto">
     <h1  style="font-size:30px; margin-bottom: 20px; border-bottom: 1px solid #bdbcbc">Faq</h1>
        <div class="accordion" id="accordionExample">

         @if(count($faqs)>0)
         @foreach($faqs as $key=>$faq)

            <div class="card">
                  <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#{{$faq->id}}" aria-expanded="false" aria-controls="{{$faq->id}}">
                              <i class="fa fa-angle-double-right mr-3"></i> {{$faq->title}}
                            </button>
                        </h5>
                  </div>
                  <div id="{{$faq->id}}" <?php if($key==0){ echo 'class="collapse show fade"';}else{ echo 'class="collapse  fade"';} ?>  aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                        <div style="min-height: 100px; padding: 5px;">
                              {!!$faq->description!!}
                        </div>
                        </div>
                  </div>
            </div>
             @endforeach

         @else
          <div style="font-size: 16px;color:red;text-align: center;width: 100%;">{{'No Faq Listed Yet.'}}</div>
        @endif
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
