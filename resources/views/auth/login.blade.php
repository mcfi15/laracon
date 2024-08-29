@extends('layouts.app')

@section('title', 'Admin Login Page')

@section('content')
  
  
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('assets/app/images/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>{{ __('Login') }}</h3>
              <p class="mb-4">Restricted</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="form-group first">
                <label for="email">{{ __('Email Address') }}</label>
                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
              <div class="form-group last mb-4">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <input type="submit" value="{{ __('Login') }}" class="btn btn-block btn-primary">
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
 
    @endsection