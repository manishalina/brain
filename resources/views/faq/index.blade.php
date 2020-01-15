@extends('layouts.app')

@section('content')
<!--Page Title-->
<style type="text/css">
.textclass{font-size: 16px;
font-weight: bold;}
#accordion-style-1 h1,
#accordion-style-1 a{
color:#007b5e;
}
#accordion-style-1 .btn-link {
font-weight: 400;
color: #007b5e;
background-color: transparent;
text-decoration: none !important;
font-size: 16px;
font-weight: bold;
padding-left: 25px;
}

#accordion-style-1 .card-body {
border-top: 2px solid #007b5e;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
background: #007b5e;
padding: 13px 11px;
color: #ffffff;
width: 35px;
height: 41px;
position: absolute;
left: -1px;
top: 10px;
border-top-right-radius: 7px;
border-bottom-right-radius: 7px;
display:block;
}
</style>
    <section style="padding: 179px 0px 90px;background-image:url({{asset('assets/images/background/8.jpg')}})" class="page-title" >
      <div class="auto-container">
      <div class="content">
        <h1>Faq <span></span></h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Faq</li>
        </ul>
      </div>
        </div>
    </section>
    <!--End Page Title-->
  
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
  
  <!-- Call To Action Two -->
  <section class="call-to-action-two">
    <div class="auto-container">
      <div class="clearfix">
        
        <div class="pull-left">
          <h2>Request for <span>quote</span></h2>
        </div>
        <div class="pull-right">
          <a href="{{URL('contact')}}" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
        </div>
        
      </div>
    </div>
  </section>
@endsection
