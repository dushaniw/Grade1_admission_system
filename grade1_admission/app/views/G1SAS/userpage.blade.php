@extends('G1SAS/layouts/normal_user_layout')

@section('content')



<nav class = "navbar navbar-inverse" role = "navigation">
	<ul class="nav navbar-nav" >
		<li class="active"> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
		<li>{{HTML::link('#', 'About')}}	</li>
		
		<li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
		<li><a href ="/selectSchool?username=<?php echo $username ?>">My Applications</a></li>
		<li><a href-"#">Search</a></li>
	</ul>
		<p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>


<div class="row">
	<div class="col-md-3">
		<br/>
		<ul class = "nav nav-pills nav-stacked" role = "navigation">
			<li class = "active"><a href = "#">Overview</a></li>
			<li><a href = "#">Edit Account Settings</a></li>
		</ul>
	</div>
	<div class ="col-md-9">
		<div class="page-header" style="border-color:#303030">
	<h2><?php echo $guardian->getFirstName()." ".$guardian->getLastName()?></h2>
		</div>

		<h4><strong>NIC     	    : </strong><?php echo  $guardian->getNIC() ?></h4>
		<h4><strong>Address         : </strong><?php echo  $guardian->getPermanent_address()?></h4>
		<h4><strong>Nationality     : </strong><?php echo  $guardian->getNationality()?></h4>
		<h4><strong>Religion        : </strong><?php echo $guardian->getReligion()?></h4>
		<h4><strong>Contact Number  :</strong> <?php echo $guardian->getContact_number() ?></h4>
		
	</div>
</div>


{{Form:: open(array('url' =>'userpage/searchUserSchool','method' => 'POST' ))}}
        {{Form::submit('Search selected school')}}
{{ Form:: close()}}

{{Form:: open(array('url' =>'search/schoolselected','method' => 'POST' ))}}
        {{Form::submit('Search school selected applicants')}}
{{ Form:: close()}}

{{Form:: open(array('url' =>'edit','method' => 'POST' ))}}
		{{Form::hidden('username',$username)}}
        {{Form::submit('Change Category Detial ')}}
{{ Form:: close()}}


{{Form:: open(array('url' =>'edit/changep','method' => 'POST' ))}}
		{{Form::hidden('username',$username)}}
        {{Form::submit('Change school Piority level ')}}
{{ Form:: close()}}

@stop