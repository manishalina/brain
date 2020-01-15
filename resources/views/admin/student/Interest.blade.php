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
          <form method="POST" action="{{ URL('saveinterest') }}" enctype = 'multipart/form-data'>
          @csrf

  				<?php 
          $arr1 = unserialize($student->interest);
            $arr = array(0,0,0,0,0,0);
            
  				?>
<input type="hidden" name="id" value="{{$student->id}}">
  <!-- phone mask -->
  <div class="row form-group">
    <div class="col-sm-6">
      <label>Realistic:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="first" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Realistic']?$arr1['Realistic'] :$arr[0] ?>">
    </div>
    

    <div class="col-sm-6">
      <label>Investigative:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="second" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Investigative']?$arr1['Investigative'] :$arr[1] ?>">
    </div>
    


    <div class="col-sm-6">
      <label>Artistic:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="third" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Artistic']?$arr1['Artistic'] :$arr[2] ?>">
    </div>


    <div class="col-sm-6">
      <label>Social:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="four" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Social']?$arr1['Social'] :$arr[3] ?>">
    </div>


    <div class="col-sm-6">
      <label>Enterprising:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="five" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Enterprising']?$arr1['Enterprising'] :$arr[4] ?>">
    </div>


    <div class="col-sm-6">
      <label>Conventional:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="six" class="form-control" placeholder="Enter Your Interests" value="<?= $arr1['Conventional']?$arr1['Conventional'] :$arr[5] ?>">
    </div>

 <div class="col-sm-12">
      <label>Summary:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <textarea class="textarea" name="interest_summary" placeholder="Place some text here"
                          style="font-size: 14px; line-height: 28px; border: 1px solid #dddddd; padding: 10px;">{!!$student->interest_summary!!}</textarea>
    
    </div>
    
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
