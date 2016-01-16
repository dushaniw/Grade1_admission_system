@extends('G1SAS/layouts/outsider_layout')

@section('content')

        <nav class = "navbar navbar-inverse" role = "navigation">
                <ul class="nav navbar-nav" >
                        <li> {{HTML::link('/', 'Home')}} </li>
                        <li>{{HTML::link('#', 'About')}}</li>
                        <li class="active">{{HTML::link('guardian', 'Register')}}</li>
                </ul>
        </nav>
        <br/>
        <div class="row">
                <div class="col-md-12">
                        <div class = "panel panel-primary panel-transparent">
                                <div class ="panel-heading">
                                        <h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-user"></span> Sign Up </p></h3>
                                </div>  
                                <div class = "panel-body"> <div class="col-md-9"> 
                                        {{ Form:: open(array('role'=>'form','url' =>'guardian/add','method' => 'POST' ))}}
                                                <div class = "form-group">
                                                        {{Form::label('firstNameLabel', 'First Name')}}
                                                        {{ Form:: text( 'firstNameText',null, array('class' =>'form-control','required','placeholder'=>'First Name'))}}    
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('lastNameLabel', 'Last Name')}}
                                                        {{Form::text('lastNameText',null,array('class' =>'form-control','required','placeholder'=>'Last Name' ))}}
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('addressLabel', 'Permanent Address')}}
                                                        {{Form::text( 'addressText',null,array('class' =>'form-control','required','placeholder'=>'Address')) }}
                                                </div>
                                                 <div class = "form-group">
                                                        {{Form::label('emailLabel', 'Email Address')}}
                                                        {{Form::email('emailText', null,array('style'=>'width: 350px','class' => 'form-control','placeholder'=>'Email','required'))}}
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('passwordLabel', 'Password')}}
                                                        {{Form::password('password',array('style'=>'width: 350px','class' => 'form-control','required','placeholder'=>'Password'))}} 
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('confirmPasswordLabel', 'Confirm Password')}}
                                                        {{Form::password('confirm_password',array('style'=>'width: 350px','class' => 'form-control','required','placeholder'=>'Confirm Password'))}} 
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('nicLabel','NIC');}}
                                                        {{Form:: text('nicText',null,array('style'=>'width: 250px','class' => 'form-control','required','placeholder'=>'NIC'))}}          

                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('telephoneLabel', 'Telephone')}}
                                                        {{Form:: text( 'telephoneText',null,array('style'=>'width: 250px','class' => 'form-control','required','placeholder'=>'Telephone') ) }}
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('relationshipLabel', 'Relationship To Child')}}
                                                        <div class = "radio">
                                                                <label>
                                                                        {{ Form::radio('relationshiptochild','Mother',true)}}
                                                                        Mother
                                                                </label>
                                                                <label>
                                                                        {{Form::radio('relationshiptochild', 'Father')}}
                                                                        Father
                                                                </label>
                                                                <label>
                                                                        {{Form::radio('relationshiptochild', 'Legal Guardian')}}
                                                                        Legal Guardian
                                                                </label>
                                                        </div>
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('religionLabel', 'Religion')}}
                                                        {{Form:: text( 'religionText',null,array('style'=>'width: 250px','class' => 'form-control','required','placeholder'=>'Religion'))}}
                                     
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('nationalityLabel', 'Nationality')}}
                                                        {{Form:: text( 'nationalityText',null,array('style'=>'width: 250px','class' => 'form-control','required','placeholder'=>'Nationality'))}}
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::label('gramaNiladariDivisionNumberLabel', 'Grama Niladari Division Number')}}
                                                        {{Form:: select( 'gramaNiladariDivisionNumberText',$divisions,null,array('style'=>'width: 250px','class'=>'form-control'))}}
                                                </div>
                                                <div class = "form-group">
                                                        {{Form::submit('Sign Up',array('class' => 'btn btn-primary' ))}}
                                                     
                                                 </div>
                                        {{ Form:: close()}}
                                </div> </div> 
                        </div>
                </div>
        </div>

@stop
       

