<html>
<head>
	<title>Verify Category 3</title>
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


		<div id="catogory3" >
		<h1> Brothers/sisters of students who are studying in school at present </h1>
		a) If applicant's child/children is/are studying in the school
		<br>



		<table border="1" cellpadding="5" cellspacing="5">
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Admission no</th>
			<th>Admission grade to the school</th>
			<th>Date of admission</th>
			<th>Donation done by current students</th>
			<th>Achievements gained for the school by brothers/sisters in the school and various types of assistance provided by the applicant for the development of the school</th>	

			</tr>
			<tr>

				<td>		 {{ Form :: text( 'firstName1','') ; }}		</td>
				<td>		 {{ Form :: text( 'lastName1','') ; }}		</td>	
				<td>		 {{ Form :: text( 'admissionNumber1','') ; }}		</td>
				<td>		 {{ Form :: text( 'gradeAdmision1','') ; }}		</td>
				<td>		 {{ Form :: text( 'dateOfAdmision1','') ; }}		</td>
				<td>		 {{ Form :: text( 'donationDetail1','') ; }}</td>
				<td> 		 {{	 Form :: text( 'eAchiement1','') ; }}</td>	
			</tr>
			<tr>

			<td>		 {{ Form :: text( 'firstName2','') ; }}		</td>
				<td>		 {{ Form :: text( 'lastName2','') ; }}		</td>	
				<td>		 {{ Form :: text( 'admissionNumber2','') ; }}		</td>
				<td>		 {{ Form :: text( 'gradeAdmision2','') ; }}		</td>
				<td>		 {{ Form :: text( 'dateOfAdmision2','') ; }}		</td>
				<td>		 {{ Form :: text( 'donationDetail2','') ; }}</td>
				<td> 		 {{	 Form :: text( 'eAchiement2','') ; }}</td>
				</tr>
			<tr>

			<td>		 {{ Form :: text( 'firstName3','') ; }}		</td>
				<td>		 {{ Form :: text( 'lastName3','') ; }}		</td>	
				<td>		 {{ Form :: text( 'admissionNumber3','') ; }}		</td>
				<td>		 {{ Form :: text( 'gradeAdmision3','') ; }}		</td>
				<td>		 {{ Form :: text( 'dateOfAdmision3','') ; }}		</td>
				<td>		 {{ Form :: text( 'donationDetail3','') ; }}</td>
				<td> 		 {{	 Form :: text( 'eAchiement3','') ; }}</td>
				</tr>


		</table>
				
		
	</div>
	{{Form::submit('Verify Application')}}
	{{Form::close()}}

	{{ Form :: open(array('url' =>'school/cancelverify','method' => 'POST' ))}}
	{{Form::hidden('schoolid',$school->getSchool_id())}}
	{{Form::submit('Add to pending list')}}
	{{Form::close()}}
</body>
</html>