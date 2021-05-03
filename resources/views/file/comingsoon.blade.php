@extends('layouts.app')
@section('content')

<div class="tr-coming-soon section-padding bg-image section-before">
    <div class="container text-center">
        <div class="logo">
            <a href="index.html"><img class="img-fluid" src="images/logo2.png" alt="Logo"></a>
        </div>
        <h1>Coming Soon!</h1>
        <h2>Be Ready,There Is Just:</h2>
        <ul class="countdown tr-list">
            <li>                    
                <span class="days">57</span>
                <p>days</p>
            </li>
            <li>
                <span class="hours">16</span>
                <p>hours</p>
            </li>
            <li>
                <span class="minutes">44</span>
                <p>minutes</p>
            </li>
            <li>
                <span class="seconds">27</span>
                <p>seconds</p>
            </li>               
        </ul>	

        <form action="#" class="tr-form">
            <div class="form-group">
                <input type="email" class="form-control" required="required" placeholder="Your Mail">						
            </div> 
            <div class="form-group">
                <button type="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>					
        </form><!-- /.tr-form -->

        <div class="social">
            <ul class="tr-list">
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>Copyright © 2020 <a href="#">Seeker.com.</a> All rights reserved.</p>
        </div>								
    </div><!-- /.container -->		
</div><!-- /.tr-coming-soon -->	

<!-- JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/inview.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery-te.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/countdown.js"></script>
<script src="js/main.js"></script>
<script>
    $(".countdown").countdown({
        date: "29 dec 2019 12:00:00",
        format: "on"
    });    	
</script>

@endsection