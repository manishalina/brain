@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section style="background-image:url({{asset('assets/images/background/8.jpg')}} )" class="page-title" >
      <div class="auto-container">
      <div class="content">
        <h1>8th<span>Grade </span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./l">Home</a></li>
          <li>Pages</li>
          <li>8th Grade</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
 <section class="pricing-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title"><h6><strong>8th Grade</strong></h6></div>
        <h2>Strategically plan your career goals  <br> <span> The right time matters. </span></h2>
        <div class="text"> <H6>Starting early, gives you ample time to do your research. 8th grade is just the time to begin your quest and plan ahead of time.</H6>
            </div>
      </div>
      
      <!--Pricing Info Tabs-->
      <div class="pricing-info-tabs">
        <!--Pricing Tabs-->
        <div class="pricing-tabs tabs-box">
        
           
          <div class="tabs-content">
            
            <!--Tab / Active Tab-->
            <div class="tab active-tab" id="package-monthly">
              <div class="content">
                <div class="row clearfix">
                  
                  <!-- Price Block -->
                  <div class="price-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box" style="height:470px">
                      <!-- Title Box -->
                      <div class="title-box">
                        <h5>Basic Program</h5>
                        <div class="text">For students of 8th grade.</div>
                      </div>
                      <div class="price"><h5>Register with us</h5></div>
                      <div class="lower-box">
                        <ul class="price-list">
                          <li><strong>Profile detailing </strong></li>
                          <li><strong>Valuation & Stream Assessmen</strong>t</li>
                          <li><strong>Free</strong></li>
                           
                        </ul>
                         <a href="{{URL('contact')}}" class="theme-btn btn-style-eight">Contact our Expert</a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Price Block -->
                  <div class="price-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box" style="height:470px">
                       
                      <!-- Title Box -->
                      <div class="title-box">
                        <h5>Standard Program</h5>
                        <div class="text">For students of 8th grade.</div>
                      </div>
                      <div class="price"><h5>Register with us</h5></div>
                      <div class="lower-box">
                        <ul class="price-list">
                    <li><strong>Profile detailing</strong></li>
                    <li><strong>Detailed Valuation & Assessment</strong></li>
                    <li><strong>Stream selection - Career Options</strong></li>
                    <li><strong>For further details please reach us at connect@brainmovers.in</strong></li>
                        </ul>
                        <a href="{{URL('contact')}}" class="theme-btn btn-style-eight">Contact our Expert</a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Price Block -->
                   
                  
                </div>
              </div>
            </div>
            
            <!-- Tab -->
             
            
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
 
    
@endsection
