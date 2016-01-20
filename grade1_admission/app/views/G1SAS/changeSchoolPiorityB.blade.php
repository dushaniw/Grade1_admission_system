<html>
 <head>
 	<title></title>
 </head>
 <body>
  	  	{{ Form :: open(array('url' =>'edit/changep1','method' => 'POST'))}}

  	  {{Form::label('appplicantsCombo','selectApplicant')}}
      <select class="form-school-control" name="applicant_id">
        @foreach($applicants as $applicant)
            <option value="{{$applicant->getApplicantId()}}">{{$applicant->getFirstName()}}</option>
        @endforeach
      </select>

      {{Form::submit("next")}}
      {{Form::close()}}
 </body>
 </html>