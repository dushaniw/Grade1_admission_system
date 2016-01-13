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



		Un-utilized leaves
		<table border="1" cellpadding="5" cellspacing="5">
			<tr>
				<th>2015</th>
				<th>2014</th>
				<th>2013</th>
				<th>2012</th>
				<th>2011</th>
			</tr>
			<tr>
				<td>		 {{ Form :: text( 'year1RemLeave','') ; }}		</td
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