<html>
<head>
	<title>	 login Form</title>
</head>

<body>

{{ Form :: open(array('url' =>'login','method' => 'POST' ))}}

	
        {{Form::label('userNameLabel', 'User Name :      ');}}
        {{ Form :: text( 'userNameTest','User Name') ; }}


        <br>
        {{Form::label('passwordLabel', 'Password :      ');}}
        {{Form::password('password');}}	

        <br>
        {{Form::submit('Login');}}

        	

{{ Form:: close()}}



{{ HTML::link('http://localhost/guardian', 'AddNewGuardian')}}

</body>
</html>