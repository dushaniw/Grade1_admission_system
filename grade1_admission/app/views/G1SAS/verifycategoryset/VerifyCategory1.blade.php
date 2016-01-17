<html>
<head>
	<title>Verify Category 1</title>
</head>
<body>
	{{ Form :: open(array('url' =>'school/verifyCat1','method' => 'POST' ))}}
		
		{{Form :: label( 'schoolId','School id:') ; }}
		{{Form :: text( 'schoolIdText',$school->getSchool_id()) ; }}
		{{Form :: label( 'schoolName','My School :') ; }}
		{{Form :: text( 'schoolNameText',$school->getSchool_name()) ; }}
		<br>

		{{Form::label('application_id','Application ID:')}}
		{{Form::text('application_idtext',$application_id)}}
		<br>
		

	{{Form::close()}}

</body>
</html>