<html>
<head>
	<title>category 2</title>
</head>
<body>
{{ Form :: open(array('url' =>'edit/editcategory2','method' => 'POST' ))}}
	{{Form:: hidden('schoolId',$category2->getSchoolId()) }}
	{{Form:: hidden('nic',$category2->getNic() )}}	
	{{Form:: hidden('eAchievementId',$eAch->getAchievementID()) }}	
	{{Form:: hidden('cAchievementId',$cAch->getAchievementID()) }}	
	
	<div id="catogory2" >
		<h1> Children of Past Pupils  Edit</h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'gradeOfAdmission',$category2->getGradeOfAdmission()) ; }}		
	
		{{Form::label('Label7','toGrade');}}

		 {{ Form :: text( 'gradeOfLeaving',$category2->getGradeOfLeaving()) ; }}		

		<br>
		{{Form::label('Label8', 'Educational achievements gained during schooling period');}}
		<br>	
		 {{ Form :: textArea( 'eAchievementDetail',$eAch->getAchievementDetail()) ; }}		


		<br>
		{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period');}}
		<br>
		 {{ Form :: textArea( 'cAchievementDetail',$cAch->getAchievementDetail()) ; }}		

		
		<br>
		{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school');}}
		<br>
		 {{ Form :: textArea( 'pastPupilOrganizationMembership',$category2->getPastPupilOrganizationMembership()) ; }}		
		
		<br>
		{{ Form :: submit('edit category2 Detial')}}
	</div>

{{Form::close()}}


</body>
</html>