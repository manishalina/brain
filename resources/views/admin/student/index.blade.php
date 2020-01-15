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
                  <!-- <th>Photo</th> -->
                  <th>Name</th>
                  <th>Email</th>
                  <th>Interest</th>
                  <th>Abilities</th>
                  <th>Career</th>
                  <th>Subject</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
$name = array("Realistic","Investigative","Artistic","Social","Enterprising","Conventional");
$name1 = array("Numerical Ability","Reasoning","Spelling &amp; language","Verbal Reasoning");
                  ?>
                @foreach($students as $key=>$student)
                <tr>
                  <td>{{$key+1}}</td>
                <!--   <td>
                    <?php
                    $image='';
                    if($student->image !=''){
                      $image = 'assets/student/'.$student->image;
                    }else{
                      $image = 'user.png';
                    }
                    ?>
                    <img style="height: 80px;width: 80px;" src="{{asset($image)}}">
                  </td> -->
                  <td>{{$student->name}}</td>
                  <td>{{ $student->email }}</td>
                  <td>
                    @if($student->interest)
                     <?php
                      $arr = unserialize($student->interest);
                      foreach($arr as $key => $value) { ?>
                        <li><?= $key.' : '.$value; ?></li>
                      <?php } ?>
                     @else
                      <span class="badge badge-success">NA</span>
                     @endif
                    
                   
                  </td>
                  <td>
                     @if($student->abilities)
                        <?php
                      $arr = explode(',', $student->abilities);
                      foreach($arr as $key => $value) { ?>
                        <li><?= $name1[$key].' : '.$value; ?></li>
                      <?php } ?>
                     @else
                     <span class="badge badge-success">NA</span>
                   @endif
                  </td>
                  <td>
                     @if($student->career)
                        <?php
                      $arr = explode(',', $student->career);
                      foreach($arr as $key => $value) { ?>
                        <li><?= $value; ?></li>
                      <?php } ?>
                     @else
                     <span class="badge badge-success">NA</span>
                   @endif
                  </td>
                  <td>
                     @if($student->subject)
                        <?php
                      $arr = explode(',', $student->subject);
                      foreach($arr as $key => $value) { ?>
                        <li><?= $value; ?></li>
                      <?php } ?>
                     @else
                     <span class="badge badge-success">NA</span>
                   @endif
                  </td>
                  <td>
                     @if($student->IsVerify ==0)
                     <span class="badge badge-danger">Unverify</span>
                     @else
                     <span class="badge badge-success">Verify</span>
                   @endif
                  </td>

                  <td>
                   <a href="{{ route('student.edit', $student->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Edit</a> 
                   @if($student->IsVerify ==0)
                   <a href="{{ URL('verify/'.$student->id) }}" class="btn btn-warning pull-left" style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Verify</a> 
                   @endif
                    |
                   <a href="{{ URL('interest/'.$student->id) }}" style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Interest</a> 
                    |
                  <a href="{{ URL('abilities/'.$student->id) }}"  style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Abilities</a> 
                    |
                    <a href="{{ URL('subject/'.$student->id) }}"  style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Subject </a> 
                   |
                    <a href="{{ URL('career/'.$student->id) }}"  style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Career</a> 
                   |
                  <a href="{{ URL('feedback/'.$student->id) }}"  style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Comment/Summary </a>
                   |
                  <a href="{{ URL('traits/'.$student->id) }}"  style="margin-right: 3px;" title="Edit">
                  <i class="fa fa-edit"></i>Traits</a>
                  
                   |
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
