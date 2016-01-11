<html>
<head>
	<title>  Add New Child </title>
</head>
<body>

{{ Form :: open(array('url' =>'child/add','method' => 'POST' ))}}
        
        {{Form::label('usernameLabel', 'Username:      ');}}
        {{ Form :: text( 'usernameText',$username) ; }}     
        <br>

        {{Form::label('firstNameLabel', 'First Name :      ');}}
        {{ Form :: text( 'firstNameText','First Name') ; }}		

        <br> 

        {{Form::label('lastNameLabel', 'last Name :      ');}}
        {{ Form :: text( 'lastNameText','Last Name') ; }}

        <br> 

        {{Form::label('dobLabel', 'Date of Birth :      ');}}
        {{ Form::selectRange('number', 2000, 2015); }}
        {{ Form::selectMonth('month'); }}
        {{ Form::selectRange('number', 1, 31); }}

        <br>

        {{Form::label('genderLabel', 'Gender :      ');}}

        {{Form::label('maleLabel', '    Male');}}

        {{ Form::radio('gender', 'Male'); }}
        {{Form::label('femaleLabel', '  Female');}}

        {{ Form::radio('gender', 'Female');}}

        <br>
        {{Form::label('religionLabel', 'Religion :      ');}}
        {{ Form :: text( 'religionTest','Religion') ; }}             

        <br> 

        {{Form::submit('Save');}}
{{ Form:: close()}}

        
</body>
</html>