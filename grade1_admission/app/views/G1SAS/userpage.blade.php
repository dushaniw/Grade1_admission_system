<html>
<head>
	<title> </title>
</head>

<body>
	<div>
	{{$username}}
	</div>

{{Form :: open(array('url' =>'userpage/studentadd','method' => 'POST' ))}}
        {{Form::submit('Add New Child');}}
{{ Form:: close()}}

{{Form :: open(array('url' =>'userpage','method' => 'POST' ))}}
        
{{ Form:: close()}}



</body>
</html>