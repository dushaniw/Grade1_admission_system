<<<<<<< HEAD
<html>
<head>
	<title>Category 1</title>
</head>
<body>
	
	{{ Form :: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}
		
		{{Form :: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{Form :: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{Form :: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{Form :: hidden( 'distance',$application->getDistance()) ; }} 
		{{Form :: hidden( 'medium',$application->getMedium()) ; }}

		{{Form :: hidden( 'applicantId',$application->getApplicant_id());}}
		{{Form::hidden('schoolId1', $schools[0]);}}
		{{Form::hidden('schoolId2', $schools[1]);}}
		{{Form::hidden('schoolId3', $schools[2]);}}
		{{Form::hidden('schoolId4', $schools[3]);}}
=======
@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
  <ul class="nav navbar-nav" >
    <li class> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
    <li>{{HTML::link('#', 'About')}}  </li>
    
    <li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
    <li class="active"><a href = "#" class="disabled" style="color: #3366FF" >My Applications </a></li>
    <li><a href-"#">Search</a></li>
  </ul>
    <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>

<div class="row">
  <div class="col-md-3">
    <br/>
    <ul class = "nav nav-pills nav-stacked" role = "navigation">
      <li><a href = "#">Overview</a></li>
      <li class ="active"><a href = "" class="disabled" style="color: #3366FF" >Add New Application</a></li>
    </ul>
  </div>
  <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span> Add New Application </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
							{{Form:: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}
							{{Form:: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
							{{Form:: hidden( 'typeOfApplication',$application->getType()) ; }}
							{{Form:: hidden( 'schoolId',$application->getSchool_id()) ; }}
							{{Form:: hidden( 'distance',$application->getDistance()) ; }} 
							{{Form:: hidden( 'medium',$application->getMedium()) ; }}

							{{Form:: hidden( 'applicantId',$application->getApplicant_id());}}
							{{Form::hidden('schoolId1', $schools[0]);}}
							{{Form::hidden('schoolId2', $schools[1]);}}
							{{Form::hidden('schoolId3', $schools[2]);}}
							{{Form::hidden('schoolId4', $schools[3]);}}
>>>>>>> origin/master
		{{Form::hidden('schoolId5', $schools[4]);}}
		{{Form::hidden('schoolId6', $schools[5]);}}
		{{Form::hidden('schoolId7', $schools[6]);}}
		{{Form::hidden('schoolId8', $schools[7]);}}
		{{Form::hidden('schoolId9', $schools[8]);}}
		{{Form::hidden('schoolId10', $schools[9]);}}
		
		{{Form::hidden('division1', $dArray[0]);}}
		{{Form::hidden('division2', $dArray[1]);}}
		{{Form::hidden('division3', $dArray[2]);}}
		{{Form::hidden('division4', $dArray[3]);}}
		{{Form::hidden('division5', $dArray[4]);}}
		{{Form::hidden('division6', $dArray[5]);}}

		{{Form::hidden('year1', $yArray[0]);}}
		{{Form::hidden('year2', $yArray[1]);}}
		{{Form::hidden('year3', $yArray[2]);}}
		{{Form::hidden('year4', $yArray[3]);}}
		{{Form::hidden('year5', $yArray[4]);}}
		{{Form::hidden('year6', $yArray[5]);}}
		{{Form::hidden('guardianNic', $guardianNic);}}

<<<<<<< HEAD
		
		<div id="catogory1" >
			
			<h1> Children of residents in close proximity of school </h1>
			a)
			<br>
			
			{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
			{{ Form :: text( 'noOfYearsInElectrocalRegister','') ; }}		

			<br>
			{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register');}}
			{{ Form :: text( 'noOfYearsSpouseInElectrocalRegister','') ; }}		


			<br>
			This is applicable for a period of recent 05 years, prior to the year the application is submitted
			<br>

			b)Ownership of place of residence
			<br>
			{{Form::label('Label3', 'Title deed - in the name of applicant/spouse or applicants parents / Registered Lease Bond/ Government official Quarters Documents / un-registered Lease Bond/Any other legal documents to prove ownership');}}

			{{ Form :: text( 'typeOfTitleDeed','') ; }}		


			<br>
			{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate');}}

			{{ Form :: text( 'noOfAditionalDocumentForResident','') ; }}		

=======
		<div id="category1" >
>>>>>>> origin/master
			
			<h3><span class = "label label-default">Children of residents in close proximity of school</span></h3>
			<br>
			

			<div class="form-group">
				{{Form::label('Label1', 'Number of years that include the applicant and spouse/Legal guardian in the electoral register');}}
				{{Form:: text( 'noOfYearsInElectrocalRegister','', array('class' =>'form-control','style'=>'width: 100px; background-color:white',)) }}
			</div>
			<div class="form-group">
				{{Form::label('Label2','Number of years that include either name of the applicant or the name of the spouse in the electoral register')}}
				{{Form:: text( 'noOfYearsSpouseInElectrocalRegister','',array('class' =>'form-control','style'=>'width: 100px; background-color:white')) }}
			</div>
			<div class="form-group" style="color:red">
				* This is applicable for a period of recent 05 years, prior to the year the application is submitted
			</div>
			<div class="form-group">
				<h4><strong><u>Ownership of place of residence</u></strong></h4>
			</div>
			<div class="form-group">
					{{Form::label('Label3', 'Title deed - 1)in the name of applicant/spouse or applicants parents / 2)Registered Lease Bond/ 3)Government official Quarters Documents / 4)un-registered Lease Bond/Any other legal documents to prove ownership')}}
					{{Form:: text( 'typeOfTitleDeed','',array('class' =>'form-control','style'=>'width: 100px; background-color:white'))}}	
			</div>
			<div class="form-group">
					{{Form::label('Label4','Additional documents which could be submitted in proof of residence (national ID/Water bills/Light bills/Phone bills/Marriage certificate')}}

					{{Form:: text( 'noOfAditionalDocumentForResident','', array('class' =>'form-control','style'=>'width: 100px; background-color:white'))}}		
			</div>
			<div class="form-group">
					{{Form::label('Label5','No of schools located closer to the place of residence where the child could be admitted than the school applied for')}}

					{{Form:: text( 'closeSchoolCount','',array('class' =>'form-control','style'=>'width: 100px; background-color:white'))}}
			</div>
			<div class="form-group">
				{{Form::submit('Submit',array('class' => 'btn btn-primary'))}}		

			</div>
	
			</div>

			{{Form::close()}}
                        </div></div>
        </div>
  </div>
	        
</div>
	
 
@stop