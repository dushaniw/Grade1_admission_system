@extends('G1SAS/layouts/normal_user_layout')

@section('content')

<nav class = "navbar navbar-inverse" role = "navigation">
  <ul class="nav navbar-nav" >
    <li class> <a href="/userpage/home?username=<?php echo $username ?>">Home</a></li>
    <li>{{HTML::link('#', 'About')}}  </li>
    
    <li> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a></li>
    <li class="active"><a href = "/selectSchool?username=<?php echo $username ?>">My Applications </a></li>
    <li><a href="/search/schoolselecteduser?username=<?php echo $username ?>">Search</a></li>
  </ul>
    <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
</nav>

<div class="row">
  <div class="col-md-3">
    <br/>
    <ul class = "nav nav-pills nav-stacked" role = "navigation">
      <li><a href = "#">Overview</a></li>
      <li class = "active"><a href = "/selectSchool?username=<?php echo $username ?>">Add New Application</a></li>
      <li> <a href="edit?username=<?php echo $username ?>">Edit Category Details</a></li>
    </ul>
  </div>
  <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">


	<h1> edit category detail </h1>

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
			 {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',0)}}
	        {{Form::submit('Edit Category1 Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',1)}}
		

	        {{Form::submit('Edit Category2 Detial ')}}
<select class="form-school-control" name="schoolId">
        @foreach($schools as $school)
            <option value="{{$school}}">{{$school}}</option>
        @endforeach
      </select>

	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',2)}}
	        {{Form::submit('Edit Category3 Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',3)}}
	        {{Form::submit('Edit Category 4 Detial ')}}

	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',4)}}
	        {{Form::submit('Edit Category Detial ')}}
	{{ Form:: close()}}

	{{Form:: open(array('url' =>'edit/editcategory','method' => 'POST' ))}}
	         {{Form::hidden('nic',$nic)}}
			 {{Form::hidden('type',5)}}
	        {{Form::submit('Edit Category Detial ')}}
	{{ Form:: close()}}

</body>
</html>