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


    @include('layouts.select_navs')

    @yield('content')


    @stack('head_script')


</body>
</html>
