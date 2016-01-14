<html>
<head>
	<title>Search students based on School </title>
</head>

<body>
	<div>
	{{$username}}
	</div>

	{{Form:: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
	
    	{{Form::submit('Search selected school');}}
	{{ Form:: close()}}



</body>
</html>