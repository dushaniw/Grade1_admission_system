@extends('G1SAS/layouts/normal_user_layout')
@section('content')

        <nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                <li > <a href="/userpage/home?username=<?php echo $username ?>">Home</a> </li>
                <li>{{HTML::link('#', 'About')}}        </li>
                <li class="active"><a href = "/userpage/studentadd?username=<?php echo $username ?>">My Children </a></li>
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
                        <li><a href="/child/childrenoverview?username=<?php echo $username ?>">Overview</a></li>
                        <li class="active"><a href = "/userpage/studentadd?username=<?php echo $username ?>">Add New Child</a></li>
                </ul>
        </div>
        <div class = "col-md-9">
                <div class = "panel panel-primary panel-transparent">
                        <div class ="panel-heading">
                                <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-user"></span> Add New Child </p></h3>
                        </div>
                        <div class = "panel-body"> <div class = "col-md-10">
                             @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{Session::get('error')}}
                                    </div>
                                    @endif
                                {{Form:: open(array('url' =>'child/add','method' => 'POST','role'=>'form' ))}}
                                        {{Form::hidden('usernameText',$username)}}
                                        <div class="form-group">
                                                {{Form::label('applicantIdLabel', 'Your child ID');}}
                                                {{Form:: text('idText',$applicantId,array('class' =>'form-control','required','readonly' => 'true','style'=>'width: 100px','placeholder'=>'First Name'))}}    
                                        </div>
                                        <div class="form-group">
                                                {{Form::label('firstNameLabel', 'First Name');}}
                                                {{Form::hidden('usernameText',$username)}}
                                                {{Form:: text('firstNameText',null, array('class' =>'form-control','required','placeholder'=>'First Name'))}}    
                                        </div>
                                        <div class="form-group">
                                                {{Form::label('lastNameLabel', 'Last Name');}}
                                                {{ Form:: text( 'lastNameText',null, array('class' =>'form-control','required','placeholder'=>'Last Name')) }}
                                        </div>
                                        <div class="form-group">
                                                {{Form::label('dobLabel', 'Date of Birth')}}
                                                <br/>
                                                {{ Form::selectRange('year', 2000, 2015,2015,['class'=>'div-inline','style'=>'width: 100px' ]) }}
                                                {{ Form::selectMonth('month',1,['class'=>'div-inline','style'=>'width: 100px']) }}
                                                
                                                {{ Form::selectRange('date', 1, 31,1,['class'=>'div-inline','style'=>'width: 100px']) }}
                                        </div> 
                                     
                                        <div class="form-group">
                                                {{Form::label('genderLabel', 'Gender')}}
                                                <div class = "radio">
                                                        <label>
                                                                {{ Form::radio('gender','Male',true)}}
                                                                        Male
                                                        </label>
                                                        <label>
                                                                {{Form::radio('gender', 'Female')}}
                                                                        Female
                                                        </label>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                                {{Form::label('religionLabel', 'Religion')}}
                                                {{Form:: text( 'religionText',null, array('style'=>'width: 250px','class' =>'form-control','required','placeholder'=>'Religion')) }}  
                                        </div>
                                        <div class="form-group">
                                                {{Form::submit('Save',array('class' => 'btn btn-primary' ))}}
                                        </div>
                                {{ Form:: close()}}
                        </div> </div>
                </div>
        </div>
        </div>
@stop         


                   

         
 
                                

                        

                                        
                
        
        


