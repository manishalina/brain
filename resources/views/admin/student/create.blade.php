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
            <a href="{{ URL('blog') }}" class="btn btn-info">List</a>
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
  				?>
				@endif

  <!-- phone mask -->
  <div class="row form-group">
    <div class="col-sm-6">
      <label>Name:<span class="text text-danger">*</span></label>
      <input type="text" name="title" class="form-control" placeholder="Enter First Name" value="<?= $name ?>">
    </div>
    <div class="col-sm-6">
      <label>Last Name:<span class="text text-danger">*</span></label>
      <input type="text" name="title" class="form-control" placeholder="Enter Last name" value="<?= $lname ?>">
    </div>
  </div>



  <div class="row form-group">
    <div class="col-sm-6">
      <label>School:<span class="text text-danger">*</span></label>
      <input type="text" name="title" class="form-control" placeholder="Enter First Name" value="<?= $name ?>">
    </div>
    <div class="col-sm-6">
      <label>City:<span class="text text-danger">*</span></label>
      <input type="text" name="title" class="form-control" placeholder="Enter Last name" value="<?= $lname ?>">
    </div>
  </div>


  <div class="row form-group">
    <div class="col-sm-6">
      <label>Contect No.:<span class="text text-danger">*</span></label>
      <input type="text" name="title" class="form-control" placeholder="Enter First Name" value="<?= $name ?>">
    </div>
     <div class="col-sm-6">
        <label>Image:</label>
        <div class="row">
        <div class="col-sm-4">
        <?php
        $image="";

        if(Request::segment(3)==='edit') {
        if($blog->image !=''){
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
      <label>Grade:<span class="text text-danger">*</span></label>
      <select name="grade" class="form-control">
        <option value="" selected="" disabled="">Select Grade</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>
    <div class="col-sm-4">
      <label>Board:<span class="text text-danger">*</span></label>
       <select name="board" class="form-control">
        <option value="" selected="" disabled="">Select Board</option>
        <option value="State Board">State Board</option>
        <option value="ISCE">ISCE</option>
        <option value="CBSC">CBSC</option>
        <option value="IB or Cambridge">IB or Cambridge</option>
      </select>
    </div>
    <div class="col-sm-4">
     <label>Stream:<span class="text text-danger">*</span></label>
       <select name="stream" class="form-control">
        <option value="" selected="" disabled="">Select Stream</option>
        <option value="PCM">PCM</option>
        <option value="PCB">PCB</option>
        <option value="PCMB">PCMB</option>
        <option value="PCMCs">PCMCs</option>
        <option value="PCBCs">PCBCs</option>
      </select>
    </div>
  </div>

  
  <div class="row form-group">
    <div class="col-sm-12">
       <label>Address:<span class="text text-danger">*</span></label>
       <textarea placeholder="Enter Address" name="address" class="form-control"></textarea>
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
