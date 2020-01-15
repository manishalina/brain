@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Feedback</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Feedback</li>
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
	            	<div class="col-sm-8">Feedback List</div>
	            	<div class="col-sm-4 text text-right">
	            		<!-- <a href="{{ URL('blog/create') }}" class="btn btn-info">Add</a> -->
	            	</div>
            	</div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="message"></div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SNO</th>
                  <th>Student</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $key=>$comment)
                <tr id="remove{{$comment->id}}">
                  <td>{{$key+1}}</td>
                  <td>{{$comment->userDetail->name}}</td>
                  <td>{{$comment->title}}</td>
                  <td>{!! $comment->description !!}</td>
                  <td>@if($comment->status==0)<span id="status{{$comment->id}}">{{'Pending'}}</span> @else <span id="status{{$comment->id}}">{{'Approved'}}</span> @endif</td>
                  <td>
                    @if($comment->status==0)

                   <a id="{{$comment->id}}" class="btn btn-info pull-left" style="margin-right: 3px;color:white; cursor: pointer;" title="Approve" onclick="approve({{$comment->id}})">
                  <i class="fa fa-edit"></i>Approve</a> 
                 @endif
               <a id="{{$comment->id}}" class="btn btn-danger pull-left" style="margin-right: 3px;color:white; cursor: pointer;" title="Delete" onclick="delete_feedback({{$comment->id}})">
                  <i class="fa fa-edit"></i>Delete</a> 
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
  function delete_feedback(id)
  {
     var r=confirm("Do you really want to delete this feedback?")
    if(r)
      {
         $.ajax({
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "GET",
            url: '<?php echo URL('/') ?>/deletefeedback/'+id,
            success: function(data){
             if(data=='delete')
              {
                  $('#remove'+id).remove();
                  $('#message').html('<p style="color:green; font-size:15px;">Feedback deleted successfully.</p>')
              }
              else
              {
                 $('#message').html('<p style="color:red; font-size:15px;">Please try again.</p>')
              }
              
           
            },error: function(data){
                
            }
          });
      }
  }
  function approve(id)
  {
    var r=confirm("Do you really want to approve this feedback?")
    if(r)
      {
         $.ajax({
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: "GET",
            url: '<?php echo URL('/') ?>/approvefeedback/'+id,
            success: function(data){
             if(data=='update')
              {
                  $('#'+id).hide();
                  $('#status'+id).html('Approved');
                  $('#message').html('<p style="color:green; font-size:15px;">Feedback approved successfully.</p>')
              }
              else
              {
                 $('#message').html('<p style="color:red; font-size:15px;">Please try again.</p>')
              }
              
           
            },error: function(data){
                
            }
          }); 
      }
       
  }
</script>
@endsection
