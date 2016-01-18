<html>
<head>
	<title>Edit Category Detail</title>
</head>
<body>
	<h1> edit category detail </h1>

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
			 {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',0)}}
	        {{Form::submit('Edit Category1 Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',1)}}
		<select class="form-school-control" name="schoolId">
        @foreach($schools as $school)
            <option value="{{$school}}">{{$school}}</option>
        @endforeach
      </select>

	        {{Form::submit('Edit Category2 Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',2)}}
	        {{Form::submit('Edit Category3 Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',3)}}
	        {{Form::submit('Edit Category Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',4)}}
	        {{Form::submit('Edit Category Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',5)}}
	        {{Form::submit('Edit Category Detial ')}}
	{{ Form:: close()}}

</body>
</html>