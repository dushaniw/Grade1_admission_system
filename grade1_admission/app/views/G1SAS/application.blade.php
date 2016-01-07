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



	<div id="catogory4" >
		<h1> Childern of persons belonging to staff in institution directly involved in school education </h1>
		
		<br>
		{{Form::label('Label29', 'a) Post held as permanent employee in the relevant institutions');}}

		 {{ Form :: text( 'test29','') ; }}		


		<br>
		{{Form::label('Label30','Period of service');}}

		 {{ Form :: text( 'test30','') ; }}		

		<br>
		{{Form::label('Label31', 'b) Distance from place of residence to place of work');}}
		 {{ Form :: text( 'test31','') ; }}		


		<br>
		{{Form::label('Label32','c) If serving presently in a difficult school, period of difficult school service');}}
		 {{ Form :: text( 'test32','') ; }}		

		
		<br>
		{{Form::label('Label33','d) If served earlier in a in a difficult school such period of service');}}		
		 {{ Form :: text( 'test33','') ; }}		
		
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

<td>		 {{ Form :: text( 'test34','') ; }}		</td>
<td>		 {{ Form :: text( 'test35','') ; }}		</td>
<td>		 {{ Form :: text( 'test36','') ; }}		</td>	
<td>		 {{ Form :: text( 'test37','') ; }}		</td>
<td>		 {{ Form :: text( 'test38','') ; }}		</td>
</tr>
<tr>
</table>
		<br>

		{{Form::label('Label39','Name of the school if serving in a school');}}		
		 {{ Form :: text( 'test39','') ; }}
		 <br>

		{{Form::label('Label40','Period of service');}}		
		 {{ Form :: text( 'test40','') ; }}
		 

	</div>





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