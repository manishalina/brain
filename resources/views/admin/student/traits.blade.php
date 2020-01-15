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
  <form method="POST" action="{{ URL('savetraits') }}" enctype = 'multipart/form-data'>
          @csrf

        
     <input type="hidden" name="id" value="{{$student->id}}">
  <!-- phone mask -->

  <div class="input_fields_wrap">

    <div class="form-group">
                  <label>Additional Traits :</label>
                    <textarea class="textarea" name="description" placeholder="Place some text here" style="font-size: 14px; line-height: 28px; border: 1px solid #dddddd; padding: 10px; height: 150px;">{!!$student->traits!!}</textarea>
                 
                </div>

   
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
</script>
@endsection
