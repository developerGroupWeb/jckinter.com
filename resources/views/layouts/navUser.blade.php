<!-- Header start -->
<header class="header04">
    <div class="container d-flex align-items-center">
        <a class="logo" href="{{route('home.index')}}">
            <img src="{{ asset('app/images/logo.png') }}" alt="">
        </a>
        <nav class="primary-menu m-auto">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li class="current-menu-item"><a href="{{route('home.index')}}">Home</a></li>
                <!--<li><a href="{{ route('currencyconverter.index') }}">Send Money</a></li>-->

                <li class="">
                    <a href="#">About</a>
                </li>

                <li><a href="contact.html">Contact</a></li>
                <li class="has-menu-child">
                    <a href="blog.html">English</a>
                    <ul class="sub-menu">
                        <li><a href="">Français</a></li>

                    </ul>
                </li>
                <!-- <li></li> -->
            </ul>
        </nav>
        <a href="{{ route('dashboard.index', strtolower(session()->get('currency_user')['full_name'])) }}" class="login btn btn-outline btn-round p-3"><span class="bh"></span> <span>My account</span></a>
        <a href="{{ route('logout') }}" class="login btn btn-default btn-round ml-3 p-3"><span class="bh"></span> <span>Log out</span></a>
    </div>
</header>
<!-- Header end -->
