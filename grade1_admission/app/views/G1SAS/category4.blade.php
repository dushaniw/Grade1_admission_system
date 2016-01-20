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

							{{Form:: open(array('url' =>'selectSchool/addcategory','method' => 'POST' ))}}
		{{ Form:: hidden( 'orderOfPreference',$application->getOrderOfPreference()) ; }}
		{{ Form:: hidden( 'typeOfApplication',$application->getType()) ; }}
		{{ Form:: hidden( 'schoolId',$application->getSchool_id()) ; }}
		{{ Form:: hidden( 'distance',$application->getDistance()) ; }} 
		{{ Form:: hidden( 'medium',$application->getMedium()) ; }}
		{{	Form:: hidden( 'applicantId',$application->getApplicant_id()) ; }}		
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
	<div id="catogory4" >
		<h3><span class = "label label-default"> Childern of persons belonging to staff in institution directly involved in school education </span></h3>
			<br/>

		<div class="form-group">
					{{Form:: label( 'medium','a) Post held as permanent employee in the relevant institutions')  }}
					{{ Form:: text( 'permenentEmployeePost','',array('class' =>'form-control','style'=>'width: 300px; background-color:white') )  }}	
		</div>

		<div class="form-group">
			{{Form::label('Label31', 'b) Distance from place of residence to place of work')}}
			{{Form:: text( 'distanceFromResidentToWork','', array('class' =>'form-control','style'=>'width: 100px; background-color:white'))  }}	
		</div>
		<div class="form-group">
			{{Form::label('Label32','c) Period of difficult school service')}}
			{{Form:: text( 'nowInDifficultSchoolService','',array('class' =>'form-control','style'=>'width: 100px; background-color:white'))}}		
		</div>
		<div class="form-group">
			{{Form::label('Label33','Difficult school service')}}		
			{{Form:: text( 'nowInDifficultSchoolService','',  array('class' =>'form-control','style'=>'width: 100px; background-color:white','readonly'))  }}
							
		</div>
		
		<div class="form-group">
			{{Form::label('Label40','Serving Period of schools')}}		
			{{Form:: text( 'servingPeriodOfSchool','', array('class' =>'form-control','style'=>'width: 100px; background-color:white'))  }}
		</div>
		<div class="form-group">
			{{Form::label('Label41','Close School Count ')}}		
			{{Form:: text( 'closeSchoolCount','',array('class' =>'form-control','style'=>'width: 100px; background-color:white')) }}
		</div>
		<div class="form-group">
			<u><strong>Un-utilized leaves</strong></u>
		</div>
		<div class="form-group">
			{{ Form:: label( 'year1RemLeave','Year 1')  }}
			{{ Form:: text( 'year1RemLeave','', array('class' =>'form-control','style'=>'width: 100px; background-color:white')) }}
		</div>
		<div class="form-group">
			{{ Form:: label( 'year2RemLeave','Year 2')  }}	
			{{ Form:: text( 'year2RemLeave','',array('class' =>'form-control','style'=>'width: 100px; background-color:white')) }}		
							
		</div>
		<div class="form-group">
			{{Form:: label( 'year3RemLeave','Year 3') }}		
			{{Form:: text( 'year3RemLeave','', array('class' =>'form-control','style'=>'width: 100px; background-color:white')) }}	
							
		</div>
		<div class="form-group">
			{{ Form:: label( 'year4RemLeave','Year 4') }}			
			{{ Form:: text( 'year4RemLeave','', array('class' =>'form-control','style'=>'width: 100px; background-color:white'))  }}
				
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
 





  