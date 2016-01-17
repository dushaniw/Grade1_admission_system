<html>
<head>
	<title>Verify Category 1</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifyCat1','method' => 'POST' ))}}
		
		{{Form::label('application_id',$application->getApplication_id())}}
		{{Form :: label( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{Form :: label( 'typeOfApplication',$application->getType()) ; }}
		{{Form :: label( 'schoolId',$application->getSchool_id()) ; }}
		{{Form :: label( 'distance',$application->getDistance()) ; }} 
		{{Form :: label( 'medium',$application->getMedium()) ; }}

		{{Form :: hidden( 'applicantId',$application->getApplicant_id());}}
		{{Form::hidden('schoolId1', $schools[0]);}}
		{{Form::hidden('schoolId2', $schools[1]);}}
		{{Form::hidden('schoolId3', $schools[2]);}}
		{{Form::hidden('schoolId4', $schools[3]);}}
		{{Form::hidden('schoolId5', $schools[4]);}}
		{{Form::hidden('schoolId6', $schools[5]);}}
		{{Form::hidden('schoolId7', $schools[6]);}}
		{{Form::hidden('schoolId8', $schools[7]);}}
		{{Form::hidden('schoolId9', $schools[8]);}}
		{{Form::hidden('schoolId10', $schools[9]);}}
		
		{{Form::hidden('division1', $dArray[0]);}}
		{{Form::hidden('division2', $dArray[1]);}}
		{{Form::hidden('division3', $dArray[2]);}}
		{{Form::hidden('division4', $dArray[3]);}}
		{{Form::hidden('division5', $dArray[4]);}}
		{{Form::hidden('division6', $dArray[5]);}}

		{{Form::hidden('year1', $yArray[0]);}}
		{{Form::hidden('year2', $yArray[1]);}}
		{{Form::hidden('year3', $yArray[2]);}}
		{{Form::hidden('year4', $yArray[3]);}}
		{{Form::hidden('year5', $yArray[4]);}}
		{{Form::hidden('year6', $yArray[5]);}}
		{{Form::hidden('guardianNic', $guardianNic);}}

		<div id="catogory1" >
			
			<h1> Children of residents in close proximity of school </h1>
			a)
			<br>
			
			{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
			{{ Form :: text( 'noOfYearsInElectrocalRegister','') ; }}		

			<br>
			{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}
			{{ Form :: text( 'noOfYearsSpouseInElectrocalRegister','') ; }}		


			<br>
			This is applicable for a period of recent 05 years, prior to the year the application is submitted
			<br>

			b)Ownership of place of residence
			<br>
			{{Form::label('Label3', 'Title deed - in the name of applicant/spouse or applicants parents / Registered Lease Bond/ Government official Quarters Documents / un-registered Lease Bond/Any other legal documents to prove ownership');}}

			{{ Form :: text( 'typeOfTitleDeed','') ; }}		


			<br>
			{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate');}}

			{{ Form :: text( 'noOfAditionalDocumentForResident','') ; }}		

			
			<br>
			{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for');}}

			{{ Form :: text( 'closeSchoolCount','') ; }}
			<br>

			{{Form::submit('addApplication')}}		
			
		</div>

	{{Form::close()}}

</body>
</html>