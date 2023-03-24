<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>D-Squared | Dashboard </title>
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   <div class="sidebar">
   <br>
   <h1 style="color: #0087cc; text-align: center">D-Squared</a>   
   <br><br>
  <a class="active" href="{{url('/admin_page/')}}">Dashboard</a>
  <a href="#news">Applicants</a>
  <a href="#contact">Create Jobs</a>
  <a href="#about">Announce</a>
  <a href="{{url('logout')}}" class="logout_button">Logout</a>
</div>

<!-- Page content -->
<div class="content">
  ..
</div>
  </body>
