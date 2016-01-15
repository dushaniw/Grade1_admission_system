<html>
<head>
	<title>Selected Applicants </title>
	<style>
	table{
		border-collapse: collapse;
		border-spacing: 10px;
	}
	th{
		background-color: #4CAF50;
    	color: white;
	}
	table,th,td{
		width:100% ;
		text-align: left;
		height: 30px;
		padding: 15px;
		border-bottom: 1px solid #ddd;
    	
	}
	tr:hover{background-color:#f5f5f5}
	</style>
</head>

<body>
	

<body>	
	<br>
		{{Form::label('title','Selected Applicant List for:	')}}
		{{Form::text('school_name',$selected)}}
	<br>
		<div style="overflow-x:auto;">
		<table >
			<tr>
	    		<th>Application ID</th>
	    		<th>Frist Name</th> 
	    		<th>Last Name</th>
	    		<th>Gender</th>
	    		<th>DateOfBirth</th>
	    		<th>Guardian Name</th>
	    		<th>Contact Number</th>
  			</tr>
	    	@foreach($applicants as $applicant)
	        <tr>
	        	<td>{{$applicant->getApplicantId()}}</td>
	        	<td>{{$applicant->getFirstname()}}</td>
	         	<td>{{$applicant->getLastname()}}</td>
	         	<td>{{$applicant->getGender()}}</td>
	         	<td>{{$applicant->getDateOfBirth()}}</td>
	         	<td>{{$applicant->getGuardian_firstname}}&nsbp;{{$applicant->getGuardian_lastname}}</td>
	         	<td>{{$applicant->getGuardian_contact}}</td>
	         </tr>
	    	@endforeach
		</table>
		</div>
</body>
</html>