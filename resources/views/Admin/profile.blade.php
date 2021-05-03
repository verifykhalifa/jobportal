@extends('layouts.admin')
@section('content')

    <div class="main-content">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <?php if(!empty($adminds)) {?>
            <?php
             foreach($adminds as $admind) { ?>

        <div class="row small-spacing">
            <div class="col-lg-3 col-12">
                <div class="box-content bordered primary margin-bottom-20">
                    <div class="profile-avatar">
                    <img src="/storage/admin_image/{{$admind->admin_image}}" alt="">
                        <a href="#" class="btn btn-block btn-friend"><i class="fa fa-check-circle"></i> Friends</a>
                        <a href="#" class="btn btn-block btn-inbox"><i class="fa fa-envelope"></i> Send Messages</a>
                        <h3><strong>{{Auth::user()->name}}</strong></h3>
                        <h4>Owner at Our Company, Inc.</h4>
                        <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <!-- .profile-avatar -->
                    <table class="table table-hover no-margin">
                        <tbody>
                            <tr>
                                <td>Status</td>
                                <td><span class="notice notice-danger">Active</span></td>
                            </tr>
                            <tr>
                                <td>User Rating</td>
                                <td><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></td>
                            </tr>
                            <tr>
                                <td>Member Since</td>
                                <td>{{Auth::user()->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-content bordered -->

                <div class="box-content">
                    <h4 class="box-title"><i class="ico fa fa-users"></i>Friends</h4>
                    <ul class="profile-friends-list list-inline">
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-2.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-3.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-4.jpg" alt=""></a></li>
                        <li><a href="#" class="avatar"><img src="assets/images/avatar-5.jpg" alt=""></a></li>
                    </ul>
                </div>
                <!-- /.box-content -->
            </div>
            <!-- /.col-lg-3 col-12 -->
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="box-content card">
                            
                            <h4 class="box-title"><i class="fa fa-user ico"></i>About</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            
                                 
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Full Name:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7">{{Auth::user()->name}}</div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>User Name:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7">{{Auth::user()->username}}</div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Email:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><a href="#" class="__cf_email__" data-cfemail="cab3a5bfb8afa7aba3a68aada7aba3a6e4a9a5a7">{{Auth::user()->email}}</a></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>City:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><?=$admind->city?></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Country:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><?=$admind->country?></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Birthday:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><?=$admind->birthday?></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Interests:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7">Basketball, Web, Design, etc.</div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Website:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><a href="#"><?=$admind->website?></a></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-5"><label>Phone:</label></div>
                                            <!-- /.col-5 -->
                                            <div class="col-7"><?=$admind->phone?></div>
                                            <!-- /.col-7 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>

                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <?php               
             				}
            				?>
						<?php
							}            
						?>  
                            <!-- /.card-content -->
                        </div>
                        
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-6 col-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-file-text ico"></i> Experience</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="dot-list">
                                    <li><a href="#">Owner</a> at <a href="#">NinjaTeam</a>.<span class="date">March 2013 ~ Now</span></li>
                                    <li><a href="#">CEO</a> at <a href="#">CEO Company</a>.<span class="date"> March 2011 ~ February 2013</span></li>
                                    <li><a href="#">Web Designer</a> at <a href="#">Web Design Company Ltd.</a>.<span class="date"> March 2010 ~ February 2011</span></li>
                                    <li><a href="#">Sales</a> at <a href="#">Sales Company Ltd.</a>.<span class="date"> March 2009 ~ February 2010</span></li>
                                </ul>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6 col-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-trophy ico"></i> Education</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="dot-list">
                                    <li><a href="#">Students</a> at <a href="#">CEO Education</a>.<span class="date">March 2013 ~ Now</span></li>
                                    <li><a href="#">Students</a> at <a href="#">Web Design Education</a>.<span class="date">March 2011 ~ February 2013</span></li>
                                    <li><a href="#">Students</a> at <a href="#">Sales School</a>.<span class="date"> March 2010 ~ February 2011</span></li>
                                    <li><a href="#">Students</a> at <a href="#">High School</a>.<span class="date"> March 2009 ~ February 2010</span></li>
                                </ul>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-globe ico"></i> Activity</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <ul class="notice-list">
                                    <li>
                                        <a href="#">
                                            <span class="avatar"><img src="assets/images/avatar-1.jpg" alt=""></span>
                                            <span class="name">Betty Simmons</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-success"><i class="fas fa-user"></i></span>
                                            <span class="name">New Signup</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">5 hours ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-warning"><img src="assets/images/avatar-2.jpg" alt=""></span>
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 year ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-warning"><i class="fa fa-flag"></i></span>
                                            <span class="name">New Message received</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="avatar bg-pink"><i class="fas fa-cog"></i></span>
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 year ago</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.notice-list -->
                                <div class="text-center margin-top-20"><a href="#" class="btn btn-default">See All Activities <i class="fa fa-angle-double-right"></i></a></div>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6 col-12">
                        <div class="box-content card">
                            <h4 class="box-title"><i class="fa fa-flask ico"></i> Skill</h4>
                            <!-- /.box-title -->
                            <div class="dropdown js__drop_down">
                                <a href="#" class="dropdown-icon fas fa-ellipsis-v js__drop_down_button"></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else there</a></li>
                                    <li class="split"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <!-- /.sub-menu -->
                            </div>
                            <!-- /.dropdown js__dropdown -->
                            <div class="card-content">
                                <p>Photoshop</p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                                <p>Illustrator</p>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                                <p>PHP</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                                <p>Javascript</p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                                <p>Communication</p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                                <p>Writing</p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-content -->
                        </div>
                        <!-- /.box-content card -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-9 col-12 -->
        </div>
                <!-- /.row small-spacing -->		
                <footer class="footer">
                    <ul class="list-inline">
                        <li>2016 © NinjaAdmin.</li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </footer>
    </div>
            <!-- /.main-content -->



@endsection
