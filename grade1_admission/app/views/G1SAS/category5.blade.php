<html>
<head>
	<title>category 5</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addCategory5','method' => 'POST' ))}}


	<div id="catogory5" >
		<h1> Children of officers transfferd on exigencies of service </h1>
		
		<br>
		{{Form::label('Label41', 'a) Date of transfer received lastly');}}

		 {{ Form :: text( 'test41','') ; }}		


		<br>
		{{Form::label('Label42','Name & address of work place before receiving the transfer');}}
		<br>
		 {{ Form :: textArea( 'test42','') ; }}		
		<br>

		{{Form::label('Label43', 'Name & address of work place after receiving the transfer');}}
		<br>
		{{ Form :: textArea( 'test43','') ; }}		
		<br>

		{{Form::label('Label44','c) Distance between the earlier place of work and place arrived on transfer (in km)');}}
		{{ Form :: text( 'test44','') ; }}		

		<br>
		{{Form::label('Label45','d) No of schools located where the child could be admitted and located closer to the place of residence other than the school applied for');}}		
		 {{ Form :: text( 'test45','') ; }}		
		
		
		<br>

		{{Form::label('Label46','e) Period of service as a State/Corporation/Statutory Bank/State Bank employee');}}		
		 {{ Form :: text( 'test46','') ; }}
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

<td>		 {{ Form :: text( 'test47','') ; }}		</td>
<td>		 {{ Form :: text( 'test48','') ; }}		</td>
<td>		 {{ Form :: text( 'test49','') ; }}		</td>	
<td>		 {{ Form :: text( 'test50','') ; }}		</td>
<td>		 {{ Form :: text( 'test51','') ; }}		</td>
</tr>
<tr>
</table>


	</div>




	


{{Form::close()}}


	
</body>
</html>