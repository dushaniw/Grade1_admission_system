<html>
<head>
	<title>category 4</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addCategory4','method' => 'POST' ))}}

	<div id="catogory4" >
		<h1> Childern of persons belonging to staff in institution directly involved in school education </h1>
		
		<br>
		{{Form::label('Label29', 'a) Post held as permanent employee in the relevant institutions');}}

		 {{ Form :: text( 'test29','') ; }}		


		<br>
		{{Form::label('Label30','Period of service');}}

		 {{ Form :: text( 'test30','') ; }}		

		<br>
		{{Form::label('Label31', 'b) Distance from place of residence to place of work');}}
		 {{ Form :: text( 'test31','') ; }}		


		<br>
		{{Form::label('Label32','c) If serving presently in a difficult school, period of difficult school service');}}
		 {{ Form :: text( 'test32','') ; }}		

		
		<br>
		{{Form::label('Label33','d) If served earlier in a in a difficult school such period of service');}}		
		 {{ Form :: text( 'test33','') ; }}		
		
		<br>




<table border="1" cellpadding="5" cellspacing="5">
<tr>
<th>2015</th>
<th>2014</th>
<th>2013</th>
<th>2012</th>
<th>2011</th>

</tr>
<tr>

<td>		 {{ Form :: text( 'test34','') ; }}		</td>
<td>		 {{ Form :: text( 'test35','') ; }}		</td>
<td>		 {{ Form :: text( 'test36','') ; }}		</td>	
<td>		 {{ Form :: text( 'test37','') ; }}		</td>
<td>		 {{ Form :: text( 'test38','') ; }}		</td>
</tr>
<tr>
</table>
		<br>

		{{Form::label('Label39','Name of the school if serving in a school');}}		
		 {{ Form :: text( 'test39','') ; }}
		 <br>

		{{Form::label('Label40','Period of service');}}		
		 {{ Form :: text( 'test40','') ; }}
		 

	</div>



{{Form::close()}}
</body>
</html>