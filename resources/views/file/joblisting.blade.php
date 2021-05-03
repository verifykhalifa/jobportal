@extends('layouts.app')
@section('content')

<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Graphics Designer</h1>
            </div>		
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Graphics Design</li>
            </ol>
            <div class="banner-form">
                <form action="#">
                    <input type="text" class="form-control" placeholder="Job Keyword">
                    <div class="dropdown tr-change-dropdown">
                        <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Location</span><i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu tr-change">
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Location 1</a></li>
                            <li><a href="#">Location 2</a></li>
                            <li><a href="#">Location 3</a></li>
                        </ul>								
                    </div><!-- /.category-change -->
                    <button type="submit" class="btn btn-primary" value="Search">Search</button>
                </form>
            </div><!-- /.banner-form -->				
        </div>
    </div><!-- /.container -->
</div><!-- tr-breadcrumb -->

<div class="jobs-listing section-padding">
    <div class="container">
        <div class="job-topbar">
            <span class="pull-left">Filter jobs by</span>
            <ul class="nav nav-tabs job-tabs" role="tablist">
                <li>235 Total jobs</li>
                <li role="presentation" class="active"><a href="#four-colum" aria-controls="four-colum" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                <li role="presentation"><a href="#two-column" aria-controls="two-column" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
            </ul>				
        </div>
        <div class="list-menu text-center clearfix">
            <ul class="tr-list">
                <li class="dropdown tr-change-dropdown">	
                    Category:					
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Designer</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Designer</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Developement</a></li>
                    </ul>								
                </li>
                <li class="dropdown tr-change-dropdown">	
                    Level:					
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Mid</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Top Level</a></li>
                        <li><a href="#">Mid Level</a></li>
                        <li><a href="#">Entry Level</a></li>
                    </ul>								
                </li>
                <li class="dropdown tr-change-dropdown">	
                    Org Type:					
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">Private</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">Private</a></li>
                        <li><a href="#">public</a></li>
                    </ul>								
                </li>
                <li class="dropdown tr-change-dropdown">	
                    Location:					
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">USA</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">USA</a></li>
                        <li><a href="#">London</a></li>
                        <li><a href="#">New York</a></li>
                    </ul>								
                </li>
                <li class="dropdown tr-change-dropdown">	
                    Salary:					
                    <a data-toggle="dropdown" href="#" aria-expanded="false"><span class="change-text">0 - 50K</span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu tr-change">
                        <li><a href="#">0 - 50K</a></li>
                        <li><a href="#">50k - 70K</a></li>
                        <li><a href="#">70k - 85K</a></li>
                    </ul>								
                </li>
            </ul>				
        </div><!-- /.list-menu -->

        <div class="tab-content tr-job-posted">
            <div role="tabpanel" class="tab-pane fade show active" id="four-colum">
                <div class="row">
                    <?php if(!empty($newjobs)) {?>
                        <?php
                         foreach($newjobs as $newjob) { ?>

                    <div class="col-md-6 col-lg-3">
                        <div class="job-item">
                            <div class="item-overlay">
                                <div class="job-info">
                                    <a href="#" class="btn btn-primary"><?=$newjob->qualification?></a>
                                    <span class="tr-title">
                                        <a href="job-details.html"><?=$newjob->job_title?></a>
                                        <span><a href="#">{{Auth::user()->name}}</a></span>
                                    </span>
                                    <ul class="tr-list job-meta">
                                        <li><i class="fa fa-map-signs" aria-hidden="true"></i><?=$newjob->location?></li>
                                        <li><i class="fa fa-briefcase" aria-hidden="true"></i><?=$newjob->experience_level?></li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i><?=$newjob->salary?></li>
                                    </ul>
                                    <ul class="job-social tr-list">
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-expand" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                        <li><a href="jobdetails/<?=$newjob->id?>"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>										
                            </div>
                            <div class="job-info">
                                <div class="company-logo">
                                    <img src="images/job/1.png" alt="images" class="img-fluid">
                                </div>
                                <span class="tr-title">
                                    <a href="#"><?=$newjob->job_title?></a>
                                    <span><a href="#">{{Auth::user()->name}}</a></span>
                                </span>
                                <ul class="tr-list job-meta">
                                    <li><span><i class="fa fa-map-signs" aria-hidden="true"></i></span><?=$newjob->location?></li>
                                    <li><span><i class="fa fa-briefcase" aria-hidden="true"></i></span><?=$newjob->experience_level?></li>
                                    <li><span><i class="fa fa-money" aria-hidden="true"></i></span><?=$newjob->salary?></li>
                                </ul>
                                <div class="time">
                                    <a href="#"><span><?=$newjob->job_category?></span></a>
                                    <span class="pull-right">Posted 23 hours ago</span>
                                </div>																				
                            </div>
                        </div>
                    </div>

                    <?php               
                        }
                       ?>
                   <?php
                       }            
                   ?>  

                    
                </div><!-- /.row -->

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
                
                
        </div><!-- /.tab-content -->		
    </div><!-- /.container -->		
</div><!-- /.jobs-listing -->

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