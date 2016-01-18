@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li> {{HTML::link('#', 'Home')}} </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"> {{HTML::link('#','Past Pupil')}} </li>
                <li>{{HTML::link('#','Applications')}} </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>">Marking Criteria</a></li>
                        <li ><a href = "/school/edit?schoolidtext=<?php echo $school->getSchool_id()?>">Add New Marking Criteria</a>
						</li>
                	</ul>
        	</div>
        	<div class = "col-md-9">
                <div class="page-header" style="border-color:#303030">
					<h2><?php echo $school->getSchool_name() ?> | Marking Criteria</h2>
				</div>
				{{Form:: open(array('url' =>'school/viewppmarkingcriteria','method' => 'POST' ))}}
					{{Form::hidden('schoolidtext',$school->getSchool_id())}}
					{{Form::hidden('schoolnametext',$school->getSchool_name())}}
					
					<div class="form-group">
						{{Form::label('yearlabel','Select year of admissions    :')}}
					<br/>
					{{Form::select('year_sel',$years,$year,['class'=>'div-inline','style'=>'width: 100px' ])}}
					</div>
					<div class="form-group">
					{{Form::submit('View criteria',array('class' => 'btn btn-primary' ))}}
					</div>
			</div>


			</div>
			<div>



	
		<br><br>

		{{Form::label('eduAchlabel','Marks recommended for Educational Achievements during school:')}}
		<br><br>
		{{Form::label('intEduAchlabel','Marks for International Educational Achievements:')}}
		{{Form::text('intEduAchMarkstext',$ppmc->getInternationalEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('natEduAchlabel','Marks for National Educational Achievements:')}}
		{{Form::text('natEduAchMarkstext',$ppmc->getNationalEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('proEduAchlabel','Marks for Provincial Educational Achievements:')}}
		{{Form::text('proEduAchMarkstext',$ppmc->getProvincialEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('disEduAchlabel','Marks for District level Educational Achievements:')}}
		{{Form::text('disEduAchMarkstext',$ppmc->getDistrictEduAchieve(), ['readonly'])}}
		<br>
		{{Form::label('zonEduAchlabel','Marks for Zonal Educational Achievements:')}}
		{{Form::text('zonEduAchMarkstext',$ppmc->getZonalEduAchieve(), ['readonly'])}}
		<br>
		<br>
		{{Form::label('extAchlabel','Marks recommended for ExtraCurrricular Achievements during school:')}}
		<br><br>
		{{Form::label('intExtAchlabel','Marks for International ExtraCurrricular Achievements:')}}
		{{Form::text('intExtAchMarkstext',$ppmc->getInternationalExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('natExtAchlabel','Marks for National ExtraCurrricular Achievements:')}}
		{{Form::text('natExtAchMarkstext',$ppmc->getNationalExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('proExtAchlabel','Marks for Provincial ExtraCurrricular Achievements:')}}
		{{Form::text('proExtAchMarkstext',$ppmc->getProvincialExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('disExtAchlabel','Marks for District level ExtraCurrricular Achievements:')}}
		{{Form::text('disExtAchMarkstext',$ppmc->getDistrictExtraCurricular(), ['readonly'])}}
		<br>
		{{Form::label('zonExtAchlabel','Marks for Zonal ExtraCurrricular Achievements:')}}
		{{Form::text('zonExtAchMarkstext',$ppmc->getZonalExtraCurricular(), ['readonly'])}}
		<br>
		<br>
		{{Form::label('pastPupOrglabel','Marks for being a Past Pupil Organization Member:')}}
		{{Form::text('pastPupOrgMarkstext',$ppmc->getPastPupilOrgMemeber(), ['readonly'])}}
		<br>
		{{Form::label('contributionlabel','Marks for donations to school development:')}}
		{{Form::text('contributionMarkstext',$ppmc->getContribution(), ['readonly'])}}
		
		<br>
		{{Form::label('otherlabel','Marks for other related:')}}
		{{Form::text('otherMarkstext',$ppmc->getOther_after_school(), ['readonly'])}}
		<br>
	 	
	{{ Form:: close()}}

</div>
@stop