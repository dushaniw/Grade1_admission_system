<html>
<head>
	<title>Verify Category 3</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifycat','method' => 'POST' ))}}
		
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
		{{Form :: text( 'distancetext',$application->getDistance(), ['readonly']) ; }} 
		<br>
		{{Form :: label( 'medium','Learning Medium requested:') ; }}
		{{Form :: text( 'mediumtext',$application->getMedium(), ['readonly']) ; }}


		<div id="catogory3" >
		<h1> Brothers/sisters of students who are studying in school at present </h1>
		a) If applicant's child/children is/are studying in the school
		<br>
		@foreach($siblings as $sibling)
				{{ Form :: label( 'admission_number_label','Admission Number:') ; }}
				{{ Form :: text( 'admission_number',$sibling->getAdmissionNumber(), ['readonly']) ; }}
				<br>

				{{ Form :: label( 'sibling_name_label','Sibling Name:') ; }}
				{{ Form :: text( 'sibling_ame',$sibling->getCur_pupil()->getFirstName()." ".$sibling->getCur_pupil()->getLastName(), ['readonly']) ; }}	
				<br>

				{{ Form :: label( 'gradeAdmision','Grade of Admission:') ; }}
				{{ Form :: text( 'gradeAdmision',$sibling->getCur_pupil()->getGradeOfAdmission(), ['readonly']) ; }}			<br>
				{{ Form :: label( 'dateOfAdmision','Date of Admission:') ; }}	
				{{ Form :: text( 'dateOfAdmision',$sibling->getCur_pupil()->getDateOfAdmission(), ['readonly']) ; }}
				<br>

				{{ Form :: label( 'ach_label','Educational Achivements:') ; }}
				<br>
				 @foreach($sibling->getCur_pupil()->getCur_pup_ach_set() as $ach)		
				 {{	 Form :: text( 'achievement',$ach->getAchievementDetail(), ['readonly']) ; }}
				 <br>
				@endforeach 
				<br>
				{{ Form :: label( 'don_label','Donations to school:') ; }}
				<br>
				@foreach($sibling->getCur_pupil()->getCur_pup_donation_set() as $don)		 
				 {{	 Form :: text( 'donation',$don->getDonationDetail(), ['readonly']) ; }}
				 <br>
				@endforeach 
				 
		@endforeach	
		</div>
	{{Form::submit('Verify Application')}}
	{{Form::close()}}

	{{ Form :: open(array('url' =>'school/cancelverify','method' => 'POST' ))}}
	{{Form::hidden('schoolid',$school->getSchool_id())}}
	{{Form::submit('Add to pending list')}}
	{{Form::close()}}
</body>
</html>