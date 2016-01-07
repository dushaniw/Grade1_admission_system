<html>
<head>
	<title> Application</title>
</head>
<body>

{{ Form :: open(array('url' =>'guardian/add','method' => 'POST' ))}}

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
		
	</div>



	<div id="catogory2" >
		<h1> Children of Past Pupils </h1>
		a) Period spent in the school as a pupil
		<br>
		{{Form::label('Label6', 'From Grade:');}}

		 {{ Form :: text( 'test6','') ; }}		


		
		{{Form::label('Label7','toGrade');}}

		 {{ Form :: text( 'test7','') ; }}		

		<br>
		{{Form::label('Label8', 'Educational achievements gained during schooling period');}}
		<br>	
		 {{ Form :: textArea( 'test8','') ; }}		


		<br>
		{{Form::label('Label9','Achievements gained in co-curricular activities during schooling period');}}
		<br>
		 {{ Form :: textArea( 'test9','') ; }}		

		
		<br>
		{{Form::label('Label10','Membership in past pupil associations, educational achievements after period of schooling and various types of assistance provided for the development of the school');}}
		<br>
		 {{ Form :: textArea( 'test10','') ; }}		
		
	</div>




	<div id="catogory3" >
		<h1> Brothers/sisters of students who are studying in school at present </h1>
		a) If applicant's child/children is/are studying in the school
		<br>



<table border="1" cellpadding="5" cellspacing="5">
<tr>
<th>Name of the child</th>
<th>Admission no</th>
<th>Admission grade to the school</th>
<th>Grades spent</th>

</tr>
<tr>

<td>		 {{ Form :: text( 'test11','') ; }}		</td>
<td>		 {{ Form :: text( 'test12','') ; }}		</td>	
<td>		 {{ Form :: text( 'test13','') ; }}		</td>
<td>		 {{ Form :: text( 'test14','') ; }}		</td>
</tr>
<tr>

<td>		 {{ Form :: text( 'test15','') ; }}		</td>
<td>		 {{ Form :: text( 'test16','') ; }}		</td>	
<td>		 {{ Form :: text( 'test17','') ; }}		</td>
<td>		 {{ Form :: text( 'test18','') ; }}		</td>
</tr>
<tr>

<td>		 {{ Form :: text( 'test19','') ; }}		</td>
<td>		 {{ Form :: text( 'test20','') ; }}		</td>	
<td>		 {{ Form :: text( 'test21','') ; }}		</td>
<td>		 {{ Form :: text( 'test22','') ; }}		</td>
</tr>


</table>
		b)

		<br>
		
		{{Form::label('Label23','Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}

		 {{ Form :: text( 'test23','') ; }}		

		<br>
		{{Form::label('Labe24', 'Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}
			
		 {{ Form :: text( 'test24','') ; }}		



		<br>
		This is applicable for a period of recent 05 years, prior to the year the application is submitted


		<br>
		

		{{Form::label('Labe25','c) No of schools located where the child could be admitted and located closer to the place of residence other than the school applied for');}}
		<br>
		 {{ Form :: text( 'test25','') ; }}		

		<br>
		{{Form::label('Label26','d) Ownership of place of residence');}}
		<br>
		{{Form::label('Label27','Title deed - in the name of applicant/spouse or applicants parents / Registered Lease Bond/ Government official Quarters Documents / un-registered Lease Bond/Any other legal documents to prove ownership');}}
		{{ Form :: text( 'test27','') ; }}		
		
		<br>
		{{Form::label('Label28','e) Achievements gained for the school by brothers/sisters in the school and various types of assistance provided by the applicant for the development of the school');}}
		<br>
		{{ Form :: textArea( 'test28','') ; }}		
		
	</div>



{{Form::close()}}

</body>
</html>