@extends('layouts.app')

@section('content')

<div class="limiter">
    {{-- {{dd($errors)}} --}}
        {{-- style="background-image: url('images/bg-01.jpg');" --}}
    {{-- <div class="container-login100 row justify-content-center" >
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <form class="login100-form validate-form flex-sb flex-w"
                action="{{ route('login')}}" 
                method="POST">
                @csrf
                <span class="login100-form-title p-b-53">
                    Sign In With
                </span>

                <a href="#" class="btn-face m-b-20">
                    <i class="fa fa-facebook-official"></i>
                    Facebook
                </a>

                <a href="#" class="btn-google m-b-20">
                    <img src="images/icons/icon-google.png" alt="GOOGLE">
                    Google
                </a>
                
                <div class="p-t-31 p-b-9">
                    <span class="txt1">
                        Username
                    </span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100" type="text" name="email" 
                        value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                   
                </div>
                
                <div class="p-t-13 p-b-9">
                    <span class="txt1">
                        Password
                    </span>

                    <a href="{{ route('password.request') }}" class="txt2 bo1 m-l-5">
                        Forgot?
                    </a>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" type="password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn" type="submit">
                        Sign In
                    </button>
                </div>

                <div class="w-full text-center p-t-55">
                    <span class="txt2">
                        Not a member?
                    </span>

                    <a href="{{ route('register') }}" class="txt2 bo1">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div> --}}



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <span class="login100-form-title">
                                Sign In With
                            </span>
                            <div style="display:flex">
                                <a href="#" class="btn-face m-b-20">
                                    <i class="fa fa-facebook-official"></i>
                                    Facebook
                                </a>
                
                                <a href="#" class="btn-google">
                                    <img src="images/icons/icon-google.png" alt="GOOGLE">
                                    Google
                                </a>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









@endsection

<style>
    .btn-face, .btn-google {
    font-family: Montserrat-SemiBold;
    font-size: 18px;
    line-height: 1.2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    margin-top: 20px;
    margin: auto !important;
    display: flex;
    justify-content: center;
    align-items: center;
    /* padding: 15px; */
    width: calc((100% - 20px) / 2);
    height: 45px !important;
    border-radius: 13px !important;

</style>
