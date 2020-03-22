
<!-- Header start -->
<header class="header">
    <div class="container d-flex align-items-center">
        <a class="logo" href="{{route('home.index', app()->getLocale())}}">
            <img class="" src="{{ asset('app/images/logo-banner44.png') }}" alt="logo">

        </a>
        <nav class="primary-menu text-md-right">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li class="current-menu-item"><a href="{{route('home.index', app()->getLocale())}}">Home</a></li>
            <!--<li><a href="{{ route('currencyconverter.index', app()->getLocale()) }}">Send Money</a></li>-->

                <li class="">
                    <a href="{{ route('about.us.index', app()->getLocale()) }}">About us</a>
                </li>

                <li><a href="{{route('contact.index', app()->getLocale())}}">Contact</a></li>
                <li class="has-menu-child mr-md-3">
                    <a href="{{ route(Route::currentRouteName(), app()->getLocale()) }}">English</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route(Route::currentRouteName(), 'en') }}">English</a></li>
                        <li><a href="{{ route(Route::currentRouteName(), 'fr') }}">Français</a></li>

                    </ul>
                </li>

                <li><a href="{{route('register.index', app()->getLocale())}}" class="login btn btn-default btn-outline btn-round"><span class="bh"></span> <span>Register</span></a></li>
                <li><a href="{{route('login.index', app()->getLocale())}}" class="login btn btn-outline  btn-round"><span class="bh"></span> <span>Log in</span></a></li>
                <!-- <li></li> -->
            </ul>
        </nav>


    </div>
</header>
<!-- Header end -->
