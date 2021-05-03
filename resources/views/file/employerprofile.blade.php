@extends('layouts.app')
@section('content')

<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="breadcrumb-logo">
                <img src="images/others/company-logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="page-title">
                <h1>Google inc</h1>
            </div>		
            <ul class="job-meta tr-list list-inline">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+0123 456 789</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__" data-cfemail="760503060619040236111919111a135815191b">[email&#160;protected]</span></a></li>
                <li><i class="fa fa-briefcase" aria-hidden="true"></i>IT Industry</li>
                <li><i class="fa fa-black-tie" aria-hidden="true"></i>Company Size: 2K</li>
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

<div class="tr-profile section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="tr-sidebar">
                    <ul class="nav nav-tabs profile-tabs section" role="tablist">
                        <li role="presentation"><a class="active" href="#account-info" aria-controls="account-info" role="tab" data-toggle="tab"><i class="fa fa-life-ring" aria-hidden="true"></i> Account Info</a></li>
                        <li role="presentation"><a href="#company-profile" aria-controls="company-profile" role="tab" data-toggle="tab"><span><i class="fa fa-user-o" aria-hidden="true"></i></span>Company Profile</a></li>
                        <li role="presentation"><a href="#edit-profile" aria-controls="edit-profile" role="tab" data-toggle="tab"><span><i class="fa fa-user-o" aria-hidden="true"></i></span>Edit Company Profile</a></li>
                        <li role="presentation"><a href="#open-role" aria-controls="open-role" role="tab" data-toggle="tab"><span><i class="fa fa-bell-o" aria-hidden="true"></i></span>Open Role</a></li>
                        <li role="presentation"><a href="#archived" aria-controls="archived" role="tab" data-toggle="tab"><span><i class="fa fa-clone" aria-hidden="true"></i></span>Archived Job Post</a></li>
                        <li role="presentation"><a href="#"><span><i class="fa fa-scissors" aria-hidden="true"></i></span>Logout</a></li>
                    </ul>	        			
                </div><!-- /.tr-sidebar -->        		
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">	
                        <div class="tr-fun-fact">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="fun-fact media">
                                        <div class="fun-fact-icon">
                                            <img src="images/icons/fun-fact4.png" alt="images" class="img-fluid">
                                        </div>
                                        <div class="media-body">
                                            <h1 class="counter">329</h1>
                                            <span>Total job post</span>
                                        </div>
                                    </div><!-- /.fun-fact -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="fun-fact media">
                                        <div class="fun-fact-icon">
                                            <img src="images/icons/fun-fact5.png" alt="images" class="img-fluid">
                                        </div>
                                        <div class="media-body">
                                            <h1 class="counter">23,563</h1>
                                            <span>Application submit</span>
                                        </div>
                                    </div><!-- /.fun-fact -->									
                                </div>
                                <div class="col-sm-4">
                                    <div class="fun-fact media">
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
                                <span class="pull-left">Profile last updated on</span>
                                <span class="pull-right">24/4/2017</span>
                            </div>
                        </div><!-- /.resume-last-updated -->

                        <div class="section display-information">
                            <div class="title title-after">
                                <div class="icon"><img src="images/icons/2.png" alt="Icon" class="img-fluid"></div> 
                                <span>Your display information</span>
                            </div>

                            <div class="change-photo">
                                <div class="user-image">
                                    <img src="images/others/company-logo.png" alt="Image" class="img-fluid">
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
                                <li>Compnay Name<span>Google Inc</span></li>
                                <li>Address<span>San Francisco, CA, US</span></li>
                                <li>Phone Number<span>+0123456789</span></li>
                                <li>Email Id<span><a href="#"><span class="__cf_email__" data-cfemail="ff959790919b909abf98929e9693d19c9092">[email&#160;protected]</span></a></span></li>
                                <li>Industry Expertise<span>IT Industry</span></li>
                                <li>Compnay Size<span>2,000</span></li>
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

                    <div role="tabpanel" class="tab-pane section" id="company-profile">
                        <ul class="tr-list resume-info">
                            <li class="career-objective">
                                <div class="icon">
                                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Company Info</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                                </div>
                            </li><!-- /.career-objective -->
                            <li class="mission-vision">
                                <div class="icon">
                                    <i class="fa fa-anchor" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Mission & Vision</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                                </div>
                            </li><!-- /.mission-vision -->	
                            <li class="company-achievement">
                                <div class="icon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Company Achievement</span>
                                    <ul class="tr-list">
                                        <li>
                                            <span>Introducing Our Mobile “Nexus”</span>
                                            <ul class="tr-list">
                                                <li>Year: 27 May, 2010</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </li>
                                        <li>
                                            <span>Win Award Stardom</span>
                                            <ul class="tr-list">
                                                <li>Year: 27 May, 2010</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- /.company-achievement -->							
                        </ul>
                        <div class="buttons pull-right">
                            <a href="#" class="btn button-cancle">Cancle</a>
                            <a href="#" class="btn btn-primary">Update Profile</a>
                        </div>								
                    </div><!-- /.tab-pane -->

                    <div role="tabpanel" class="tab-pane section" id="edit-profile">
                        <ul class="tr-list resume-info">
                            <li class="career-objective">
                                <div class="icon">
                                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Career Objective</span>
                                    <div class="code-edit">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>		
                                    </div>
                                </div>
                            </li><!-- /.career-objective -->
                            <li class="mission-vision">
                                <div class="icon">
                                    <i class="fa fa-anchor" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Mission & Vision</span>
                                    <div class="code-edit">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> <br>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni।</p>
                                    </div>
                                </div>
                            </li><!-- /.mission-vision -->
                            <li class="work-history">
                                <div class="icon">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                <div class="media-body additem-achiev">
                                    <span class="tr-title">Company Achievement</span>
                                    <div id="achievement" class="additem">
                                        <span id="achiev-clone" class="icon clone"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="icon remove"><i class="fa fa-times" aria-hidden="true"></i></span>

                                        <div class="code-edit-small">
                                            <label>Title</label>
                                            <div class="code-edit">
                                                <span>Introducing Our Mobile “Nexus”</span>
                                            </div>
                                            <label>Year</label>
                                            <div class="calendar">
                                                <input type="date" class="form-control" value="2017-06-25">
                                            </div>
                                        </div>
                                        <label>Description</label>
                                        <div class="code-edit">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>									    		
                                    </div>						    	
                                </div>
                            </li><!-- /.work-history -->	
                        </ul>
                        <div class="buttons pull-right">
                            <a href="#" class="btn button-cancle">Cancle</a>
                            <a href="#" class="btn btn-primary">Update Profile</a>
                        </div>														
                    </div><!-- /.tab-pane -->

                    <div role="tabpanel" class="tab-pane open-role" id="open-role">
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->
                        <div class="role remove-item">
                            <div class="left-content">
                                <div class="clearfix">
                                    <span class="tr-title">
                                        <a href="#">Design Associate</a>
                                    </span>
                                    <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                </div>
                                <span class="deadline">Application Deadline : Jun 27, 2017</span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                </ul>										
                            </div>
                            <div class="right-content">
                                <span><a href="#"><i class="fa fa-pencil"></i></a></span>
                                <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                            </div>
                        </div><!-- /.role -->							
                    </div><!-- /.tab-pane -->

                    <div role="tabpanel" class="tab-pane archived-job" id="archived">
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <span class="tr-title">
                                            <a href="job-post.html">Design Associate</a>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <span class="deadline">Application Deadline : Jun 27, 2017</span>										
                                </div>
                                <div class="right-content">
                                    <span class="remove-icon"><i class="fa fa-trash-o"></i></span>
                                </div>
                            </div>
                        </div><!-- /.job-item -->						
                    </div><!-- /.tab-pane -->
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






@endsection