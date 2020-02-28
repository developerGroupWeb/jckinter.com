@extends('layouts.default', ['title' => 'Register'])

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
          <h2>Create Account</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sedo<br> eiusmod tempor incididunt dolore.</p>
        </div>



        <form action="{{route('register.store')}}" method="post" class="sl-form" id="form-register">

            @csrf

          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="full_name" placeholder="Jhone Doe" id="full-name" required value="{{ old('full_name') }}">
              <span class="text-danger error-full-name font-italic">{{ $errors->first("full_name") }}</span>
          </div>
          <div class="form-group">
            <label>Email or Username</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" required value="{{ old('email') }}">
              <span class="text-danger error-email font-italic">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
              <span class="text-danger error-password font-italic">{{ $errors->first("password") }}</span>
          </div>
          <div class="form-check">
            <input type="checkbox" name="terms" class="form-check-input" {{ (old("terms")) ? "checked" : '' }}>
            <label class="form-check-label">Agree with <a href="#" {{ $errors->first("terms") ? "class=text-danger" : "" }}>Terms and Conditions</a></label>
          </div>
          <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Signup</span></button>
          <p class="notice">Already have an account? <a href="{{ route('login.index') }}" >Login Account</a></p>

        </form>

      </div>
    </div>

    <script src="{{ asset('app/js/register.js') }}"></script>

@stop
