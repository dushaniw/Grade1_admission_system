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
		body{
     		margin: 0;
     		background: url('img/school.png');
     		background-repeat:repeat;
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

	<body >
		<div class="container">
			<div class="row"> 
				<div class="page-header" >
					<div class = "media">
						<div class="pull-left">
							<img class = "media-object" src = "img/logo.png"  alt = "Media Object">
						</div>
						<div class = "media-body">
							<br/>
							<h1 class = "media-heading"><b>Admissions of Students for Grade 1 </b></h1>
							<h4 class="media-heading">MINISTRY OF EDUCATION</h4>
						</div>
					</div>
				</div>
			</div> 
			<nav class = "navbar navbar-inverse" role = "navigation">
				<ul class="nav navbar-nav" >
					<li class="active"> {{HTML::link('welcome', 'Home')}} </li>
					<li>{{HTML::link('#', 'About')}}</li>
				</ul>
			</nav>
			<br/>
			<div class = "page-container">	
				@yield('content')
			</div>
		</div>
		

	</body>
</html>