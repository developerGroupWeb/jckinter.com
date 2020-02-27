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
        <form action="#" class="sl-form">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Jhone Doe" required>
          </div>
          <div class="form-group">
            <label>Email or Username</label>
            <input type="email" placeholder="example@gmail.com" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">Agree with <a href="#">Terms and Conditions</a></label>
          </div>
          <button class="btn btn-filled btn-round"><span class="bh"></span> <span>Signup</span></button>
          <p class="notice">Already have an account? <a href="{{ route('home.login') }}">Login Account</a></p>
        </form>
      </div>
    </div>

@stop
