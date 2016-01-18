<html>
<head>
	<title>category 3</title>
</head>
<body>
	{{ Form :: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}
		{{ Form :: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form :: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{ Form :: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form :: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form :: hidden( 'medium',$application->getMedium()) ; }}
	
	{{	Form :: hidden( 'applicantId',$application->getApplicant_id()) ; }}		
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

		{{Form::hidden('guardianNic', $guardianNic)}}
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
	{{Form :: submit('addApplication')}}

{{Form::close()}}


</body>
</html>