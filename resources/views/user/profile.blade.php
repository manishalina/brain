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
            			<div class="col-sm-4">First name:</div>
            			<div class="col-sm-2">First name:</div>
            			<div class="col-sm-4">First name:</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-2">Grade:</div>
            			<div class="col-sm-4">First name:</div>
            			<div class="col-sm-2">Board:</div>
            			<div class="col-sm-4">First name:</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-2">School:</div>
            			<div class="col-sm-4">First name:</div>
            			<div class="col-sm-2">City:</div>
            			<div class="col-sm-4">First name:</div>
            		</div>


            		<div class="row form-group">
            			<div class="col-sm-2">Contact No:</div>
            			<div class="col-sm-4">First name:</div>
            			<div class="col-sm-2">Address:</div>
            			<div class="col-sm-4">First name:</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-2">Stream:</div>
            			<div class="col-sm-4">First name:</div>
            		</div>

            		<div class="row form-group">
            			<div class="col-sm-12 text text-danger">Click here for your test details and findings……….</div>
            		</div>
            	</div>
            	<div class="col-sm-4">
            		<img src="{{asset('gallery.png')}}">
            	</div>
            </div>

            <div class="row" style="background: #ccc">
            	<div class="col-sm-12"><h4>Your Top Interests:</h4></div>
            	<div class="col-sm-3">
            	<table class="table">
            		<thead>
            			<tr>
            				<th>Interest Traits</th>
            			</tr>
            		</thead>
            		<tbody>
            			<tr>
            				<td>Realistic</td>
            			</tr>
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
            			</tr>

            		</tbody>
            	</table>
            	</div>
            	<div class="col-sm-9"></div>
            </div>

            <div class="form-group">
            	<div>Your top two interest traits are Realistic &amp; Investigative</div>
				<div>Realistic :</div>
				<div>Investigative:</div>
            </div>

            <div class="row form-group">
            	<div class="col-sm-8">
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
            					<td>20</td>
            				</tr>
            				<tr>
            					<td>Reasoning</td>
            					<td>20</td>
            				</tr>
            				<tr>
            					<td>Spelling &amp; language</td>
            					<td>20</td>
            				</tr>
            				<tr>
            					<td>Verbal Reasoning</td>
            					<td>20</td>
            				</tr>
            			</tbody>
            		</table>
            	</div>
            	<div class="col-sm-4"></div>
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
