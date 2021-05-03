@extends('layouts.employer')
@section('content')

<?php
$id = Auth::user()->id;
$adminds = App\Employer::where('userid','=', $id)->get();

//dd($adminds);
?>


<?php if(!empty($adminds[0])) {?>
    <?php
     foreach($adminds as $admind) { ?>


            <div class="tab-pane section" id="resume">
                <ul class="tr-list resume-info">
                    <li class="personal-deatils media">
                        <div class="icon">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                            <span class="tr-title">Company Details</span>
                            <ul class="tr-list">
                                <li><span class="left">Company Name</span><span class="middle">:</span> <span class="right">{{Auth::user()->name}}</span></li>
                                <li><span class="left">Company Phone number</span><span class="middle">:</span> <span class="right"><?=$admind->phone?></span></li>
                                <li><span class="left">Company Sector</span><span class="middle">:</span> <span class="right"><?=$admind->job_sector?></span></li>
                                <li><span class="left">Location</span><span class="middle">:</span> <span class="right"><?=$admind->location?></span></li>
                            </ul>							    	
                        </div>
                    </li><!-- /.personal-deatils -->
                    <li class="mission-vision">
                        <div class="icon">
                            <i class="fa fa-anchor" aria-hidden="true"></i>
                        </div>  
                        <div class="media-body">
                            <span class="tr-title">Mission & Vision</span>
                            <div>
                                <div class="col-md-6">
                                    <p><?=$admind->mission?></p>
                                    </div>
                            </div>
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
                                    <span><?=$admind->achievement_title?></span>
                                    <ul class="tr-list">
                                        <li>Year: <?=$admind->yearofach?></li>
                                    </ul>
                                    <p><?=$admind->achdescription?></p>
                                </li>
                            </ul>
                        </div>
                    </li><!-- /.company-achievement -->			
                    
                                             
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
            <h1>Update Your Company Info Now</h1>
            <div class="buttons">
                <a href="/employer/create" class="btn btn-primary">Update Now</a>
                
            </div>
        </div><!-- /.tab-pane -->
            <?php
                }            
				?>  


@endsection