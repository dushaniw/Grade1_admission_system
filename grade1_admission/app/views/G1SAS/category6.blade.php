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
	{{	Form :: hidden( 'applicantId',$application->getApplicant_id()) ; }}		
			{{Form::hidden('schoolId1', $schools[0]);}}
		{{Form::hidden('schoolId2', $schools[1]);}}
		{{Form::hidden('schoolId3', $schools[2]);}}
		{{Form::hidden('schoolId4', $schools[3]);}}
		{{Form::hidden('schoolId5', $schools[4]);}}
		{{Form::hidden('schoolId6', $schools[5]);}}
		{{Form::hidden('schoolId7', $schools[6]);}}
		{{Form::hidden('schoolId8', $schools[7]);}}
		{{Form::hidden('schoolId9', $schools[8]);}}
		{{Form::hidden('schoolId10', $schools[9]);}}
		
		{{Form::hidden('division1', $dArray[0]);}}
		{{Form::hidden('division2', $dArray[1]);}}
		{{Form::hidden('division3', $dArray[2]);}}
		{{Form::hidden('division4', $dArray[3]);}}
		{{Form::hidden('division5', $dArray[4]);}}
		{{Form::hidden('division6', $dArray[5]);}}

		{{Form::hidden('year1', $yArray[0]);}}
		{{Form::hidden('year2', $yArray[1]);}}
		{{Form::hidden('year3', $yArray[2]);}}
		{{Form::hidden('year4', $yArray[3]);}}
		{{Form::hidden('year5', $yArray[4]);}}
		{{Form::hidden('year6', $yArray[5]);}}

		{{Form::hidden('guardianNic', $guardianNic)}}
	
		<h1>Childern of persons arriving after living abroad with child</h1>

		{{Form::label('Label6', 'a) Date returned to country ');}}

		 {{ Form :: text( 'dateOfReturned','') ; }}		


		<br>		
		{{Form::label('Label7','b) Period of stay abroad');}}
		{{ Form :: text( 'PeriodOfStayAbroad','') ; }}		
			

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