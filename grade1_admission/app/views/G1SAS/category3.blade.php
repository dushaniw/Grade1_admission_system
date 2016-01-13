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