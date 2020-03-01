@extends('layouts.defaultNav', ['title' => 'Login'])

@section('content')

<div class="signup-login">
      <div class="sl-slider-caro owl-carousel">
        <div class="single-sl-slide">
          <img src="{{ asset('app/images/mac.png') }}" alt="">
          <div class="content-box">
            <h2>All In One Transfer Solutions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
          </div>
        </div>
        <div class="single-sl-slide">
          <img src="{{ asset('app/images/mac.png') }}" alt="">
          <div class="content-box">
            <h2>All In One Transfer Solutions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
          </div>
        </div>
        <div class="single-sl-slide">
          <img src="{{ asset('app/images/mac.png') }}" alt="">
          <div class="content-box">
            <h2>All In One Transfer Solutions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo eiusmod tempor incididunt dolore.</p>
          </div>
        </div>
      </div>
      <div class="sl-form-wrap">
        <header>
          <a href="#" class="logo">
            <img src="{{ asset('app/images/logo-2.png') }}" alt="">
          </a>
          <a href="#" class="mbl-menu-toggler">
            <i class="fas fa-align-left"></i>
          </a>
        </header>
        <div class="content-box">
          <h2>Log in account</h2>
          <p></p>
        </div>

          @if(session()->has('error'))
              <div class="alert alert-danger" role="alert">
                  @foreach(session('error') as $error)
                      {{$error}}
                  @endforeach
              </div>
          @endif

        <form method="post" action="{{ route('login.store') }}" class="sl-form" id="form-login" >

            @csrf

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required value="{{old('email')}}">
            <span class="text-danger error-email font-italic">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" id="password" required value="{{old('password')}}">
            <span class="text-danger error-password font-italic">{{ $errors->first("password") }}</span>
          </div>
          <div class="form-check">
            <input type="checkbox" name="remember" class="form-check-input">
            <label class="form-check-label">Remember Password</label>
          </div>
          <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Login</span></button>
          <p class="notice">Don’t have an account? <a href="{{ route('register.index') }}">Signup Now</a></p>
        </form>
      </div>
    </div>
@stop
