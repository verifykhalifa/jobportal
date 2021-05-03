<?php 

$id = Auth::user()->id;
$realid = $id;

?>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{asset('//fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Seeker | Job Portal</title>

    <!-- CSS -->
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}" >
 <link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}"> 
 <link rel="stylesheet" href="{{asset('css/jquery-te.css') }}"> 
 <link rel="stylesheet" href="{{asset('css/slick.css') }}">  
 <link rel="stylesheet" href="{{asset('css/main.css') }}">
 <link rel="stylesheet" href="{{asset('css/responsive.css') }}">
 <!-- font -->
 <link href="{{asset('https://fonts.googleapis.com/css?family=Varela+Round') }}" rel="stylesheet">

 <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
 <!-- icons -->
 <link rel="icon" href="{{asset('images/ico/favicon.ico') }}">	
 <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
 <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
 <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/ico/apple-touch-icon-72-precomposed.html') }}">
 <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
 <!-- icons -->

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 <!-- Template Developed By ThemeRegion -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <!-- {{ config('app.name', 'Laravel') }}-->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img class="img-fluid" src="{{asset('images/logo.png') }}" alt="Logo"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="tr-dropdown active"><a href="http://seeker.test">Home</a>
                            
                        </li>
                        <li><a href="http://seeker.test/jobpost">Post A Job</a></li>
                        <li><a href="http://seeker.test/joblisting">Job List</a></li>
                        <li><a href="#">Job Details</a></li>
                        <li class="tr-dropdown"><a href="#">Pages</a>
                            <ul class="tr-dropdown-menu tr-list fadeInUp" role="menu">
                                <li><a href="http://seeker.test/employeeprofile">Employee Profile</a></li>
                                <li><a href="http://seeker.test/employerprofile">Employer Profile</a></li>
                                <li><a href="http://seeker.test/viewcompany">View Compnay</a></li>
                                <li><a href="http://seeker.test/viewresume">View Resume</a></li>
                                <li><a href="http://seeker.test/comingsoon">Coming Soon</a></li>
                                <li><a href="http://seeker.test/notification">Notification</a></li>
                                <li><a href="http://seeker.test/contact">Contact</a></li>
                                <li><a href="http://seeker.test/pricing">Pricing</a></li>
                                <li><a href="/signups">Sign Up</a></li>
                                <li><a href="/logins">Sign In</a></li>
                                <li><a href="500.html">500 Opsss</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <!--<li><i class="fa fa-user"></i></li>-->
                         <li><a href="/logins">Log In</a></li>
                            @if (Route::has('register'))
                            <li><a href="/signups">Register</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->role == 'employer')
                                    <a href="/employer" ><span style="margin-left: 20px;">Dashboard</span></a>
                                @elseif(Auth::user()->role == 'employee')
                                    <a href="/employee/index" ><span style="margin-left: 20px;">Profile</span></a>
                                @elseif(Auth::user()->role == 'superadmin')
                                <a href="/superadmin" ><span style="margin-left: 20px;">Dashboad</span></a>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="tr-profile section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="tr-sidebar">
                            <ul class="nav nav-tabs profile-tabs section" role="tablist">
                                <li role="presentation"><a href="/employer" ><i class="fa fa-life-ring" aria-hidden="true"></i> Account Info</a></li>
                                <li role="presentation"><a href="/employer/show" ><span><i class="fa fa-user-o" aria-hidden="true"></i></span> Company Profile</a></li>
                            <li role="presentation"><a href="/employer/{{$realid}}/edit" ><span><i class="fa fa-user-o" aria-hidden="true"></i></span> Edit Company Profile</a></li>
                                <li role="presentation"><a href="#" ><span><i class="fa fa-bell-o" aria-hidden="true"></i></span> Open Role</a></li>
                                <li role="presentation"><a href="/job/create" ><span><i class="fa fa-user-md" aria-hidden="true"></i></span> Create Job</a></li>
                                <li role="presentation"><a href="/job/show" ><span><i class="fa fa-bell-o" aria-hidden="true"></i></span> View All Job</a></li>
                                <li role="presentation"><a href="#" ><span><i class="fa fa-clone" aria-hidden="true"></i></span> Archived Job Post</a></li>
                                <li role="presentation"><a href="#" ><span><i class="fa fa-scissors" aria-hidden="true"></i></span> Logout</a></li>
                            </ul>
                            <a href="#" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span>Download Resume as doc</span></a>		        			
                        </div><!-- /.tr-sidebar -->        		
                    </div>
                    <div class="col-md-8 col-lg-9">
                        
                            <div class="container">
                                <div class="breadcrumb-info text-center">
                                    <main class="py-4">
                                        @yield('content')
                                    </main>
                                </div>
                            </div><!-- /.container -->
                       
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.tr-profile -->	

        <div class="tr-download-app bg-image section-padding section-before">
            <div class="container text-center">
                <h1>Download on App Store</h1>
                <div class="app-content">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="images/icons/app1.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>Google Play</strong>
                                    </div>
                                </a>					
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="images/icons/app2.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>App Store</strong>
                                    </div>
                                </a>					
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="download-app">
                                <a href="#">
                                    <div class="download-image">
                                        <img src="images/icons/app3.png" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="download-info">
                                        <span>available on</span>
                                        <strong>Windows Store</strong>
                                    </div>
                                </a>										
                            </div>
                        </div>
                    </div><!-- /.row -->				
                </div><!-- /.app-content -->
            </div><!-- /.contaioner -->
        </div><!--/. tr-download-app -->


        <div class="footer">
            <div class="footer-top section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h3>About Us</h3>
                                <ul class="tr-list">
                                    <li><a href="#">About Seeker</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">International Partners</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Feedback</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h3>Job Seekers</h3>
                                <ul class="tr-list">
                                    <li><a href="#">Create Account</a></li>
                                    <li><a href="#">Career Counseling</a></li>
                                    <li><a href="#">My Bdjobs</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Video Guides</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h3>Employers</h3>
                                <ul class="tr-list">
                                    <li><a href="#">Create Account</a></li>
                                    <li><a href="#">Products/Service</a></li>
                                    <li><a href="#">Post a Job</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-widget">
                                <h3>Newsletter</h3>
                                <p>Earum cumque doloribus, incidunt! Tempora voluptatibus</p>
                                <form class="contact-form" method="post" action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Your email Id">
                                    </div>             
                                    <div class="form-group">
                                        <button  class="btn btn-primary">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>Copyright © 2020 <a href="#">Seeker.com.</a> All rights reserved.</p>
                    </div>
                    <div class="footer-social pull-right">
                        <ul class="tr-list">
                            <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.footer-bottom -->
        </div><!-- /.footer -->
        
        
        <!-- JS -->
      
        <script src="{{asset('js/jquery.min.js') }}"></script>
        <script src="{{asset('js/popper.min.js') }}"></script>
        <script src="{{asset('js/bootstrap.min.js') }}"></script>
        <script src="{{asset('js/inview.min.js') }}"></script>
        <script src="{{asset('js/counterup.min.js') }}"></script>
        <script src="{{ asset('js/iziToast.js') }}"></script>
        @include('vendor.lara-izitoast.toast')
        <script src="{{asset('js/waypoints.min.js') }}"></script>
        <script src="{{asset('js/slick.min.js') }}"></script>
        <script src="{{asset('js/jquery-te.min.js') }}"></script>
        <script src="{{asset('https://maps.google.com/maps/api/js?sensor=true') }}"></script>
        <script src="{{asset('js/gmaps.min.js') }}"></script>
        <script src="{{asset('js/main.js') }}"></script>
        <script>
            (function(){
        
                var map;  
        
                map = new GMaps({
                    el: '#gmap',
                    lat: 19.425409,     
                    lng: -99.167308,   
                    scrollwheel:false,
                    zoom: 14,
                    zoomControl : false,
                    panControl : false,
                    streetViewControl : true,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    clickable: false
                });
        
                var styles = [ 
        
                    {
                        "featureType": "road",
                        "stylers": [
                            { "color": "#ffffff" }
                        ]
                    },{
                        "featureType": "water",
                        "stylers": [
                            { "color": "#b3dbee" }
                        ]
                        },{
                        "featureType": "landscape",
                        "stylers": [
                            { "color": "#eaeaea" }
                        ]
                    },{
                        "elementType": "labels.text.fill",
                        "stylers": [
                            { "color": "#a8a8a8" }
                        ]
                    },{
                      "featureType": "poi",
                      "stylers": [
                            { "color": "#c9e79f" }
                        ]
                    },{
                        "elementType": "labels.text",
                        "stylers": [
                            { "saturation": 1 },
                            { "weight": 0.1 },
                            { "color": "#a8a8a8" }
                        ]
                    }
        
                ];
        
                map.addStyle({
                    styledMapName:"Styled Map",
                    styles: styles,
                     mapTypeId: "map_style"  
                });
        
                map.setStyle("map_style");
            }()); 
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-73239902-1', 'auto');
          ga('send', 'pageview');
          <script>
            $(".countdown").countdown({
                date: "29 dec 2019 12:00:00",
                format: "on"
            });    	
        </script>
        </script> 
    </div>
</body>
</html>
