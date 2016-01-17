<html>
<head>
	<title>Verify Applications</title>
</head>

<body>
	
{{Form::label('titlelabel',$school->getSchool_id()." ".$school->getSchool_name())}}
<br><br>

{{Form:: open(array('url' =>'school/verifytype1','method' => 'POST' ))}}
	{{Form::label('type1label','Applications regarding close proximity:')}}
	<br>
	@foreach($application_set_set[0] as $type1)
		
		{{Form::url('type1',$type1->getApplication_id())}}
		<br>
	@endforeach
	<br>
{{Form:: close()}}

{{Form::label('type2label','Applications regarding Past Pupils:')}}
<br>
@foreach($application_set_set[1] as $type1)
	{{Form::url('type2',$type1->getApplication_id())}}
	<br>
@endforeach
<br>

{{Form::label('type3label','Applications regarding Current Student Siblings:')}}
<br>
@foreach($application_set_set[2] as $type1)
	{{Form::url('type3',$type1->getApplication_id())}}
	<br>
@endforeach
<br>

{{Form::label('type4label','Applications regarding Educational Officers:')}}
<br>
@foreach($application_set_set[3] as $type1)
	{{Form::url('type4',$type1->getApplication_id())}}
	<br>
@endforeach
<br>

{{Form::label('type5label','Applications regarding transferred officers:')}}
<br>
@foreach($application_set_set[4] as $type1)
	{{Form::url('type5',$type1->getApplication_id())}}
	<br>
@endforeach
<br>

{{Form::label('type6label','Applications regarding people coming from abroad:')}}
<br>
@foreach($application_set_set[5] as $type1)
	{{Form::url('type6',$type1->getApplication_id())}}
	<br>
@endforeach
<br>

{{Form :: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}

</body>
</html>