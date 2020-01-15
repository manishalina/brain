@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section style="background-image:url({{asset('assets/images/background/8.jpg')}} )" class="page-title" >
      <div class="auto-container">
      <div class="content">
        <h1>9th-10th<span>Grade </span></h1>
        <ul class="page-breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>Pages</li>
          <li>9th-10thGrade</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
 <section class="pricing-section">
    <div class="auto-container">
      <!-- Sec Title -->
      <div class="sec-title centered">
        <div class="title"><h6><strong>9th-10th Grade</strong></h6></div>
        <h2>Its time you begin to explore career options  <br>   <span> in various streams </span></h2>
        <div class="text"><h6>What will possibly interest you and keep you motivated for the next 40 years of your life….is your career. Explore yourself, explore careers, choose the right stream & arrive at a career that best fits you. </h6></div>
                
                
      </div>
      <div class="text"><div class="row clearfix"  style="margin-bottom:50px">
        <div class="column col-lg-12 col-md-12 col-sm-12" >
        <div class="title"><h5><strong>How BrainMovers helps-</strong></h5></div>
        <ul class="list-style-one" >
        <li> Explore your abilities and have them evaluated.</li>
        </ul>
        </div>
        <div class="column col-lg-12 col-md-12 col-sm-12">
        <ul class="list-style-one">
        <li>Choose your stream with expert guidance and advice.</li>
        </ul>
        </div>
        <div class="column col-lg-12 col-md-12 col-sm-12">
        <ul class="list-style-one">
        <li>Arrive at a career choice that best suits you and explore courses.</li>
        </ul>
        </div>
         
        </div>
      </div>
      <!--Pricing Info Tabs-->
      <div class="pricing-info-tabs">
        <!--Pricing Tabs-->
                
                
        <div class="pricing-tabs tabs-box">
        
           
          
          <!--Tabs Container-->
          <div class="tabs-content">
            
            <!--Tab / Active Tab-->
            <div class="tab active-tab" id="package-monthly">
              <div class="content">
                <div class="row clearfix">
                  
                  <!-- Price Block -->
                  <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box" style="height:800px">
                      <!-- Title Box -->
                      <div class="title-box">
                     <h5>Basic Program </h5>
                        <div class="text">9th-10th Grade</div>
                      </div>
                      <div class="price"><h5>Assessment </h5></div>
                      <div class="lower-box">
                        <ul class="price-list">
                          <li>  <strong>Profile detailing </strong></li>
                          <li><strong>Valuation & Stream Assessment :</strong> Assessing your abilities and strengths</li>
                                                     
                          <li><strong>Free</strong></li>
                           
                        </ul>
                        <a href="{{URL('contact')}}" class="theme-btn btn-style-eight">Contact Our Expert</a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Price Block -->
                  <div class="price-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box" style="height:800px">
                       
                      <!-- Title Box -->
                      <div class="title-box">
                        <h5>Standard Program</h5>
                         <div class="text">9th-10th Grade</div>
                      </div>
                      <div class="price"><h5>Assessment and Counselling</h5></span></div>
                      <div class="lower-box">
                        <ul class="price-list">
                          <li><strong>Profile detailing</strong></li>
                          <li><strong>Detailed Valuation & Stream Assessment :</strong> Assessing your abilities and strengths</li>
                          <li><strong>Advanced Aptitude test & Report :</strong> Detailed report with best fit career options and way forward</li>
                           <li><strong>Stream selection - Career Options</strong></li>
                            <li><strong>Glossary of Available career universe :</strong> detailed and diverse Information on various career options available </li>
                            
                             <li><strong>One Career Counselling session :</strong> Face to face interaction and guidance with experts. </li>
                             <li><strong>Chargeable :</strong> For further details please reach us at connect@brainmovers.in </li>
                        </ul>
                        <a href="{{URL('contact')}}" class="theme-btn btn-style-eight">contact our Expert</a>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Price Block -->
                  <div class="price-block col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box" style="height:800px">
                      <!-- Title Box -->
                      <div class="title-box" >
                        <h5>Advance Program</h5>
                          <div class="text">9th-10th Grade</div>
                      </div>
                      <div class="price"><h5>One year extended support </h5></span></div>
                      <div class="lower-box" >
                        <ul class="price-list">
                          <li><strong>Profile detailing</strong></li>
                          <li><strong>Detailed Valuation & Stream Assessment :</strong> Assessing your abilities and strengths</li>
                          <li><strong>Advanced Aptitude test & Report :</strong> Detailed report with best fit career options and way forward</li>
                           <li><strong>Stream selection :</strong> Career Options</li>
                            <li><strong>Glossary of Available career universe :</strong> detailed and diverse Information on various career options available </li>
                            <li><strong>Three Career Counselling sessions in a years span :</strong> Face to face interaction and guidance with experts spread across the year. </li>
                            <li><strong>Chargeable :</strong> For further details please reach us at connect@brainmovers.in </li>
                        </ul>
                        <a href="{{URL('contact')}}" class="theme-btn btn-style-eight">contact to our Expert</a>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
            <!-- Tab -->
             
            
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
