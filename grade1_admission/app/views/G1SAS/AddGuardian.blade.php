<html>
<head>
	<title>  Add New Guardian </title>
</head>
<body>


        {{Form::label('firstNameLabel', 'First Name :      ');}}
        {{ Form :: text( 'firstNameTest','First Name') ; }}		

        {{Form::label('lastNameLabel', 'last Name :      ');}}
        {{ Form :: text( 'lastNameTest','Last Name') ; }}


        {{Form::label('emailLabel', 'Email :      ');}}
        {{ Form :: text( 'emailTest','Email') ; }}

        {{Form::label('passwordLabel', 'Password :      ');}}
        {{Form::password('password');}}	

		{{Form::label('confirmPasswordLabel', 'Conform Password :      ');}}
        {{Form::password('conform_password');}}	


        {{Form::label('nicLabel', 'NIC :      ');}}
        {{ Form :: text( 'nicTest','NIC') ; }}		

        {{Form::label('telephoneLabel', 'Telephone :      ');}}
        {{ Form :: text( 'telephoneTest','Telephone') ; }}



</body>
</html>