<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Consulting Finance Corporate Business - Consulting HTML Template">
      <meta name="keywords" content="consulting, accountant, advisor, audit, beaver builder, broker, business, clean, company, consulting, corporate, finance, financial, insurance, trader">
      <meta name="author" content="Themexriver">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Brain Movers  | Moving minds to Right Careers </title>
      <!-- Stylesheets -->
      <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   </head>
   <body>
      <div class="page-wrapper">
         <!-- Preloader -->
         <div class="preloader"></div>
         @include('includes/header')
          @yield('content')
         <!--Sponsors Section-->
         <!-- <div style="height:100px"></div> -->
         <!--End Sponsors Section-->
         <!--Map Info Section-->
        
         <!-- footer -->
         @include('includes/footer')
      </div>
      <!--End pagewrapper-->
       <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
      <script src="{{ asset('assets/js/jquery.js') }}"></script>
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
      <script src="{{ asset('assets/js/appear.js') }}"></script>
      <script src="{{ asset('assets/js/owl.js') }}"></script>
      <script src="{{ asset('assets/js/wow.js') }}"></script>
      <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <!--Google Map APi Key-->
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script>
      <script src="{{ asset('assets/js/map-script.js') }}"></script>
      @yield('extrajs')
      <!--End Google Map APi-->
   </body>
   <!-- Mirrored from themexriver.com/tfhtml/finano/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 12:57:27 GMT -->
</html>







