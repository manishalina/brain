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
				@if(Request::segment(3)==='edit')
         <form method="post" action="{{ route('student.update',$student->id) }}" enctype = 'multipart/form-data'>
          <input type="hidden" name="_method" value="put" />
          @csrf
  				<?php  
  				 $name = $student->name;
           $lname = $student->lname;
  				 $email = $student->email;
           $grade = $student->grade;
           $grade = $student->grade;
           $board = $student->board;
           $school = $student->school;
           $city = $student->city;
           $address = $student->address;
           $contact = $student->contact;
           $stream = $student->stream;
  				// $mobile = $client->mobile;
  				// $email = $client->email;
  				// $address = $client->address;
  				// $logo = $client->logo;
  				// $company = $client->company_name;

  				?>
				@else
          <form method="POST" action="{{ URL('student') }}" enctype = 'multipart/form-data'>
          @csrf

  				<?php 
            $name = '';
            $lname = '';
            $email = '';
            $grade = "";
            $grade = "";
            $board = "";
            $school = "";
            $city = "";
            $address = "";;
            $contact = "";;
            $stream = "";
  				?>
				@endif

  <!-- phone mask -->
  <div class="row form-group">
    <div class="col-sm-6">
      <label>Name:<span class="text text-danger">*</span>
          <span class="text-danger">{{ $errors->first('fname') }}</span>
      </label>
      <input type="text" name="fname" class="form-control" placeholder="Enter First Name" value="<?= old('fname')?old('fname') :$name ?>">
    </div>
    <div class="col-sm-6">
      <label>Last Name:</label>
      <input type="text" name="lname" class="form-control" placeholder="Enter Last name" value="<?= old('lname') ?old('lname') :$lname ?>">
    </div>
  </div>



  <div class="row form-group">
    <div class="col-sm-6">
      <label>School:<span class="text text-danger">*</span>
        <span class="text-danger">{{ $errors->first('school') }}</span>
      </label>
      <input type="text" name="school" class="form-control" placeholder="Enter First Name" value="<?= old('school') ?old('school') :$school ?>">
    </div>
    <div class="col-sm-6">
      <label>City:<span class="text text-danger">*</span>
        <span class="text-danger">{{ $errors->first('city') }}</span>
      </label>
      <input type="text" name="city" class="form-control" placeholder="Enter Last name" value="<?= old('city') ?old('city') :$city ?>">
    </div>
  </div>
<?php
    if( Request::segment(3) != 'edit' ){ ?>
  <div class="row form-group">
    <div class="col-sm-6">
      <label>Email:<span class="text text-danger">*</span>
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </label>
      <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?= old('email') ?old('email') :$email ?>">
    </div>
    
    <div class="col-sm-6">
      <label>Password:<span class="text text-danger">*</span>
        <span class="text-danger">{{ $errors->first('password') }}</span>
      </label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password" value="">
    </div>
    
  </div>
<?php } ?>

  <div class="row form-group">
    <div class="col-sm-6">
      <label>Contect No.:<span class="text text-danger">*</span></label>
      <input type="text" name="phone" class="form-control" placeholder="Enter First Name" value="<?= old('phone') ?old('phone') :$contact ?>">
    </div>
     <div class="col-sm-6">
        <label>Image:</label>
        <div class="row">
        <div class="col-sm-4">
        <?php
        $image="";

        if(Request::segment(3)==='edit') {
        if($student->image !=''){
        $image = '/assets/student/'.$student->image;
        }else{
        $image = 'user.png';
        }
        }else{
        $image = 'user.png';
        }                   
        //$image = 'gallery.png';
        ?>
        <img id="blah" style="height: 80px;width: 80px;" src="{!! asset($image) !!}">    
        </div>
        <div class="col-sm-6">
        @if(Request::segment(3)==='edit')                    
        <input type="file" name="file" id="images">
        @else
        <input type="file" name="file" id="images" required="" >
        @endif
        </div>
        </div>      
     </div>
  </div>

    <div class="row form-group">
    <div class="col-sm-4">
      <?php
      if(old('grade')){
        $grade = old('grade');
      } 
      ?>
      <label>Grade:<span class="text text-danger">*</span></label>
      <select name="grade" class="form-control">
        <option value="" selected="" disabled="">Select Grade</option>
        <option value="8" <?php if($grade == '8'){echo "selected"; } ?>>8</option>
        <option value="9" <?php if($grade == '9'){echo "selected"; } ?>>9</option>
        <option value="10" <?php if($grade == '10'){echo "selected"; } ?>>10</option>
        <option value="11" <?php if($grade == '11'){echo "selected"; } ?>>11</option>
        <option value="12" <?php if($grade == '12'){echo "selected"; } ?>>12</option>
      </select>
    </div>
    <div class="col-sm-4">
      <?php
      if(old('board')){
        $board = old('board');
      } 
      ?>
      <label>Board:<span class="text text-danger">*</span></label>
       <select name="board" class="form-control">
        <option value="" selected="" disabled="">Select Board</option>
        <option value="State Board" <?php if($board == 'State Board'){echo "selected"; } ?>>State Board</option>
        <option value="ISCE" <?php if($board == 'ISCE'){echo "selected"; } ?>>ISCE</option>
        <option value="CBSC" <?php if($board == 'CBSC'){echo "selected"; } ?>>CBSC</option>
        <option value="IB or Cambridge" <?php if($board == 'IB or Cambridge'){echo "selected"; } ?>>IB or Cambridge</option>
      </select>
    </div>
    <div class="col-sm-4">
       <?php
      if(old('stream')){
        $stream = old('stream');
      } 
      ?>
     <label>Stream:<span class="text text-danger">*</span></label>
       <select name="stream" class="form-control">
        <option value="" selected="" disabled="">Select Stream</option>
        <option value="PCM" <?php if($stream == 'PCM'){echo "selected"; } ?>>PCM</option>
        <option value="PCB" <?php if($stream == 'PCB'){echo "selected"; } ?>>PCB</option>
        <option value="PCMB" <?php if($stream == 'PCMB'){echo "selected"; } ?>>PCMB</option>
        <option value="PCMCs" <?php if($stream == 'PCMCs'){echo "selected"; } ?>>PCMCs</option>
        <option value="PCBCs" <?php if($stream == 'PCBCs'){echo "selected"; } ?>>PCBCs</option>
      </select>
    </div>
  </div>

  
  <div class="row form-group">
    <div class="col-sm-12">
       <label>Address:<span class="text text-danger">*</span></label>
       <textarea placeholder="Enter Address" name="address" class="form-control"><?= $address; ?></textarea>
    </div>
  </div>
  <!-- /.form group -->

         

                <!-- IP mask -->
<div class="form-group">
            

				
<!-- /.input group -->
</div>
<!-- /.form group -->

                
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
