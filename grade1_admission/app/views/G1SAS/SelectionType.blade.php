<html>
<head>
	<title> Selection Type</title>
</head>
<body>
	{{Form::hidden('schoolId1', $schools[6]->getSchool_id());}}
	{{Form::hidden('schoolId2', $schools[7]->getSchool_id());}}
	{{Form::hidden('schoolId3', $schools[8]->getSchool_id());}}
	{{Form::hidden('schoolId4', $schools[9]->getSchool_id());}}
	{{Form::hidden('schoolId5', $schools[10]->getSchool_id());}}
	{{Form::hidden('schoolId6', $schools[11]->getSchool_id());}}
	{{Form::hidden('schoolId7', $schools[12]->getSchool_id());}}
	{{Form::hidden('schoolId8', $schools[13]->getSchool_id());}}
	{{Form::hidden('schoolId9', $schools[14]->getSchool_id());}}
	{{Form::hidden('schoolId10', $schools[15]->getSchool_id());}}
	
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

	{{Form::hidden('guardianNic', $guardian->getNic());}}
	{{Form::hidden('applicant_id', $applicant->getApplicantId());}}

	@for($i=0;$i<6;$i++)
		{{ Form :: open(array('url' =>'selectSchool/application','method' => 'POST'))}}
			{{Form::hidden('schoolPiority', $i);}}
			{{Form::hidden('schoolId', $schools[$i]->getSchool_id());}}
			
			{{Form::label('schoolNameL', 'School Name    ');}};
			{{Form::text('schoolNameT', $schools[$i]->getSchool_name() );}}

			{{Form::label('distanceL', 'Distance School    ');}};
			{{Form::text('distanceT', '' );}}


			{{Form::label('MediumL', 'Medium    ');}};
			{{Form::select('MediumT', array('Sinhala','Tamil') );}}

			<br>



			{{Form::label('schoolTypeL', 'School Type ');}};

			{{ Form::select('type', array('Children of residents in close proximity of school ','Children of Past Pupils','Brothers/sisters of students who are studying in school at present','Childern of persons belonging to staff in institution directly involved in school education ',' Children of officers transfferd on exigencies of service ','Childern of persons arriving after living abroad with child'));}}

			{{Form::submit('Add Application');}}

		{{Form::close();}}

	@endfor
</body>
</html>
