<!DOCTYPE html>
<html>
	<head>
		<title>Grade 1 Admissions - MINISTY OF EDUCATION SRI LANKA</title>

		<!-- Bootstrap -->
		{{ HTML::style('css/bootstrap.min.css') }}
      
      
      	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      	<!--[if lt IE 9]>
      	<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      	<![endif]-->
 

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src = "https://code.jquery.com/jquery.js"></script>
      
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		{{ HTML::script('js/bootstrap.min.js') }}

		<style>
		.bckg {
     		margin: 0;
     		background: url('backgroundimage.jpg');
     		background-size: 1440px 650px;
     		background-repeat:no-repeat;
    		display: compact;
    		color:black;
    		
     		
		}

		.panel-primary > .panel-heading {
			border: 0;
     		background-color: 	#303030 !important;
     		color:	#B8B8B8;
		}

		 .panel-transparent {
		 	 border: 0;
		 	 background: rgba(255, 255, 255, 0.4);
 			 box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
		 		
		 	
   		 }

   		
     	

		</style>
	</head >

	<body>
		<div class="container">
		
			<div class="row">
				<div class="page-header">
					<div class = "media">
						<div class="pull-left">
							<img class = "media-object" src = "logo.jpg"  alt = "Media Object">
						
						<div class = "media-body">
							<br/>
							<h1 class = "media-heading">Admissions of Students for Grade 1 </h1>
							<h4 class="media-heading">MINISTRY OF EDUCATION</h4>
						</div>
					</div>
				</div>
			</div>
			<div class = "bckg">
			<nav class = "navbar navbar-inverse" role = "navigation">
				<ul class="nav navbar-nav" >
					<li class="active"> {{HTML::link('/welcome', 'Home')}} </li>
					<li>{{HTML::link('#', 'About')}}</li>
				</ul>
			</nav>
			<br/>

			{{Form::open(array('role'=>'form','url' => 'login', 'method'=>'post'))}}			
				<div class="row"> 
					<div class="col-md-5"> <div class="col-md-offset-2">
						<div class = "panel panel-primary panel-transparent">
							<div class ="panel-heading">
								<h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-user"></span> Sign in to your account </p></h3>
							</div>	
							<div class = "panel-body">
								<div class="form-group"> 
									{{Form::label('emailL','Email Address')}}
									{{Form::text('emailT',null, array('class' =>'form-control','placeholder'=>'Email Address'))}} 
									<br/>
									{{Form::label('passwordL','Password')}}
									{{Form::password('passwordT',array('class' => 'form-control','placeholder'=>'Password'))}}
									<br/>
									{{Form::submit('Sign in',array('class' => 'btn btn-primary' ))}}
       								<strong>Don't have an account ? {{HTML::link('#', 'Register')}}</strong>
    							</div>
    						</div>
						</div> 	
					</div> </div>
					<div class="col-md-6">
					<div class="col-md-offset-4"> 
						<div class = "panel panel-primary panel-transparent">
							<div class="panel-heading">
								<h3 class="panel-title"> <p class="text-center"><span class = "glyphicon glyphicon-list-alt"></span> Admission Results</p> </h3>
							</div>
							<div class="panel-body">
								<div class="form-group">

									{{Form::text('applicationIdT',null,array('class' =>'form-control','placeholder'=>'Application ID' ))}}
									<br/>
									{{Form::submit('Search Results',array('class' => 'btn btn-primary' ))}}
									<br/>
								
								</div>
							</div>
						</div> 
					</div>
					</div>
				</div>
			
			{{ Form::close() }}		
			<div class="row">
				<div class="col-md-12">
				
						<br/>
						<p class="lead"> Admission of student for Grade 1 - year 2017 for the government schools are now available. Apply Now !</p>
					
				</div>
			</div>
		</div>
		</div>


	</body>
</html>