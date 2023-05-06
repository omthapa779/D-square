<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>D-Square | Jobs</title>
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
				<li class="current"><a href="/" title="home">Home</a></li>
            <li><a href="{{url('/about/')}}" title="about">About</a></li>
				<li><a href="{{url('/jobs/')}}" title="jobs">Jobs</a></li>
				<li><a href="{{url('/announcement/')}}" title="announcement">Announcements</a></li>
				<li><a href="{{url('/admin_page/')}}" title="dashboard">SYSTEM</a></li>	
			</ul>

         <a href="{{url('/apply/')}}" title="sign-up" class="button button-primary cta">Apply for Job</a>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
	</header>
  
    <section id="about">
   <div class="row about-how">
          
            <h1 class="intro-header" data-aos="fade-up">Recent Jobs</h1>           

            <div class="about-how-content" data-aos="fade-up">
                <div class="about-how-steps block-1-2 block-tab-full group">
                @foreach ($Photo as $Photo)
                    <div class="bgrid step" data-item="{{ $Photo->job_id }}">
                        <h3>{{$Photo->title}}</h3>
                        <p>{{$Photo->description}}</p> 
                        <h5>Posted by: {{$Photo->posted_by}}</h5>
                        <h5>Posted Date: {{$Photo->created_at}}</h5>
                    </div>
                    @endforeach
                </div>           
           </div> <!-- end about-how-content -->

        </div> <!-- end about-how -->
   </section>


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