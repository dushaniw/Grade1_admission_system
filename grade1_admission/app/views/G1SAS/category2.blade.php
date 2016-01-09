<html>
<head>
	<title>category 2</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addCategory2','method' => 'POST' ))}}

	<div id="catogory2" >
		<h1> Children of Past Pupils </h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'test6','') ; }}		


		
		{{Form::label('Label7','toGrade');}}

		 {{ Form :: text( 'test7','') ; }}		

		<br>
		{{Form::label('Label8', 'Educational achievements gained during schooling period');}}
		<br>	
		 {{ Form :: textArea( 'test8','') ; }}		


		<br>
		{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period');}}
		<br>
		 {{ Form :: textArea( 'test9','') ; }}		

		
		<br>
		{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school');}}
		<br>
		 {{ Form :: textArea( 'test10','') ; }}		
		
	</div>

{{Form::close()}}


</body>
</html>