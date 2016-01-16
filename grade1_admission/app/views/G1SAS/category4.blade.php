<html>
<head>
	<title>category 4</title>
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
	<div id="catogory4" >
		<h1> Childern of persons belonging to staff in institution directly involved in school education </h1>
		
		<br>
		{{Form::label('Label29', 'a) Post held as permanent employee in the relevant institutions');}}

		 {{ Form :: text( 'permenentEmployeePost','') ; }}		


		<br>
		{{Form::label('Label30','Period of service');}}

		 {{ Form :: text( 'totalServicePeriod','') ; }}		

		<br>
		{{Form::label('Label31', 'b) Distance from place of residence to place of work');}}
		 {{ Form :: text( 'distanceFromResidentToWork','') ; }}		


		<br>
		{{Form::label('Label32','c) If serving presently in a difficult school, period of difficult school service');}}
		 {{ Form :: text( 'nowInDifficultSchoolService','') ; }}		

		
		<br>
		{{Form::label('Label33','d) If served earlier in a in a difficult school such period of service');}}		
		 {{ Form :: text( 'nowInDifficultSchoolService','') ; }}		
		
		 <br>

		{{Form::label('Label40','Period of service');}}		
		 {{ Form :: text( 'servingPeriodOfSchool','') ; }}
		

		<br>

		{{Form::label('Label41','Close School Count ');}}		
		 {{ Form :: text( 'closeSchoolCount','') ; }}
		

		<br>


		Un-utilized leaves
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
			<tr>
		</table>
				 

	</div>

	{{Form::submit('addApplication')}}

{{Form::close()}}
</body>
</html>