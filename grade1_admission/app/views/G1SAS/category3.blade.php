@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
  <ul class="nav navbar-nav" >
    <li class> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
    <li>{{HTML::link('#', 'About')}}  </li>
    
    <li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
    <li class="active"><a href = "" class="disabled" style="color: #3366FF" >My Applications </a></li>
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
      <li class = "active"><a href = "" class="disabled" style="color: #3366FF" >Add New Application</a></li>
    </ul>
  </div>
  <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span> Add New Application </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
					{{ Form:: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}
		{{ Form:: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form:: hidden( 'typeOfApplication',$application->getType())}}
		{{ Form:: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form:: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form:: hidden( 'medium',$application->getMedium()) ; }}
	
		{{Form:: hidden( 'applicantId',$application->getApplicant_id()) ; }}		
		{{Form::hidden('schoolId1', $schools[0]);}}
		{{Form::hidden('schoolId2', $schools[1]);}}
		{{Form::hidden('schoolId3', $schools[2]);}}
		{{Form::hidden('schoolId4', $schools[3]);}}
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

		{{Form::hidden('guardianNic', $guardianNic)}}
	<div id="catogory3" >
		<h3><span class = "label label-default"> Brothers/sisters of students who are studying in school at present </span></h3>
		<br>
		<div class="form-group">
				<h4><strong><u>	a) If applicant's child/children is/are studying in the school</u></strong></h4>
		</div>


		<div class="form-group"> 
			{{Form:: label( 'first_name_label','First Name')  }}
			{{Form:: text( 'firstName1','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{Form:: label( 'first_name_label','Last Name')  }}
			{{Form:: text( 'lastName1','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{ Form:: label( 'admission_number_label','Admission number')  }}
			{{ Form:: text( 'admissionNumber1','',array('class' =>'form-control','style'=>'width: 150px; background-color:white') )  }}
			<br/>					
									
			{{Form:: label( 'gradeAdmision','Admission grade to the school')  }}
			{{Form:: text( 'gradeAdmision1','',array('class' =>'form-control','style'=>'width:150px; background-color:white')) }}		
			<br/>

			{{Form:: label( 'dateOfAdmision','Date of Admission:')  }}	
			{{Form:: text( 'dateOfAdmision1','',array('class' =>'form-control','style'=>'width:150px; background-color:white'))}}
			<br/>
									
			{{Form:: label( 'ach_label','Educational Achivements:') }}
			
			{{Form:: textarea( 'eAchiement1','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 					
				 					
			{{Form:: label( 'don_label','Achievements gained for the school by brothers/sisters in the school and various types of assistance provided by the applicant for the development of the school') }}
			{{Form:: textarea( 'donationDetail1','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 				
		</div>	


		<div class="form-group"> 
			{{Form:: label( 'first_name_label','First Name')  }}
			{{Form:: text( 'firstName2','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{Form:: label( 'first_name_label','Last Name')  }}
			{{Form:: text( 'lastName2','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{ Form:: label( 'admission_number_label','Admission number')  }}
			{{ Form:: text( 'admissionNumber2','',array('class' =>'form-control','style'=>'width: 150px; background-color:white') )  }}
			<br/>					
									
			{{Form:: label( 'gradeAdmision','Admission grade to the school')  }}
			{{Form:: text( 'gradeAdmision2','',array('class' =>'form-control','style'=>'width:150px; background-color:white')) }}		
			<br/>
									
			{{Form:: label( 'dateOfAdmision','Date of Admission:')  }}	
			{{Form:: text( 'dateOfAdmision2','',array('class' =>'form-control','style'=>'width:150px; background-color:white'))}}
			<br/>
									
			{{Form:: label( 'ach_label','Educational Achivements:') }}
			
			{{Form:: textarea( 'eAchiement2','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 					
				 					
			{{Form:: label( 'don_label','Achievements gained for the school by brothers/sisters in the school and various types of assistance provided by the applicant for the development of the school') }}
			{{Form:: textarea( 'donationDetail2','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 				
		</div>	


		<div class="form-group"> 
			{{Form:: label( 'first_name_label','First Name')  }}
			{{Form:: text( 'firstName3','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{Form:: label( 'first_name_label','Last Name')  }}
			{{Form:: text( 'lastName3','',array('class' =>'form-control','style'=>'background-color:white'))  }}
			<br/>

			{{ Form:: label( 'admission_number_label','Admission number')  }}
			{{ Form:: text( 'admissionNumber3','',array('class' =>'form-control','style'=>'width: 150px; background-color:white') )  }}
			<br/>					
									
			{{Form:: label( 'gradeAdmision','Admission grade to the school')  }}
			{{Form:: text( 'gradeAdmision3','',array('class' =>'form-control','style'=>'width:150px; background-color:white')) }}		
			<br/>
									
			{{Form:: label( 'dateOfAdmision','Date of Admission:')  }}	
			{{Form:: text( 'dateOfAdmision3','',array('class' =>'form-control','style'=>'width:150px; background-color:white'))}}
			<br/>
									
			{{Form:: label( 'ach_label','Educational Achivements:') }}
			
			{{Form:: textarea( 'eAchiement3','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 					
				 					
			{{Form:: label( 'don_label','Achievements gained for the school by brothers/sisters in the school and various types of assistance provided by the applicant for the development of the school') }}
			{{Form:: textarea( 'donationDetail3','',array('class' =>'form-control','style'=>'background-color:white')) }}
			<br/>	 				
		</div>	

		<div class="form-group">
            				{{Form::submit('Submit',array('class' => 'btn btn-primary'))}}		
			</div>	
			{{Form::close()}}
</div>


</div></div>
                
       </div>
  </div>
</div>
	@stop
 





  