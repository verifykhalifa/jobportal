@extends('layouts.employee')
@section('content')



<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="user-image">
                <img src="images/others/author.png" alt="Image" class="img-fluid">
            </div>
            <div class="user-title">
                <h1>{{Auth::user()->name}}</h1>
            </div>		
            <ul class="job-meta tr-list list-inline">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+0123 456 789</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__" data-cfemail="59333136373d363c193e34383035773a3634">{{Auth::user()->email}}</span></a></li>
                <li><i class="fa fa-briefcase" aria-hidden="true"></i>UI & UX Designer</li>
            </ul>
            <ul class="breadcrumb-social social-icon-bg  tr-list">
                <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i> <span>Twitter</span> </a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i> <span>Google Plus</span> </a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i><span>Linkedin</span> </a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i> <span>Dribbble</span></a></li>
                <li><a href="#"><i class="fa fa-behance"></i> <span>Behance</span></a></li>
                <li><a href="#"><i class="fa fa-globe"></i> <span>Website</span> </a></li>
            </ul>			
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->


<div class="tab-pane fade in show active account-info" id="account-info">	
    <div class="tr-fun-fact">
        <div class="row">
            <div class="col-sm-4">
                <div class="fun-fact">
                    <div class="fun-fact-icon">
                        <img src="images/icons/fun-fact4.png" alt="images" class="img-fluid">
                    </div>
                    <div class="media-body">
                        <h1 class="counter">329</h1>
                        <span>Viewed my resume</span>
                    </div>
                </div><!-- /.fun-fact -->
            </div>
            <div class="col-sm-4">
                <div class="fun-fact">
                    <div class="fun-fact-icon">
                        <img src="images/icons/fun-fact5.png" alt="images" class="img-fluid">
                    </div>
                    <div class="media-body">
                        <h1 class="counter">32</h1>
                        <span>Application submit</span>
                    </div>
                </div><!-- /.fun-fact -->									
            </div>
            <div class="col-sm-4">
                <div class="fun-fact">
                    <div class="fun-fact-icon">
                        <img src="images/icons/fun-fact6.png" alt="images" class="img-fluid">
                    </div>
                    <div class="media-body">
                        <h1 class="counter">27</h1>
                        <span>Call for interview</span>
                    </div>
                </div><!-- /.fun-fact -->
            </div>
        </div><!-- ./row -->							
    </div><!-- /.tr-fun-fact -->

    <div class="section resume-last-updated">
        <span class="icon pull-left"><img src="images/icons/1.png" alt="Icon" class="img-fluid"></span>
        <div class="updated-info">
            <span class="pull-left">Resume last updated on</span>
            <span class="pull-right">24/4/2017</span>
        </div>
    </div><!-- /.resume-last-updated -->

    <div class="section display-information">
        <div class="title title-after">
            <div class="icon"><img src="images/icons/2.png" alt="Icon" class="img-fluid"></div> 
            <span>Your display Information</span>
        </div>

        <div class="change-photo">
            <div class="user-image">
                <img src="images/others/author.png" alt="Image" class="img-fluid">
            </div>
            <div class="upload-photo">
                <label class="btn btn-primary" for="upload-photo">
                    <input type="file" id="upload-photo">
                    Change Photo
                </label>
                <span class="max-size">Max 20 MB</span>
            </div>
        </div>
        <ul class="tr-list account-details">
            <li>Display Name<span>{{Auth::user()->name}}</span></li>
            <li>Address<span>San Francisco, CA, US</span></li>
            <li>Phone Number<span>+0123456789</span></li>
            <li>Email Id<span><a href="#"><span class="__cf_email__" data-cfemail="a6cccec9c8c2c9c3e6c1cbc7cfca88c5c9cb">{{Auth::user()->email}}</span></a></span></li>
            <li>Industry Expertise<span>UI & UX Designer</span></li>
        </ul>								
    </div><!-- /.display-information -->
    <div class="section">
        <div class="title title-after">
            <div class="icon"><img src="images/icons/3.png" alt="Icon" class="img-fluid"></div> 
            <span>Social Link</span>
        </div>
        <ul class="social social-icon-bg tr-list">
            <li><i class="fa fa-facebook"></i><span class="media-body"><a href="#">https://www.facebook.com/jhondoe</a></span></li>
            <li><i class="fa fa-twitter"></i><span class="media-body"><a href="#">https://www.twitter.com/jhondoe</a></span></li>
            <li><i class="fa fa-google-plus"></i><span class="media-body"><a href="#">https://www.googleplus.com/jhondoe</a></span></li>
            <li><i class="fa fa-linkedin"></i><span class="media-body"><a href="#">https://www.linkedin.com/jhondoe</a></span></li>
            <li><i class="fa fa-dribbble"></i><span class="media-body"><a href="#">https://www.dribbble.com/jhondoe</a></span></li>
            <li><i class="fa fa-behance"></i><span class="media-body"><a href="#">https://www.behance.com/jhondoe</a></span></li>
            <li><i class="fa fa-globe"></i><span class="media-body"><a href="#">https://www.globe.com/jhondoe</a></span></li>
        </ul>						
    </div>
</div><!-- /.tab-pane -->



@endsection