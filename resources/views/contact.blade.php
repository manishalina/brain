@extends('layouts.app')

@section('content')

    
  <!--Page Title-->
    <section style="background-image:url({{asset('assets/images/background/8.jpg')}} )" class="page-title" >
      <div class="auto-container">
      <div class="content">
        <h1>Contact <span>us</span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>contact</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
  <section class="contact-page-section">
    <!-- <div class="map-section">
     Map Outer
      <div class="map-outer">
        Map Canvas
        <div class="map-canvas"
          data-zoom="12"
          data-lat="-37.817085"
          data-lng="144.955631"
          data-type="roadmap"
          data-hue="#ffc400"
          data-title="Envato"
          data-icon-path="images/icons/map-marker.png"
          data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
        </div>
      </div>
    </div> -->
    <div class="auto-container">
      <div class="inner-container">
        <div class="inner-container">
        <h2>Contact our team or make an appointment
         <br> with <span>our experts</span></h2>
        <div class="row clearfix">
          
          <!-- Info Column -->
          <div class="info-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner-column">
               
                            <div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
              <ul class="list-style-five">
                <li><span class="icon fa fa-building"></span> A20, Jai Bhawani Housing Society, <br> Phase-1, E-8 Gulmohar, Bhopal<br> Madhya Pradesh</li>
                <li><span class="icon fa fa-fax"></span>+91 942 531 3607</li>

                <li><span class="icon fa fa-fax"></span>+91 999 309 5707</li>
                <li><span class="icon fa fa-envelope-o"></span>support@brainmovers.in</li>
                <li><span class="icon fa fa-envelope-o"></span>Contact@brainmovers.in</li>
              </ul>
            </div>
          </div>
          
          <!-- Form Column -->
          <div class="form-column col-lg-5 col-md-12 col-sm-12">
            <div class="inner-column">
              <div id="contactmsg"></div>
              <!--Contact Form-->
              <div class="contact-form">
                   
                  <div class="form-group">
                    <input type="text" name="name" id="name" value="" placeholder="Full name" >
                  <span id="name_error"></span>
                  </div>
                  
                  <div class="form-group">
                    <input type="text" name="email" id="email" value="" placeholder="Email" >
                 <span id="email_error"></span>
                  </div>
                  
                  <div class="form-group">
                    <select class="custom-select-box" id="topic">
                      <option value="">Select topic</option>
                      <option>Talk to Experts</option>
                      <option>General enquiry</option>
                    </select>
                    <span id="topic_error"></span>
                  </div>
                  
                  <div class="form-group">
                    <textarea name="message" id="message" placeholder="write.."></textarea>
                   <span id="message_error"></span>
                  </div>
                  
                  <div class="form-group">
                    <button type="button" onclick="contactus()" class="theme-btn">Submit</button>
                  </div>                                        
                  
               
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
 
    
@endsection
