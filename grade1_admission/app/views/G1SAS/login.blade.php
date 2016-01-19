@extends('G1SAS/layouts/outsider_layout')

@section('content')
	<nav class = "navbar navbar-inverse" role = "navigation">
		<ul class="nav navbar-nav" >
			<li class="active"> {{HTML::link('/', 'Home')}} </li>
			<li>{{HTML::link('#', 'About')}}</li>
			<li>{{HTML::link('guardian', 'Register')}}</li>
		</ul>
	</nav>
	<br/>
	<div class="row"> 
		<div class="col-md-5"> <div class="col-md-offset-2">
			<div class = "panel panel-primary panel-transparent">
				<div class ="panel-heading">
					<h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-user"></span> Sign in to your account </p></h3>
				</div>	
				<div class = "panel-body">
					{{Form::open(array('role'=>'form','url' => 'login', 'method'=>'POST'))}}
						<div class="form-group"> 
							{{Form::label('userTypeL', 'User Type');}}
        					{{Form:: select( 'userTypeA',array('Admin','School','Normal User'),'Normal User',['class'=>'form-control'])}}
        				</div>
        				<div class="form-group"> 
							{{Form::label('userNameL','User Name')}}
							{{Form::text('userNameText',null, array('class' =>'form-control','required','placeholder'=>'User Name'))}} 
						</div>
						<div class="form-group"> 
							{{Form::label('passwordL','Password')}}
							{{Form::password('password',array('class' => 'form-control','required','placeholder'=>'Password'))}}
						</div>
						<div class="form-group"> 
							{{Form::submit('Sign in',array('class' => 'btn btn-primary' ))}}
						</div>
					{{Form::close()}}
    				<strong>Don't have an account ? {{HTML::link('guardian', 'Register')}}</strong>
    			</div>
			</div> 
		</div> </div>
		<div class="col-md-6">
			<div class="col-md-offset-4"> 
				{{Form::open(array('role'=>'form','url' => 'login/search', 'method'=>'POST'))}}
					<div class = "panel panel-primary panel-transparent">
						<div class="panel-heading">
								<h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-list-alt"></span> Admission Results</p> </h3>
								</div>
						<div class="panel-body">
							<div class="form-group">
								@if(Session::has('childId'))
									{{Form::text('childIDText',Session::get('childId'),array('class' =>'form-control','placeholder'=>'Application ID','required' ))}}
								@else
                					{{ Form:: text('childIDText',null,array('class' =>'form-control','placeholder'=>'Application ID','required'))}}
        						@endif
        					</div>
							<div class="form-group">
								{{Form::submit('Submit',array('class' => 'btn btn-primary' ))}}
							</div>
							<br/>
								@if(Session::has('result'))
									<div class="form-group">
										{{Form::label('resultL',Session::get('result'))}}
                					</div>
                				@endif
							
						</div>
					</div> 
				{{Form::close()}}
			</div>
		</div>
	</div>
			
				
			<div class="row">
				<div class="col-md-12">
				
						<br/>
						<p class="lead" style = "color:black"> Admission of student for Grade 1 for the government schools are now available until {{Form::label('deadline',DBDeadlineController::getDeadline())  }}</p>
					
				</div>
			</div> 
@stop