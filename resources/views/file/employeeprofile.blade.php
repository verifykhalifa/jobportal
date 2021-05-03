@extends('layouts.app')
@section('content')

<?php
$id = Auth::user()->id;
$emp = App\Employee::where('userid','=', $id)->get();
//dd($emp);
?>
    

<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="user-image">
                <img src="/storage/storage/{{$emp[0]['cover_image']}}" alt="Image" class="img-fluid">
            </div>
            <div class="user-title">
                <h1></h1>
            </div>		
            <ul class="job-meta tr-list list-inline">
            <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$emp[0]['location']}}</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>{{$emp[0]['phone']}}</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"><span class="__cf_email__" data-cfemail="59333136373d363c193e34383035773a3634">{{Auth::user()->email}}</span></a></li>
                <li><i class="fa fa-briefcase" aria-hidden="true"></i>{{$emp[0]['job_title']}}</li>
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
                        <li role="presentation"><a href="#resume" aria-controls="resume" role="tab" data-toggle="tab"><span><i class="fa fa-user-o" aria-hidden="true"></i></span> My Resume</a></li>
                        <li role="presentation"><a href="#edit-resume" aria-controls="edit-resume" role="tab" data-toggle="tab"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> Edit Resume</a></li>
                        <li role="presentation"><a href="#bookmark" aria-controls="bookmark" role="tab" data-toggle="tab"><span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span> Bookmark</a></li>
                        <li role="presentation"><a href="#archived" aria-controls="archived" role="tab" data-toggle="tab"><span><i class="fa fa-clone" aria-hidden="true"></i></span> Archived Apply Job</a></li>
                        <li role="presentation"><a href="#close-account" aria-controls="close-account" role="tab" data-toggle="tab"><span><i class="fa fa-scissors" aria-hidden="true"></i></span> Close Account</a></li>
                    </ul>	
                    <a href="#" class="btn btn-primary"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span>Download Resume as doc</span></a>		        			
                </div><!-- /.tr-sidebar -->        		
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in show active account-info" id="account-info">	
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
                                <li>Address<span>{{$emp[0]['location']}}</span></li>
                                <li>Phone Number<span>{{$emp[0]['phone']}}</span></li>
                                <li>Email Id<span><a href="#"><span class="__cf_email__" data-cfemail="a6cccec9c8c2c9c3e6c1cbc7cfca88c5c9cb">{{Auth::user()->email}}</span></a></span></li>
                                <li>Industry Expertise<span>{{$emp[0]['job_title']}}</span></li>
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
                    
                    
                    <div role="tabpanel" class="tab-pane section" id="resume">
                        <ul class="tr-list resume-info">
                            <li class="career-objective media">
                                <div class="icon">
                                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Career Objective</span>
                                    <p>{{$emp[0]['careerobj']}}</p> <br>
                                    
                                </div>
                            </li><!-- /.career-objective -->
                            <li class="work-history media">
                                <div class="icon">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Work History</span>
                                    <ul class="tr-list">
                                        <li>
                                            <span>{{$emp[0]['job_title']}}</span>
                                            <p>{{$emp[0]['companyname']}}</p>
                                            <span>{{$emp[0]['fromyear']}}</span> <span>{{$emp[0]['toyear']}}</span> 
                                            
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li><!-- /.work-history -->	
                            <li class="education-background media">
                                <div class="icon">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Education Background</span>
                                    <ul class="tr-list">
                                        <li>
                                            <span>{{$emp[0]['Job_levels']}}</span>
                                            <ul class="tr-list">
                                                <li>{{$emp[0]['instituename']}}</li>
                                                <li>{{$emp[0]['fromyear']}} - {{$emp[0]['toyear']}}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li><!-- /.education-background -->
                            <li class="qualification media">
                                <div class="icon">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Special Qualification:</span>
                                    <ol>
                                        <li>{{$emp[0]['qualification']}}</li>
                                        
                                    </ol>
                                </div>
                            </li><!-- /.qualification -->
                            <li class="language-proficiency media">
                                <div class="icon">
                                    <i class="fa fa-language" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Language Proficiency:</span>
                                    <ul class="tr-list">
                                        <li>
                                            <span>English</span>
                                            <ul class="tr-list rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>German</span>
                                            <ul class="tr-list rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Spanish</span>
                                            <ul class="tr-list rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Latin</span>
                                            <ul class="tr-list rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul>
                                        </li>
                                    </ul>							    	
                                </div>
                            </li><!-- /.language-proficiency -->	
                            <li class="personal-deatils media">
                                <div class="icon">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Personal Deatils</span>
                                    <ul class="tr-list">
                                        <li><span class="left">Full Name</span><span class="middle">:</span> <span class="right">{{Auth::user()->name}}</span></li>
                                        <li><span class="left">Date of Birth</span><span class="middle">:</span> <span class="right">{{$emp[0]['birthday']}}</span></li>
                                        <li><span class="left">Birth Place</span><span class="middle">:</span> <span class="right">{{$emp[0]['birthplace']}}</span></li>
                                        <li><span class="left">Nationality</span><span class="middle">:</span> <span class="right">{{$emp[0]['nationality']}}</span></li>
                                        <li><span class="left">Sex</span><span class="middle">:</span> <span class="right">{{$emp[0]['gender']}}</span> </li>
                                        <li><span class="left">Address</span><span class="middle">:</span> <span class="right">{{$emp[0]['location']}}</span></li>
                                    </ul>							    	
                                </div>
                            </li><!-- /.personal-deatils -->
                            							
                        </ul>
                        <div class="buttons pull-right">
                            <a href="#" class="btn button-cancle">Cancle</a>
                            <a href="#" class="btn btn-primary">Update Your Resume</a>
                        </div>								
                    </div><!-- /.tab-pane -->
                  
            <div role="tabpanel" class="tab-pane edit-resume section" id="edit-resume">
                <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
                            @csrf
                        <ul class="tr-list resume-info">
                            <li class="career-objective">
                                <div class="icon">
                                    <i class="fa fa-black-tie" aria-hidden="true"></i>
                                </div>  
                                <div class="media-body">
                                    <span class="tr-title">Career Objective</span>
                                    
                                        <label for="careerobj" class="col-md-4 col-form-label text-md-left">Career Objective
                                        </label>
                                        <div class="col-md-6">
                                        <textarea type="text" class="form-control" style="width: 200%" name="careerobj" placeholder="Enter Career Objective"></textarea>
                                        </div>
                                    
                                </div>
                            </li><!-- /.career-objective -->
                            <li class="work-history">
                                <div class="icon">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="media-body additem-work">
                                    <span class="tr-title">Work History</span>
                                    <div id="addhistory" class="additem">
                                        <span id="clone" class="icon clone"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="icon remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        <div class="code-edit-small">
                                            <label>Job Title</label>
                                            <div class="col-md-6">
                                                <select class="form-control" style="width: 200%" name="job_title" >
                                                    <option value="">Job Sector</option>
                                                    <option value="Accounting, Auditing, Finance">Accounting, Auditing, Finance</option>
                                                    <option value="Administrative & Office Work">Administrative & Office Work</option>
                                                    <option value="Agriculture and Farming">Agriculture and Farming</option>
                                                    <option value="Building & Architecture">Building & Architecture</option>
                                                    <option value="Community & Social Services">Community & Social Services</option>
                                                    <option value="Consulting & Strategy">Consulting & Strategy</option>
                                                    <option value="Creative & Design">Creative & Design</option>
                                                    <option value="Customer Service & Support">Customer Service & Support</option>
                                                    <option value="Employability & Soft Skills">Employability & Soft Skills</option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="Food Services & Catering">Food Services & Catering</option>
                                                    <option value="Health & Safety">Health & Safety</option>
                                                    <option value="Hospitality/Leisure/Travel">Hospitality/Leisure/Travel</option>
                                                    <option value="Human Reasources">Human Reasources</option>
                                                    <option value="IT & Software">IT & Software</option>
                                                    <option value="Legal Services">Legal Services</option>
                                                    <option value="Management & Business">Management & Business</option>
                                                    <option value="Development">Development</option>
                                                    <option value="Marketing & Communications">Marketing & Communications</option>
                                                    <option value="Medical & Pharmaceutical">Medical & Pharmaceutical</option>
                                                    <option value="Natural Sciences">Natural Sciences</option>
                                                    <option value="Project & Product Management">Project & Product Management</option>
                                                    <option value="Quality Control & Assuranc">Quality Control & Assurance</option>
                                                    <option value="Real Estate & Property Management">Real Estate & Property Management</option>
                                                    <option value="Research, Teaching & Training">Research, Teaching & Training</option>
                                                    <option value="Sales">Sales</option>
                                                    <option value="Security">Security</option>
                                                    <option value="Supply Chain & Procurement">Supply Chain & Procurement</option>
                                                    <option value="Trades & Services">Trades & Services</option>
                                                    <option value="Transport & Logistics">Transport & Logistics</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                                
                                            </div>
                                            <label>Company Name</label>
                                            <div class="col-md-6">
                                                <input  type="text" class="form-control"  style="width: 200%"  name="companyname"  >
            
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <label>From</label>
                                                    <div class="calendar">
                                                         <input type="date" name="workstart"  class="form-control"/>
                                                    </div><!-- calendar -->
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label>To</label>
                                                    <div class="calendar">
                                                        <input type="date" class="form-control" name="workend"/>
                                                    </div><!-- calendar -->
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox">
                                                        <label for="logged-1"><input type="checkbox" name="logged-1" id="logged-1">I currently work here</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>						    	
                                </div>
                            </li><!-- /.work-history -->
                            <li class="education-background">
                                <div class="icon">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <div class="media-body additem-edu">
                                    <span class="tr-title">Education Background</span>
                                    <div id="add-edu" class="additem">
                                        <span id="edu-clone" class="icon clone"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="icon remove"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        
                                        <div class="code-edit-small">
                                            <label>Degree</label>
                                            <div class="col-md-6">
                                                <select class="form-control" style="width: 200%" name="Job_levels" >
                                                    <option value="">Highest Qualification</option>
                                                    <option value="Secondary School Leaving Certificate">Secondary School Leaving Certificate</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="HND">HND</option>
                                                    <option value="OND">OND</option>
                                                    <option value="BA/BSc">BA/BSc</option>
                                                    <option value="NCE">NCE</option>
                                                    <option value="MBA/MSc">MBA/MSc</option>
                                                    <option value="MBBS">MBBS</option>
                                                    <option value="MPhil/PhD">MPhil/PhD</option>
                                                    <option value="Vocational">Vocational</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                                
                                            </div>
                                            <label>Institute Name</label>
                                            <div class="col-md-6">
                                                <input  type="text" class="form-control"  style="width: 200%"  name="instituename"  >
            
                                            </div>
                                            <input  type="hidden" class="form-control"  style="width: 200%"  name="userid"  value="{{Auth::user()->id}}">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <label>From Year</label>
                                                    <div class="calendar">
                                                        <input type="date" class="form-control" name="fromyear" >
                                                    </div><!-- calendar -->
                                                </div>
                                                <div class="col-sm-6 col-md-4">
                                                    <label>To Year (or expected)</label>
                                                    <div class="calendar">
                                                        <input type="date" class="form-control"  name="toyear"/>
                                                    </div><!-- calendar -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        	
                                    </div><!-- /.additem -->
                                </div>
                            </li><!-- /.education-background -->	
                            <li class="qualification">
                                <div class="icon">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Special Qualification:</span>
                                    <div class="col-md-6">
                                        <textarea type="text" class="form-control" style="width: 200%" name="qualification" placeholder="Enter Qualification"></textarea>
                                    </div>
                                </div>
                            </li><!-- /.qualification -->	
                            <li class="language-proficiency code-edit-small">
                                <div class="icon">
                                    <i class="fa fa-language" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Language Proficiency:</span>
                                    <div class="rating-star">
                                        <span class="pull-left code-edit">English</span>
                                        <div class="rating">
                                            <input type="radio" id="star1" name="rating" /><label class = "full" for="star1"></label>

                                            <input type="radio" id="star2" name="rating"/><label class="half" for="star2"></label>

                                            <input type="radio" id="star3" name="rating"/><label class ="full" for="star3"></label>

                                            <input type="radio" id="star4" name="rating"/><label class="half" for="star4"></label>

                                            <input type="radio" id="star5" name="rating"/><label class ="full" for="star5"></label>

                                            <input type="radio" id="star6" name="rating"/><label class="half" for="star6"></label>

                                            <input type="radio" id="star7" name="rating"/><label class ="full" for="star7"></label>

                                            <input type="radio" id="star8" name="rating"/><label class="half" for="star8"></label>

                                            <input type="radio" id="star9" name="rating"/><label class ="full" for="star9"></label>

                                            <input type="radio" id="star10" name="rating"/><label class="half" for="star10"></label>
                                        </div>							    		
                                    </div>
                                    <div class="rating-star">
                                        <span class="pull-left code-edit">German</span>
                                        <div class="rating">
                                            <input type="radio" id="star11" name="rating1" /><label class = "full" for="star11"></label>

                                            <input type="radio" id="star12" name="rating1"/><label class="half" for="star12"></label>

                                            <input type="radio" id="star13" name="rating1"/><label class ="full" for="star13"></label>

                                            <input type="radio" id="star14" name="rating1"/><label class="half" for="star14"></label>

                                            <input type="radio" id="star15" name="rating1"/><label class ="full" for="star15"></label>

                                            <input type="radio" id="star16" name="rating1"/><label class="half" for="star16"></label>

                                            <input type="radio" id="star17" name="rating1"/><label class ="full" for="star17"></label>

                                            <input type="radio" id="star18" name="rating1"/><label class="half" for="star18"></label>

                                            <input type="radio" id="star19" name="rating1"/><label class ="full" for="star19"></label>

                                            <input type="radio" id="star20" name="rating1"/><label class="half" for="star20"></label>
                                        </div>							    		
                                    </div>	
                                    <div class="rating-star">
                                        <span class="pull-left code-edit">Spanish</span>
                                        <div class="rating">
                                            <input type="radio" id="star21" name="rating2" /><label class = "full" for="star21"></label>

                                            <input type="radio" id="star22" name="rating2"/><label class="half" for="star22"></label>

                                            <input type="radio" id="star23" name="rating2"/><label class ="full" for="star23"></label>

                                            <input type="radio" id="star24" name="rating2"/><label class="half" for="star24"></label>

                                            <input type="radio" id="star25" name="rating2"/><label class ="full" for="star25"></label>

                                            <input type="radio" id="star26" name="rating2"/><label class="half" for="star26"></label>

                                            <input type="radio" id="star27" name="rating2"/><label class ="full" for="star27"></label>

                                            <input type="radio" id="star28" name="rating2"/><label class="half" for="star28"></label>

                                            <input type="radio" id="star29" name="rating2"/><label class ="full" for="star29"></label>

                                            <input type="radio" id="star30" name="rating2"/><label class="half" for="star30"></label>
                                        </div>							    		
                                    </div>		
                                    <div class="rating-star">
                                        <span class="pull-left code-edit">Latin</span>
                                        <div class="rating">
                                            <input type="radio" id="star31" name="rating3" /><label class = "full" for="star31"></label>

                                            <input type="radio" id="star32" name="rating3"/><label class="half" for="star32"></label>

                                            <input type="radio" id="star33" name="rating3"/><label class ="full" for="star33"></label>

                                            <input type="radio" id="star34" name="rating3"/><label class="half" for="star34"></label>

                                            <input type="radio" id="star35" name="rating3"/><label class ="full" for="star35"></label>

                                            <input type="radio" id="star36" name="rating3"/><label class="half" for="star36"></label>

                                            <input type="radio" id="star37" name="rating3"/><label class ="full" for="star37"></label>

                                            <input type="radio" id="star38" name="rating3"/><label class="half" for="star38"></label>

                                            <input type="radio" id="star39" name="rating3"/><label class ="full" for="star39"></label>

                                            <input type="radio" id="star40" name="rating3"/><label class="half" for="star40"></label>
                                        </div>							    		
                                    </div>								    		    	
                                </div>
                            </li><!-- /.language-proficiency -->
                            <li class="personal-deatils code-edit-small">
                                <div class="icon">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Personal Deatils</span>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Full Name<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                        <input  type="text" class="form-control"  style="width: 100%"  name="name" value="{{Auth::user()->name}}" disabled  >
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Date of Birth<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="calendar">
                                                <input type="date" class="form-control" name="birthday">
                                            </div><!-- calendar -->
                                        </div>
                                    </div>	
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Birth Place<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                            <input  type="text" class="form-control"  style="width: 100%"  name="birthplace"  >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Phone<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                            <input  type="text" class="form-control" placeholder="Enter Your Phone Number Starting With Your Area Code" style="width: 100%"  name="phone"  >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Nationality<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                            <input  type="text" class="form-control" placeholder="Nationality" style="width: 100%"  name="nationality"  >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Sex<span class="pull-right">:</span> </label>
                                        </div>
                                            <div class="col-sm-8" style="padding-bottom:20px">
                                                    <select class="form-control" style="width: 100%" name="gender" >
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        
                                                    </select>
                                            </div>
                                        
                                    </div>	
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label>Location<span class="pull-right">:</span> </label>
                                        </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                            <select  class="form-control" style="width: 100%" name="location">
                                                <option class="hidden">Select {{ __('location') }}</option>
                                                <option name="location" value="London UK">London UK</option>
                                                <option name="location" value="Newyork, USA">Newyork, USA</option>
                                                <option name="location" value="Seoul, Korea">Seoul, Korea</option>
                                                <option name="location" value="Beijing, China">Beijing, China</option>
                                                <option name="location" value="Lagos, Nigeria">Lagos, Nigeria</option>
                                                <option name="location" value="Ibadan, Nigeria">Ibadan, Nigeria</option>
                                                <option name="location" value="Rivers, Nigeria">Rivers, Nigeria</option>
                                                <option name="location" value="Abuja, Nigeria">Abuja, Nigeria</option>
                                            </select><!-- select -->
                                        </div>
                                    </div>   	
                                </div>
                            </li><!-- /.personal-deatils -->
                            <li class="personal-deatils">
                                <div class="icon">
                                    <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <span class="tr-title">Image Upload</span>
                                   
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" style="width: 100%" name="cover_image" />
                                        </div>
                                    
                                </div>
                                
                            </li><!-- /.personal-deatils -->				
                        </ul>
                        <div class="buttons pull-right">
                            <a href="#" class="btn button-cancle">Cancle</a>
                            <button type="submit" class="btn btn-primary">Update Your Resume</button>
                        </div>								
                    </div><!-- /.tab-pane -->
                </form>
                    <div role="tabpanel" class="tab-pane bookmark" id="bookmark">
                        <div class="row">
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Full Time</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Project Manager</a>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="job-details.html" class="btn btn-primary">Part Time</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Design Associate</a>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Freelance</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Graphic Designer</a>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Full Time</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Design Consultant</a>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Part Time</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Project Manager</a>
                                                <span><a href="#">Sky Creative</a></span>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>										
                                    </div>								
                                    <div class="job-info">
                                        <div class="company-logo">
                                            <img src="images/job/5.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="#">Project Manager</a>
                                            <span><a href="#">Sky Creative</a></span>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Freelance</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Design Associate</a>
                                                <span><a href="#">Pencil</a></span>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>										
                                    </div>								
                                    <div class="job-info">
                                        <div class="company-logo">
                                            <img src="images/job/6.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="#">Design Associate</a>
                                            <span><a href="#">Pencil</a></span>
                                        </span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                            <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                            <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                        </ul>
                                        <div class="time">
                                            <a href="#"><span class="freelance">Freelance</span></a>
                                            <span class="pull-right">Posted 23 hours ago</span>
                                        </div>				
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#" class="btn btn-primary">Full Time</a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Graphic Designer</a>
                                                <span><a href="#">Fox</a></span>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>										
                                    </div>								
                                    <div class="job-info">
                                        <div class="company-logo">
                                            <img src="images/job/7.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="#">Graphic Designer</a>
                                            <span><a href="#">Fox</a></span>
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
                            <div class="col-md-4 remove-item">
                                <div class="job-item">
                                    <span class="remove-icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                    <div class="item-overlay">
                                        <div class="job-info">
                                            <a href="#"><span class="btn btn-primary">Part Time</span></a>
                                            <span class="tr-title">
                                                <a href="job-details.html">Design Consultant</a>
                                                <span><a href="#">Owl</a></span>
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
                                                <li><a href="job-details.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>										
                                    </div>								
                                    <div class="job-info">
                                        <div class="company-logo">
                                            <img src="images/job/8.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="#">Design Consultant</a>
                                            <span><a href="#">Owl</a></span>
                                        </span>
                                        <ul class="tr-list job-meta">
                                            <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                            <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                            <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                        </ul>
                                        <div class="time">
                                            <a href="#"><span class="part-time">Part Time</span></a>
                                            <span class="pull-right">Posted 10 day ago</span>
                                        </div>			
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->							
                    </div><!-- /.tab-pane -->

                    <div role="tabpanel" class="tab-pane apply-job" id="archived">
                        <div class="job-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/1.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/2.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/3.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/4.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/5.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/6.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="job-item remove-item">
                            <div class="job-info">
                                <div class="left-content">
                                    <div class="clearfix">
                                        <div class="company-logo">
                                            <img src="images/job/7.png" alt="images" class="img-fluid">
                                        </div>
                                        <span class="tr-title">
                                            <a href="job-details.html">Design Associate</a><span><a href="#">Loop</a></span>
                                        </span>
                                        <span><a href="#" class="btn btn-primary">Part Time</a></span>
                                    </div>
                                    <ul class="tr-list job-meta">
                                        <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span>San Francisco, CA, US</li>
                                        <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span>Mid Level</li>
                                        <li><span><i class="fa fa-money" aria-hidden="true"></i></span>$5,000 - $6,000</li>
                                    </ul>										
                                </div>
                                <div class="right-content">
                                    <a href="#" class="btn button-cancle">Delete application</a>
                                    <span class="applied">Applied: 3 weeks ago</span>
                                </div>
                            </div>
                        </div>						
                    </div><!-- /.tab-pane -->

                    <div role="tabpanel" class="tab-pane section close-account" id="close-account">
                        <h1>Delete Your Account</h1>
                        <span>Are you sure, you want to delete your account?</span>
                        <div class="buttons">
                            <a href="#" class="btn btn-primary">Delete Account</a>
                            <a href="#" class="btn button-cancle">Cancle</a>
                        </div>
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