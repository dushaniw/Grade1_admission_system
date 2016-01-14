<html>
<head>
	<title> Select School</title>
</head>
<body>

	{{ Form :: open(array('url' =>'selectSchool/next','method' => 'POST'))}}

  <br>
<!--,'action' => 'SchoolDBController@getSchoolList'-->
  {{Form::label('guardian', $guardian->getEmail())}}
  <div class="form-applicant-group">
      {{Form::label('appplicantsCombo','selectApplicant')}}
      <select class="form-school-control" name="school_name1">
        @foreach($applicants as $applicant)
            <option value="{{$applicant->getApplicantId()}}">{{$applicant->getFirstName()}}</option>
        @endforeach
      </select>
  </div>
  	


  {{Form::label('selectlabel', 'Select your six schools    ');}}

	<br>

	<div class="form-school-group">
 		 {{Form::label('school1label', 'School 1    ');}}
  		<select class="form-school-control" name="school_name1">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>
<br>
	<div class="form-school-group">
 		 	{{Form::label('school2label', 'School 2    ');}} 
  		<select class="form-school-control" name="school_name2">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>
<br>
    
	<div class="form-school-group">
 			{{Form::label('school3label', 'School 3    ');}}   
  		<select class="form-school-control" name="school_name3">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>

<br>
	<div class="form-school-group">
		   	{{Form::label('school4label', 'School 4    ');}}
  		<select class="form-school-control" name="school_name4">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>

<br>
	<div class="form-school-group">
		   {{Form::label('school5label', 'School 5    ');}}
  		<select class="form-school-control" name="school_name5">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>

<br>
   	<div class="form-school-group">
		       {{Form::label('school6label', 'School 6    ');}}
  		<select class="form-school-control" name="school_name6">
    		@foreach($schools as $school)
      			<option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
    		@endforeach
  		</select>
	</div>

<br>
      
  select close school to you instead of selected school
  <br>
@for($i=0;$i<10;$i++)  
        
  <div class="form-school-group">
      {{Form::label('schoollabel', 'School 3    ');}}   
      <select class="form-school-control" name=$i>
        @foreach($schools as $school)
            <option value="{{$school->getSchool_id()}}">{{$school->getSchool_name()}}</option>
        @endforeach
      </select>
  </div>
  @endfor




      {{Form::submit('Add Application');}}
      {{ Form:: close()}}

    
  
</body>
</html>