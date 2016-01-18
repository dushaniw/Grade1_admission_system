<html>
<head>
	<title> Add New School </title>
</head>

<body>
	<div>
	
	</div>

{{Form::label('titlelabel',"Admin logged in")}}

<br>

{{Form:: open(array('url' =>'school/addschool','method' => 'POST' ))}}
		{{Form::label('schoolidlabel','School ID   :')}}
		{{Form::text('schoolidtext','')}}
		<br>
		{{Form::label('schoolnamelabel','School     :')}}
		{{Form::text('schoolnametext','')}}
		<br>
		
		{{Form::label('categorylabel','Category    :')}}
		
			{{Form::label('national', 'National School :');}}

	        {{ Form::radio('category', 'national',true); }}

	        {{Form::label('local_gov', 'Local government school :      ');}}

	        {{ Form::radio('category', 'local government'); }}
    	
        <br>

		<br>
		{{Form::label('capacitylabel','No of Classes Available:')}}
		{{Form::text('capacitytext','')}}
		<br>
		{{Form::label('maleperlabel','Male Percentage:')}}
		{{Form::text('malepertext','')}}
		<br>
		{{Form::label('sinhalaperlabel','Sinhala Medium Student Percentage:')}}
		{{Form::text('sinhalapertext','')}}
		<br>
		{{Form::label('contactlabel','Contact Number:')}}
		{{Form::text('contacttext','')}}
		<br>
		{{Form::label('emaillabel','Email:')}}
		{{Form::text('emailtext','')}}
		<br>
		{{Form::label('passwordlabel','Default Password:')}}
		{{Form::text('passwordtext','1234')}}
		<br>
        {{Form::submit('Add School');}}
{{ Form:: close()}}


</body>
</html>