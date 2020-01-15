@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogue</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Catalogue</li>
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
	            	<div class="col-sm-8">Catalogue List</div>
	            	<div class="col-sm-4 text text-right">
	            		<a href="{{ URL('catlog/create') }}" class="btn btn-info">Add</a>
	            	</div>
            	</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SNO</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                @foreach($catlogs as $key=>$faq)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$faq->title}}</td>
                  <td>{!! $faq->description !!}</td>
                  <td>
                   <a href="{{ route('catlog.edit', $faq->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Edit</a> 

                 <form method="post" action="{{ route('catlog.destroy',$faq->id) }}">
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
