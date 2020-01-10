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
          <form method="POST" action="{{ URL('saveabilities') }}" enctype = 'multipart/form-data'>
          @csrf

  				<?php 
            $arr = array(0,0,0,0,0,0);
            
  				?>
<input type="hidden" name="id" value="{{$student->id}}">
  <!-- phone mask -->
  <div class="row form-group">
    <div class="col-sm-6">
      <label>Numerical Ability :<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="first" class="form-control" placeholder="Enter Your Interests" value="<?= old('first')?old('first') :$arr[0] ?>">
    </div>
    

    <div class="col-sm-6">
      <label>Reasoning:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="second" class="form-control" placeholder="Enter Your Interests" value="<?= old('second')?old('second') :$arr[1] ?>">
    </div>
    


    <div class="col-sm-6">
      <label>Spelling & language:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="third" class="form-control" placeholder="Enter Your Interests" value="<?= old('third')?old('third') :$arr[2] ?>">
    </div>


    <div class="col-sm-6">
      <label>Verbal Reasoning:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('first') }}</span>
      </label>
      <input type="number" name="four" class="form-control" placeholder="Enter Your Interests" value="<?= old('four')?old('four') :$arr[3] ?>">
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
