@extends('G1SAS/layouts/normal_user_layout')
@section('content')

        <nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li > {{HTML::link('#', 'Home')}} </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"> {{HTML::link('#','My Children')}} </li>
                <li>{{HTML::link('#','My Applications')}} </li>
        </ul>
                <p class = "navbar-text pull-right">
         Signed in as <a href = "#" class = "navbar-link"><?php echo $username?></a> | <a href = "#" class = "navbar-link">Sign Out</a> </p>
        </nav>
        <div class="row">
        <div class="col-md-3">
                <br/>
                <ul class = "nav nav-pills nav-stacked" role = "navigation">
                        <li class="active"><a href = "#">Overview</a></li>
                        <li><a href = "userpage/studentadd">Add New Child</a></li>
                </ul>
        </div>

@stop