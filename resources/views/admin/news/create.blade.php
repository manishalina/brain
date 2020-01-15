@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Advanced Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <div class="row">
	            	<div class="col-sm-8">Add News & Event</div>
	            	<div class="col-sm-4 text text-right">
	            		<a href="{{ URL('faq') }}" class="btn btn-info">List</a>
	            	</div>
            	</div>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->


     
        <div class="row">
          <div class="col-md-12">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add News & Event</h3>
              </div>
              <div class="card-body">
                
				@if(Request::segment(3)==='edit')
         <form method="post" action="{{ route('news.update',$event->id) }}" enctype = 'multipart/form-data'>
          <input type="hidden" name="_method" value="put" />
          @csrf
  				<?php  
  				 $title = $event->title;
  				 $description = $event->description;

  				?>
				@else
          <form method="POST" action="{{ URL('news') }}" enctype = 'multipart/form-data'>
          @csrf

  				<?php 
  				  $title = '';
            $description = '';
  				?>
				@endif

                <!-- phone mask -->
                <div class="form-group">
                 <label>Title:</label>
                 <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?= $title ?>">
                  <!-- /.input group -->
                </div>
                 <!-- IP mask -->
                <div class="form-group">
                  <label>Description:</label>
                    <textarea class="textarea" name="description" placeholder="Place some text here"
                          style="font-size: 14px; line-height: 28px; border: 1px solid #dddddd; padding: 10px;">{!!$description!!}</textarea>
                  <!-- /.input group -->
                </div>
                  <!-- IP mask -->
                <div class="form-group">
                  <label>Image:</label>
        <div class="row">
          <div class="col-sm-3">
            <?php
              $image="";
            
              if(Request::segment(3)==='edit') {
                if($event->image !=''){
                  $image = '/assets/event/'.$event->image;
                }else{
                  $image = 'gallery.png';
                }
              }else{
                $image = 'gallery.png';
              }                   
              //$image = 'gallery.png';
            ?>
            <!-- <img id="blah" style="height: 150px;width: 250px;" src="{!! asset($image) !!}">  -->   
          </div>
          <div class="col-sm-7">
              @if(Request::segment(3)==='edit')                    
                <input type="file" name="file" id="images">
              @else
                <input type="file" name="file" id="images" >
              @endif
          </div>
        </div>                  
        
        
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <div class="form-group"> 
                	<button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
              		<button type="reset" class="btn btn-secondary waves-effect m-l-5"> Cancel </button>   
              	</div>
            	</form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


@section('extrajs')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.css') }}">
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })

  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#images").change(function() {
  readURL(this);
});
</script>
@endsection
