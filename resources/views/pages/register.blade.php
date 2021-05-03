@extends('layouts.app')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Create a New Account</h1>
                <span>Lorem Ipsum is simply dummy text of the printing pesetting.</span>
            </div>				
        </div>
    </div><!-- /.container -->
</div><!-- tr-breadcrumb -->	

<div class="tr-account section-padding">
    <div class="container text-center">
        <div class="user-account">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs  nav-justified" role="tablist">
                <li role="presentation"><a class="active" href="#seeker" aria-controls="seeker" role="tab" data-toggle="tab">Job Seeker</a></li>
                <li role="presentation"><a href="#employers" aria-controls="employers" role="tab" data-toggle="tab">Employers</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="seeker">
                    <div class="account-content">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Full Name "value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Full Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Full Username" value="{{ old('username') }}" required autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" value="employee" name="role">
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password" required autocomplete="new-password">
                            </div>		
                            
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>	
                        <div class="new-user text-center">
                            <span>Already Registered? <a href="/logins">Sign in</a> </span>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="employers">
                    <div class="account-content">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                               
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Company Name " value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Full Email " value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Full Username" value="{{ old('username') }}" required autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input type="hidden" value="employer" name="user">
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password " required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control"  placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>									
                            <input type="hidden" value="employer" name="role">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>	
                        <div class="new-user text-center">
                            <span>Already Registered? <a href="/logins">Sign in</a> </span>
                        </div>
                    </div>
                </div>
            </div>				
        </div>				
    </div><!-- container -->
</div><!-
	




@endsection