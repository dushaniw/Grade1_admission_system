<html>
<head>
	<title>  Add New Guardian </title>
</head>
<body>

{{ Form :: open(array('url' =>'guardian/add','method' => 'POST' ))}}



        {{Form::label('firstNameLabel', 'First Name :      ');}}
        {{ Form :: text( 'firstNameTest','First Name') ; }}		

        <br> 

        {{Form::label('lastNameLabel', 'last Name :      ');}}
        {{ Form :: text( 'lastNameTest','Last Name') ; }}

        <br> 

        {{Form::label('emailLabel', 'Email :      ');}}
        {{ Form :: text( 'emailTest','Email') ; }}
        <br> 

        {{Form::label('addressLabel', 'Permanant Address :      ');}}
        {{ Form :: text( 'addressTest','Address') ; }}
        <br> 

        {{Form::label('passwordLabel', 'Password :      ');}}
        {{Form::password('password');}}	

        <br> 

	{{Form::label('confirmPasswordLabel', 'Conform Password :      ');}}
        {{Form::password('conform_password');}}	

        <br> 


        {{Form::label('nicLabel', 'NIC :      ');}}
        {{ Form :: text( 'nicTest','NIC') ; }}		

        <br> 

        {{Form::label('telephoneLabel', 'Telephone :      ');}}
        {{ Form :: text( 'telephoneTest','Telephone') ; }}

        <br> 

        

        {{Form::label('MotherLabel', 'Mother :      ');}}

        {{ Form::radio('relationshiptochild', 'Mother'); }}

        {{Form::label('FatherLabel', 'Father :      ');}}

        {{ Form::radio('relationshiptochild', 'Father'); }}

        {{Form::label('LegalGuardianLabel', 'Legal Guardian :      ');}}

        {{ Form::radio('relationshiptochild', 'Legal Guardian');}}

        <br>
        {{Form::label('religionLabel', 'Religion :      ');}}
        {{ Form :: text( 'religionTest','Religion') ; }}             

        <br> 

        {{Form::label('nationalityLabel', 'Nationality :      ');}}
        {{ Form :: text( 'nationalityTest','Nationality') ; }}

        <br> 

        {{Form::label('gramaNiladariDivisionNumberLabel', 'GramaNiladariDivisionNumber:      ');}}
        {{ Form :: text( 'gramaNiladariDivisionNumberTest','GramaNiladariDivisionNumber') ; }}
        <br> 

        {{Form::submit('addGuardian');}}
{{ Form:: close()}}

        
</body>
</html>