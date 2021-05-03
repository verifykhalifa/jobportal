@extends('layouts.employer')
@section('content')

<?php 

$id = Auth::user()->id;
$adminds = App\Employer::where('userid','=', $id)->first();
$realids = $id;
//dd($adminds);
?>

<?php if(empty($adminds)) {?>
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

@if(!empty($adminds))
    <div  class="tab-pane edit-resume section" id="edit-resume">
        <form method="POST" action="{{ route('employer.update',$adminds->id) }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <ul class="tr-list resume-info">
                        <li class="personal-deatils code-edit-small">
                            <div class="icon">
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <span class="tr-title">Company Details</span>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Company Name<span class="pull-right">:</span> </label>
                                    </div>
                                    <div class="col-sm-8" style="padding-bottom:20px">
                                    <input  type="text" class="form-control"  style="width: 100%"  name="companyname" value="{{Auth::user()->name}}" disabled  >
                                    
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Company Phone number<span class="pull-right">:</span> </label>
                                    </div>
                                    <div class="col-sm-8" style="padding-bottom:20px">
                                        <input  type="text" class="form-control"  style="width: 100%"  name="phone" value="{{$adminds->phone}}" >
                                        <input  type="hidden" class="form-control"  style="width: 200%"  name="userid"  value="{{Auth::user()->id}}">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label>Company Sector<span class="pull-right">:</span> </label>
                                    </div>
                                        <div class="col-sm-8" style="padding-bottom:20px">
                                            <select class="form-control" style="width: 100%" name="job_sector" >
                                                <option class="hidden">{{$adminds->job_sector}}</option>
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
                        <li class="mission-vision">
                            <div class="icon">
                                <i class="fa fa-anchor" aria-hidden="true"></i>
                            </div>  
                            <div class="media-body">
                                <span class="tr-title">Mission & Vision</span>
                                <div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" style="width: 200%" name="mission" value="{{$adminds->mission}}">
                                        </div>
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
                                        <div >
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" style="width: 200%" name="achievement_title" value="{{$adminds->achievement_title}}">
                                                </div>
                                        </div>
                                        <label>Year</label>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" style="width: 200%" name="yearofach" value="{{$adminds->yearofach}}" >
                                        </div>
                                    </div>
                                    <label>Description</label>
                                    <div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" style="width: 200%" name="achdescription" value="{{$adminds->achdescription}}">
                                            </div>
                                    </div>
        
        
                                </div>						    	
                            </div>
                        </li><!-- /.work-history -->	
                        <li class="personal-deatils">
                            <div class="icon">
                                <i class="fa fa-hand-peace-o" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <span class="tr-title">Company Logo Upload</span>
                                <div class="col-md-3">
                                @if($adminds->cover_image)
                                <img src="{{ url('storage/storage/' . $adminds->cover_image) }}" style="width: 70%;height:80%" />
                                @endif
                                </div>
                                <br>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control" style="width: 100%" name="cover_image" value="{{$adminds->cover_image}}" />
                                    </div>
                               
                            </div>
                            
                        </li><!-- /.personal-deatils -->
                    </ul>
                <div class="buttons pull-right">
                    <a href="#" class="btn button-cancle">Cancle</a>
                    <button type="submit" class="btn btn-primary">Edit Your Company Info</button>
                </div>								
            </div><!-- /.tab-pane -->
        </form>
    
    </div>
@endif



@endsection