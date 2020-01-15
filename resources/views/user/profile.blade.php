@extends('layouts.app')

@section('content')

<!--Main Slider-->
<style type="text/css">
.textclass{font-size: 16px;
font-weight: bold;}
#accordion-style-1 h1,
#accordion-style-1 a{
color:#007b5e;
}
#accordion-style-1 .btn-link {
font-weight: 400;
color: #007b5e;
background-color: transparent;
text-decoration: none !important;
font-size: 16px;
font-weight: bold;
padding-left: 25px;
}

#accordion-style-1 .card-body {
border-top: 2px solid #007b5e;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
background: #007b5e;
padding: 13px 11px;
color: #ffffff;
width: 35px;
height: 41px;
position: absolute;
left: -1px;
top: 10px;
border-top-right-radius: 7px;
border-bottom-right-radius: 7px;
display:block;
}
</style>
 <!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('assets/images/background/8.jpg')}} )">
      <div class="auto-container">
      <div class="content">
        <h1>Profile</h1>
        <ul class="page-breadcrumb">
          <li><a href="./">Home</a></li>
          <li>Pages</li>
          <li>Profile</li>
        </ul>
      </div>
        </div>
    </section>
<section style=" margin-bottom: 20px;margin-bottom: 20px;">
<div class="row">
<div class="col-10 mx-auto">
 <h1  style="font-size:30px; margin-bottom: 20px; border-bottom: 1px solid #bdbcbc">Student Dashboard line items</h1>
  @if(Session::has('message'))
            <div class="alert alert-success login-success"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {!! Session::get('message') !!} </div>
          @endif
<div class="accordion" id="accordionExample">
  <div class="card">
      <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                   <i class="fa fa-angle-double-right mr-3"></i> Profile
                  </button>
            </h5>
      </div>

      <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                 <div class="row" id="profiledetails">
                       
                        <div class="col-sm-8">
                        <div class="row form-group">
                        <div class="col-sm-2">First name:</div>
                        <div class="col-sm-4">{{ $student->name }}</div>
                        <div class="col-sm-2">Last name:</div>
                        <div class="col-sm-4">{{$student->lname}}</div>
                        </div>

                        <div class="row form-group">
                        <div class="col-sm-2">Grade:</div>
                        <div class="col-sm-4">{{$student->grade}}th</div>
                        <div class="col-sm-2">Board:</div>
                        <div class="col-sm-4">{{$student->board}}</div>
                        </div>

                        <div class="row form-group">
                        <div class="col-sm-2">School:</div>
                        <div class="col-sm-4">{{$student->school}}</div>
                        <div class="col-sm-2">City:</div>
                        <div class="col-sm-4">{{$student->city}}</div>
                        </div>


                        <div class="row form-group">
                        <div class="col-sm-2">Contact No:</div>
                        <div class="col-sm-4">{{$student->contact}}</div>
                        <div class="col-sm-2">Address:</div>
                        <div class="col-sm-4">{{$student->address}}</div>
                        </div>

                        <div class="row form-group">
                        <div class="col-sm-2">Stream:</div>
                        <div class="col-sm-4">{{$student->stream}}</div>
                        </div>

                        <div class="row form-group">
                        <div class="col-sm-12 text "> <a style="cursor: pointer;color:white" class="btn btn-success"  onclick="editprofile()">Edit</a></div>
                        </div>
                        </div>
                        <div class="col-sm-4">
                        <?php

                        $image = "";
                        if($student->image !=''){
                        $image = "assets/student/".$student->image;
                        }else{
                        $image = "gallery.png";
                        }
                        ?>
                        <img src="{{asset($image)}}">
                        </div>
                  </div>

 <div class="row" style="display: none;" id="editprofile">
          <div class="col-md-12">
                     
            <div class="card card-info">
              <div class="card-body">
        <form method="post" action="<?php echo URL('/') ?>/studentupdate" enctype = 'multipart/form-data'>
          <input type="hidden" name="user_id" value="{{$student->id}}" />
          @csrf
          <?php  
           $name = $student->name;
           $lname = $student->lname;
           $email = $student->email;
           $grade = $student->grade;
           $grade = $student->grade;
           $board = $student->board;
           $school = $student->school;
           $city =   $student->city;
           $address = $student->address;
           $contact = $student->contact;
           $stream = $student->stream;
        ?>
       

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
        if($student->image !=''){
        $image = '/assets/student/'.$student->image;
        }else{
        $image = 'user.png';
        }
                          
        //$image = 'gallery.png';
        ?>
        <img id="blah" style="height: 80px;width: 80px;" src="{!! asset($image) !!}">    
        </div>
        <div class="col-sm-6">
       <input type="file" name="file" id="images">
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


                
                <!-- /.form group -->
                <div class="form-group"> 
                  <button type="submit" class="btn btn-primary waves-effect waves-light"> Submit </button>
                  <button type="button" onclick="userprofile()" class="btn btn-secondary waves-effect m-l-5"> Cancel </button>   
                </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (right) -->
        </div>


            </div>
      </div>
 </div>
<div class="card">
      <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                  <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   <i class="fa fa-angle-double-right mr-3"></i> Your Top Interests
                  </button>
            </h5>
      </div>
      <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">

                   <div class="row">
                        <div class="col-sm-12"><h4>Your Top Interests:</h4></div>
                        <div class="col-sm-3">
                        <table class="table">
                        <thead>
                        <tr>
                        <th>Interest Traits</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=0;
                        foreach ($interest as $key => $value) { if($i<2){ $class=" text-success textclass";}else{$class ="";} ?>
                        <tr><td class="<?= $class ?>"><?=  $key ?></td></tr>
                        <?php $i++; }
                        ?>

                        </tbody>
                        </table>
                        </div>
                        <div class="col-sm-9">

                        </div>

               </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                  <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   <i class="fa fa-angle-double-right mr-3"></i> Realistic & Investigative
                  </button>
            </h5>
      </div>
      <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                 <div class="form-group" style="min-height: 100px;border: 1px solid #bdbcbc;border-radius: 3px; padding: 5px;">
                        <div>Your top two interest traits are Realistic &amp; Investigative</div>
                              <div>Realistic :</div>
                              <div>Investigative:</div>
                  </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
      <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <i class="fa fa-angle-double-right mr-3"></i> Abilities
      </button>
  </h5>
      </div>
      <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                  <div class="row form-group">
                        <div class="col-sm-5">
                        <table class="table">
                        <thead>
                        <tr>
                              <th>Abilities</th>
                              <th>Percentage Score</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                              <td>Numerical Ability</td>
                              <td><?= $abilities[0] ?></td>
                        </tr>
                        <tr>
                              <td>Reasoning</td>
                              <td><?= $abilities[1] ?></td>
                        </tr>
                        <tr>
                              <td>Spelling &amp; language</td>
                              <td><?= $abilities[2] ?></td>
                        </tr>
                        <tr>
                              <td>Verbal Reasoning</td>
                              <td><?= $abilities[3] ?></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
<div class="col-sm-7">
<div id="chartContainer" style="height: 300px;"></div>          
</div>
</div>

<div class="form-group">In terms of aptitude, you have a strong numerical ability which can</div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
      <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#Additional" aria-expanded="false" aria-controls="Additional">
        <i class="fa fa-angle-double-right mr-3"></i> Additional Traits
      </button>
  </h5>
      </div>
      <div id="Additional" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
            <div style="min-height: 100px; padding: 5px;">
                  {!!$student->traits!!}
            </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
      <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#Comment" aria-expanded="false" aria-controls="Comment">
        <i class="fa fa-angle-double-right mr-3"></i> Comment
      </button>
  </h5>
      </div>
      <div id="Comment" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                  <div class="form-group" style="margin-top: 10px;">
                 <div style="min-height: 100px; padding: 5px;">

                     {!!$student->feedback!!}
                 </div> 
            
            </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                  <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#Favourable" aria-expanded="false" aria-controls="Favourable">
                    <i class="fa fa-angle-double-right mr-3"></i> Favourable 
                  </button>
            </h5>
      </div>
      <div id="Favourable" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                  <div class="form-group">

                        <table class="table">
                            <tr>
                                  <td style="width: 30%;">Your Favourable Subject selection</td>
                                  <td>
                                        <?php 

                                        if($student->subject!=''){
                                          echo $student->subject;
                                        }
                                        else
                                        {
                                          echo 'Not Available';
                                        }

                                        ?>
                                  </td>
                            </tr>
                             <tr>
                                  <td>Your Favourable Career selection</td>
                                  <td><?php 

                                        if($student->career!=''){
                                          echo $student->career;
                                        }
                                        else
                                        {
                                          echo 'Not Available';
                                        }

                                        ?></td>
                            </tr>  

                        </table>
               </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                  <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#Notice" aria-expanded="false" aria-controls="Notice">
                    <i class="fa fa-angle-double-right mr-3"></i> Notice & Updates
                  </button>
           </h5>
      </div>
      <div id="Notice" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                  <div class="form-group" style="margin-top: 10px;">
                      
                     @if(count($events)>0)
                     @foreach($events as $key=>$event)
                      <p>
                          <a style="cursor: pointer;" data-toggle="modal"  onclick="eventdetail({{$event->id}})">
                            {{$event->title}}
                            <?php if(date('Y-m-d')==date('Y-m-d',strtotime($event->created_at)))
                            { echo '<span class="right badge badge-danger">New</span>';} ?>
                          </a>
                      </p>
                      @endforeach
 
                     @else
                      <div style="font-size: 16px;color:red;text-align: center;width: 100%;">{{'No Notice & Updates Listed Yet.'}}</div>
                    @endif
                  </div>
            </div>
      </div>
</div>
<div class="card">
      <div class="card-header" id="headingFour">
            <h5 class="mb-0">
      <button class="btn btn-link collapsed btn-block text-left" type="button" data-toggle="collapse" data-target="#Feedback" aria-expanded="false" aria-controls="Feedback">
        <i class="fa fa-angle-double-right mr-3"></i> Feedback
      </button>
  </h5>
      </div>
      <div id="Feedback" class="collapse fade" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                  <div class="form-group" style="margin-top: 10px;">
                 <div style="min-height: 100px; padding: 5px;">
                
                         <div id="commentmsg"></div>
                         <div class="col-sm-6">
                              <label>Title:<span class="text text-danger">*</span>
                                
                              </label>
                              <input type="text" name="title" id="title"  class="form-control" placeholder="Enter Title" value="<?php echo @$comment->title; ?>" >
                            <span id="error_title"></span>
                            <input type="hidden" id="comment_id" value="<?php echo @$comment->id; ?>">
                        </div>
                        <div class="col-sm-6">
                              <label>Description:<span class="text text-danger">*</span>
                              </label>
                              <textarea name="comment" id="comment" class="form-control" placeholder="Enter Feedback"><?php echo @$comment->description; ?></textarea>
                             <span id="error_comment"></span>
                        </div>
                         <div class="col-sm-6" style="margin-top: 10px;">
                          <input type="button" onclick="comment()" class="btn btn-success" value="Save">
                        </div>
                        
                 
                 </div> 
            
            </div>
            </div>
      </div>
</div>
</div>
</div>      
</div>
</section>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">News & Event Details</h4>
        </div>
        <div class="modal-body" id="newsdetails">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@endsection
@section('extrajs')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
var dataItem =   [];
<?php
$name = array("Numerical Ability","Reasoning","Spelling &amp; language","Verbal Reasoning");
//$abilities = $abilities;
foreach ($abilities as $key => $abilitie) { ?>
dataItem.push({ y: <?= $abilitie ?>, label: '<?= $name[$key] ?>' });
<?php }
?>

window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
theme: "light2", // "light1", "light2", "dark1", "dark2"
title:{
text: "Your top Abilities:"
},
axisY: {
title: ""
},
data: [{        
type: "column",  
showInLegend: true, 
legendMarkerColor: "grey",
legendText: "Abilities",
dataPoints: dataItem
}]
});
chart.render();

}
function editprofile()
{
  $('#editprofile').show();
  $('#profiledetails').hide();
}
function userprofile()
{
  $('#editprofile').hide();
  $('#profiledetails').show();
}
function eventdetail(id)
{
  $.ajax({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    type: "GET",
    url: '<?php echo URL('/') ?>/newsdetail/'+id,
    success: function(data)
    {
      $('#newsdetails').html(data);
      $('#myModal').modal('show');
    },
    error: function(data)
    {

    }
    }); 
}

</script>

@endsection
