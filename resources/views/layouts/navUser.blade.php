<!-- Header start -->
<header class="header04">
    <div class="container d-flex align-items-center">
        <a class="logo" href="{{route('home.index', ['language' => app()->getLocale()])}}">
            <img src="{{ asset('app/images/logo.png') }}" alt="">
        </a>
        <nav class="primary-menu m-auto">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li class="current-menu-item"><a href="{{route('home.index', ['language' => app()->getLocale()])}}">Home</a></li>
                <!--<li><a href="{{ route('currencyconverter.index', ['language' => app()->getLocale()]) }}">Send Money</a></li>-->

                <li class="">
                    <a href="{{ route('about.us.index', ['language' => app()->getLocale()]) }}">About us</a>
                </li>

                <li><a href="{{route('contact.index', ['language' => app()->getLocale()])}}">Contact</a></li>


                    <li class="has-menu-child mr-md-3">
                        <a href="{{route(Route::currentRouteName(), ['language' => app()->getLocale()])}}">{{ (app()->getLocale() === 'fr') ?'French' : 'English' }}</a>

                        <ul class="sub-menu">
                            <li><a href="{{ route(Route::currentRouteName(), ['language' => 'fr']) }}">Français</a></li>
                            <li><a href="{{ route(Route::currentRouteName(), ['language' => 'en']) }}">English</a></li>
                        </ul>
                    </li>


                <!-- <li></li> -->
            </ul>
        </nav>
        <a href="{{ route('dashboard.index', ['language' => app()->getLocale(), strtolower(session()->get('currency_user')['full_name'])]) }}" class="login btn btn-outline btn-round p-3"><span class="bh"></span> <span>My account</span></a>
        <a href="{{ route('logout', ['language' => app()->getLocale()]) }}" class="login btn btn-default btn-round ml-3 p-3"><span class="bh"></span> <span>Log out</span></a>
    </div>
</header>

@include('css.style')
<!-- Header end -->
