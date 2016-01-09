<html>
<head>
	<title> Selection Type</title>
</head>
<body>

	@for($i=0;$i<5;$i++)
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

			{{ Form::select('type', array('Children of residents in close proximity of school ','Children of Past Pupils','Brothers/sisters of students who are studying in school at present','Childern of persons belonging to staff in institution directly involved in school education ',' Children of officers transfferd on exigencies of service '));}}

			{{Form::submit('Add Application');}}

		{{Form::close();}}

	@endfor
</body>
</html>
