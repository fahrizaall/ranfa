@extends('layouts.app')

@section('content')
  <head>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
  </head>

  <div class="container">
    <div class="box-container">
      <div class="content">
        <h2>Register ke Ranfa</h2>

        <div class="form-wrapper">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input">
              <label for="">Nama</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>
            <div class="input email">
              <label for="">Email</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="input pass">
              <label for="">Password</label>
              <input id="password" type="password" name="password" required autocomplete="new-password">
            </div>
            <div class="input conf-pass">
              <label for="">Password</label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="input agree">
              <input type="checkbox" name="agreement" id="agreement">
              <label for="agreement">I agree with terms and conditions</label>
            </div>
            <button type="submit" class="">
              {{ __('Register') }}
            </button>
          </form>
        </div>
        <p>Already have an account? <a class="" href="{{ route('login') }}">{{ __('login') }}</a> </p>
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