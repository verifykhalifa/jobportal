@extends('layouts.app')
@section('content')



<div class="tr-breadcrumb bg-image section-before">

    

    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="breadcrumb-logo">
                <img src="{{asset('images/others/company-logo.png') }}" alt="Logo" class="img-fluid">
            </div>
            <div class="page-title">
                <h1><?=$posts->job_title?> @ {{Auth::user()->name}}</h1>
            </div>
            <ul class="tr-list job-meta list-inline">
                <li><i class="fa fa-map-signs" aria-hidden="true"></i><?=$posts->city?></li>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Full Time</li>
                <li><i class="fa fa-money" aria-hidden="true"></i><?=$posts->salary?></li>
                <li><i class="fa fa-tags" aria-hidden="true"></i><?=$posts->Job_levels?></li>
                <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : Jun 27, 2017</li>
            </ul>	
            <div class="buttons">
                <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
                <a href="#" class="btn button-bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i>Bookmark</a>
                <span class="btn button-share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span></span>
            </div>		
        </div>
    </div><!-- /.container -->
     
</div><!-- /.tr-breadcrumb -->

<div class="job-details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="job-summary section">
                    <span class="tr-title">Job Summary</span>
                    <p><?=$posts->jobsummary?></p> <br>
                    <span>Key Responsibilities:</span>
                    <p>Execute all visual design stages of website design from concept to final hand-off to development Create print advertisements, social media advertisements, client collateral & digital resizes according to Client demands With direction of the Creative team, input into new design ideas for client branding Update & keep all agency collateral materials, including keeping records of Client's logos, fonts, images, etc. </p>
                    <span>Minimum Requirements</span>
                    <p><?=$posts->requirement?></p> <br>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <?php if(!empty($employerinfos)) {?>
                    <?php
                     foreach($employerinfos as $employerinfo) { ?>

                <div class="tr-sidebar">
                    <div class="widget-area">
                        <div class="widget short-info">
                            <h3 class="widget_title">Short Info</h3>
                            <ul class="tr-list">
                                <li class="media"><div class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i></div> <div class="media-body"><span>Published:</span><?=$posts->created_at?></div></li>
                                <li class="media"><div class="pull-left"><i class="fa fa-user-plus" aria-hidden="true"></i></div> <div class="media-body"><span>Job poster:</span>{{Auth::user()->name}}</div></li>
                                <li class="media"><div class="pull-left"><i class="fa fa-industry" aria-hidden="true"></i></div> <div class="media-body"><span>Industry:</span>Marketing and Advertising</div></li>
                                <li class="media"><div class="pull-left"><i class="fa fa-line-chart" aria-hidden="true"></i></div> <div class="media-body"><span>Experience:</span>Entry level</div></li>
                                <li class="media"><div class="pull-left"><i class="fa fa-key" aria-hidden="true"></i></div> <div class="media-body"><span>Job function:</span><?=$posts->job_title?></div></li>
                            </ul>
                        </div><!-- /.widger -->
                        <div class="widget cmpany-info">
                            <h3 class="widget_title">Cmpany Info</h3>
                            <span>{{Auth::user()->name}}</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore </p>
                            <ul class="tr-list">
                                <li><span>Address:</span> <?=$employerinfo->city?></li>
                                <li><span>Compnay SIze:</span>  2k Employee</li>
                                <li><span>Industry:</span> <a href="#">Technology</a></li>
                                <li><span>Phone:</span><?=$employerinfo->phone?></li>
                                <li><span>Email:</span> <a href="#"><span class="__cf_email__" data-cfemail="f79e999198b79385988795988fd994989a">{{Auth::user()->email}}</span></a></li>
                                <li><span>Website:</span> <a href="#"><?=$employerinfo->website?></a></li>
                                <li><span></span></li>
                            </ul>
                            <div class="widget-social">
                                <ul class="tr-list">
                                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- /.widger -->
                    </div><!-- /.widget-area -->
                </div><!-- /.tr-sidebar -->
                <?php               
            }
           ?>
       <?php
           }            
       ?> 
            </div>
        </div><!-- row -->

        <div class="tr-cta">
            <div class="cta-content section">
                <div class="cta-info">
                    <div class="pull-left">
                        <h1>Add your resume and let your next job find you.</h1>
                    </div>
                    <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
                </div>
            </div><!-- /.cta-content -->
        </div><!-- /.tr-cta -->
        
        <div class="tr-job-posted similar-jobs">
            <span class="tr-title">Similar Jobs Post</span>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="job-item">
                        <div class="item-overlay">
                            <div class="job-info">
                                <a href="#" class="btn btn-primary">Full Time</a>
                                <span class="tr-title">
                                    <a href="#">Project Manager</a>
                                    <span><a href="#">Dig File</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                </ul>
                                <ul class="job-social tr-list">
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>										
                        </div>
                        <div class="job-info">
                            <div class="company-logo">
                                <img src="images/job/1.png" alt="images" class="img-fluid">
                            </div>
                            <span class="tr-title">
                                <a href="#">Project Manager</a>
                                <span><a href="#">Dig File</a></span>
                            </span>
                            <ul class="tr-list job-meta">
                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                            </ul>
                            <div class="time">
                                <a href="#"><span>Full Time</span></a>
                                <span class="pull-right">Posted 23 hours ago</span>
                            </div>																				
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="job-item">
                        <div class="item-overlay">
                            <div class="job-info">
                                <a href="#" class="btn btn-primary">Part Time</a>
                                <span class="tr-title">
                                    <a href="#">Design Associate</a>
                                    <span><a href="#">Loop</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                </ul>
                                <ul class="job-social tr-list">
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>										
                        </div>								
                        <div class="job-info">
                            <div class="company-logo">
                                <img src="images/job/2.png" alt="images" class="img-fluid">
                            </div>
                            <span class="tr-title">
                                <a href="#">Design Associate</a>
                                <span><a href="#">Loop</a></span>
                            </span>
                            <ul class="tr-list job-meta">
                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                            </ul>
                            <div class="time">
                                <a href="#"><span class="part-time">Part Time</span></a>
                                <span class="pull-right">Posted 1 day ago</span>
                            </div>			
                        </div>
                    </div>
                </div>	
                <div class="col-md-6 col-lg-3">
                    <div class="job-item">
                        <div class="item-overlay">
                            <div class="job-info">
                                <a href="#" class="btn btn-primary">Freelance</a>
                                <span class="tr-title">
                                    <a href="#">Graphic Designer</a>
                                    <span><a href="#">Humanity Creative</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                </ul>
                                <ul class="job-social tr-list">
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>										
                        </div>								
                        <div class="job-info">
                            <div class="company-logo">
                                <img src="images/job/3.png" alt="images" class="img-fluid">
                            </div>
                            <span class="tr-title">
                                <a href="#">Graphic Designer</a>
                                <span><a href="#">Humanity Creative</a></span>
                            </span>
                            <ul class="tr-list job-meta">
                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                            </ul>
                            <div class="time">
                                <a href="#"><span class="freelance">Freelance</span></a>
                                <span class="pull-right">Posted 10 day ago</span>
                            </div>			
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="job-item">
                        <div class="item-overlay">
                            <div class="job-info">
                                <a href="#" class="btn btn-primary">Full Time</a>
                                <span class="tr-title">
                                    <a href="#">Design Consultant</a>
                                    <span><a href="#">Families</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><i class="fa fa-map-signs" aria-hidden="true"></i>San Francisco, CA, US</li>
                                    <li><i class="fa fa-briefcase" aria-hidden="true"></i>Mid Level</li>
                                    <li><i class="fa fa-money" aria-hidden="true"></i>$5,000 - $6,000</li>
                                </ul>
                                <ul class="job-social tr-list">
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>										
                        </div>								
                        <div class="job-info">
                            <div class="company-logo">
                                <img src="images/job/4.png" alt="images" class="img-fluid">
                            </div>
                            <span class="tr-title">
                                <a href="#">Design Consultant</a>
                                <span><a href="#">Families</a></span>
                            </span>
                            <ul class="tr-list job-meta">
                                <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                            </ul>
                            <div class="time">
                                <a href="#"><span>Full Time</span></a>
                                <span class="pull-right">Posted Oct 09, 2017</span>
                            </div>				
                        </div>
                    </div>
                </div>													
            </div>
        </div><!-- /.tr-job-posted -->		
    </div><!-- /.container -->
</div><!-- /.tr-details -->	

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
                                <input type="email" class="form-control" required="required" placeholder="Your email Id">
                            </div>             
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-top -->

@endsection