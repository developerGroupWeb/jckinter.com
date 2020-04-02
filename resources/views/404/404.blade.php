
@include('pile.scripts')
@include('pile.styles')


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, shrink-to-fit=no, width=device-width">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" data-action="{{route('currencyconverter.data',  ['language' => app()->getLocale()])}}">

    <title>
        {{$title ?? ''}}
    </title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/png" href="{{ asset('app/images/icons/favicon.ico') }}"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Scripts --}}



    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('app/css/ajax-loader.css') }}"/>
    <link rel="stylesheet" href="{{ asset('app/css/stripe.css') }}"/>




    <!-- Bootstrap CSS -->
@stack('head_style')


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body class="home-one">


<!-- 404 Error section start -->
<section class="error-section">
    <div class="container">
        <div class="row">
            <div class="col-md-11 m-auto">
                <img src="{{asset('app/images/404.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-9 m-auto text-center">
                <div class="sec-heading">
                    <h2 class="sec-title">Oops! Page Not Found</h2>
                    <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <a href="{{route('home.index', ['language' => app()->getLocale()])}}" class="btn btn-filled btn-round"><span class="bh"></span> <span>Back to Home</span></a>
            </div>
        </div>
    </div>
</section>


<!-- 404 Error section end -->

@include('layouts.footer')



@stack('head_script')


</body>
</html>

