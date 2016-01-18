<html>
<head>
	<title>category 4</title>
</head>
<body>
{{ Form :: open(array('url' =>'edit/editcategory4','method' => 'POST' ))}}
		{{ $category4->getNIC()}}
		{{Form::hidden('nic', $category4->getNIC())}}
		{{Form::hidden('schoolId',$category4->getServingSchoolId())}}
	<div id="catogory4" >
		<h1> Childern of persons belonging to staff in institution directly involved in school education edit </h1>
		
		<br>
		{{Form::label('Label29', 'a) Post held as permanent employee in the relevant institutions');}}

		 {{ Form :: text( 'permenentEmployeePost',$category4->getPermenentEmployeePost()) }}		


		
		<br>
		{{Form::label('Label31', 'b) Distance from place of residence to place of work');}}
		 {{ Form :: text( 'distanceFromResidentToWork',$category4->getDistanceFromResidentToWork()) ; }}		


		<br>
		{{Form::label('Label32','c) If serving presently in a difficult school, period of difficult school service');}}
		 {{ Form :: text( 'nowInDifficultSchoolService',$category4->getNowInDifficultSchoolService()) ; }}		

		
		<br>
		{{Form::label('Label33','d) If served earlier in a in a difficult school such period of service');}}		
		 {{ Form :: text( 'periodOfDifficultSchoolService',$category4->getPeriodOfDifficultSchoolService() ); }}		
		
		 <br>

		{{Form::label('Label40','Period of service');}}		
		 {{ Form :: text( 'servingPeriodOfSchool',$category4->getServingPeriodOfSchool()) ; }}
		

		<br>

		{{Form::label('Label41','Close School Count ');}}		
		 {{ Form :: text( 'closeSchoolCount',$category4->getCloseSchoolCount()) ; }}
		

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
				<td>		 {{ Form :: text( 'year1RemLeave',$category4->getYear1RemLeave()) ; }}		</td>
				<td>		 {{ Form :: text( 'year2RemLeave',$category4->getYear2RemLeave()) ; }}		</td>
				<td>		 {{ Form :: text( 'year3RemLeave',$category4->getYear3RemLeave()) ; }}		</td>	
				<td>		 {{ Form :: text( 'year4RemLeave',$category4->getYear4RemLeave()) ; }}		</td>
			<tr>
		</table>
				 

	</div>

	{{Form::submit('edit category 4 detail')}}

{{Form::close()}}
</body>
</html>