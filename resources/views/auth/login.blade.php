@extends('layouts.login')

@section('app')


<div class="login">
    <div class=" login_card_holder container has-shadow">
        <div class="row">
            <div class="col-md-6 ">
                <div class="">
                    <div class="login_form_holder">

                        <div class="login_form_content">
                            <div>
                                <h3>Login</h3>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form">
                                        <div class="form_element">
                                            <span class="ti-email"></span><input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form_element">
                                            <span class="ti-lock"></span><input type="password" name="password"
                                            @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        </div>
                                        <div class="forgot_password">
                                            @if (Route::has('password.request'))
                                            <a  href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                        </div>
                                    </div>

                                    <!--Login button-->
                                    <div class="login_btn_holder">
                                        <button type="submit"  class="default_btn">LOGIN</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="login_signup_holder">

                    <div class="signup_link_holder">
                        
                            <h3>Sign in</h3>
                            <p class="mt-4">Dont have an account? Sign up now</p>
                            <div class="mt-3">
                            <a href="{{route('register')}}" class="default_btn_alt mt-4">Sign Up</a>
                            </div>
                            
                        </div>
                    </div>




                </div>
            </div>
        </div>

    </div>
</div>
@endsection


<body>

    
    