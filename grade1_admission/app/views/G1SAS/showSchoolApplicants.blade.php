@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
        <ul class="nav navbar-nav" >
                <li> <a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Home</a></li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a>  </li>
                <li class="active"><a href = "/search/schoolselected?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Verify Applications</a></li>
                        <li  class="active"><a href = "/search/schoolselected?schoolid=<?php echo $school->getSchool_id()?>">Search Selected Applicants</a>
						</li>
                	</ul>
        	</div>
	 		<div class = "col-md-9">
	 		

	 			<br/>
	 			{{Form:: open(array('url' =>'search/schoolapplicantsfind','method' => 'GET','role'=>'form' ))}}  
	 				<div class="form-group">
	 					{{Form::label('school1label', 'School')}}
	 						
	  					<select  class="form-control" name="school">
	    					@foreach($schools as $school)
	    						@if($selectedSchool->getSchool_id()==$school->getSchool_id())
	    							<option value="{{$school->getSchool_id()}}" selected="selected">
	    						@else
	    							<option value="{{$school->getSchool_id()}}">
	    						@endif
	      						{{$school->getSchool_id()."-".$school->getSchool_name()}}
	      						</option>
	    					@endforeach
	  					</select>
	  				</div>
	  				<div class="form-group">
	  						{{Form::submit('Find selected students',array('class' =>'btn btn-primary'))}}
					</div>
			
							{{Form:: close()}}
					
					
	  		</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="page-header" style="border-color:#303030">
						<h3>Selected Applicant List for: <?php echo $selectedSchool->getSchool_name() ?></h3>
					</div>

				<div style="overflow-x:auto;">
					<table >

						<tr>
	    		<th>Application ID</th>
	    		<th>Frist Name</th> 
	    		<th>Last Name</th>
	    		<th>Gender</th>
	    		<th>DateOfBirth</th>
	    		<th>Guardian Name</th>
	    		<th>Contact Number</th>
  			</tr>
	    	@foreach($applicants as $applicant)
	        <tr>
	        	<td>{{$applicant->getApplicantId()}}</td>
	        	<td>{{$applicant->getFirstname()}}</td>
	         	<td>{{$applicant->getLastname()}}</td>
	         	<td>{{$applicant->getGender()}}</td>
	         	<td>{{$applicant->getDateOfBirth()}}</td>
	         	<td>{{$applicant->getGuardian_firstname()." ".$applicant->getGuardian_lastname()}}</td>
	         	<td>{{$applicant->getGuardian_contact()}}</td>
	         </tr>
	    	@endforeach
		</table>
			</div>
			</div>
		</div>
	
	
@stop
		
