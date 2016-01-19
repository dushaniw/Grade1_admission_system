<html>
<head>
	<title>category 5 edit</title>
</head>
<body>
{{ Form :: open(array('url' =>'edit/editcategory5','method' => 'POST' ))}}

	

		{{Form::hidden('nic', $category5->getNic())}}
	
	<div id="catogory5" >
		<h1> Children of officers transfferd on exigencies of service </h1>
		
		<br>
		{{Form::label('Label41', 'a) Date of transfer received lastly');}}

		 {{ Form :: text( 'dateOfTransferReceived',$category5->getDateOfTransferReceived()) ; }}		


		<br>
		{{Form::label('Label42','Name & address of work place before receiving the transfer');}}
		<br>
		 {{ Form :: textArea( 'beforeWorkedPlace',$category5->getBeforeWorkedPlace()) ; }}		
		<br>

		{{Form::label('Label43', 'Name & address of work place after receiving the transfer');}}
		<br>
		{{ Form :: textArea( 'afterWorkedPlace',$category5->getAfterWorkedPlace()) ; }}		
		<br>

		{{Form::label('Label44','c) Distance between the earlier place of work and place arrived on transfer (in km)');}}
		{{ Form :: text( 'distanceOfTransfer',$category5->getDistanceOfTransfer()) ; }}		

		<br>

		{{Form::label('Label46','e) Period of service as a State/Corporation/Statutory Bank/State Bank employee');}}		
		 {{ Form :: text( 'servicePeriod',$category5->getServicePeriod()) ; }}
		 <br>



		<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<th>2015</th>
				<th>2014</th>
				<th>2013</th>
				<th>2012</th>
			</tr>
			
			<tr>

				<td>		 {{ Form :: text( 'year1RemLeave',$category5->getYear1RemLeave()) ; }}		</td>
				<td>		 {{ Form :: text( 'year2RemLeave',$category5->getYear2RemLeave()) ; }}		</td>
				<td>		 {{ Form :: text( 'year3RemLeave',$category5->getYear3RemLeave()) ; }}		</td>	
				<td>		 {{ Form :: text( 'year4RemLeave',$category5->getYear4RemLeave()) ; }}		</td>
			
			</tr>
			
		</table>


	</div>
	{{Form::submit('edit category detail 5')}}

{{Form::close()}}


	
</body>
</html>