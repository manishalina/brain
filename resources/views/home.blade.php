@extends('layouts.app')

@section('content')

    <!--Main Slider-->
    <section class="main-slider">
        <div class="container">
            <h1 class="text-center" style="font-size:30px"> Moving minds to Right Careers</h1>
            <h6 class="text-center" style="font-weight:800">Undertake an advanced assessment and arrive at a career that best suits and fits you</h6>
            <div class="demoescon mt-4">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                      <input type="text" class="form-control" placeholder="Enter your email" style="height: 45px;float: left;width: 58%;" id="subscribe_email" name="subscribe_email"/> <button class="theme-btn btn-style-eight" onclick="subscribe()" style="float: right;" id="subscribebtn" >Connect us</button>
                      <span id="subscribe_error"></span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->


    <!-- Services Section Four -->
    <section class="services-section-five">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-creativity"></span>
                        </div>
                        <h6> Identify Yourself </h6>
                        <div class="text">Give a boast to your interests. Know your potential and strengths.Recognize areas of interest and your traits that will help you in the long run.
                        </div>
                    </div>
                </div>
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-diamond"></span>
                        </div>
                        <h6> Best-Fit Streams </h6>
                        <div class="text">Choice and combination of subject in which you can excel and make a mark.</div>
                    </div>
                </div>
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-employee"></span>
                        </div>
                        <h6> Career Selection </h6>
                        <div class="text">An occupation you choose which is not just a job but a sought-out career choice. </div>
                    </div>
                </div>
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-statistics"></span>
                        </div>
                        <h6> Forecast your Future </h6>
                        <div class="text">Connect your present with your future. Preplan your career move now.</div>
                    </div>
                </div>
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-success"></span>
                        </div>
                        <h6> Guidance Services </h6>
                        <div class="text">Choosing a career is becoming complex. Your preferences oscillate between rising career choices and traditional career routes. Expert guidance hence is paramount and plays a key role.</div>
                    </div>
                </div>
                
                <!-- Services Block Six -->
                <div class="services-block-six col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-document"></span>
                        </div>
                        <h6> Career Catalogue </h6>
                        <div class="text">A well-researched and exhaustive library that helps you explore opportunities.</div>
                    </div>
                </div>
                
            </div>
            <!-- Services Text 
            <div class="services-text">
                <div class="text">We are very happy to give the best service.  <a href="services.html">Let’s view all services</a></div>
            </div>-->
            
      </div>
    </section>
    <!-- End Services Section Four -->


    <!-- About Section Three -->
    <section class="about-section-three">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                             
                            <h2>Our Mission and Goal</span></h2>
                        </div>
                        <div class="bold-text">BrainMovers is an advance career guidance and assessment partner. Its counselling methodology is designed for school students of 8th grade onwards. BrainMovers helps you at arriving a career choice which best suits you , through a robust assessment and guidance process.</div>
                        <div class="bold-text">We explore behaviours and mental processes including perception, cognition,attention, emotion, intelligence, subjective experience , motivation, brain function and personality.</div>
                    <a href="contct.php" class="theme-btn btn-style-eight">Contact now</a>                  </div>
              </div>
                
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image">
                        <img src="{{ asset('assets/images/resource/about-1.jpg') }}" alt="" />
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End About Section Three -->
    <!-- Services Section Six -->
    <section class="services-section-six">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title"><strong>FOR AVAILING THE BRAINMOVERS SERVICES</strong> </div>
                <h2><span> Take some easy steps </span></h2>
            </div>
            
            <div class="outer-container">
                <div class="row clearfix">
                    
                    <!-- Services Block Nine -->
                    <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="service-number">1</div>
                                <div class="icon-box">
                                    <span class="icon flaticon-contact"></span>                             </div>
                            </div>
                            <div class="lower-box">
                                <h6><a href="contact.php">Connect with us.</a></h6>
                                <div class="text">Mail us or call us..</div>
                                <a class="contact" href="contact.php">Contact us <span class="arrow fa fa-angle-right"></span></a>                          </div>
                        </div>
                    </div>
                    
                    <!-- Services Block Nine -->
                    <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="service-number">2</div>
                                <div class="icon-box">
                                    <span class="icon flaticon-network-1"></span>                               </div>
                            </div>
                            <div class="lower-box">
                                <h6><a href="contact.php">Fix an appointment or Visit</a></h6>
                                <div class="text">for helping us understand your requirement</div>
                                <a class="contact" href="contact.php">Contact us <span class="arrow fa fa-angle-right"></span></a>                          </div>
                        </div>
                    </div>
                    
                    <!-- Services Block Nine -->
                    <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="service-number">3</div>
                                <div class="icon-box">
                                    <span class="icon flaticon-target"></span>                              </div>
                            </div>
                            <div class="lower-box">
                                <h6><a href="conatct.php">Choose Your program</a></h6>
                                <div class="text">Understand program details and select a program you wish to avail.</div>
                                <a class="contact.php" href="conatct.php">Contact us <span class="arrow fa fa-angle-right"></span></a>                          </div>
                        </div>
                    </div>
                    
                    <!-- Services Block Nine -->
                    <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-outer">
                                <div class="service-number">4</div>
                                <div class="icon-box">
                                    <span class="icon flaticon-banknote"></span>                                </div>
                            </div>
                            <div class="lower-box">
                                <h6><a href="contact.php">Make Payment</a></h6>
                                <div class="text">Guidance & Assistance begins post payment.</div>
                                <a class="contact" href="contact.php">Contact us <span class="arrow fa fa-angle-right"></span></a>                          </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>



    <!-- Companies Section -->
         <section class="companies-section">
            <!-- Title Box -->
            <div class="title-box" style="background-image:url(images/background/1.png)">
               <div class="auto-container">
                  <!-- Sec Title -->
                  <div class="sec-title light centered">
                     <div class="title">OUR FEATURES</div>
                     <h2>Why choose BrainMovers </h2>
                  </div>
               </div>
            </div>
            <div class="lower-section">
               <!--Company Info Tabs-->
               <div class="company-info-tabs">
                  <!--Company Tabs-->
                  <div class="company-tabs tabs-box">
                     <div class="auto-container">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                           <li data-tab="#company-details" class="tab-btn active-btn"><strong>Scientific + well researched tool</strong></li>
                           <li data-tab="#company-reviews" class="tab-btn"><strong>Holistic Approach</strong></li>
                           <li data-tab="#company-experts" class="tab-btn"><strong>Expert Team</strong></li>
                        </ul>
                     </div>
                     <!--Tabs Container-->
                     <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="company-details">
                           <div class="auto-container">
                              <div class="content">
                                 <div class="row clearfix">
                                    <!-- Title Column -->
                                    <div class="bold-text services-block-seven inner-box"   style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp; ">
                                       <h6>Individuals do not have a set intellectual capacity. There are nine types of intelligence. BrainMovers analyses the multiple intelligence by smarter counselling techniques and advanced aptitude test which discover your intellectual capacity.</h6>
                                    </div>
                                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <!-- Sec Title -->
                                          <div class="sec-title">
                                             <h2>We provide best platform for  <span>career guidance to you</span></h2>
                                          </div>
                                          <!-- Blocks Outer -->
                                          <div class="blocks-outer">
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="fa fa-question-circle"></span>                                                   
                                                   </div>
                                                   <div class="text">When you are confused about your stream and                             
                                                      choice of career..
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="fa fa-optin-monster"></span>                                                         
                                                   </div>
                                                   <div class="text">When you are under pressure to choose a stream and way ahead is still vague.</div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-start"></span>                                                         
                                                   </div>
                                                   <div class="text">When you want to choose a career which is best for you
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="contact.php" class="theme-btn btn-style-six">Connect with us Now</a>                         
                                       </div>
                                    </div>
                                    <!-- Blocks Column -->
                                    <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <div class="row clearfix">
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight margin-top">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-analytics"></span>                                                              
                                                      </div>
                                                      <h5><a href="contact.php">Robust Assessment</a></h5>
                                                      <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Robust Assessment</a></h6>
                                                               <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-employee"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Face to Face Sessions</a></h5>
                                                      <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Face to Face Sessions</a></h6>
                                                               <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-research"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Career & Stream Choice</a></h5>
                                                      <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career & Stream Choice</a></h6>
                                                               <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-blocks-with-angled-cuts"></span>                                                                
                                                      </div>
                                                      <h5><a href="contact.php">Career Catalogue</a></h5>
                                                      <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career Catalogue</a></h6>
                                                               <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Tab-->
                        <div class="tab" id="company-reviews">
                           <div class="content">
                              <div class="auto-container">
                                 <div class="row clearfix">
                                    <!-- Title Column -->
                                    <div class="bold-text" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp; ">
                                       <h6>BrainMovers uses a holistic approach to steer students in the right direction towards their career. Giving a comfortable and easy environment to parents as well as students protecting emotional and personal details.</h6>
                                    </div>
                                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <!-- Sec Title -->
                                          <div class="sec-title">
                                             <h2>We provide best platform for  <span>career guidance to you</span></h2>
                                          </div>
                                          <!-- Blocks Outer -->
                                          <div class="blocks-outer">
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-paper"></span>                             
                                                   </div>
                                                   <div class="text">When you are confused about your stream and choice of career.</div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-diamond-1"></span>
                                                   </div>
                                                   <div class="text">When you are under pressure to choose a stream and way ahead is still vague.</div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-start"></span>                                                         
                                                   </div>
                                                   <div class="text">When you want to choose a career which is best for you</div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="contact.php" class="theme-btn btn-style-six">Connect with us Now</a>                             
                                       </div>
                                    </div>
                                    <!-- Blocks Column -->
                                    <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <div class="row clearfix">
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight margin-top">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-help"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Robust Assessment</a></h5>
                                                      <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Robust Assessment</a></h6>
                                                               <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-comment-1"></span>                                                              
                                                      </div>
                                                      <h5><a href="contact.php">Face to Face Sessions</a></h5>
                                                      <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Face to Face Sessions</a></h6>
                                                               <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-research"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Career & Stream Choice</a></h5>
                                                      <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career & Stream Choice</a></h6>
                                                               <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-help"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Career Catalogue</a></h5>
                                                      <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career Catalogue</a></h6>
                                                               <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Tab-->
                        <div class="tab" id="company-experts">
                           <div class="content">
                              <div class="auto-container">
                                 <div class="row clearfix">
                                    <!-- Title Column -->
                                    <div class="bold-text" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp; ">
                                       <h6>A highly qualified team of experienced academicians, educators, analysts and psychologists provide unmatched value to students and parents decision making.</h6>
                                    </div>
                                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <!-- Sec Title -->
                                          <div class="sec-title">
                                             <h2>We provide best platform for  <span>career guidance to you</span></h2>
                                          </div>
                                          <!-- Blocks Outer -->
                                          <div class="blocks-outer">
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-paper"></span>                                                         
                                                   </div>
                                                   <div class="text">When you are confused about your stream and choice of career.</div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-diamond-1"></span>                                                         
                                                   </div>
                                                   <div class="text">When you are under pressure to choose a stream
                                                      and way ahead is still vague.
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- Services Block Seven -->
                                             <div class="services-block-seven">
                                                <div class="inner-box">
                                                   <div class="icon-box">
                                                      <span class="icon flaticon-start"></span>                                                         
                                                   </div>
                                                   <div class="text">When you want to choose a career which is best for you</div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="contact.php" class="theme-btn btn-style-six">Connect with us Now</a>                                         
                                       </div>
                                    </div>
                                    <!-- Blocks Column -->
                                    <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                                       <div class="inner-column">
                                          <div class="row clearfix">
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight margin-top">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-help"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Robust Assessment</a></h5>
                                                      <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Robust Assessment</a></h6>
                                                               <div class="text">Our tools of assessment help you identify your potential and areas of development.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-comment-1"></span>                                                              
                                                      </div>
                                                      <h5><a href="contact.php">Face to Face Sessions</a></h5>
                                                      <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Face to Face Sessions</a></h6>
                                                               <div class="text">Connect with experts who can help you make the right choices and know yourself better.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="column col-lg-6 col-md-6 col-sm-12">
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-research"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Career & Stream Choice</a></h5>
                                                      <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career & Stream Choice</a></h6>
                                                               <div class="text">Expert guidance leads you to choosing a stream that best suits you and your abilities.</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <!-- Services Block Eight -->
                                                <div class="services-block-eight">
                                                   <div class="inner-box">
                                                      <div class="icon-box">
                                                         <span class="icon flaticon-help"></span>                                                               
                                                      </div>
                                                      <h5><a href="contact.php">Career Catalogue</a></h5>
                                                      <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                      <!-- Overlay Box -->
                                                      <div class="overlay-box">
                                                         <div class="overlay-inner">
                                                            <div class="content">
                                                               <h6><a href="contact.php">Career Catalogue</a></h6>
                                                               <div class="text">An exhaustive and up to date library to study and assess you career options</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Companies Section -->
         <!-- Testimonial Section Two -->
         <section class="testimonial-section-two">
            <div class="image-layer" style="background-image:url(images/background/22.jpg)"></div>
            <div class="auto-container">
               <h2>Some from our <span>students</span></h2>
               <div class="testimonial-carousel-two owl-carousel owl-theme">
                  <!-- Testimonial Block -->
                   @foreach($comments as $key=>$comment)

                  <div class="testimonial-block-three">
                     <div class="inner-box">
                        <div class="row clearfix">
                           <!-- Image Column -->
                           <div class="image-column col-lg-3 col-md-4 col-sm-12">
                              <div class="inner-column">
                                 <div class="image">
                                   <?php
                                    $image = "";
                                    if($comment->userDetail->image !=''){
                                    $image = "assets/student/".$comment->userDetail->image;
                                    }else{
                                    $image = "assets/images/user.png";
                                    }
                                   ?>
                                   <img src="{{asset($image)}}" alt="{{$comment->userDetail->name}}" style="width: 270px; height: 367px;" />
                                 </div>
                              </div>
                           </div>
                           <!-- Content Column -->
                           <div class="content-column col-lg-9 col-md-8 col-sm-12">
                              <div class="inner-column">
                                 <div class="text"><span class="icon flaticon-left-quote"></span>{{$comment->description}}</div>
                                 <h5>{{$comment->userDetail->name}}</h5>
                                 <div class="designation">Student</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
                 
                  
               </div>
            </div>
         </section>
         <!-- End Testimonial Section Two -->
         <!-- Pricing Section -->
         <section class="pricing-section">
            <div class="auto-container">
               <!-- Sec Title -->
               <div class="sec-title centered">
                  <div class="title"><strong>Programs</strong></div>
                  <h2>Choose the best program  <br> to begin your<span> counselling  </span></h2>
                  <div class="text">
                     <h6>Your need for guidance and counselling can be catered when you are in 8th grade. Our programs to assist you in your decision making can be taken up anytime between 8th grade to 12th grade. However, we suggest you to start early, no later than 8th standard so that for the next four years you are able to do enough research work and analysis into what your career will be like.</h6>
                  </div>
               </div>
               <!--Pricing Info Tabs-->
               <div class="pricing-info-tabs">
                  <!--Pricing Tabs-->
                  <div class="pricing-tabs tabs-box">
                     <!--Tab Btns-->
                     <!--Tabs Container-->
                     <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="package-monthly">
                           <div class="content">
                              <div class="row clearfix">
                                 <!-- Price Block -->
                                 <div class="price-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                       <!-- Title Box -->
                                       <div class="title-box">
                                          <h6><strong>Programs for Students</strong></h6>
                                          <div class="text">For students of 8th to 12th grade.</div>
                                       </div>
                                       <div class="price">
                                          <h5>
                                          Register with us
                                          <h5>
                                       </div>
                                       <div class="lower-box">
                                          <ul class="price-list">
                                             <li>Basic Program</li>
                                             <li>Standard Program</li>
                                             <li>Advance Program</li>
                                          </ul>
                                          <a href="8thGrade.php" class="theme-btn btn-style-eight">Click for more details</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Price Block -->
                                 <div class="price-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                       <!-- Title Box -->
                                       <div class="title-box">
                                          <h6><strong>Programs for Institutes</strong></h6>
                                          <div class="text">For schools, colleges and coaching Institutes</div>
                                       </div>
                                       <div class="price">
                                          <h5>Get your programs tailor made</h5>
                                       </div>
                                       <div class="lower-box">
                                          <ul class="price-list">
                                             <li>In- house students Guidance</li>
                                             <li>BrainMovers Dialogue</li>
                                             <li>Educators Development Program</li>
                                          </ul>
                                          <a href="Programhighlights.php" class="theme-btn btn-style-eight">Click for more details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Tab -->
                        <div class="tab" id="package-yearly">
                           <div class="content">
                              <div class="row clearfix">
                                 <!-- Price Block -->
                                 <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                       <!-- Title Box -->
                                       <div class="title-box">
                                          <h5>Basic Plan</h5>
                                          <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                       </div>
                                       <div class="price">$29 <span>/ monthly</span></div>
                                       <div class="lower-box">
                                          <ul class="price-list">
                                             <li>24/7 system monitoring</li>
                                             <li>Security management</li>
                                             <li>Secure finance backup</li>
                                             <li>Remote support</li>
                                          </ul>
                                          <a href="#" class="theme-btn btn-style-eight">Get a free trial</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Price Block -->
                                 <div class="price-block col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                       <div class="recomend">Recommended</div>
                                       <!-- Title Box -->
                                       <div class="title-box">
                                          <h5>Standard Plan</h5>
                                          <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                       </div>
                                       <div class="price">$49 <span>/ monthly</span></div>
                                       <div class="lower-box">
                                          <ul class="price-list">
                                             <li>24/7 system monitoring</li>
                                             <li>Security management</li>
                                             <li>Secure finance backup</li>
                                             <li>Remote support</li>
                                          </ul>
                                          <a href="#" class="theme-btn btn-style-eight">Get a free trial</a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Price Block -->
                                 <div class="price-block col-lg-4 col-md-12 col-sm-12">
                                    <div class="inner-box">
                                       <!-- Title Box -->
                                       <div class="title-box">
                                          <h5>Extended Plan</h5>
                                          <div class="text">The argument in favor of using to <br> filler text goes something.</div>
                                       </div>
                                       <div class="price">$59 <span>/ monthly</span></div>
                                       <div class="lower-box">
                                          <ul class="price-list">
                                             <li>24/7 system monitoring</li>
                                             <li>Security management</li>
                                             <li>Secure finance backup</li>
                                             <li>Remote support</li>
                                          </ul>
                                          <a href="#" class="theme-btn btn-style-eight">Get a free trial</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Pricing Section -->
         <!-- News Section Two -->
         <section class="news-section-two">
            <div class="auto-container">
               <!-- Sec Title -->
               <div class="sec-title centered">
                  <h2>Deep dive into the world of careers <br> our latest <span>news/Blog</span></h2>
                  <div class="text">
                     <h6>Articles written by professional and specialist on topics that will help you understanding all about streams, careers, counselling, guidance and much more……...</h6>
                  </div>
               </div>
               <div class="row clearfix">

                  <!-- News Block Four -->
                  @foreach($blogs as $key=>$blog)
                  <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                           <img style="height: 150px;" src="{{asset('assets/blog/'.$blog->image)}}" alt="" />
                           <div class="overlay-box">
                              <a href="{{asset('assets/blog/'.$blog->image)}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                           </div>
                        </div>
                        <div class="lower-content">
                           <ul class="post-meta">
                              <li><span class="fa fa-user"></span>Written By: {{$blog->userDetail->name}}</li>
                           </ul>
                           <h5><a href="{{URL('blogs/'.$blog->slug)}}">
                           <?php $title=substr($blog->title, 0,25); ?>
                            {{$title}}..
                          </a></h5>
                           <a href="{{URL('blogs')}}" class="theme-btn btn-style-eighteen">View more</a>
                        </div>
                     </div>
                  </div>
                   @endforeach
                  <!-- News Block Four -->
               
                  <!-- News Block Four -->
                  <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                  
               </div>
            </div>
            </div>
         </section>
<div style="height:100px"></div>

          <section class="map-info-section">
            <div class="outer-container">
               <div class="clearfix">
                  <!--Left Column-->
                  <div class="left-column">
                     <!--Map Outer-->
                     <div class="map-outer">
                        <!--Map Canvas-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.30415295996!2d77.26580340959153!3d23.199663279842934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1576658653352!5m2!1sen!2sin" width="680" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                     </div>
                  </div>
                  <!--Right Column-->
                  <div class="right-column" style="background-image:url(images/resource/image-1.jpg)">
                     <div class="content">
                        <h2>Request for <span>Guidance</span></h2>
                        <div class="text">Should you require guidance and career counselling, submit the below request.</div>
                        <!-- Quote Form -->
                        <div class="quote-form">
                           <!--Contact Form-->
                          <div id="requestmsg"></div>
                              <div class="row clearfix">
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="name-valid" id="requestname" placeholder="Your name:*" maxlength="50" >
                                    <span id="requestname_error"></span>
                                 </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text"  name="requestphone" placeholder=" Contact Number:*" id="requestphone" maxlength="10">
                                     <span id="requestphone_error"></span>
                                 </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" class="name-valid" name="requestcity" placeholder="Your City:*" id="requestcity" maxlength="10">
                                    <span id="requestcity_error"></span>
                                 </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <button type="button" class="theme-btn btn-style-one" onclick="requestform()" id="btnrequest">Submit request <span class="icon flaticon-share-option"></span></button>
                                 </div>
                              </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--End Map Info Section-->

@endsection
