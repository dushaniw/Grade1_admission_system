<html>
<head>
	<title>Add Past Pupil Marking Criteria</title>
</head>
<body>
	{{Form :: open(array('url' =>'school/saveppmarkingcriteria','method' => 'POST' ))}}
		{{Form::label('schoolidlabel','School ID   :')}}
		{{Form::text('schoolidtext',$school->getSchool_id(), ['readonly'])}}
		{{Form::label('schoolnamelabel','School     :')}}
		{{Form::text('schoolnametext',$school->getSchool_name(), ['readonly'])}}
		<br>

		{{Form::label('yearlabel','Select year of admissions    :')}}
		{{Form::selectRange('year', 2010, 2020);}}
		<br><br>

		{{Form::label('eduAchlabel','Marks recommended for Educational Achievements during school(Sum must be 25):')}}
		<br><br>
		{{Form::label('intEduAchlabel','Marks for International Educational Achievements:')}}
		{{Form::selectRange('intEduAchMarks', 0, 25);}}
		<br>
		{{Form::label('natEduAchlabel','Marks for National Educational Achievements:')}}
		{{Form::selectRange('natEduAchMarks', 0, 25);}}
		<br>
		{{Form::label('proEduAchlabel','Marks for Provincial Educational Achievements:')}}
		{{Form::selectRange('proEduAchMarks', 0, 25);}}
		<br>
		{{Form::label('disEduAchlabel','Marks for District level Educational Achievements:')}}
		{{Form::selectRange('disEduAchMarks', 0, 25);}}
		<br>
		{{Form::label('zonEduAchlabel','Marks for Zonal Educational Achievements:')}}
		{{Form::selectRange('zonEduAchMarks', 0, 25);}}
		<br>
		<br>
		{{Form::label('extAchlabel','Marks recommended for ExtraCurrricular Achievements during school(Sum must be 25):')}}
		<br><br>
		{{Form::label('intExtAchlabel','Marks for International ExtraCurrricular Achievements:')}}
		{{Form::selectRange('intExtAchMarks', 0, 25);}}
		<br>
		{{Form::label('natExtAchlabel','Marks for National ExtraCurrricular Achievements:')}}
		{{Form::selectRange('natExtAchMarks', 0, 25);}}
		<br>
		{{Form::label('proExtAchlabel','Marks for Provincial ExtraCurrricular Achievements:')}}
		{{Form::selectRange('proExtAchMarks', 0, 25);}}
		<br>
		{{Form::label('disExtAchlabel','Marks for District level ExtraCurrricular Achievements:')}}
		{{Form::selectRange('disExtAchMarks', 0, 25);}}
		<br>
		{{Form::label('zonExtAchlabel','Marks for Zonal ExtraCurrricular Achievements:')}}
		{{Form::selectRange('zonExtAchMarks', 0, 25);}}
		<br>
		<br>
		{{Form::label('pastPupOrglabel','Marks for being a Past Pupil Organization Member:')}}
		{{Form::selectRange('pastPupOrgMarks', 0, 24);}}
		<br>
		{{Form::label('contributionlabel','Marks for donations to school development:')}}
		{{Form::selectRange('contributionMarks', 0, 6);}}
		<br>
		{{Form::label('otherlabel','Marks for other related:')}}
		{{Form::selectRange('otherMarks', 0, 24);}}
		<br>
	 	{{Form::submit('Save criteria');}}
	{{ Form:: close()}}

</body>
</html>
