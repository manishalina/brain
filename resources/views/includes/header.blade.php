<!-- Main Header--> 
    <header class="<?php if(Route::current()->getName()=='home') { echo 'main-header header-style-three';}else{ echo 'main-header header-style-five five-alternate';}?>">
    	<!--Header-Upper-->
    	<?php if(Route::current()->getName()!='home') {?>
    	 <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="fa fa-envelope-o"></i> connect@brainmovers.in</li>
                            <li><i class="fa fa-phone"></i><a href="#">+91 942 531 3607</a></li>
							<li><i class="fa fa-map-marker"></i> A20, Jai Bhawani Housing Society,Phase-1, E-8 Gulmohar, Bhopal </li>
                        </ul>
                    </div>
                  
                </div>
            </div>
        </div>
    <?php } ?>
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="./">
                    		<img src="{{ asset('assets/images/logo-3.png')}}" alt="" title=""></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="./">Home</a></li>
									<li class="dropdown"><a href="#">About Us</a>
									<ul>
									<li><a href="{{URL('about')}}">About Us</a></li>
									<!-- <li><a href="{{URL('team')}}">Our Team</a></li> -->
									<!-- <li><a href="{{URL('about')}}">Case Studies</a></li> -->
									</ul>
									</li>
									<li class="dropdown"><a href="#">Program for Students</a>
									<ul>
									<li><a href="{{URL('grade-eight')}}">8th Grade</a></li>
									<li><a href="{{URL('grade-ninth')}}">9th & 10th Grade</a></li>
									<li><a href="{{URL('grade-eleven')}}">11th & 12th Grade</a></li>
									</ul>
									</li>
									<li class="dropdown"><a href="#">Program for Institutes </a>
										<ul>
										<li><a href="{{URL('programhighlights')}}">Program Highpoints</a></li>
										<li><a href="{{URL('programfeatures')}}">Program Structure</a></li>
										</ul>
									</li>
									<li><a href="{{URL('blogs')}}">Blog</a>								</li>
									<li class="dropdown"><a href="contact.html">Support</a>
										<ul>
										<!-- <li><a href="{{route('contact') }}">Talk to Experts</a></li> -->
										@guest
											<li><a href="{{ route('login') }}">Admin Login /Sign in</a></li>
											<li><a href="{{ route('user-login') }}">User Login /Sign in</a></li>
											<li><a href="{{ route('user-register') }}">Register /Sign up</a></li>
										@else
										<li>
											<a href="{{ URL('profile') }}">Dashboard</a>
										</li>
											<li>
												 <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    	</a>
	                                    	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
											</li>
										@endguest
										</ul>
									</li>
									<li><a href="{{route('contact') }}">Contact Us</a></li>
								</ul>
							</div>
						</nav>
						
						<div class="outer-box">
							<!--Nav Toggler-->
							<div class="nav-toggler"><span class="flaticon-menu"></span></div>
						</div>
					</div>
                </div>
            </div>
        </div>
  <!--End Header Upper-->
        
		<!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="./" class="img-responsive">
                		<img src="{{ asset('assets/images/logo-small.png')}}" alt="" title="">
                	</a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="./">Home</a></li>
								<li class="dropdown"><a href="#">About Us</a>
									<ul>
										<li><a href="{{URL('about')}}">About Us</a></li>
										<!-- <li><a href="{{URL('team')}}">Our Team</a></li> -->
										<!-- <li><a href="{{URL('about')}}">Case Studies</a></li> -->
									</ul>
								</li>
								<li class="dropdown"><a href="#">Program for Students</a>
									<ul>
										<li><a href="{{URL('grade-eight')}}">8th Grade</a></li>
										<li><a href="{{URL('grade-ninth')}}">9th & 10th Grade</a></li>
										<li><a href="{{URL('grade-eleven')}}">11th & 12th Grade</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Program for Institutes </a>
									<ul>
										<li><a href="{{URL('programhighlights')}}">Program Highpoints</a></li>
										<li><a href="{{URL('programfeatures')}}">Program Structure</a></li>
									</ul>
								</li>
								<li><a href="{{URL('blogs')}}">Blog</a>								</li>
								<li class="dropdown"><a href="contact.html">Support</a>
                                	<ul>
										<!-- <li><a href="{{route('contact') }}">Talk to Experts</a></li> -->
										@guest
											<li><a href="{{ route('login') }}">Admin Login /Sign in</a></li>
											<li><a href="{{ route('user-login') }}">User Login /Sign in</a></li>
											<li><a href="{{ route('user-register') }}">Register /Sign up</a></li>
										@else
										<li>
											<a href="{{ URL('profile') }}">Dashboard</a>
										</li>
											<li>
												 <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    	</a>
	                                    	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
											</li>
										@endguest
									</ul>
                                </li>
                                	<li><a href="{{route('contact') }}">Contact Us</a></li>
                            </ul>
                      </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
		
    </header>
    <!--End Main Header -->