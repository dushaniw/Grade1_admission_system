<html>
<head>
	<title>Search students based on School </title>
</head>

<body>	
	<br>
		<div class="form-school-group">
	 		 {{Form::label('school1label', 'School :   ');}}
	  		<select class="form-school-control" name="school_name">
	    		@foreach($schools as $school)
	      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_id()."-".$school->getSchool_name()}}</option>
	    		@endforeach
	  		</select>
		</div>
	<br>
	{{Form:: open(array('url' =>'search/schoolApplicantsFind','method' => 'POST' ))}}    
        {{Form::submit('Find selected students');}}
	{{ Form:: close()}}

	@if($applicants!=null)
		<table>
	    @foreach($applicants as $applicant)
	        <tr><td>{{$applicant->getApplicantId()}} - {{$applicant->getFirstname()}} - {{$applicant->getLastname()}}</td></tr>
	    @endforeach
		</table>
	@endif
</body>
</html>