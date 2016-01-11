<html>
<head>
	<title> </title>
</head>

<body>
	<div>
	{{Form :: open(array('url' =>'userpage','method' => 'POST' ))}}
		{{Form::label('usernameLabel','You are loged in as  :'.$username)}}
       
	{{ Form:: close()}}
	</div>

{{Form :: open(array('url' =>'userpage/studentadd','method' => 'POST' ))}}
        {{Form::submit('Add New Child');}}
{{ Form:: close()}}

{{Form :: open(array('url' =>'userpage/searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school');}}
{{ Form:: close()}}



</body>
</html>