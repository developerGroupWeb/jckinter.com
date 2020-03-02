
@extends('layouts.default', ['title' => 'Login'])

@section('content')


<div class="w-100 login-bg-custom" style="height: 100vh;">
  <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
    <div class="row">
      <div class="mx-auto mt-5 mb-4">
        <img src="" alt="">
        <h2 class="text-center font-weight-bold"><a class="text-primary" href="#">JCK Transfert</a></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 bg-white p-5 shadow rounded mx-3 mx-md-0">
        <div class="content-box">
          <h5>Login to your account</h5>
          <p></p>
        </div>

          @if(session()->has('error'))
              <div class="row alert alert-danger" role="alert">
                  @foreach(session('error') as $error)
                      {{$error}}
                  @endforeach
              </div>
          @endif

        <form method="post" action="{{ route('login.store') }}" class="col-12 w-100" id="form-login" >

            @csrf

          <div class="form-group row">
            <label>Email</label>
            <input class="form-control form-control-lg" type="email" name="email" id="email" required value="{{old('email')}}">
            <span class="text-danger error-email font-italic">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group row">
            <label>Password</label>
            <input class="form-control form-control-lg" type="password" name="password" id="password" required value="{{old('password')}}">
            <span class="text-danger error-password font-italic">{{ $errors->first("password") }}</span>
          </div>
          <div class="custom-control custom-checkbox row">
            <input type="checkbox" name="remember" class="custom-control-input" id="check-remember">
            <label for="check-remember" class="custom-control-label">Remember Password</label>
          </div>
          <div class="row my-3">
            <button class="btn btn-filled w-100 mx-auto" id="btn-login"><span class="bh"></span> <span>Login</span></button>
            <div id="content-ajax-loader" style="margin: 0 auto; position: relative"></div>
          </div>

          <div class="row">
            <p class="mx-auto my-3"><a href="{{ route('forgot.password.index') }}" class="">Forget password?</a></p>
          </div>

          <div class="row">
            <p class="mx-auto my-3">Don’t have an account? <a href="{{ route('register.index') }}" class="ml-2"> Signup Now</a></p>
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
    </div>-->



@stop
