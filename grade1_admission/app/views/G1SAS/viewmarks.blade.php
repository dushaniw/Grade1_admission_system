<html>
<head>
	<title>View Student Marks</title>
</head>
<body>
		<table >

			<tr>
	    		<th>Application ID</th>
	    		<th>Type</th>
	    		<th>Marks</th> 
	    		
	    		
	    		
  			</tr>
	    	@foreach($applications as $application)
	        <tr>
	        	<td>{{$application->getApplication_id()}}</td>
	        	<td>{{$application->getType()}}</td>
	        	<td>{{$application->getMark()}}</td>
	         	
	         	
	         </tr>
	    	@endforeach
		</table>

</body>
</html>