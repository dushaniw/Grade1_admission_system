@extends('G1SAS/layouts/normal_user_layout')
@section('content')

        <nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li ><a href="/userpage/home?username=<?php echo $username ?>">Home</a> </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"> <a href="/child/childrenoverview?username=<?php echo $username ?>">My Children</a> </li>
                <li>{{HTML::link('#','My Applications')}} </li>
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
        
        <table >

                        <tr>
                <th>Applicant ID</th>
                <th>Frist Name</th> 
                <th>Last Name</th>
                <th>Gender</th>
                <th>DateOfBirth</th>
               
            </tr>
            @foreach($children as $child)
            <tr>
                <td>{{$child->getApplicantId()}}</td>
                <td>{{$child->getFirstname()}}</td>
                <td>{{$child->getLastname()}}</td>
                <td>{{$child->getGender()}}</td>
                <td>{{$child->getDateOfBirth()}}</td>
             </tr>
            @endforeach
        </table>
@stop