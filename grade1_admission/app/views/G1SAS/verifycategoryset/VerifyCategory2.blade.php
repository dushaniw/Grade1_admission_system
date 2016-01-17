<html>
<head>
	<title>Verify Category 2</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifycat','method' => 'POST' ))}}
		
		{{Form :: label( 'schoolid','School id:') ; }}
		{{Form :: text( 'schoolIdText',$school->getSchool_id()) ; }}
		{{Form :: label( 'schoolName','My School :') ; }}
		{{Form :: text( 'schoolNameText',$school->getSchool_name()) ; }}
		<br>

		{{Form::label('application_id','Application ID:')}}
		{{Form::text('application_idtext',$application_id)}}
		<br>

		<br>
		{{Form :: label( 'applicant_name','Student Applicant Name:') ; }}
		{{Form :: text( 'applicant_nametext',$applicant->getFirstname()." ".$applicant->getLastname()); }}
		<br>
		{{Form :: label( 'guardian_name','Guardian Name:') ; }}
		
		<br>
		{{Form :: label( 'gender','Gender:') ; }}
		{{Form :: text( 'gendertext',$applicant->getGender()); }}
		<br>
		{{Form :: label( 'religion','Religion:') ; }}
		{{Form :: text( 'religiontext',$applicant->getReligion()); }}
		<br>
		{{Form :: label( 'dob','Date of birth:') ; }}
		{{Form :: text( 'dobtext',$applicant->getDateOfBirth()); }}
		<br>

		{{Form :: label( 'orderOfPreference','This school is applied as :') ; }}
		{{Form :: text( 'orderOfPreferencetext',$application->getOrderOfPreference()) ; }}
		<br>
		{{Form :: label( 'typeOfApplication','Applied under category:') ; }}
		@if($application->getType()==1)
			{{Form :: text( 'typeOfApplicationtext','Resident in closed proximity') ; }}
		@elseif($application->getType()==2)
			{{Form :: text( 'typeOfApplicationtext','Past Pupil of the School') ; }}
		@elseif($application->getType()==3)
			{{Form :: text( 'typeOfApplicationtext','A sibling is learing currenly in school') ; }}
		@elseif($application->getType()==4)
			{{Form :: text( 'typeOfApplicationtext','Educational officer') ; }}
		@elseif($application->getType()==5)
			{{Form :: text( 'typeOfApplicationtext','An officer on transfer') ; }}
		@elseif($application->getType()==6)
			{{Form :: text( 'typeOfApplicationtext','A person coming from abroad') ; }}
		@endif

		<br>
		{{Form :: label( 'distance','Distance to school:') ; }} 
		{{Form :: text( 'distancetext',$application->getDistance()) ; }} 
		<br>
		{{Form :: label( 'medium','Learning Medium requested:') ; }}
		{{Form :: text( 'mediumtext',$application->getMedium()) ; }}


		<div id="catogory2" >
		<h1> Children of Past Pupils </h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'gradeOfAdmission',$category->getGradeOfAdmission()) ; }}		


		
		{{Form::label('Label7','toGrade');}}

		 {{ Form :: text( 'gradeOfLeaving','') ; }}		

		<br>
		{{Form::label('Label8', 'Educational achievements gained during schooling period');}}
		<br>	
		 {{ Form :: textArea( 'eAchievementDetail','') ; }}		


		<br>
		{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period');}}
		<br>
		 {{ Form :: textArea( 'cAchievementDetail','') ; }}		

		
		<br>
		{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school');}}
		<br>
		 @if($category->getPastPupilOrganizationMembership())
		 {{ Form :: textArea( 'pastPupilOrganizationMembership','Yes') ; }}		
		@else
		 {{ Form :: textArea( 'pastPupilOrganizationMembership','No') ; }}
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