@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li  class="active" > {{HTML::link('#', 'Home')}} </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li> <a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a> </li>
                <li>{{HTML::link('#','Applications')}} </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Overview</a></li>
                        <li ><a href = "/school/edit?schoolidtext=<?php echo $school->getSchool_id()?>">Edit School Details</a>
						</li>
                	</ul>
        	</div>
        	<div class ="col-md-9">
				<div class="page-header" style="border-color:#303030">
					<h2><?php echo $school->getSchool_name() ?></h2>
				</div>
				<h4><strong>School ID : </strong><?php echo $school->getSchool_id() ?></h4> <br/>
				<h4><strong>Category : </strong><?php echo $school->getCategory() ?></h4> <br/>
				<h4><strong>No of Classes : </strong><?php echo $school->getNo_of_classes()?></h4>	<br/>						
				<h4><strong>Contact no : </strong><?php echo $school->getContact_no()?></h4>							
			</div>
		</div>

            {{Form:: open(array('url' =>'school/addpastpupilmarkingcriteria','method' => 'POST' ))}}  
	           {{Form::hidden('schoolid',$school->getSchool_id())}}     
                {{Form::submit('Add Past Pupil Marking Criteria');}}
            {{ Form:: close()}}

{{Form:: open(array('url' =>'school/verifyapplication','method' => 'POST' ))}}
		{{Form::hidden('schoolid',$school->getSchool_id())}} 

        {{Form::submit('Verify Applications');}}
{{ Form:: close()}}

{{Form:: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}



@stop