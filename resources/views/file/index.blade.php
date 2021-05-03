@extends('layouts.app')
@section('content')

<div class="tr-banner section-before bg-image">
    <div class="container">
        <div class="banner-content text-center">
            <h1>The Easiest Way to Get Your New Job</h1>
            <h2>We offer 12000 jobs vacation right now</h2>
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
        </div><!--/. banner-content -->
    </div><!-- /.container -->
</div><!-- /.tr-banner -->

<div class="tr-category section-padding">
    <div class="container">
        <div class="section-title">
            <h1>Browse Jobs By Category</h1>
        </div>
        <ul class="category-list tr-list">
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category1.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Accounting/Finance</span>
                    <span class="category-quantity">(1298)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category2.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Education/Training</span>
                    <span class="category-quantity">(76212)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category3.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Engineer/Architects</span>
                    <span class="category-quantity">(212)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category4.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Garments/Textile</span>
                    <span class="category-quantity">(972)</span>
                </a>
            </li>
        </ul>
        <ul class="category-list tr-list">
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category5.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">HR/Org. Development</span>
                    <span class="category-quantity">(1298)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category6.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Design/Creative</span>
                    <span class="category-quantity">(76212)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category7.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Research/Consultancy</span>
                    <span class="category-quantity">(1298)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category8.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Medical/Pharma</span>
                    <span class="category-quantity">(76212)</span>
                </a>
            </li>
        </ul>
        <ul class="category-list category-list-bottom tr-list">
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category9.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Music & Arts</span>
                    <span class="category-quantity">(212)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category10.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Marketing/Sales</span>
                    <span class="category-quantity">(972)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category11.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Production/Operation</span>
                    <span class="category-quantity">(212)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon">
                        <img src="images/icons/category12.png" alt="Icon" class="img-fluid">
                    </span>
                    <span class="category-title">Miscellaneous</span>
                    <span class="category-quantity">(972)</span>
                </a>
            </li>
        </ul>
    </div><!-- /.container -->
</div><!-- /.tr-category -->

<div class="tr-cta">
    <div class="container">
        <div class="cta-content section">
            <div class="cta-info">
                <div class="pull-left">
                    <h1>Add your resume and let your next job find you.</h1>
                </div>
                <a href="#" class="btn btn-primary pull-right">Add Your Resume</a>
            </div>
        </div><!-- /.cta-content -->
    </div><!-- /.container -->
</div><!-- /.tr-cta -->

<div class="tr-job-posted section-padding">
    <div class="container">
        <div class="section-title">
            <h1>Jobs you may be interested in</h1>
        </div>
        <div class="job-tab text-center">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li role="presentation" class="active">
                    <a class="active" href="#hot-jobs" aria-controls="hot-jobs" role="tab" data-toggle="tab">Hot Jobs</a>
                </li>
                <li role="presentation"><a href="#recent-jobs" aria-controls="recent-jobs" role="tab" data-toggle="tab">Recent Jobs</a></li>
                <li role="presentation"><a href="#popular-jobs" aria-controls="popular-jobs" role="tab" data-toggle="tab">Popular Jobs</a></li>
            </ul>
            <div class="tab-content text-left">
                <div role="tabpanel" class="tab-pane fade show active" id="hot-jobs">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Part Time</a>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                <div role="tabpanel" class="tab-pane fade in" id="recent-jobs">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Part Time</a>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Part Time</a>
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
                                        <a href="#"><span class="part-time">Part Time</span></a>
                                        <span class="pull-right">Posted Oct 09, 2017</span>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Full Time</a>
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
                                        <a href="#" class="btn btn-primary">Freelance</a>
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
                                        <a href="#"><span class="freelance">Freelance</span></a>
                                        <span class="pull-right">Posted 1 day ago</span>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                    </div><!-- /.row -->	
                </div><!-- /.tab-pane -->
                <div role="tabpanel" class="tab-pane fade in" id="popular-jobs">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Part Time</a>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Part Time</a>
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
                        <div class="col-md-6 col-lg-3">
                            <div class="job-item">
                                <div class="item-overlay">
                                    <div class="job-info">
                                        <a href="#" class="btn btn-primary">Full Time</a>
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
                                        <a href="#"><span>Full Time</span></a>
                                        <span class="pull-right">Posted 1 day ago</span>
                                    </div>				
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->	
                </div><!-- /.tab-pane -->
            </div>				
        </div><!-- /.job-tab -->			
    </div><!-- /.container -->
</div><!-- /.tr-job-posted -->

<div class="tr-steps bg-image section-padding section-before">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="step">
                    <div class="step-image">
                        <img src="images/icons/step1.png" alt="images" class="img-fluid">
                    </div>
                    <h1>01 Steps</h1>
                    <h2>Register an account</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                </div><!-- step -->
            </div>
            <div class="col-sm-4">
                <div class="step">
                    <div class="step-image">
                        <img src="images/icons/step2.png" alt="images" class="img-fluid">
                    </div>
                    <h1>02 Steps</h1>
                    <h2>search your desired job</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                </div><!-- /.step -->
            </div>
            <div class="col-sm-4">
                <div class="step">
                    <div class="step-image">
                        <img src="images/icons/step3.png" alt="images" class="img-fluid">
                    </div>
                    <h1>03 Steps</h1>
                    <h2>Send your resume to employers</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                </div><!-- /.step -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.tr-steps -->

<div class="tr-recent-news section-padding">
    <div class="container">
        <div class="section-title">
            <h1>Recent News Articles</h1>
        </div>
        <div class="blog-content">
            <div class="tr-post media">
                <div class="entry-header pull-left">
                    <div class="entry-thumbnail">
                        <a href="#"><img src="images/blog/1.jpg" alt="images" class="img-fluid"></a>
                    </div>						
                </div>
                <div class="entry-content media-body">
                    <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    <ul class="entry-meta tr-list">
                       <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                       <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                       <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                    </ul>
                </div>
                <div class="blog-post">						
                </div>
            </div><!-- /.tr-post -->
            <div class="tr-post media">
                <div class="entry-header pull-left">
                    <div class="entry-thumbnail">
                        <a href="#"><img src="images/blog/2.jpg" alt="images" class="img-fluid"></a>
                    </div>						
                </div>
                <div class="entry-content media-body">
                    <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    <ul class="entry-meta tr-list">
                       <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                       <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                       <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                    </ul>
                </div>
                <div class="blog-post">						
                </div>
            </div><!-- /.tr-post -->
            <div class="tr-post media">
                <div class="entry-header pull-left">
                    <div class="entry-thumbnail">
                        <a href="#"><img src="images/blog/3.jpg" alt="images" class="img-fluid"></a>
                    </div>						
                </div>
                <div class="entry-content media-body">
                    <h2 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h2>
                    <ul class="entry-meta tr-list">
                       <li><i class="fa fa-user"></i>By <a href="#">owen williams </a></li>
                       <li><i class="fa fa-clock-o"></i> <a href="#">Aug 1, 2017</a></li>
                       <li><i class="fa fa-comment-o"></i> <a href="#">189 Comments</a></li>
                    </ul>
                </div>
            </div><!-- /.tr-post -->
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-recent-news -->

<div class="tr-testimonial">
    <div class="container">
        <div class="testimonial-content">
            <div class="testimonial-slider">
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/others/testimonial.png" alt="images" class="img-fluid">
                        </div>	
                        <div class="media-body">
                            <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt ut labore. ‘’</p>
                            <div class="testimonial-title">
                                <h2>Stive Frankman</h2>
                                <p>CEO, Frakman Inc</p>
                            </div>							
                        </div>							
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/others/testimonial.png" alt="images" class="img-fluid">
                        </div>	
                        <div class="media-body">
                            <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt ut labore. ‘’</p>
                            <div class="testimonial-title">
                                <h2>Stive Frankman</h2>
                                <p>CEO, Frakman Inc</p>
                            </div>							
                        </div>							
                    </div>
                </div>
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <img src="images/others/testimonial.png" alt="images" class="img-fluid">
                        </div>	
                        <div class="media-body">
                            <p>‘’ Lorem ipsum dolor sit amet, consectetur adipisicing, sed do eiusmod tempor incididunt ut labore. ‘’</p>
                            <div class="testimonial-title">
                                <h2>Stive Frankman</h2>
                                <p>CEO, Frakman Inc</p>
                            </div>							
                        </div>
                    </div>
                </div>						
            </div>				
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-testimonial -->

<div class="tr-fun-fact section-padding">
    <div class="container">
        <div class="fun-fact-content">
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="fun-fact">
                        <img src="images/icons/fun-fact1.png" alt="images" class="img-fluid">
                        <h1 class="counter">3,412</h1>
                        <span>Live Jobs</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="fun-fact">
                        <img src="images/icons/fun-fact2.png" alt="images" class="img-fluid">
                        <h1 class="counter">12,043</h1>
                        <span>Total Company</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="fun-fact">
                        <img src="images/icons/fun-fact3.png" alt="images" class="img-fluid">
                        <h1 class="counter">5,798,298</h1>
                        <span>Total Candidate</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div><!-- /.row -->				
        </div><!-- /.fun-fact-content -->
    </div><!-- /.container -->
</div><!-- /.tr-fun-fact -->

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