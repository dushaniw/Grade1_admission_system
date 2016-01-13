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