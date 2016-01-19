@extends('G1SAS/layouts/normal_user_layout')
@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li> <a href = "/school/overview?schoolidtext=<?php echo $school->getSchool_id()?>">Home</a></li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class><a href = "/school/viewpastpupilmarkingcriteria?schoolid=<?php echo $school->getSchool_id()?>"> Past Pupil </a>  </li>
                <li class="active"><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Applications</a> </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $school->getEmail()?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "/school/verifyapplication?schoolid=<?php echo $school->getSchool_id()?>">Verify Applications</a></li>
                        <li ><a href = "/search/schoolselected">Search Selected Applicants</a>
						</li>
                	</ul>
        	</div>
        	<div class = "col-md-9">
        		<div class="page-header" style="border-color:#303030">
					<h2>Verify Applications</h2>
				</div>
        		{{Form:: open(array('url' =>'school/verifytype1','method' => 'POST','class'=>'form-inline' ))}}
        				<div class="form-group">
                        		<h3><span class = "label label-default">Applications regarding close proximity</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
                        </div>
                        <br/>
                        <div class="form-group">
                        	<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[0] as $application)
            					<option value="{{$application}}">{{$application}}</option>
        					@endforeach
        					</select>	
        	            </div>
        	            <div class="form-group">
        	            	@if(empty($application_set_set[1]))
								{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
							@else
								{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
							@endif
        	       	 </div>
					
				{{Form:: close()}}
				<br/>
				{{Form:: open(array('url' =>'school/verifytype2','method' => 'POST','role'=>'form','class'=>'form-inline' ))}}
					<div class="form-group">
                        		<h3><span class = "label label-default">Applications regarding past pupils</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
					</div>
					<br/>
					<div class="form-group">
						<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[1] as $application)
            					<option value="{{$application}}">{{$application}}</option>
        					@endforeach
      					</select>
					</div>
					<div class="form-group">
						@if(empty($application_set_set[1]))
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
						@else
						{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
						@endif
					</div>
				{{Form:: close()}}
				<br/>

				{{Form:: open(array('url' =>'school/verifytype3','method' => 'POST','role'=>'form','class'=>'form-inline' ))}}
				<div class="form-group">
					<h3><span class = "label label-default">Applications regarding current students as siblings</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
				</div>
					<br/>
				<div class ="form-group">
						<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[2] as $application)
            					<option value="{{$application}}">{{$application}}</option>
       					 	@endforeach
      					</select>
				</div>
				<div class ="form-group">
						@if(empty($application_set_set[1]))
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
						@else
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
						@endif
				</div>
					{{Form:: close()}}

					<br/>
				{{Form:: open(array('url' =>'school/verifytype4','method' => 'POST','role'=>'form','class'=>'form-inline' ))}}
				<div class="form-group">
					<h3><span class = "label label-default">Applications regarding Educational Officers</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
				</div>
					<br/>
				<div class ="form-group">
						<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[3] as $application)
            					<option value="{{$application}}">{{$application}}</option>
       					 	@endforeach
      					</select>
				</div>
				<div class ="form-group">
						@if(empty($application_set_set[1]))
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
						@else
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
						@endif
				</div>
					{{Form:: close()}}

				<br/>

				{{Form:: open(array('url' =>'school/verifytype5','method' => 'POST','role'=>'form','class'=>'form-inline' ))}}
				<div class="form-group">
					<h3><span class = "label label-default">Applications regarding transferred officers</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
				</div>
					<br/>
				<div class ="form-group">
						<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[4] as $application)
            					<option value="{{$application}}">{{$application}}</option>
       					 	@endforeach
      					</select>
				</div>
				<div class ="form-group">
						@if(empty($application_set_set[1]))
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
						@else
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
						@endif
				</div>
					{{Form:: close()}}

				<br/>

				{{Form:: open(array('url' =>'school/verifytype6','method' => 'POST','role'=>'form','class'=>'form-inline' ))}}
				<div class="form-group">
					<h3><span class = "label label-default">Applications regarding people coming from abroad</span></h3>
                        		{{Form::hidden('school_id',$school->getSchool_id())}}
				</div>
					<br/>
				<div class ="form-group">
						<select class="form-control" name="type" style="width: 150px">
        					@foreach($application_set_set[5] as $application)
            					<option value="{{$application}}">{{$application}}</option>
       					 	@endforeach
      					</select>
				</div>
				<div class ="form-group">
						@if(empty($application_set_set[1]))
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary','disabled'))}}
						@else
							{{Form::submit('Click to Verify',array('class' =>'btn btn-primary'))}}
						@endif
				</div>
					{{Form:: close()}}

				<br/>
			</div>
	</div>
	
@stop