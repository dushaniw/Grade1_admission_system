@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li> <a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Home</a></li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a>  </li>
                <li><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a></li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>">Marking Criteria</a></li>
                        <li ><a href = "/school/addpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>">Add New Marking Criteria</a>
						</li>
                	</ul>
        	</div>
        	<div class = "col-md-9">
                <div class="page-header" style="border-color:#303030">
					<h2><?php echo $school->getSchool_name() ?> | Marking Criteria</h2>
				</div>
				{{Form:: open(array('url' =>'school/viewppmarkingcriteria','method' => 'POST','role'=>'form' ))}}
					{{Form::hidden('schoolidtext',$school->getSchool_id())}}
					{{Form::hidden('schoolnametext',$school->getSchool_name())}}
					
					<div class="form-group">
						{{Form::label('yearlabel','Select year of admissions    :')}}
						{{Form::select('year_sel',$years,$year,['class'=>'div-inline','style'=>'width: 100px' ])}}
					
						{{Form::submit('View criteria',array('class' => 'btn btn-primary' ))}} 
					</div>

					
					
				
				{{ Form:: close()}}
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"> <div class="col-md-offset-4">
				<h5><strong><u>  Marks recommended for Educational Achievements during school</u></strong></h5>
		</div> </div></div>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for International Educational Achievements :</strong> <?php echo $ppmc->getInternationalEduAchieve()?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for National Educational Achievements : </strong><?php echo $ppmc->getNationalEduAchieve()?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for Provincial Educational Achievements : </strong><?php echo $ppmc->getProvincialEduAchieve()?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for District level Educational Achievements : </strong><?php echo $ppmc->getDistrictEduAchieve()?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for Zonal Educational Achievements : </strong><?php echo $ppmc->getZonalEduAchieve()?></h5>
		</div></div></div>
		<br/>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-4">
				<h5><strong><u>Marks recommended for ExtraCurrricular Achievements during school</u></strong></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for International ExtraCurrricular Achievements : </strong><?php echo $ppmc->getInternationalExtraCurricular()?></h5>
		</div></div></div>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for National ExtraCurrricular Achievements : </strong><?php echo $ppmc->getNationalExtraCurricular()?></h5>
		</div></div></div>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for Provincial ExtraCurrricular Achievements : </strong><?php echo $ppmc->getProvincialExtraCurricular() ?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for District level ExtraCurrricular Achievement : </strong><?php echo $ppmc->getDistrictExtraCurricular()?></h5>
		</div></div></div>
			<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for Zonal ExtraCurrricular Achievements : </strong><?php echo $ppmc->getZonalExtraCurricular()?></h5>
		</div></div></div>
				<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for being a Past Pupil Organization Member : </strong><?php echo $ppmc->getPastPupilOrgMemeber()?></h5>
		</div></div></div>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for donations to school development : </strong><?php echo $ppmc->getContribution() ?></h5>
		</div></div></div>
		<div class ="row">
			<div class="col-md-12"> <div class="col-md-offset-3">
				<h5><strong>Marks for other related : </strong><?php echo $ppmc->getOther_after_school()?></h5>
		</div></div></div>
		
	
			

	
	 	


@stop