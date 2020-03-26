
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

                @if(isset($role->id) && !empty($role->id))
                    <li class="has-menu-child mr-md-3">
                        <a href="{{route(Route::currentRouteName(), ['language' => app()->getLocale(), 'id' => $role->id])}}"> {{ (app()->getLocale() === 'fr') ? 'French' : 'English' }}</a>

                            <ul>
                                <li><a href="{{ route(Route::currentRouteName(), ['language' => 'fr',  'id' => $role->id]) }}">French</a></li>
                                <li><a href="{{ route(Route::currentRouteName(), ['language' => 'en','id' => $role->id]) }}">English</a></li>
                            </ul>
                    </li>

                @else
                    <li class="has-menu-child mr-md-3">
                        <a href="{{route(Route::currentRouteName(), ['language' => app()->getLocale()])}}">{{ (app()->getLocale() === 'fr') ?'French' : 'English' }}</a>

                            <ul>
                                <li><a href="{{ route(Route::currentRouteName(), ['language' => 'fr']) }}">Français</a></li>
                                <li><a href="{{ route(Route::currentRouteName(), ['language' => 'en']) }}">English</a></li>
                            </ul>
                    </li>

                @endif



                <li><a href="{{route('register.index', app()->getLocale())}}" class="login btn btn-default btn-outline btn-round"><span class="bh"></span> <span>Register</span></a></li>
                <li><a href="{{route('login.index', app()->getLocale())}}" class="login btn btn-outline  btn-round"><span class="bh"></span> <span>Log in</span></a></li>
                <!-- <li></li> -->
            </ul>
        </nav>


    </div>
</header>
<!-- Header end -->
