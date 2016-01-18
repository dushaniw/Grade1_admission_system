<html>
<head>
	<title>Verify Category 4</title>
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


		<div id="catogory5" >
		<h1> Children of officers transfferd on exigencies of service </h1>
		
		<br>
		{{Form::label('Label41', 'a) Date of transfer received lastly');}}

		 {{ Form :: text( 'dateOfTransferReceived',$category->getDateOfTransferReceived(), ['readonly']) ; }}		


		<br>
		{{Form::label('Label42','Name & address of work place before receiving the transfer');}}
		<br>
		 {{ Form :: text( 'beforeWorkedPlace',$category->getBeforeWorkedPlace(), ['readonly']) ; }}		
		<br>

		{{Form::label('Label43', 'Name & address of work place after receiving the transfer');}}
		<br>
		{{ Form :: text( 'afterWorkedPlace',$category->getAfterWorkedPlace(), ['readonly']) ; }}		
		<br>

		{{Form::label('Label44','c) Distance between the earlier place of work and place arrived on transfer (in km)');}}
		{{ Form :: text( 'distanceOfTransfer',$category->getDistanceOfTransfer()." km", ['readonly']) ; }}		

		<br>

		{{Form::label('Label46','e) Period of service as a State/Corporation/Statutory Bank/State Bank employee');}}		
		 {{ Form :: text( 'servicePeriod',$category->getServicePeriod(), ['readonly']) ; }}
		 <br>

		Un-utilized leaves
			{{ Form :: label( 'year1RemLeave','Year 1 :') ; }}
			{{ Form :: text( 'year1RemLeaveText',$category->getYear1RemLeave()." days", ['readonly']) ; }}
			<br>	
			{{ Form :: label( 'year2RemLeave','Year 2 :') ; }}	
			{{ Form :: text( 'year2RemLeaveText',$category->getYear2RemLeave()." days", ['readonly']) ; }}
			<br>	
			{{ Form :: label( 'year3RemLeave','Year 3 :') ; }}		
			{{ Form :: text( 'year3RemLeaveText',$category->getYear3RemLeave()." days", ['readonly']) ; }}
			<br>	
			{{ Form :: label( 'year4RemLeave','Year 4 :') ; }}			
			{{ Form :: text( 'year4RemLeaveText',$category->getYear4RemLeave()." days", ['readonly']) ; }}
			<br>


	</div>
	{{Form::submit('Verify Application')}}
	{{Form::close()}}

	{{ Form :: open(array('url' =>'school/cancelverify','method' => 'POST' ))}}
	{{Form::hidden('schoolid',$school->getSchool_id())}}
	{{Form::submit('Add to pending list')}}
	{{Form::close()}}
</body>
</html>