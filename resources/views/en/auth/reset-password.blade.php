@extends('layouts.default', ['title' => 'reset password'])

@section('content')


    <div class="w-100 login-bg-custom" style="height: 100vh;">
        <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
            <div class="row">
                <div class="mx-auto mt-5 mb-4">
                    <img src="" alt="">
                    <h2 class="text-center font-weight-bold"><a class="text-primary" href="{{ route('home.index',['language' => app()->getLocale()]) }}">JCK Transfert</a></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 bg-white p-5 shadow rounded mx-3 mx-md-0">
                    <div class="content-box">
                        <p>Enter your new password </p>
                    </div>



                    <form method="post" action="" class="col-12 w-100" id="form-reset-password" >

                        @csrf

                        <div class="form-group row">
                            <label>Password</label>
                            <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" id="password" />
                            <span class="invalid-feedback error-password">{{ $errors->first("password") }}</span>
                        </div>

                        <div class="form-group row">
                            <label>Confirm Password</label>
                            <input class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="confirm-password"/>
                            <span class="invalid-feedback error-confirm-password">{{ $errors->first("password_confirmation") }}</span>
                        </div>

                        <div class="row my-3">
                            <button class="btn btn-filled w-100 mx-auto"><span class="bh"></span> <span>Reset password</span></button>
                        </div>

                        <div class="row">
                            <p class="mx-auto my-3">Do you have an account? <a href="{{ route('login.index', ['language' => app()->getLocale()]) }}" class="ml-2"> Login Now</a></p>
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

    <script src="{{ asset('app/js/reset-password.js') }}"></script>
@stop
