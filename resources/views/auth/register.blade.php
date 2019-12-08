@extends('layouts.signin')

@section('app')
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
            <input type="numbers" placeholder="phonenumber " name="phone">
            <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
            <input type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
            <div >
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
            </div>
            <select name="role">
                <option selected="">User or Service Provider?</option>
                <option value="3">User</option>
                <option value="2">Service provider</option>
            </select>
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        
            <h1>Hello, Friend!</h1>
            <p> Already have an account? <a href="{{route('login')}}">sign in</a></p>
           
         
    </div>
    
@endsection
