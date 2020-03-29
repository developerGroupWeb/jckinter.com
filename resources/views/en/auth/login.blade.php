
@extends('layouts.default', ['title' => 'Login'])

@section('content')


<div class="w-100 login-bg-custom" style="height: 100vh;">
  <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
    <div class="row">
      <div class="mx-auto mt-5 mb-4">
        <img src="" alt="">
        <h2 class="text-center font-weight-bold"><a class="text-primary" href="{{ route('home.index', ['language' => app()->getLocale()]) }}">JCK Transfert</a></h2>
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

          @if(session()->has('danger'))
              <div class="row alert alert-danger" role="alert">
                  {{ session('danger') }}
              </div>
          @endif

          @if(session()->has('success'))
              <div class="row alert alert-info" role="alert">
                 {!! session('success') !!}
              </div>
          @endif

        <form method="post" action="" class="col-12 w-100" id="form-login" data-browse="{{ route('dashboard.index', ['language' => app()->getLocale()]) }}" >

            @csrf

          <div class="form-group row">
            <label>Email</label>
            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" id="email" required value="{{old('email')}}">
            <span class="invalid-feedback error-email">{{ $errors->first("email") }}</span>
          </div>
          <div class="form-group row">
            <label>Password</label>
            <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" id="password" required value="{{old('password')}}">
            <span class="invalid-feedback error-password">{{ $errors->first("password") }}</span>
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
            <p class="mx-auto my-3"><a href="{{ route('forgot.password.index', ['language' => app()->getLocale()]) }}" class="">Forget password?</a></p>
          </div>

          <div class="row">
            <p class="mx-auto my-3">Don’t have an account? <a href="{{ route('register.index', ['language' => app()->getLocale()]) }}" class="ml-2"> Signup Now</a></p>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <ul class="nav mx-auto mt-3">
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


<script src="{{ asset('app/js/login.js') }}"></script>


@stop
