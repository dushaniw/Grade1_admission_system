<html>
<head>
	<title>Verify Category 1</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifycat1','method' => 'POST' ))}}
		
		{{Form :: label( 'schoolid','School id:') ; }}
		{{Form :: text( 'schoolIdText',$school->getSchool_id(), ['readonly']) ; }}
		{{Form :: label( 'schoolName','My School :') ; }}
		{{Form :: text( 'schoolNameText',$school->getSchool_name(), ['readonly']) ; }}
		<br>

		{{Form::label('application_id','Application ID:')}}
		{{Form::text('application_idtext',$application_id, ['readonly'])}}
		<br>

		<br>
		{{Form :: label( 'applicant_name','Student Applicant Name:') ; }}
		{{Form :: text( 'applicant_nametext',$applicant->getFirstname()." ".$applicant->getLastname(), ['readonly']); }}
		<br>
		{{Form :: label( 'guardian_name','Guardian Name:') ; }}
		{{Form :: text( 'guardian_nametext',$guardian->getFirstName()." ".$guardian->getLastName(), ['readonly']); }}
		<br>
		{{Form :: label( 'guardian_nic','Guardian NIC:') ; }}
		{{Form :: text( 'guardian_nictext',$guardian->getNic(), ['readonly']); }}
		<br>
		<br>
		{{Form :: label( 'gender','Gender:') ; }}
		{{Form :: text( 'gendertext',$applicant->getGender(), ['readonly']); }}
		<br>
		{{Form :: label( 'religion','Religion:') ; }}
		{{Form :: text( 'religiontext',$applicant->getReligion(), ['readonly']); }}
		<br>
		{{Form :: label( 'dob','Date of birth:') ; }}
		{{Form :: text( 'dobtext',$applicant->getDateOfBirth(), ['readonly']); }}
		<br>

		{{Form :: label( 'orderOfPreference','This school is applied as :') ; }}
		{{Form :: text( 'orderOfPreferencetext',$application->getOrderOfPreference(), ['readonly']) ; }}
		<br>
		{{Form :: label( 'typeOfApplication','Applied under category:') ; }}
		@if($application->getType()==1)
			{{Form :: text( 'typeOfApplicationtext','Resident in closed proximity', ['readonly']) ; }}
		@elseif($application->getType()==2)
			{{Form :: text( 'typeOfApplicationtext','Past Pupil of the School', ['readonly']) ; }}
		@elseif($application->getType()==3)
			{{Form :: text( 'typeOfApplicationtext','A sibling is learing currenly in school', ['readonly']) ; }}
		@elseif($application->getType()==4)
			{{Form :: text( 'typeOfApplicationtext','Educational officer', ['readonly']) ; }}
		@elseif($application->getType()==5)
			{{Form :: text( 'typeOfApplicationtext','An officer on transfer', ['readonly']) ; }}
		@elseif($application->getType()==6)
			{{Form :: text( 'typeOfApplicationtext','A person coming from abroad', ['readonly']) ; }}
		@endif

		<br>
		{{Form :: label( 'distance','Distance to school:') ; }} 
		{{Form :: text( 'distancetext',$application->getDistance()." km", ['readonly']) ; }} 
		<br>
		{{Form :: label( 'medium','Learning Medium requested:') ; }}
		{{Form :: text( 'mediumtext',$application->getMedium(), ['readonly']) ; }}


		<div id="catogory6" >
			
			<h1>Childern of persons arriving after living abroad with child</h1>

		{{Form::label('Label6', 'a) Date returned to country ');}}

		 {{ Form :: text( 'dateOfReturned',$category->getDateOfReturned(), ['readonly']) ; }}		


		<br>		
		{{Form::label('Label7','b) Period of stay abroad');}}
		{{ Form :: text( 'PeriodOfStayAbroad',$category->getPerioadAbroadStay()." years", ['readonly']) ; }}		
			

		<br>	

		{{Form::label('Label8', 'c) Reason for stay :');}}
		@if($category->getReasonsForStay()==1)
			{{Form::text('labler1', 'On Sri lankan dutha mandala duty',array('size'=>'30x1'), ['readonly']);}}
		@elseif($category->getReasonsForStay()==2)
			{{Form::text('labelr2', 'On Sri lankan goverment duty purpose', ['readonly']);}}
        @elseif($category->getReasonsForStay()==3)
        	{{Form::text('labelr3', 'Scholarship ', ['readonly']);}}
        @elseif($category->getReasonsForStay()==4)
        	{{Form::text('labelr4', 'Personal Reason', ['readonly']);}}
        @endif

        <br>


			{{Form::submit('Verify Application')}}		
			
		</div>

	{{Form::close()}}

	{{ Form :: open(array('url' =>'school/cancelverify','method' => 'POST' ))}}
	{{Form::hidden('schoolid',$school->getSchool_id())}}
	{{Form::submit('Add to pending list')}}
	{{Form::close()}}
</body>
</html>