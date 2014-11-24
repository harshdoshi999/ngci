<html ng-app="demoAppbyHRS">
<!-- In HTML tage I have initialize ng-app by giving App name in ng-app. -->
	<head>
		<!-- Included all js -->
    	<script type="text/javascript" src="assets/js/jquery-1.11.0.js"></script>
    	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="assets/js/bootswatch.js"></script>

    	<!-- All Angular JS -->
    	<script type="text/javascript" src="assets/js/angular.min.js"></script>
    	<script type="text/javascript" src="assets/js/config.js"></script>
    	<script type="text/javascript" src="assets/js/angular-route.min.js"></script>
    	<script type="text/javascript" src="assets/js/datafactory.js"></script>
    	<script type="text/javascript" src="assets/js/controller.js"></script>

    	<!-- Bootswatch CSS -->
    	<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen">
    	<link rel="stylesheet" href="assets/css/bootswatch.min.css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
	      	<div class="container">
	        	<div class="navbar-header">
	          		<a href="#/home" class="navbar-brand">{{appTitle}}</a>
		          	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		          	</button>
	        	</div>
	        	<div class="navbar-collapse collapse" id="navbar-main">
	          		<ul class="nav navbar-nav">
	            		<li class="dropdown">
	              			<a href="#/about">About</a>
	            		</li>
		            	<li>
		              		<a href="#/contact">Contact</a>
		            	</li>
		          	</ul>
		          	<ul class="nav navbar-nav navbar-right">
		            	<li class="dropdown">
		              		<a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer" id="download">Account <span class="caret"></span></a>
		              		<ul class="dropdown-menu" aria-labelledby="download">
				                <li><a href="#/login">Login</a></li>
				                <li><a href="#/signup">Sign up</a></li>
		              		</ul>
		            	</li>
		          	</ul>
	        	</div>
	    	</div>
		</div>