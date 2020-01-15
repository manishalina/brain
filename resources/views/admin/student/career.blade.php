@extends('layouts.admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
          <div class="col-sm-6 text text-right">
            <a href="{{ URL('student') }}" class="btn btn-info">List</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
       

     
        <div class="row">
          <div class="col-md-12">

            <div class="card card-info">
              <div class="card-body">
  <form method="POST" action="{{ URL('savecareer') }}" enctype = 'multipart/form-data'>
          @csrf

         <?php 
            $list=explode(',',$student->career);
           
          ?>
<input type="hidden" name="id" value="{{$student->id}}">
  <!-- phone mask -->

  <div class="input_fields_wrap">
    <button class="add_field_button btn btn-primary">Add More Career</button>
    <?php 
   if(count($list)>0)
   {
    for ($i=0; $i <count($list) ; $i++) { 
        ?>
 
    <div class="col-sm-6">
      <label>Subject:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="text" name="career[]" required="required" class="form-control" placeholder="Enter Career" value="<?php echo $list[$i] ?>">
     <?php if($i!=0){?> <a href="#" class="remove_field">Remove</a><?php } ?>
    </div>
  
     <?php
      }
   }
   else
   {
   ?>
    <div class="row form-group">
    <div class="col-sm-6">
      <label>Subject:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="text" name="career[]" required="required" class="form-control" placeholder="Enter Career" value="">

    </div>
   </div>
 <?php    } ?>

   
</div>

  

                <!-- /.form group -->
                <div class="form-group" style="margin-top: 15px;"> 
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

$(document).ready(function() {
  var max_fields      = 10; //maximum input boxes allowed
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(e){ //on add input button click
    e.preventDefault();
    if(x < max_fields){ //max input box allowed
      x++; //text box increment
      $(wrapper).append('<div class="col-sm-6"><label>Career:<span class="text text-danger">*</span><span class="text-danger">{{ $errors->first('first') }}</span>    </label><input type="text" required="required" name="career[]" class="form-control" placeholder="Enter Career" value=""><a href="#" class="remove_field">Remove</a></div> '); //add input box
    }
  });
  
  $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
    e.preventDefault(); $(this).parent('div').remove(); x--;
  })
});
</script>
@endsection
