@extends('layouts.employer')
@section('content')


<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Post Your Job</h1>
            </div>		
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job Post</li>
            </ol>			
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="tr-post-job page-content">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('job.store') }}" enctype="multipart/form-data">
                @csrf
                    <div class="col-md-12">
                        
                        <div class="short-info code-edit-small">
                            <div class="section">
                                <span class="tr-title">Short Info</span>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label>Title for your job</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div>
                                            <select class="form-control" style="width: 100%" name="job_title" >
                                                <option value="">Select Job Title</option>
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
                                </div><!-- /.row -->
                        
                                <div class="row job-category">
                                    <div class="col-sm-3">
                                        <label>Job Category</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="job-type">
                                            <input type="radio" name="job_category" value="full-time" id="full-time"> <label for="full-time">Full Time</label>
                                            <input type="radio" name="job_category" value="part-time" id="part-time"> <label for="part-time">Part Time</label>
                                            <input type="radio" name="job_category" value="freelance" id="freelance"> <label for="freelance">Freelance</label>	
                                            <input type="radio" name="job_category" value="contract" id="contract"> <label for="contract">Contract</label>	
                                        </div><!-- /.user-type -->
                                    </div>
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label>Job Location</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div>
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
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label>Salary Information</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            
                                                <div>
                                                    <input type="text" class="form-control" name="salary">
                                                </div>			
                                        
                                            <div class="col-sm-6">
                                                <div class="aegotiable">
                                                    <span>Or</span>
                                                    <input type="radio" name="radio2" value="aegotiable" id="aegotiable"> <label for="aegotiable">Negotiable</label>
                                                </div>	
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label>Application Deadline</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="calendar">
                                            <input type="date" class="form-control">
                                        </div>								
                                    </div>
                                </div><!-- /.row -->
                                <div class="row exprience-level">
                                    <div class="col-sm-3">
                                        <label>Experience Level</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="exprience">
                                            <input type="radio" name="experience_level" value="entry-level" id="entry-level"> <label for="entry-level">Entry Level</label>
                                            <input type="radio" name="experience_level" value="mid-level" id="mid-level"> <label for="mid-level">Mid Level</label>
                                            <input type="radio" name="experience_level" value="mid-senior" id="mid-senior"> <label for="mid-senior">Mid-Senior Level</label>	
                                            <input type="radio" name="experience_level" value="top-level" id="top-level"> <label for="top-level">Top Level</label>	
                                        </div><!-- /.user-type -->
                                    </div>
                                </div><!-- /.row -->											
                            </div>
                        </div>
                        <div class="job-description section">
                            <span class="tr-title">Job Description</span>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Job Summary</label>
                                </div>
                                <div class="col-sm-9">
                                    <div>
                                        <input  type="hidden" class="form-control"  style="width: 200%"  name="userid"  value="{{Auth::user()->id}}">
                                        <textarea type="text" class="form-control" style="width: 100%" name="jobsummary" placeholder="Write few lines about your Job" ></textarea>
                                    </div>
                                    <span class="characters-left">5000 Characters left</span>
                                </div>
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Key Responsibilities:</label>
                                </div>
                                <div class="col-sm-9">
                                    <div>
                                        <textarea type="text" class="form-control" style="width: 100%" name="keyresponsibility" placeholder="Write few lines about your Job" ></textarea>
                                    </div>
                                    <span class="characters-left">5000 Characters left</span>
                                </div>
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Minimum Requirements:</label>
                                </div>
                                <div class="col-sm-9">
                                    <div>
                                        <textarea type="text" class="form-control" style="width: 100%" name="requirement" placeholder="Write few lines about your Job" ></textarea>
                                    </div>
                                    <span class="characters-left">5000 Characters left</span>
                                </div>
                            </div><!-- /.row -->	
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Job Qualification</label>
                                </div>
                                <div class="col-sm-9">
                                    <div >
                                        <select class="form-control" style="width: 100%" name="qualification" >
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
                                </div>
                            </div><!-- /.row -->					
                        </div><!-- /.job-description -->

                    
                        <div class="section agreement">
                            <label for="send">
                                <input type="checkbox" name="agreement" id="send">
                                You agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Trade to find a genuine buyer. 
                            </label>
                            <div class="buttons">
                                <button type="submit" class="btn btn-primary">Post Your Job</button>
                                <a href="#" class="btn button-cancle">Cancle</a>
                            </div>						
                        </div>
                    </div>
            </form>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.tr-post-job -->



@endsection