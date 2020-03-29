@extends('layouts.default', ['title' => 'Register'])

@section('content')

<div class="w-100 row login-bg-custom" style="height: 100vh;">
  <div class="col-lg-6 order-2 order-lg-1">
    <div class="row">
      <div class="mx-auto mt-5 mb-4">
        <img src="" alt="">
        <h2 class="text-center font-weight-bold"><a class="text-primary" href="{{ route('home.index', ['language' => app()->getLocale()]) }}">JCK Transfert</a></h2>
      </div>
    </div>
  </div>


  <div class="col-lg-6 bg-white p-5 order-1 order-lg-2">
    <div class="row py-2">
      <div class="col-xl-8 col-md-10">
        <div class="content-box">
          <h5>Create account</h5>
          <p class="notice">Already have an account? <a href="{{ route('login.index', ['language' => app()->getLocale()]) }}" >Login Account</a></p>
          <p></p>
        </div>

        <form action="{{route('register.store', ['language' => app()->getLocale()])}}" method="post" class="col-12 w-100" id="form-register">

            @csrf

          <div class="form-group row">
            <label>Email</label>
            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="example@gmail.com"  value="{{ old('email') }}">
              <span class="invalid-feedback error-email">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group row">
            <label>Full Name</label>
            <input class="form-control form-control-lg @error('full_name') is-invalid @enderror" type="text" name="full_name" placeholder="Full name" id="full-name"  value="{{ old('full_name') }}"/>
              <span class="invalid-feedback error-full-name">{{ $errors->first("full_name") }}</span>
          </div>
          <div class="form-group row">
            <label>Password</label>
            <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" id="password"  placeholder="Password"  value="{{ old('password') }}"/>
              <span class="invalid-feedback error-password">{{ $errors->first("password") }}</span>
          </div>
          <div class="form-group row">
            <label>Confirm password</label>
            <input class="form-control form-control-lg" type="password" name="password_confirmation" id="confirm-password"  placeholder="Confirm password"  value="{{ old('password_confirmation') }}"/>
              <span class="invalid-feedback error-confirm-password"></span>
          </div>
          <div class="custom-control custom-checkbox row">
            <input type="checkbox" id="check-agree" name="terms" class="custom-control-input" {{ (old("terms")) ? "checked" : '' }}>
            <label for="check-agree" class="custom-control-label check-agree @error('terms') is-invalid @enderror">Agree with <a href="#" {{ $errors->first("terms") ? "class=text-danger" : "" }}>Terms and Conditions</a></label>
          </div>

          <div class="row my-3">
            <button type="submit" class="btn btn-filled w-100 mx-auto"><span class="bh"></span> <span>Signup</span></button>
          </div>

        </form>
      </div>
    </div>

    <div class="row">
      <ul class="nav mt-3">
        <li class="nav-item">
          <a href="{{ route('home.index', ['language' => app()->getLocale()]) }}" class="nav-link text-dark text-center">© JCK tranfert</a>
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

<script src="{{ asset('app/js/register.js') }}"></script>

@include('css.style')
@stop
