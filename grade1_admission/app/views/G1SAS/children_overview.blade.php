@extends('G1SAS/layouts/normal_user_layout')
@section('content')

        <nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li ><a href="/userpage/home?username=<?php echo $username ?>">Home</a> </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a> </li>
                <li><a href ="/selectSchool?username=<?php echo $username ?>">My Applications</a></li>
                <li><a href="/search/schoolselecteduser?username=<?php echo $username ?>">Search</a></li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        <div class="col-md-3">
                <br/>
                <ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href="/child/childrenoverview?username=<?php echo $username ?>">Overview</a></li>
                        <li><a href = "/userpage/studentadd?username=<?php echo $username ?>">Add New Child</a></li>
                </ul>
        </div>

@stop