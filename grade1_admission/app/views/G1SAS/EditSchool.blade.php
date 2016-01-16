<html>
<head>
	<title> Edit School </title>
</head>

<body>
	<div>
	
	</div>

{{Form::label('titlelabel',$school->getSchool_name()." logged in")}}

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

{{Form :: open(array('url' =>'school/save','method' => 'POST' ))}}
		{{Form::label('schoolidlabel','School ID   :')}}
		{{Form::text('schoolidtext',$school->getSchool_id(), ['readonly'])}}
		<br>
		{{Form::label('schoolnamelabel','School     :')}}
		{{Form::text('schoolnametext',$school->getSchool_name())}}
		<br>
		{{Form::label('categorylabel','Category    :')}}
		{{Form::text('categorytext',$school->getCategory())}}
		<br>
		{{Form::label('capacitylabel','No of Classes Available:')}}
		{{Form::text('capacitytext',$school->getNo_of_classes())}}
		<br>
		{{Form::label('contactlabel','Contact Number:')}}
		{{Form::text('contacttext',$school->getContact_no())}}
		<br>
        {{Form::submit('Save changes');}}
{{ Form:: close()}}


</body>
</html>