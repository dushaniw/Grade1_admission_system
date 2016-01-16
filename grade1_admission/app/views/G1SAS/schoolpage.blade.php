<html>
<head>
	<title> School Log In</title>
</head>

<body>
	<div>
	
	</div>

{{Form::label('titlelabel',$school->getSchool_name()." logged in")}}
<br>
{{Form::label('noticelabel',$notice)}}

<br>
{{Form :: open(array('url' =>'school/addpastpupilmarkingcriteria','method' => 'POST' ))}}       
        {{Form::submit('Add Past Pupil Marking Criteria');}}
{{ Form:: close()}}


{{Form :: open(array('url' =>'userpage/searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school');}}
{{ Form:: close()}}

{{Form :: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}

{{Form :: open(array('url' =>'school/edit','method' => 'POST' ))}}
		{{Form::label('schoolidlabel','School ID   :')}}
		{{Form::text('schoolidtext',$school->getSchool_id(), ['readonly'])}}
		<br>
		{{Form::label('schoolnamelabel','School     :')}}
		{{Form::text('schoolnametext',$school->getSchool_name(), ['readonly'])}}
		<br>
		{{Form::label('categorylabel','Category    :')}}
		{{Form::text('categorytext',$school->getCategory(), ['readonly'])}}
		<br>
		{{Form::label('capacitylabel','No of Classes Available:')}}
		{{Form::text('capacitytext',$school->getNo_of_classes(), ['readonly'])}}
		<br>
		{{Form::label('contactlabel','Contact Number:')}}
		{{Form::text('contacttext',$school->getContact_no(), ['readonly'])}}
		<br>
		{{Form::label('emaillabel','Email    :')}}
		{{Form::text('emailtext',$school->getEmail(), ['readonly'])}}
		<br>
        {{Form::submit('Edit school details');}}
{{ Form:: close()}}


</body>
</html>