<html>
<head>
	<title>Verify Applications</title>
</head>

<body>
	
{{Form::label('titlelabel',$school->getSchool_name())}}


{{Form::label('type1label','Applications regarding close proximity:')}}
@foreach($type1s as $type1)
	{{Form::text('text1','Type here')}}
@endforeach
{{Form::label('type2label','Applications regarding Past Pupils:')}}
{{Form::label('type3label','Applications regarding Current Student Siblings:')}}
{{Form::label('type4label','Applications regarding Educational Officers:'}}
{{Form::label('type5label','Applications regarding transferred officers:')}}
{{Form::label('type6label','Applications regarding people coming from abroad:')}}

{{Form :: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants');}}
{{ Form:: close()}}

</body>
</html>