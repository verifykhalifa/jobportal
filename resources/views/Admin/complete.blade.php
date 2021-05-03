@extends('layouts.admin')
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
                                    
                                    <h4 class="box-title"><i class="fa fa-user ico"></i>Complete Profile</h4>
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
                                            <form method="POST" action="{{ route('superadmin.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input  type="text" class="form-control"  name="name" value="{{Auth::user()->name}}" disabled >
                    
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" disabled>
                        
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city">
                        
                                                        @error('city')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">
                        
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="country" class="col-md-4 col-form-label text-md-right">Country
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                        
                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            
                                                
                                                <div class="form-group row">
                                                    <label for="birthday" class="col-md-4 col-form-label text-md-right">Birthday
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>
                        
                                                        @error('birthday')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="website" class="col-md-4 col-form-label text-md-right">Website
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" required autocomplete="website" autofocus>
                        
                                                        @error('website')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                        
                                                    <div class="col-md-6">
                                                        <select class="form-control" name="gender" >
                                                        <option value="">Select Your Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female" >Female</option>
                                                        </select>
                                                        @error('gender')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="admin_image" class="col-md-4 col-form-label text-md-right">Image Upload
                                                    </label>
                        
                                                    <div class="col-md-6">
                                                        <input  type="file" class="form-control"  name='admin_image' >
                        
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Register') }}
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
