@extends('layouts.default', ['title' => 'Forgot password'])

@section('content')


<div class="w-100 login-bg-custom" style="height: 100vh;">
  <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
    <div class="row">
      <div class="mx-auto mt-5 mb-4">
        <img src="" alt="">
        <h2 class="text-center font-weight-bold"><a class="text-primary" href="{{ route('home.index') }}">JCK Transfert</a></h2>
      </div>
    </div>
      @if(session()->has('error'))
          <div class="row alert alert-danger" role="alert">
              {{ session('error') }}
          </div>
      @endif
    <div class="row">
      <div class="col-lg-12 bg-white p-5 shadow rounded mx-3 mx-md-0">
        <div class="content-box">
          <p>To reset your password, enter the email address associated with your account.</p>
        </div>



        <form method="post" action="" class="col-12 w-100" id="form-forgot-password" >

            @csrf

          <div class="form-group row">
            <label>Email</label>
            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" id="email"  value="{{old('email')}}">
            <span class="invalid-feedback error-email">{{ $errors->first("email") }}</span>
          </div>

          <div class="row my-3">
            <button class="btn btn-filled w-100 mx-auto" id="btn-login"><span class="bh"></span> <span>Continue</span></button>
              <div id="content-ajax-loader" style="margin: 0 auto; position: relative"></div>
          </div>

          <div class="row">
            <p class="mx-auto my-3">Do you have an account? <a href="{{ route('login.index') }}" class="ml-2 route-login"> Login Now</a></p>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <ul class="nav mx-auto mt-3">
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

    <script src="{{ asset('app/js/forgot-password.js') }}"></script>
@stop
