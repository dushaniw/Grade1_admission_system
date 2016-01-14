<html>
<head>
	<title>category 2</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}


	{{ Form :: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form :: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{ Form :: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form :: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form :: hidden( 'medium',$application->getMedium()) ; }}

	{{	Form :: hidden( 'applicantId',$application->getApplication_id()) ; }}		
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
	<div id="catogory2" >
		<h1> Children of Past Pupils </h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'gradeOfAdmission','') ; }}		


		
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
		 {{ Form :: textArea( 'pastPupilOrganizationMembership','') ; }}		
		
		<br>
		{{ Form :: submit('addApplication')}}
	</div>

{{Form::close()}}


</body>
</html>