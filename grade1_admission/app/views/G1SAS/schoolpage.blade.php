@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li  class="active" > <a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Home</a> </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li> <a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a> </li>
                <li><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
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

          




@stop