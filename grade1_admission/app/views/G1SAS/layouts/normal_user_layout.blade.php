<!DOCTYPE html>
<html>
	<head>
		<title>Grade 1 Admissions - MINISTY OF EDUCATION SRI LANKA</title>

		<!-- Bootstrap -->
		{{ HTML::style('/css/bootstrap.min.css') }}
      
      
      	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      	<!--[if lt IE 9]>
      	<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      	<![endif]-->
 

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src = "https://code.jquery.com/jquery.js"></script>
      
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		{{ HTML::script('/js/bootstrap.min.js') }}

		<style>
		body{
     		margin: 0;
     		background: url('/img/school.png');
     		background-repeat:repeat;
    		display: compact;
    		color:black;
    		
     		
		}

		.div-inline{
			padding: 5px 10px ;
			line-height:150px; 
			border-color : #C8C8C8; 
			border-radius:3px ; 
		}



		.panel-primary > .panel-heading {
			border-color: #303030;
     		background-color: 	#303030 !important;
     		color:	#B8B8B8;
		}

		 .panel-transparent {
		 	 border-color: #303030;
		 	 background: rgba(255, 255, 255, 0);
 			 box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
		 		
		 	
   		 }


   		  	.nav-pills > li > a {
  				background-color: #303030 !important;
				border-bottom-width:1px;
		 		border-bottom-color: #D0D0D0;
		 		border-bottom-style: solid;
		 		border-radius:0px;
		 		color: #FFFFFF;
		 	}

	 		.nav-pills > li > a:focus, .nav-pills > li > a:hover{
	 			background-color: #606060   !important;
	 			border-bottom-width:1px;
		 		border-bottom-color: #D0D0D0;
		 		border-bottom-style: solid;
		 		border-radius:0px;
		 		color: #FFFFFF;

	 		}

   			.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
  				background-color: #303030 !important;
				border-bottom-width:1px;
		 		border-bottom-color: #D0D0D0;
		 		border-bottom-style: solid;
		 		border-radius:0px;
		 		color: #3366FF;

			}
		
   		 	
		</style>
	</head >

	<body >
		<div class="container">
			<div class="row"> 
				<div class="page-header" >
					<div class = "media">
						<div class="pull-left">
							<img class = "media-object" src = "/img/logo.png"  alt = "Media Object">
						</div>
						<div class = "media-body">
							<br/>
							<h1 class = "media-heading"><b>Admissions of Students for Grade 1 </b></h1>
							<h4 class="media-heading">MINISTRY OF EDUCATION</h4>
						</div>
					</div>
				</div>
			</div> 
			

			<div class = "page-container">	
				@yield('content')
			</div>
			
		</div>
		

	</body>
</html>