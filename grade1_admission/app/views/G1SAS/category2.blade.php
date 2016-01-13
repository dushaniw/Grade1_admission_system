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