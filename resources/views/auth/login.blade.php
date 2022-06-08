@extends('layouts.app')

@section('content')
  <head>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
  </head>

  <div class="container">
    <div class="box-container">
      <div class="content">
        <h2>Login ke Ranfa</h2>

        <div class="form-wrapper">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input email">
              <label for="">Email</label>
              {{-- <input type="email" placeholder="your email address"> --}}
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="input pass">
              <label for="">Password</label>
              {{-- <input type="password" placeholder="your password"> --}}
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
            @endif
            <button>Login</button>
          </form>
        </div>
        <p>Doesn't have an account? <a class="" href="{{ route('register') }}">{{ __('Register') }}</a> </p>
      </div>
      <div class="quote">
        <div class="text">
          <p>some quote from someone important</p>
          <p class="by">- someone</p>
        </div>
      </div>
    </div>
  </div>
@endsection