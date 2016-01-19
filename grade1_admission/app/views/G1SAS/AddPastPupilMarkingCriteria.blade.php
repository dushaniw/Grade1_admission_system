@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li ><a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>"> Home</a> </li>
                <li>{{HTML::link('#', 'About')}}</li>
                <li class="active" > <a href = "/school/addpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a> </li>
                <li><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li ><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>">Marking Criteria</a></li>
                        <li class="active"><a href = "/school/addpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>">Add New Marking Criteria</a>
						</li>
                	</ul>
        	</div>
        	<div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span>  Add New Marking Criteria </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
                        	{{Form:: open(array('url' =>'school/saveppmarkingcriteria','method' => 'POST','role'=>'form' ))}}
                        	<div class="form-group">
                        		{{Form::label('schoolidlabel','School ID')}}
								{{Form::text('schoolidtext',$school->getSchool_id(), array('style'=>'width:150px','class'=>'form-control','readonly'))}}

                        	</div>
                        	<div class="form-group">
                        		{{Form::label('schoolnamelabel','School Name')}}
								{{Form::text('schoolnametext',$school->getSchool_name(),array('class'=>'form-control','readonly'))}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('yearlabel','Select year of admissions')}}
                        		<br/>
								{{Form::selectRange('year', 2010, 2020,2016,['class'=>'div-inline','style'=>'width: 100px' ]) }}
                        	</div>
                        	<div class="form-group">
                        		<h4><span class = "label label-warning">Marks recommended for Educational Achievements during school(Sum must be 25) </span></h4>
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('intEduAchlabel','Marks for International Educational Achievements')}}
								{{Form::selectRange('intEduAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('natEduAchlabel','Marks for National Educational Achievements')}}
								{{Form::selectRange('natEduAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('proEduAchlabel','Marks for Provincial Educational Achievements')}}
								{{Form::selectRange('proEduAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('disEduAchlabel','Marks for District level Educational Achievements')}}
								{{Form::selectRange('disEduAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
		
                        	</div>
                        	<div class="form-group">
								{{Form::label('zonEduAchlabel','Marks for Zonal Educational Achievements')}}
								{{Form::selectRange('zonEduAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        			<h4><span class = "label label-warning">Marks recommended for ExtraCurrricular Achievements during school(Sum must be 25) </span></h4>
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('intExtAchlabel','Marks for International ExtraCurrricular Achievements')}}
								{{Form::selectRange('intExtAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('natExtAchlabel','Marks for National ExtraCurrricular Achievements')}}
								{{Form::selectRange('natExtAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('proExtAchlabel','Marks for Provincial ExtraCurrricular Achievements')}}
								{{Form::selectRange('proExtAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('disExtAchlabel','Marks for District level ExtraCurrricular Achievements')}}
								{{Form::selectRange('disExtAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('zonExtAchlabel','Marks for Zonal ExtraCurrricular Achievements')}}
								{{Form::selectRange('zonExtAchMarks', 0, 25,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">

								{{Form::label('pastPupOrglabel','Marks for being a Past Pupil Organization Member')}}
								{{Form::selectRange('pastPupOrgMarks', 0, 24,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
                        		{{Form::label('contributionlabel','Marks for donations to school development')}}
								{{Form::selectRange('contributionMarks', 0, 6,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
                        	</div>
                        	<div class="form-group">
								{{Form::label('otherlabel','Marks for other related')}}
								{{Form::selectRange('otherMarks', 0, 24,0,['class'=>'div-inline','style'=>'width: 100px; position:absolute; right :100px' ])}}
			
                        	</div>
                        	<div class ="form-group">
                        		{{Form::submit('Save Criteria',array('class' => 'btn btn-primary' ))}}
                        	</div>
                        		{{ Form:: close()}}

                        </div></div>
                </div>
            </div>



        </div>



	



@stop
