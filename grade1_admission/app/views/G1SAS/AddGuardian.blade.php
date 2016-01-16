<html>
<head>
	<title>  Add New Guardian </title>
</head>
<body>

{{ Form :: open(array('url' =>'guardian/add','method' => 'POST' ))}}



        {{Form::label('firstNameLabel', 'First Name :      ');}}
        {{ Form :: text( 'firstNameText','First Name') ; }}		

        <br> 

        {{Form::label('lastNameLabel', 'last Name :      ');}}
        {{ Form :: text( 'lastNameText','Last Name') ; }}

        <br> 

        {{Form::label('emailLabel', 'Email :      ');}}
        {{ Form :: text( 'emailText','Email') ; }}
        <br> 

        {{Form::label('addressLabel', 'Permanant Address :      ');}}
        {{ Form :: text( 'addressText','Address') ; }}
        <br> 

        {{Form::label('passwordLabel', 'Password :      ');}}
        {{Form::password('password');}}	

        <br> 

	{{Form::label('confirmPasswordLabel', 'Conform Password :      ');}}
        {{Form::password('confirm_password');}}	

        <br> 


        {{Form::label('nicLabel', 'NIC :      ');}}
        {{ Form :: text( 'nicText','NIC') ; }}		

        <br> 

        {{Form::label('telephoneLabel', 'Telephone :      ');}}
        {{ Form :: text( 'telephoneText','Telephone') ; }}

        <br> 

        

        {{Form::label('MotherLabel', 'Mother :      ');}}

        {{ Form::radio('relationshiptochild', 'Mother'); }}

        {{Form::label('FatherLabel', 'Father :      ');}}

        {{ Form::radio('relationshiptochild', 'Father'); }}

        {{Form::label('LegalGuardianLabel', 'Legal Guardian :      ');}}

        {{ Form::radio('relationshiptochild', 'Legal Guardian');}}

        <br>
        {{Form::label('religionLabel', 'Religion :      ');}}
        {{ Form :: text( 'religionText','Religion') ; }}             

        <br> 

        {{Form::label('nationalityLabel', 'Nationality :      ');}}
        {{ Form :: text( 'nationalityText','Nationality') ; }}

        <br> 

        {{Form::label('gramaNiladariDivisionNumberLabel', 'GramaNiladariDivisionNumber:      ');}}
        {{ Form :: select( 'gramaNiladariDivisionNumberText',$divisions) ; }}
        <br> 

        {{Form::submit('Sign Up');}}
{{ Form:: close()}}

        
</body>
</html>