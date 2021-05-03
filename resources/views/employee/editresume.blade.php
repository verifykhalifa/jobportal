@extends('layouts.employee')
@section('content')

<?php 

$id = Auth::user()->id;
$adminds = App\Employee::where('userid','=', $id)->first();
$realids = $id;
//dd($realids);
?>

<?php if(empty($adminds)) {?>
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




@if(!empty($adminds))
    <div  class="tab-pane edit-resume section" id="edit-resume">
        <form method="PUT" action="{{ route('employee.update',$realids) }}" >
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
                                <input type="text" class="form-control" style="width: 200%" name="careerobj" value="{{$adminds->careerobj}}"  >
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
                                            <option value="">{{$adminds->job_title}}</option>
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
                                        <input  type="text" class="form-control"  value="{{$adminds->companyname}}"  style="width: 200%"  name="companyname"  >

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <label>From</label>
                                            <div class="calendar">
                                                <input type="date" value="{{$adminds->workstart}}" name="workstart"  class="form-control"/>
                                            </div><!-- calendar -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label>To</label>
                                            <div class="calendar">
                                                <input type="date" value="{{$adminds->workend}}" class="form-control" name="workend"/>
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
                                            <option value="">{{$adminds->Job_levels}}</option>
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
                                        <input  type="text" class="form-control"  value="{{$adminds->instituename}}" style="width: 200%"  name="instituename"  >

                                    </div>
                                    <input  type="hidden" class="form-control"  style="width: 200%"  name="userid"  value="{{Auth::user()->id}}">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <label>From Year</label>
                                            <div class="calendar">
                                                <input type="date" value="{{$adminds->fromyear}}" class="form-control" name="fromyear" >
                                            </div><!-- calendar -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <label>To Year (or expected)</label>
                                            <div class="calendar">
                                                <input type="date" value="{{$adminds->toyear}}" class="form-control"  name="toyear"/>
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
                                <input type="text" class="form-control" style="width: 200%" value="{{$adminds->qualification}}" name="qualification" placeholder="Enter Qualification">
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
                                        <input type="date" value="{{$adminds->birthday}}" class="form-control" name="birthday">
                                    </div><!-- calendar -->
                                </div>
                            </div>	
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Birth Place<span class="pull-right">:</span> </label>
                                </div>
                                <div class="col-sm-8" style="padding-bottom:20px">
                                    <input  type="text" class="form-control"  value="{{$adminds->birthplace}}" style="width: 100%"  name="birthplace"  >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Phone<span class="pull-right">:</span> </label>
                                </div>
                                <div class="col-sm-8" style="padding-bottom:20px">
                                    <input  type="text" class="form-control" value="{{$adminds->phone}}" placeholder="Enter Your Phone Number Starting With Your Area Code" style="width: 100%"  name="phone"  >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Nationality<span class="pull-right">:</span> </label>
                                </div>
                                <div class="col-sm-8" style="padding-bottom:20px">
                                    <input  type="text" class="form-control" value="{{$adminds->nationality}}" placeholder="Nationality" style="width: 100%"  name="nationality"  >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label>Sex<span class="pull-right">:</span> </label>
                                </div>
                                    <div class="col-sm-8" style="padding-bottom:20px">
                                            <select class="form-control" style="width: 100%" name="gender" >
                                                <option value="">{{$adminds->gender}}</option>
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
                                        <option class="hidden">{{$adminds->location}}</option>
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
                                    <input type="file" value="{{$adminds->cover_image}}" class="form-control" style="width: 100%" name="cover_image" />
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
    
    </div>
@endif



@endsection