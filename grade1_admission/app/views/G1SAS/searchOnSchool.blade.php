<html>
<head>
	<title>Search students based on School </title>
</head>

<body>	
	<br>
		
	 		
	 		
	{{Form:: open(array('url' =>'search/schoolapplicantsfind','method' => 'POST' ))}}  
		{{Form::label('school1label', 'School :   ');}}
	  		<select  name="school">
	    		@foreach($schools as $school)
	      			<option value="{{$school->getSchool_id()}}">
	      				{{$school->getSchool_id()."-".$school->getSchool_name()}}
	      			</option>
	    		@endforeach
	  		</select>
	<br>
	<br>
	  
     {{Form::submit('Find selected students');}}
	{{ Form:: close()}}

</body>
</html>