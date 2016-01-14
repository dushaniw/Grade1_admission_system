<html>
<head>
	<title> </title>
</head>

<body>
	<div>
	
	</div>

{{Form :: open(array('url' =>'userpage/studentadd','method' => 'POST' ))}}
        {{Form::hidden('username',$username)}}
        {{Form::submit('Add New Child');}}
{{ Form:: close()}}

	
{{Form :: open(array('url' =>'selectSchool','method' => 'GET' ))}}
		{{Form::hidden('username',$username)}}
        {{Form::submit('Add Application');}}
{{ Form:: close()}}



{{Form :: open(array('url' =>'userpage/searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school');}}
{{ Form:: close()}}



</body>
</html>