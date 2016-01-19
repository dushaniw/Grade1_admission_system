@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li  class="active" ><a href = "/school/edit?schoolidtext=<?php echo $school->getSchool_id()?>"> Home</a> </li>
                <li>{{HTML::link('#', 'About')}}</li>
                <li> <a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a> </li>
                <li><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li ><a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Overview</a></li>
                        <li class="active"><a href = "/school/edit?schoolidtext=<?php echo $school->getSchool_id()?>">Edit School Details</a>
						</li>
                	</ul>
        	</div>

        	<div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-edit"></span>  Edit School Details </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
                        	{{Form:: open(array('url' =>'school/save','method' => 'POST','role'=>'form' ))}}
                        	<div class="form-group">
								{{Form::label('schoolidlabel','School ID')}}
								{{Form::text('schoolidtext',$school->getSchool_id(), array('style'=>'width: 150px','class'=>'form-control','readonly'))}}
							</div>
							<div class ="form-group">
								{{Form::label('schoolnamelabel','School')}}
								{{Form::text('schoolnametext',$school->getSchool_name(),array('class' =>'form-control','required'))}}
							</div>
							<div class="form-group">
		
								{{Form::label('categorylabel','Category')}}

								@if($school->getCategory()=='national')
								 	<div class = "radio">
								 		<label>
								 			{{ Form::radio('category', 'national',true); }}
								 			National School

								 		</label>
								 		<label>
								 			{{ Form::radio('category', 'local government'); }}
								 			Local Government School
								 		</label>
									        					
	        						</div>
    							@else
    								<div class= "radio">
    										<label>
								 			{{ Form::radio('category', 'national'); }}
								 			National School

								 		</label>
								 		<label>
								 			{{ Form::radio('category', 'local government',true); }}
								 			Local Government School
								 		</label>
    	
    								</div>
    							@endif
       
    						</div>
    						<div class="form-group">
													
									{{Form::label('capacitylabel','No of Classes Available:')}}
									{{Form::text('capacitytext',$school->getNo_of_classes(),array('style'=>'width: 150px','class' =>'form-control','required'))}}
							</div>
							<div class="form-group">
		
									{{Form::label('contactlabel','Contact Number:')}}
									{{Form::text('contacttext',$school->getContact_no(),array('style'=>'width: 150px','class' =>'form-control','required'))}}
							</div>
							<div class="form-group">
								 {{Form::submit('Save Changes',array('class' => 'btn btn-primary' ))}}
        						
        					</div>
									
									{{ Form:: close()}}
                        </div> </div>








@stop