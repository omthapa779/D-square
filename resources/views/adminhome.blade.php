<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>D-Square | System Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/base.css')}}" rel="stylesheet">
    <link href="{{asset('css/vendor.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <style type="text/css" media="screen">
      #styles { 

   	    background: white;
   		 padding-top: 15rem;
   		 padding-bottom: 12rem;   	
   	}      	
   </style>  

<script src="{{asset('js/modernizr.js')}}"></script>
   <script src="{{asset('js/pace.min.js')}}"></script>

</head>

<body id="top">
    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

		<div class="header-logo">
	   	<a href="/">D-Squared</a>
	   </div>

	   <nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li class="current"><a href="/" title="home">Register</a></li>
            <li><a href="{{url('/about/')}}" title="about">Upload</a></li>
				<li><a href="{{url('/jobs/')}}" title="jobs">Jobs Upload</a></li>
				<li><a href="{{url('/announcement/')}}" title="announcement">Applicants</a></li>
			</ul>

         <a href="{{url('/admin_page/')}}" title="sign-up" class="button button-primary cta">Dashboard</a>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
	</header>
    

<h1 class="contact_home"><a href="{{url('/jobadd/')}}">ADD A JOB TO THE DASHBOARD HERE</a></h1>

<br>
<h1 class="announce_home"><a href="{{url('/announce')}}">Want to Announce? Announce Here.</a> </h1>
<a href="{{route('logout')}}"><button> logout</button> </a>
 <a href="{{route('register')}}"><button> register new users</button> </a>


 <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>