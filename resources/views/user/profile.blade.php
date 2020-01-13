@extends('layouts.app')

@section('content')

    <!--Main Slider-->
    <section style="margin-top:200px;" >
        <div class="container">
            <h1 class="text-center" style="font-size:30px"> Profile Page</h1>
            <div class="row">
            	<div class="col-sm-8">
            		<div class="row form-group">
            			<div class="col-sm-2">First name:</div>
            			<div class="col-sm-4">{{ $student->name }}</div>
            			<div class="col-sm-2">First name:</div>
            			<div class="col-sm-4">{{$student->lname}}</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-2">Grade:</div>
            			<div class="col-sm-4">{{$student->grade}}</div>
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
            			<div class="col-sm-4">{{$student->contect}}</div>
            			<div class="col-sm-2">Address:</div>
            			<div class="col-sm-4">{{$student->address}}</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-2">Stream:</div>
            			<div class="col-sm-4">{{$student->stream}}</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-12 text text-danger">Click here for your test details and findings……….</div>
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

            <div class="row">
            	<div class="col-sm-12"><h4>Your Top Interests:</h4></div>
            	<div class="col-sm-3">
            	<table class="">
            		<thead>
            			<tr>
            				<th>Interest Traits</th>
            			</tr>
            		</thead>
            		<tbody>
                              <?php
                              $i=0;
                                    foreach ($interest as $key => $value) { if($i<2){ $class="badge badge-success";}else{$class ="";} ?>
                                          <tr>
                                    <td class="<?= $class ?>"><?=  $key ?></td>
                              </tr>
                                    <?php $i++; }
                              ?>
            			<!-- 
            			<tr>
            				<td>Investigative</td>
            			</tr>

            			<tr>
            				<td>Artistic</td>
            			</tr>

            			<tr>
            				<td>Social</td>
            			</tr>

            			<tr>
            				<td>Enterprising</td>
            			</tr>


            			<tr>
            				<td>Conventional</td>
            			</tr> -->

            		</tbody>
            	</table>
            	</div>
            	<div class="col-sm-9">
                   
                  </div>

            </div>
            <br/>
                  <br/>

            <div class="form-group">
            	<div>Your top two interest traits are Realistic &amp; Investigative</div>
				<div>Realistic :</div>
				<div>Investigative:</div>
            </div>

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

            <div>Your Additional Traits :-<strong>all MI related</strong></div>
            <div>
            	<ul>
            		<li>You reflect certain aspects of musical ability</li>
            		<li>You also display</li>
            	</ul>
            </div>

            <div class="form-group">
            	<span>Comment</span>
            	<div>In terms of aptitude, you have a strong numerical ability which can</div> 
            
        	</div>

        </div>
    </section>
    
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

console.log('data',dataItem);

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
</script>

@endsection
