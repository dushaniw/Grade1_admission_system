<html>
<head>
	<title>Verify Category 1</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifycat1','method' => 'POST' ))}}
		
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


		<div id="catogory1" >
			
			
			{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
			{{ Form :: text( 'noOfYearsInElectrocalRegister',$category->getNoOfYearsInElectrocalRegister()) ; }}		

			<br>
			{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}
			{{ Form :: text( 'noOfYearsSpouseInElectrocalRegister',$category->getNoOfYearsSpouseInElectrocalRegister()) ; }}		


			<br>
			This is applicable for a period of recent 05 years, prior to the year the application is submitted
			<br>

			b)Ownership of place of residence
			<br>
			{{Form::label('Label3', 'Type of Title deed:');}}
			@if($category->getTypeOfTitleDeed()==1)
			{{ Form :: text( 'typeOfTitleDeed','In the name of applicant/spouse or applicants parents') ; }}		
			@elseif($category->getTypeOfTitleDeed()==2)
			{{ Form :: text( 'typeOfTitleDeed','Registered Lease Bond') ; }}		
			@elseif($category->getTypeOfTitleDeed()==3)
			{{ Form :: text( 'typeOfTitleDeed','Government official Quarters Documents') ; }}		
			@elseif($category->getTypeOfTitleDeed()==4)
			{{ Form :: text( 'typeOfTitleDeed','un-registered Lease Bond') ; }}		
			@endif

			<br>
			{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate');}}

			{{ Form :: text( 'noOfAditionalDocumentForResident',$category->getNoOfAditionalDocumentForResident()) ; }}		

			
			<br>
			{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for');}}

			{{ Form :: text( 'closeSchoolCount',$category->getCloseSchoolCount()) ; }}
			<br>

			{{Form::submit('Verify Application')}}		
			
		</div>

	{{Form::close()}}

</body>
</html>