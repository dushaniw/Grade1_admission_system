<html>
<head>
	<title>Category 1</title>
</head>
<body>
{{ Form :: open(array('url' =>'selectSchool/addcategory1','method' => 'POST' ))}}
	{{ Form :: hidden( 'orderOfPreference',$orderOfPreference) ; }}
	 {{ Form :: hidden( 'typeOfApplication',$typeOfApplication) ; }}
	 
	 {{ Form :: hidden( 'schoolId',$schoolId) ; }}


	<div id="catogory1" >
		<h1> Children of residents in close proximity of school </h1>
		a)
		<br>
		{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}

		 {{ Form :: text( 'test1','') ; }}		


		<br>
		{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}

		 {{ Form :: text( 'test2','') ; }}		


		 <br>
		 This is applicable for a period of recent 05 years, prior to the year the application is submitted
		 <br>

		b)Ownership of place of residence
		<br>
		{{Form::label('Label3', 'Title deed - in the name of applicant/spouse or applicants parents / Registered Lease Bond/ Government official Quarters Documents / un-registered Lease Bond/Any other legal documents to prove ownership');}}

		 {{ Form :: text( 'test3','') ; }}		


		<br>
		{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate');}}

		 {{ Form :: text( 'test4','') ; }}		

		
		<br>
		{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for');}}

		 {{ Form :: text( 'test5','') ; }}
		 <br>

		 {{Form::submit('addApplication')}}		
		
	</div>

{{Form::close()}}


</body>
</html>