<html>
<head>
	<title>category 5</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}

	{{ Form :: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form :: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{ Form :: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form :: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form :: hidden( 'medium',$application->getMedium()) ; }}
	{{	Form :: hidden( 'applicantId',$application->getApplication_id()) ; }}		
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
	
	<div id="catogory5" >
		<h1> Children of officers transfferd on exigencies of service </h1>
		
		<br>
		{{Form::label('Label41', 'a) Date of transfer received lastly');}}

		 {{ Form :: text( 'dateOfTransferReceived','') ; }}		


		<br>
		{{Form::label('Label42','Name & address of work place before receiving the transfer');}}
		<br>
		 {{ Form :: textArea( 'beforeWorkedPlace','') ; }}		
		<br>

		{{Form::label('Label43', 'Name & address of work place after receiving the transfer');}}
		<br>
		{{ Form :: textArea( 'afterWorkedPlace','') ; }}		
		<br>

		{{Form::label('Label44','c) Distance between the earlier place of work and place arrived on transfer (in km)');}}
		{{ Form :: text( 'distanceOfTransfer','') ; }}		

		<br>

		{{Form::label('Label46','e) Period of service as a State/Corporation/Statutory Bank/State Bank employee');}}		
		 {{ Form :: text( 'servicePeriod','') ; }}
		 <br>



		<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<th>2015</th>
				<th>2014</th>
				<th>2013</th>
				<th>2012</th>
			</tr>
			
			<tr>

				<td>		 {{ Form :: text( 'year1RemLeave','') ; }}		</td>
				<td>		 {{ Form :: text( 'year2RemLeave','') ; }}		</td>
				<td>		 {{ Form :: text( 'year3RemLeave','') ; }}		</td>	
				<td>		 {{ Form :: text( 'year4RemLeave','') ; }}		</td>
			
			</tr>
			
		</table>


	</div>


	{{Form::submit('addApplication')}}

	


{{Form::close()}}


	
</body>
</html>