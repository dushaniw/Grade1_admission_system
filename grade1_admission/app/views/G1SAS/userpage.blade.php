@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
	<ul class="nav navbar-nav" >
		<li class="active"> {{HTML::link('#', 'Home')}} </li>
		<li>{{HTML::link('#', 'About')}}	</li>
		
		<li> {{HTML::link('children','My Children')}} </li>
		<li>{{HTML::link('#','My Applications')}} </li>
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
		<h2>Your Name: {{Form::label('namelabel',$guardian->getFirstName()." ".$guardian->getLastName())}}</h2>
		</div>
		<h4>NIC     :{{Form::label('niclabel',$guardian->getNIC())}}</h4>
		<h4>Address :{{Form::label('addresslabel',$guardian->getPermanent_address())}}</h4>
		<h4>Nationality   :{{Form::label('niclabel',$guardian->getNationality())}}</h4>
		<h4>Religion      :{{Form::label('addresslabel',$guardian->getReligion())}}</h4>
		<h4>Contact Number  :{{Form::label('niclabel',$guardian->getContact_number())}}</h4>
		
	</div>
</div>

{{Form::open(array('role'=>'form','url' => 'userpage/studentadd', 'method'=>'POST'))}}
       {{Form::hidden('username',$username)}}
       {{Form::submit('Add New Child',array('class' => 'btn btn-primary' ))}}
       
{{ Form:: close()}}

{{Form:: open(array('url' =>'selectSchool','method' => 'GET' ))}}
		{{Form::hidden('username',$username)}}
        {{Form::submit('Add Application')}}
{{ Form:: close()}}

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


@stop