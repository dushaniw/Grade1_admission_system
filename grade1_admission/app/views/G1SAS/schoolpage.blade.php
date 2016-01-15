<html>
<head>
	<title> School Log In</title>
</head>

<body>
	<div>
	
	</div>

{{Form::label('titlelabel',$labelText)}}

{{Form :: open(array('url' =>'school/addpastpupilmarkingcriteria','method' => 'POST' ))}}
        
        {{Form::submit('Add Past Pupil Marking Criteria');}}
{{ Form:: close()}}


{{Form :: open(array('url' =>'userpage/searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school');}}
{{ Form:: close()}}

{{Form :: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}

</body>
</html>