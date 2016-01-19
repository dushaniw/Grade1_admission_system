@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li> <a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Home</a></li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a>  </li>
                <li class="active"><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Verify Applications</a></li>
                        <li ><a href = "/search/schoolselected">Search Selected Applicants</a>
						</li>
                	</ul>
        	</div>
        	<div class = "col-md-9">
        	    <div class = "panel panel-primary panel-transparent">
                    <div class ="panel-heading">
                        <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-check"></span> Verify Application : <?php echo $application_id?></p></h3>
                    </div>
                    <div class = "panel-body"> <div class = "col-md-10">
						{{ Form:: open(array('url' =>'school/verifycat','method' => 'POST','role'=>'form' ))}}
						<div class="form-group">
							{{Form:: label( 'schoolid','School ID') }}
							{{Form:: text( 'schoolIdText',$school->getSchool_id(),array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly') )}}
						</div>
						<div class="form-group">
							{{Form:: label( 'schoolName','School Name') }}
							{{Form:: text( 'schoolNameText',$school->getSchool_name(),array('class' =>'form-control','style'=>'background-color:white','readonly')) }}
						</div>
						<div class="form-group">
							{{Form::label('application_id','Application ID')}}
							{{Form::text('application_idtext',$application_id, array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly'))}}
						</div>
						<div class="form-group">
							{{Form:: label( 'applicant_name','Student Applicant Name') }}
							{{Form:: text( 'applicant_nametext',$applicant->getFirstname()." ".$applicant->getLastname(), array('class' =>'form-control','style'=>'background-color:white','readonly')) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'guardian_name','Guardian Name')  }}
							{{Form:: text( 'guardian_nametext',$guardian->getFirstName()." ".$guardian->getLastName(),array('class' =>'form-control','style'=>'background-color:white','readonly'))  }}
						</div>
						<div class="form-group">
							{{Form:: label( 'guardian_nic','Guardian NIC')  }}
							{{Form:: text( 'guardian_nictext',$guardian->getNic(),array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly') ) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'gender','Gender')  }}
							{{Form:: text( 'gendertext',$applicant->getGender(),array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly') ) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'religion','Religion') }}
							{{Form:: text( 'religiontext',$applicant->getReligion(),array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly') ) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'dob','Date of Birth')  }}
							{{Form:: text( 'dobtext',$applicant->getDateOfBirth(), array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly') ) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'orderOfPreference','This school is applied as')  }}
							{{Form:: text( 'orderOfPreferencetext',$application->getOrderOfPreference(), array('class' =>'form-control','style'=> 'width: 100px; background-color:white','readonly') ) }}
						</div>
						<div class="form-group">
							{{Form:: label( 'typeOfApplication','Applied under category:') ; }}
							@if($application->getType()==1)
								{{Form:: text( 'typeOfApplicationtext','Resident in closed proximity', array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly') ) }}
							@elseif($application->getType()==2)
								{{Form:: text( 'typeOfApplicationtext','Past Pupil of the School',array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly') ) }}
							@elseif($application->getType()==3)
								{{Form:: text( 'typeOfApplicationtext','A sibling is learing currenly in school',array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly') ) }}
							@elseif($application->getType()==4)
								{{Form:: text( 'typeOfApplicationtext','Educational officer',array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly') )}}
							@elseif($application->getType()==5)
								{{Form:: text( 'typeOfApplicationtext','An officer on transfer', array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly'))}}
							@elseif($application->getType()==6)
								{{Form:: text( 'typeOfApplicationtext','A person coming from abroad', array('class' =>'form-control','style'=>'width: 400px; background-color:white','readonly')) }}
							@endif
						</div>
						<div class="form-group">
							{{Form:: label( 'distance','Distance to school')  }} 
							{{Form:: text( 'distancetext',$application->getDistance()." km", array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly')) }} 
						</div>
						<div class="form-group">
							{{Form:: label( 'medium','Requested Learning Medium') ; }}
							{{Form:: text( 'mediumtext',$application->getMedium(), array('class' =>'form-control','style'=>'width: 150px; background-color:white','readonly')) }}
						</div>
					<div id="catogory2" >
						<div class="form-group">
								<h4><strong><u>Period spent in the school as a pupil</u></strong></h4>
						</div>
						<div class="form-group">
							{{Form::label('Label6', 'From Grade');}}
							{{Form:: text( 'gradeOfAdmission',$category->getGradeOfAdmission(), array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly')) }}		
						</div>
						<div class="form-group">
							{{Form::label('Label7','To Grade');}}
							{{Form:: text( 'gradeOfLeaving',$category->getGradeOfLeaving(), array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly'))}}		
						</div>
						<div class="form-group">
							{{Form::label('Label8', 'Educational achievements gained during schooling period')}}
							@foreach($ach_set as $ach)
		 						{{ Form:: text( 'eAchievementDetail',$ach->getType()." - ".$ach->getAchievementDetail(),array('class' =>'form-control','style'=>' background-color:white','readonly') )}}	
		 					@endforeach
						</div>
						<div class="form-group">
							{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period')}}
							@foreach($con_set as $con)
								 {{Form:: text( 'coDetail',$con->getContributionDetail(), array('class' =>'form-control','style'=>' background-color:white','readonly'))  }}	
							 @endforeach	
						</div>
						<div class="form-group">
							{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school')}}
							@if($category->getPastPupilOrganizationMembership())
		 						{{Form:: text( 'pastPupilOrganizationMembership','Yes', array('class' =>'form-control','style'=>' background-color:white','readonly'))  }}		
							@else
								{{Form:: text( 'pastPupilOrganizationMembership','No',array('class' =>'form-control','style'=>' background-color:white','readonly'))}}
							@endif
						</div>
						<div class="form-group">
            				{{Form::submit('Verify Application',array('class' => 'btn btn-primary'))}}		
						</div>
					</div>
					{{Form::close()}}
					{{ Form:: open(array('url' =>'school/cancelverify','method' => 'POST'))}}
						{{Form::hidden('schoolid',$school->getSchool_id())}}
						{{Form::submit('Back',array('class' => 'btn btn-primary','style'=>'position:absolute; right:450px; top:1420px ' ))}}
					{{Form::close()}}
						
					</div></div>
					
			</div>
		</div>
	</div>
		


	



@stop