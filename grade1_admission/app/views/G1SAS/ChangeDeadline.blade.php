<html>
<head>
	<title>Change Deadline</title>
</head>
<body>
	
	{{Form:: open(array('url' =>'admin/changedeadline','method' => 'POST' ))}}
		{{Form::label('currentlbl',$deadline)}}
		<br>
       	{{ Form::selectRange('year', 2000, 2017,$date[0],['class'=>'div-inline','style'=>'width: 100px' ]) }}
        {{ Form::selectMonth('month',$month,['class'=>'div-inline','style'=>'width: 100px']) }}              
        {{ Form::selectRange('date', 1, 31,$date[2],['class'=>'div-inline','style'=>'width: 100px']) }}
        <br>
        {{Form::submit('Update Deadline');}}
	{{ Form:: close()}}
</body>
</html>