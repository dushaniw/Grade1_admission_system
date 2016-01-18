<html>
<head>
	<title>Verify Category 2</title>
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
		{{Form :: label( 'guardian_name','Guardian Name:') ; }}
		{{Form :: text( 'guardian_nametext',$guardian->getFirstName()." ".$guardian->getLastName(), ['readonly']); }}
		<br>
		{{Form :: label( 'guardian_nic','Guardian NIC:') ; }}
		{{Form :: text( 'guardian_nictext',$guardian->getNic(), ['readonly']); }}
		<br>
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


		<div id="catogory2" >
		<h1> Children of Past Pupils </h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'gradeOfAdmission',$category->getGradeOfAdmission(), ['readonly']) ; }}		


		
		{{Form::label('Label7','to Grade :');}}

		 {{ Form :: text( 'gradeOfLeaving',$category->getGradeOfLeaving(), ['readonly']) ; }}		

		<br>
		{{Form::label('Label8', 'Educational achievements gained during schooling period');}}
		<br>	
		@foreach($ach_set as $ach)
		 {{ Form :: text( 'eAchievementDetail',$ach->getType()." -".$ach->getAchievementDetail(), ['readonly']) ; }}	
		 <br>	
		@endforeach

		<br>
		{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period');}}
		<br>
		 <br>	
		@foreach($con_set as $con)
		 {{ Form :: text( 'coDetail',$con->getContributionDetail(), ['readonly']) ; }}	
		 <br>	
		@endforeach	

		
		<br>
		{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school');}}
		<br>
		 @if($category->getPastPupilOrganizationMembership())
		 {{ Form :: text( 'pastPupilOrganizationMembership','Yes', ['readonly']) ; }}		
		@else
		 {{ Form :: text( 'pastPupilOrganizationMembership','No', ['readonly']) ; }}
		@endif
			
		
		<br>
		{{ Form :: submit('Verify Application')}}
	</div>

	{{Form::close()}}

	{{ Form :: open(array('url' =>'school/cancelverify','method' => 'POST' ))}}
	{{Form::hidden('schoolid',$school->getSchool_id())}}
	{{Form::submit('Add to pending list')}}
	{{Form::close()}}
</body>
</html>