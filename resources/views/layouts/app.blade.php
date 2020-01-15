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
   <style type="text/css">
     .no-click {
    pointer-events: none;
}
   </style>
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
      <script type="text/javascript">
         function subscribe()
         {
              $('#subscribe_error').html('');
              var email=$('#subscribe_email').val();
              var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              if(!regex.test(email)) {
                 $('#subscribe_error').html('<p style="color:red; font-size:15px;margin-top: 45px;">Please enter valid email id.</p>')
                 return false;
              }else{
                $("#subscribebtn").addClass('no-click');
                 $.ajax({
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      type: "POST",
                      url: '<?php echo URL('/') ?>/subscribe',
                      data:{email:email,type:'subscribe',city:'',mobile:'',name:'',topic:'',message:''},
                      success: function(data){
                       $("#subscribebtn").removeClass('no-click');
                        if(data=='save')
                        {
                            $('#subscribe_email').val('');
                            $('#subscribe_error').html('<p style="color:green; font-size:15px;margin-top: 45px;">Thank you for subscribing.</p>')
                        }
                        else
                        {
                            $('#subscribe_error').html('<p style="color:red; font-size:15px;margin-top: 45px;">This email already subscribed.</p>')
                        }
                        
                     
                      },error: function(data){
                          
                      }
                  }); 

              }
         }

            $(document).ready(function() {
               $('.name-valid').on('keypress', function(e) {
                var regex = new RegExp("^[a-zA-Z ]*$");
                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                if (regex.test(str)) {
                   return true;
                }
                e.preventDefault();
                return false;
               });
           });

         function requestform()
         {
              $('#requestname_error').html('');
              $('#requestphone_error').html('');
              $('#requestcity_error').html('');
              var name=$('#requestname').val();
              var city=$('#requestcity').val();
              var mobile=$('#requestphone').val();
              var regex =  /^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[6789]\d{9}|(\d[ -]?){10}\d$/;
              flag=0;
              //  alert('')
              // return false;
              if(name=='') {
                 $('#requestname_error').html('<p style="color:red; font-size:15px;">Please enter  name.</p>')
                  flag=1;
              }
               if(city=='') {
                 $('#requestcity_error').html('<p style="color:red; font-size:15px;">Please enter city name.</p>')
                  flag=1;
              }
               if(!regex.test(mobile)) {
                 $('#requestphone_error').html('<p style="color:red; font-size:15px;">Please enter valid mobile number.</p>')
                  flag=1;
              }
              
              if(flag==0){
                 $("#btnrequest").addClass('no-click');
                 $.ajax({
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      type: "POST",
                      url: '<?php echo URL('/') ?>/subscribe',
                      data:{name:name,email:'',city:city,mobile:mobile,type:'request',topic:'',message:''},
                      success: function(data){
                        $("#btnrequest").removeClass('no-click');
                        if(data=='save')
                        {
                            $('#requestname').val('');
                            $('#requestcity').val('');
                            $('#requestphone').val('');
                            $('#requestmsg').html('<p style="color:green; font-size:15px;">Thank you for request guidance.</p>')
                        }
                        
                     
                      },error: function(data){
                          
                      }
                  }); 
              }

          }


        function contactus()
         {
              $('#name_error').html('');
              $('#email_error').html('');
              $('#topic_error').html('');
              $('#message_error').html('');
              var name=$('#name').val();
              var email=$('#email').val();
              var topic=$('#topic').val();
              var message=$('#message').val();
              var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              flag=0;
            
              if(name=='') {
                 $('#name_error').html('<p style="color:red; font-size:15px;">Please enter  name.</p>')
                  flag=1;
              }
              
              if(!regex.test(email)) {
                 $('#email_error').html('<p style="color:red; font-size:15px;">Please enter valid email id.</p>')
                  flag=1;
               }
              
               if(topic=='') {
                  
                 $('#topic_error').html('<p style="color:red; font-size:15px;">Please select topic.</p>')
                  flag=1;
              }
               if(message=='') {
                 
                 $('#message_error').html('<p style="color:red; font-size:15px;">Please write  message.</p>')
                  flag=1;
              }
              
              if(flag==0){
                $("#btncontact").addClass('no-click');
                 $.ajax({
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      type: "POST",
                      url: '<?php echo URL('/') ?>/subscribe',
                      data:{name:name,email:email,city:'',mobile:'',type:'contact',topic:topic,message:message},
                      success: function(data){
                       $("#btncontact").removeClass('no-click');
                        if(data=='save')
                        {
                            $('#name').val('');
                            $('#email').val('');
                            $('#message').val('');
                            $('#topic option:eq(0)').attr('selected','selected');
                            $('#contactmsg').html('<p style="color:green; font-size:15px;">Thank you for contact us.</p>')
                        }
                        
                     
                      },error: function(data){
                          
                      }
                  }); 
              }

          }
         

         function comment()
         {
              $('#error_title').html('');
              $('#error_comment').html('');
              var title=$('#title').val();
              var comment=$('#comment').val();
              var comment_id=$('#comment_id').val();
              flag=0;
               if(title=='') {
                 $('#error_title').html('<p style="color:red; font-size:15px;">Please enter title.</p>')
                 flag=1;
              }

               if(comment=='') {
                 $('#error_comment').html('<p style="color:red; font-size:15px;">Please enter comment.</p>')
                 flag=1;
              }

              if(flag==0){
                 $.ajax({
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                      type: "POST",
                      url: '<?php echo URL('/') ?>/savecomment',
                      data:{title:title,comment:comment,comment_id:comment_id},
                      success: function(data){
                       
                        if(data=='save')
                        {
                            // $('#title').val('');
                            // $('#comment').val('');
                            $('#commentmsg').html('<p style="color:green; font-size:15px;">Feedback save successfully.</p>')
                        }
                        
                     
                      },error: function(data){
                          
                      }
                  }); 

              }
         }
      </script>
      @yield('extrajs')
      <!--End Google Map APi-->
   </body>
   <!-- Mirrored from themexriver.com/tfhtml/finano/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2019 12:57:27 GMT -->
</html>







