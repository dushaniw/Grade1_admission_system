<html>
<head>
	<title>Verify Applications</title>
</head>

<body>
	
{{Form::label('titlelabel',$school->getSchool_id()." ".$school->getSchool_name())}}
<br><br>


	
<br>

	{{Form:: open(array('url' =>'school/verifytype1','method' => 'POST' ))}}
		{{Form::label('type1label','Applications regarding close proximity:')}}
		<br>
		{{Form::select('type1',$application_set_set[0])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

	{{Form:: open(array('url' =>'school/verifytype2','method' => 'POST' ))}}
		{{Form::label('type2label','Applications regarding past pupils:')}}
		<br>
		{{Form::select('type2',$application_set_set[1])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

	{{Form:: open(array('url' =>'school/verifytype3','method' => 'POST' ))}}
		{{Form::label('type3label','Applications regarding current students as siblings:')}}
		<br>
		{{Form::select('type3',$application_set_set[2])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

	{{Form:: open(array('url' =>'school/verifytype4','method' => 'POST' ))}}
		{{Form::label('type4label','Applications regarding Educational Officers:')}}
		<br>
		{{Form::select('type4',$application_set_set[3])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

	{{Form:: open(array('url' =>'school/verifytype5','method' => 'POST' ))}}
		{{Form::label('type5label','Applications regarding transferred officers:')}}
		<br>
		{{Form::select('type5',$application_set_set[4])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

	{{Form:: open(array('url' =>'school/verifytype6','method' => 'POST' ))}}
		{{Form::label('type6label','Applications regarding people coming from abroad:')}}
		<br>
		{{Form::select('type6',$application_set_set[5])}}	
		{{Form::submit('Click to verify');}}
	{{Form:: close()}}
	<br>

<br>


{{Form :: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}

</body>
</html>