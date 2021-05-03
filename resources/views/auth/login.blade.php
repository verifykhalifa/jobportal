@extends('layouts.app')
@section('content')
<div class="tr-breadcrumb bg-image section-before">
    <div class="container">
        <div class="breadcrumb-info text-center">
            <div class="page-title">
                <h1>Sign In</h1>
                <span>Lorem Ipsum is simply dummy text of the printing pesetting.</span>
            </div>				
        </div>
    </div><!-- /.container -->
</div><!-- tr-breadcrumb -->	

<div class="tr-account section-padding">
    <div class="container text-center">
        <div class="user-account">
            <div class="account-content">
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" placeholder="Password"   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="user-option">
                        <div class="checkbox">
                            <label for="logged" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><input type="checkbox" name="logged" id="logged">Remember me</label>
                        </div>
                        <div class="forgot-password">
                            @if (Route::has('password.request'))
                                    <a class="forgot-password" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>
                    </div>						
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>	
                <div class="new-user text-center">
                    <span><a href="signup.html">Create a New Account</a> </span>
                </div>
            </div>
        </div>			
    </div><!-- container -->
</div><!-- /.tr-account-->	






@endsection