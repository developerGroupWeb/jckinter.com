@extends('layouts.default', ['title' => 'Register'])

@section('content')

<div class="w-100 row login-bg-custom" style="height: 100vh;">
  <div class="col-lg-6 order-2 order-lg-1">
    <div class="row">
      <div class="mx-auto mt-5 mb-4">
        <img src="" alt="">
        <h2 class="text-center font-weight-bold"><a class="text-primary" href="#">JCK Transfert</a></h2>
      </div>
    </div>
  </div>


  <div class="col-lg-6 bg-white p-5 order-1 order-lg-2">
    <div class="row py-2">
      <div class="col-xl-8 col-md-10">
        <div class="content-box">
          <h5>Create account</h5>
          <p class="notice">Already have an account? <a href="{{ route('login.index') }}" >Login Account</a></p>
          <p></p>
        </div>

        <form action="{{route('register.store')}}" method="post" class="col-12 w-100" id="form-register">

            @csrf

          <div class="form-group row">
            <label>Email</label>
            <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="example@gmail.com" required value="{{ old('email') }}">
              <span class="text-danger error-email font-italic">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group row">
            <label>Full Name</label>
            <input class="form-control form-control-lg" type="text" name="full_name" placeholder="Full name" id="full-name" required value="{{ old('full_name') }}">
              <span class="text-danger error-full-name font-italic">{{ $errors->first("full_name") }}</span>
          </div>
          <div class="form-group row">
            <label>Password</label>
            <input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Password" required>
              <span class="text-danger error-password font-italic">{{ $errors->first("password") }}</span>
          </div>
          <div class="form-group row">
            <label>Confirm password</label>
            <input class="form-control form-control-lg" type="password" name="password_confirmation" id="confirm-password" placeholder="Confirm password" required>
              <span class="text-danger error-confirm-password font-italic"></span>
          </div>
          <div class="custom-control custom-checkbox row">
            <input type="checkbox" id="check-agree" name="terms" class="custom-control-input" {{ (old("terms")) ? "checked" : '' }}>
            <label for="check-agree" class="custom-control-label check-agree">Agree with <a href="#" {{ $errors->first("terms") ? "class=text-danger" : "" }}>Terms and Conditions</a></label>
          </div>

          <div class="row my-3">
            <button class="btn btn-filled w-100 mx-auto"><span class="bh"></span> <span>Signup</span></button>
          </div>

        </form>
      </div>
    </div>

    <div class="row">
      <ul class="nav mt-3">
        <li class="nav-item">
          <a href="" class="nav-link text-dark text-center">© JCK tranfert</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-dark text-center">Contact</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-dark text-center">Privacy & Policy</a>
        </li>
      </ul>
    </div>
  </div>
</div>



<!--<div class="signup-login">
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
          <h2>Create account</h2>
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
    </div>-->



@stop
