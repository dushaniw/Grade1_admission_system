<html>
<head>
	<title>Selected Applicants </title>
</head>

<body>	
	<br>
		{{Form::label('title','Selected Applicant List for:	')}}
		{{Form::text('school_name',$selected)}}
	<br>
		
		<table>
	    @foreach($applicants as $applicant)
	        <tr><td>{{$applicant->getApplicantId()}} - {{$applicant->getFirstname()}} - {{$applicant->getLastname()}}</td></tr>
	    @endforeach
		</table>
	
</body>
</html>