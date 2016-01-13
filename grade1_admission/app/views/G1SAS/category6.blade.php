<html>
<head>
	<title>category 6</title>
</head>
<body>
	{{ Form :: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}


		{{ Form :: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form :: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{ Form :: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form :: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form :: hidden( 'medium',$application->getMedium()) ; }}

	
		<h1>Childern of persons arriving after living abroad with child</h1>

		{{Form::label('Label6', 'a) Date returned to country ');}}

		 {{ Form :: text( 'dateOfReturned','') ; }}		


		<br>		
		{{Form::label('Label7','b) Period of stay abroad');}}
		<br>
		{{Form::label('Label8', 'From ');}}
		{{ Form :: text( 'from','') ; }}		
		
		{{Form::label('Label8', 'To ');}}
		{{ Form :: text( 'to','') ; }}		

		<br>	

		{{Form::label('Label8', 'Reason for stay ');}}
		<br>


        {{Form::label('labler1', 'Sri lankan dutha mandala duty:      ');}}

        {{ Form::radio('reason', 'Sri lankan dutha mandala duty'); }}

        {{Form::label('labelr2', 'Sri lankan goverment duty purpose:      ');}}

        {{ Form::radio('reason', 'Sri lankan goverment duty purpose'); }}

        {{Form::label('labelr3', 'Scholarship :      ');}}

        {{ Form::radio('reason', 'Scholarship');}}

          {{Form::label('labelr4', 'Personal Reason :      ');}}

        {{ Form::radio('reason', 'Personal Reason');}}
        <br>

        {{Form::submit('addApplication')}}
	{{Form::close()}}
</body>
</html>