@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
	<ul class="nav navbar-nav" >
		<li> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
		<li>{{HTML::link('#', 'About')}}	</li>
		
		<li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
		<li><a href ="/selectSchool?username=<?php echo $username ?>">My Applications</a></li>
		<li class="active"><a href="/search/schoolselecteduser?username=<?php echo $username ?>">Search</a></li>
	</ul>
		<p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>
        <div class="row">
        	<div class="col-md-3">
            	    <br/>
                	<ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li  class="active"><a href = "/search/schoolselecteduser?username=<?php echo $username ?>">Search school selected Applicants</a>
						</li>
                	</ul>
        	</div>
	 		<div class = "col-md-9">
	 			<br/>
	 			{{Form:: open(array('url' =>'search/schoolapplicantsfinduser','method' => 'GET','role'=>'form' ))}}  
	 				
	 				{{Form::hidden('username',$username)}}
	 				<div class="form-group">
	 					{{Form::label('school1label', 'School')}}
	 						
	  					<select  class="form-control" name="school">
	    					@foreach($schools as $school)
	      						<option value="{{$school->getSchool_id()}}">
	      						{{$school->getSchool_id()."-".$school->getSchool_name()}}
	      						</option>
	    					@endforeach
	  					</select>
	  				</div>
	  				<div class="form-group">
	  						{{Form::submit('Find selected students',array('class' =>'btn btn-primary'))}}
					</div>
					<div class="form-group">
							{{Form:: close()}}
					</div>
	  		</div>
			</div>
	</div>
	
@stop