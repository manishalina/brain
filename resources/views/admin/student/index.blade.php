@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(Session::has('message'))
            <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('message') !!} </div>
          @endif

          <div class="card">
            <div class="card-header">
            	<div class="row">
	            	<div class="col-sm-8">Blog List</div>
	            	<div class="col-sm-4 text text-right">
	            		<a href="{{ URL('student/create') }}" class="btn btn-info">Add</a>
	            	</div>
            	</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SNO</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $key=>$student)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>
                    <?php
                    $image='';
                    if($student->image !=''){
                      $image = 'assets/student/'.$student->image;
                    }else{
                      $image = 'user.png';
                    }
                    ?>
                    <img style="height: 80px;width: 80px;" src="{{asset($image)}}">
                  </td>
                  <td>{{$student->name}}</td>
                  <td>{{ $student->email }}</td>
                  <td>
                   <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Edit</a> 

                 <form method="post" action="{{ route('student.destroy',$student->id) }}">
                   @csrf
                  <input type="hidden" name="_method" value="delete" />
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
                </tr>
                @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('extrajs')
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection
