@include('pile.scripts')
@include('pile.scripts_links')
@include('pile.styles')


    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, shrink-to-fit=no, width=device-width">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{$title ?? ''}}
    </title>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- Scripts --}}



    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('app/css/ajax-loader.css') }}"/>



    <!-- Bootstrap CSS -->
    @stack('head_style')


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->



</head>

<body class="home-one">


    @if((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])) && (request()->path() === 'en/login' || request()->path() === 'en/register'))

    @elseif((!isset(session()->get('currency_user')['email']) || !isset(session()->get('currency_user')['password'])))
        @include('layouts.nav');
    @elseif(request()->path() === 'en/dashboard')

    @else
         @include('layouts.navUser');
    @endif




    @yield('content')


    @stack('head_script')

</body>
</html>
