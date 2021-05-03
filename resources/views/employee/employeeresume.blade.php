@extends('layouts.employee')
@section('content')

<?php
$id = Auth::user()->id;
$adminds = App\Employee::where('userid','=', $id)->get();

//dd($adminds);
?>


<?php if(!empty($adminds[0])) {?>
    <?php
     foreach($adminds as $admind) { ?>


            <div class="tab-pane section" id="resume">
                <ul class="tr-list resume-info">
                    <li class="career-objective media">
                        <div class="icon">
                            <i class="fa fa-black-tie" aria-hidden="true"></i>
                        </div>  
                        <div class="media-body">
                            <span class="tr-title">Career Objective</span>
                            <p><?=$admind->careerobj?></p> <br>
                            
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
                                    <span><?=$admind->job_title?> @  <?=$admind->companyname?> </span>
                                    <span class="present"><?=$admind->workstart?> - <?=$admind->workend?></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                                    <span><?=$admind->Job_levels?> @ <?=$admind->instituename?></span>
                                    <ul class="tr-list">
                                        <li>Year: <?=$admind->fromyear?> - <?=$admind->toyear?></li>
                                        <li>Major: Major in Accounting</li>
                                        <li>Course Duration: 2 Years</li>
                                        <li>Result: 4.00</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
                                    <li><?=$admind->qualification?></li>
                                    <li>Passion for people-centered design, solid intuition.</li>
                                    <li>Skilled at any Kind Design Tools. </li>
                                    <li>Hard Worker & Quick Lerner.</li>
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
                                <li><span class="left">Phone</span><span class="middle">:</span> <span class="right"><?=$admind->phone?></span></li>
                                <li><span class="left">Date of Birth</span><span class="middle">:</span> <span class="right"><?=$admind->birthday?></span></li>
                                <li><span class="left">Birth Place</span><span class="middle">:</span> <span class="right"><?=$admind->birthplace?></span></li>
                                <li><span class="left">Nationality</span><span class="middle">:</span> <span class="right"><?=$admind->nationality?></span></li>
                                <li><span class="left">Sex</span><span class="middle">:</span> <span class="right"><?=$admind->gender?></span> </li>
                                <li><span class="left">Address</span><span class="middle">:</span> <span class="right"><?=$admind->location?></span></li>
                            </ul>							    	
                        </div>
                    </li><!-- /.personal-deatils -->
                                                
                </ul>
                <div class="buttons pull-right">
                    <a href="#" class="btn button-cancle">Cancle</a>
                    <a href="#" class="btn btn-primary">Update Your Resume</a>
                </div>								
            </div><!-- /.tab-pane -->

<?php               
    }
     ?>
	    <?php
			    }else{?>
        <?php
        ?>
         <div class="tab-pane section close-account" id="close-account">
            <h1>Create Your Resume Now</h1>
            <div class="buttons">
                <a href="/employee/create" class="btn btn-primary">Create Now</a>
                
            </div>
        </div><!-- /.tab-pane -->
            <?php
                }            
				?>  


@endsection