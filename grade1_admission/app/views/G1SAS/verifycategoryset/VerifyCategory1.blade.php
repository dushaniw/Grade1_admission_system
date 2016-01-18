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


		<div id="catogory1" >
			
			
			{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
			{{ Form :: text( 'noOfYearsInElectrocalRegister',$category->getNoOfYearsInElectrocalRegister(), ['readonly']) ; }}		

			<br>
			{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}
			{{ Form :: text( 'noOfYearsSpouseInElectrocalRegister',$category->getNoOfYearsSpouseInElectrocalRegister(), ['readonly']) ; }}		


			<br>
			This is applicable for a period of recent 05 years, prior to the year the application is submitted
			<br>

			b)Ownership of place of residence
			<br>
			{{Form::label('Label3', 'Type of Title deed:');}}
			@if($category->getTypeOfTitleDeed()==1)
			{{ Form :: text( 'typeOfTitleDeed','In the name of applicant/spouse or applicants parents', ['readonly']) ; }}		
			@elseif($category->getTypeOfTitleDeed()==2)
			{{ Form :: text( 'typeOfTitleDeed','Registered Lease Bond', ['readonly']) ; }}		
			@elseif($category->getTypeOfTitleDeed()==3)
			{{ Form :: text( 'typeOfTitleDeed','Government official Quarters Documents', ['readonly']) ; }}		
			@elseif($category->getTypeOfTitleDeed()==4)
			{{ Form :: text( 'typeOfTitleDeed','un-registered Lease Bond', ['readonly']) ; }}		
			@endif

			<br>
			{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate');}}

			{{ Form :: text( 'noOfAditionalDocumentForResident',$category->getNoOfAditionalDocumentForResident(), ['readonly']) ; }}		

			
			<br>
			{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for');}}

			{{ Form :: text( 'closeSchoolCount',$category->getCloseSchoolCount(), ['readonly']) ; }}
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