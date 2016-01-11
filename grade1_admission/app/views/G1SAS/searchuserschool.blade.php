<html>
<head>
	<title> </title>
</head>

<body>
	<div>
	{{$username}}
	</div>

{{Form :: open(array('url' =>'searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school');}}
{{ Form:: close()}}



</body>
</html>