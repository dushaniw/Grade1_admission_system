<html>
<head>
	<title>View Student Marks</title>
</head>
<body>
		<table >

			<tr>
	    		<th>Application ID</th>
	    		<th>Under category</th>
	    		<th>Marks</th> 
	    		
	    		
	    		C91A1A
  			</tr>
	    	@foreach($applications as $application)
	        <tr>
	        	<td>{{$application->getApplication_id()}}</td>
	        	@if($application->getType()==1)
	        	<td>Resident in close proximity</td>
	        	@elseif($application->getType()==2)
	        	<td>Child of a Past pupil</td>
	        	@elseif($application->getType()==3)
	        	<td>Sibling of a current student</td>
	        	@elseif($application->getType()==4)
	        	<td>Child of an educational officer</td>
	        	@elseif($application->getType()==5)
	        	<td>Child of an officer on transfer</td>
	        	@elseif($application->getType()==6)
	        	<td>Child of a person coming from abroad</td>
	         	@endif
	         	
	         	<td>{{$application->getMark()}}</td>
	         </tr>
	    	@endforeach
		</table>

</body>
</html>