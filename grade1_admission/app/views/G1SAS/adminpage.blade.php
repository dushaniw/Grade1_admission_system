<html>
<head>
	<title>admin page</title>
</head>
<body>
	<div>
		{{Form::label('Label',$title)}}
    </div>

	{{Form:: open(array('url' =>'admin/calculate','method' => 'POST' ))}}
        {{Form::hidden('username',$title)}}
        {{Form::submit('calculate marks');}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'admin/addnewschool','method' => 'POST' ))}}
        
        {{Form::submit('Add New School');}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'admin/deadline','method' => 'POST' ))}}
        
        {{Form::submit('Change deadline');}}
	{{ Form:: close()}}
</body>
</html>