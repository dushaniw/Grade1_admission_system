<html>
<head>
	<title>admin page</title>
</head>
<body>
	<div>
		{{Form::label('usernameLabel','You are loged in as  :'.$username)}}
    </div>

	{{Form :: open(array('url' =>'admin/calculate','method' => 'POST' ))}}
        {{Form::hidden('username',$username)}}
        {{Form::submit('calculate marks');}}
	{{ Form:: close()}}

</body>
</html>