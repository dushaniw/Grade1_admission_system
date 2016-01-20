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
                        <li ><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Search Selected Applicants</a>
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
						<div id="catogory1" >
							<div class="form-group">
								{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
								{{Form:: text( 'noOfYearsInElectrocalRegister',$category->getNoOfYearsInElectrocalRegister(), array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly')) }}
							</div>
							<div class="form-group">
								{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register')}}
								{{Form:: text( 'noOfYearsSpouseInElectrocalRegister',$category->getNoOfYearsSpouseInElectrocalRegister(),array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly')) }}
							</div>
							<div class="form-group" style="color:red">
								* This is applicable for a period of recent 05 years, prior to the year the application is submitted
							</div>
							<div class="form-group">
								<h4><strong><u>Ownership of place of residence</u></strong></h4>
							</div>
							<div class="form-group">
								{{Form::label('Label3', 'Type of Title deed');}}
								@if($category->getTypeOfTitleDeed()==1)
									{{ Form:: text( 'typeOfTitleDeed','In the name of applicant/spouse or applicants parents', array('class' =>'form-control','style'=>'background-color:white','readonly'))}}		
								@elseif($category->getTypeOfTitleDeed()==2)
									{{ Form:: text( 'typeOfTitleDeed','Registered Lease Bond', array('class' =>'form-control','style'=>'background-color:white','readonly')) }}		
								@elseif($category->getTypeOfTitleDeed()==3)
									{{ Form:: text( 'typeOfTitleDeed','Government Official Quarters Documents', array('class' =>'form-control','style'=>'background-color:white','readonly'))}}		
								@elseif($category->getTypeOfTitleDeed()==4)
									{{ Form:: text( 'typeOfTitleDeed','un-registered Lease Bond',array('class' =>'form-control','style'=>'background-color:white','readonly'))}}		
								@endif

							</div>
							<div class="form-group">
								{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate')}}

								{{ Form:: text( 'noOfAditionalDocumentForResident',$category->getNoOfAditionalDocumentForResident(), array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly'))}}		
							</div>
							<div class="form-group">
								{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for');}}

								{{Form:: text( 'closeSchoolCount',$category->getCloseSchoolCount(),array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly'))}}
							</div>
							<div class="form-group">
                            	{{Form::submit('Verify Application',array('class' => 'btn btn-primary'))}}		
							</div>
					
						</div>

					{{Form::close()}}
					{{ Form:: open(array('url' =>'school/cancelverify','method' => 'POST'))}}
						{{Form::hidden('schoolid',$school->getSchool_id())}}
						{{Form::submit('Back',array('class' => 'btn btn-primary','style'=>'position:absolute; right:450px; top:1461px ' ))}}
					{{Form::close()}}
						
					</div></div>
					
			</div>
		</div>
	</div>
		


	



@stop