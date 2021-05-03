@extends('layouts.master')
@section('content')

    <div class="main-content">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


                <div class="row small-spacing">
                    
                    <!-- /.col-lg-3 col-12 -->
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-12">
                                
                                <div class="box-content card">
                                    
                                    <h4 class="box-title"><i class="fa fa-user ico"></i>Post Job</h4>
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
                                            <form method="POST" action="{{ route('job.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">Company Name</label>
                        
                                                    <div class="col-md-6">
                                                        <input  type="text" class="form-control"  style="width: 200%"  name="name" value="{{Auth::user()->name}}" disabled >
                    
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="qualification" class="col-md-4 col-form-label text-md-right">Highest Qualification</label>
                        
                                                    <div class="col-md-6">
                                                        <select class="form-control" style="width: 200%" name="qualification" >
                                                            <option value="">Levels</option>
                                                            <option value="Advance">Advance</option>
                                                           <option value="Senior">Senior</option>
                                                           <option value="Junior">Junior</option>
                                                           <option value="Others">Others</option>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="job_title" class="col-md-4 col-form-label text-md-right">Job Title</label>
                        
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
                                                </div>
                                                <div class="form-group row">
                                                    <label for="jobsummary" class="col-md-4 col-form-label text-md-right">Job Summary
                                                    </label>
                                                    <div class="col-md-6">
                                                    <textarea type="text" class="form-control" style="width: 200%" name="jobsummary" placeholder="Enter Job Summary"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="requirement" class="col-md-4 col-form-label text-md-right">Minimum Requirements
                                                    </label>
                                                    <div class="col-md-6">
                                                    <textarea type="text" class="form-control" style="width: 200%" name="requirement" placeholder="Enter Job Minimum Requirements"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="phone" type="text" style="width: 200%" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">
                        
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="Job_levels" class="col-md-4 col-form-label text-md-right">Job levels</label>
                        
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
                                                </div>
                                                <div class="form-group row">
                                                    <label for="experience" class="col-md-4 col-form-label text-md-right">Year of Experience</label>
                        
                                                    <div class="col-md-6">
                                                        <select class="form-control" style="width: 200%" name="experience" >
                                                            <option value=''>Years of Experience</option>    
                                                            <option value='Entry Level'>Entry Level</option>
                                                            <option value='1'>1 Year</option>
                                                                    @for($x=2;$x<=31;$x++)
                                                                        <option value='{{$x}}'>{{$x}} Years</option>
                                                                    @endfor
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="salary" class="col-md-4 col-form-label text-md-right">Salary Range</label>
                        
                                                    <div class="col-md-6">
                                                        <select class="form-control" style="width: 200%" name="salary" >
                                                            <option value="">Salary Range</option>
                                                            <option value="NGN35,000 - NGN50,000">NGN35,000 - NGN50,000</option>
                                                            <option value="NGN50,000 - NGN100,000">NGN50,000 - NGN100,000</option>
                                                            <option value="NGN100,000 - NGN150,000">NGN100,000 - NGN150,000</option>
                                                            <option value="NGN150,000 - NGN200,000">NGN150,000 - NGN300,000</option>
                                                            <option value="NGN300,000 - NGN600,000">NGN300,000 - NGN600,000</option>
                                                            <option value="NGN600,000 and above">NGN600,000 and above</option>
                                                            <option value="Null">Leave Blank</option>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="jobpostdate" class="col-md-4 col-form-label text-md-right">Job Posted Date</label>
                        
                                                    <div class="col-md-6">
                                                        <select class="form-control" style="width: 200%" name="jobpostdate" >
                                                            <option value="">Posted Date For Job</option>
                                                            <option value="Today">Today</option>
                                                            <option value="7days">7days</option>
                                                            <option value="2weeks-4weeks">2weeks-4weeks</option>
                                                            <option value="3months and above">3months and above</option>
                                                            <option value="Null">Leave Blank</option>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="city" class="col-md-4 col-form-label text-md-right">City & Location</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="city" type="text" style="width: 200%" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city">
                        
                                                        @error('city')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="duedate" class="col-md-4 col-form-label text-md-right">Due Date
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="duedate" type="date" style="width: 200%" class="form-control @error('duedate') is-invalid @enderror" name="duedate" value="{{ old('duedate') }}" required autocomplete="duedate" autofocus>
                        
                                                        @error('duedate')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="cover_image" class="col-md-4 col-form-label text-md-right">File Upload
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input  type="file" class="form-control"  name='cover_image' >
                        
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                          POST JOB
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            
                                            <!-- /.col-lg-6 -->
                                            

                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-content -->
                                </div>
                                
                                <!-- /.box-content card -->
                            </div>
                            <!-- /.col-lg-12 -->
                            
                            <!-- /.col-lg-6 -->
                            
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
