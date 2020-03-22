<!-- Header start -->
<header class="header">
    <div class="container d-flex align-items-center">
        <a class="logo" href="{{route('home.index')}}">
            <img src="{{ asset('app/images/logo.png') }}" alt="">
        </a>
        <nav class="primary-menu text-md-right">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li class="current-menu-item"><a href="{{route('home.index')}}">Home</a></li>
                <!--<li><a href="{{ route('currencyconverter.index') }}">Send Money</a></li>-->

                <li class="">
                    <a href="{{ route('about.us.index') }}">About us</a>
                </li>

                <li><a href="{{route('contact.index')}}">Contact</a></li>
                <li class="has-menu-child">
                    <a href="">English</a>
                    <ul class="sub-menu">
                        <li><a href="">Français</a></li>

                    </ul>
                </li>

                <li><a href="{{route('register.index')}}" class="login btn btn-outline btn-round"><span class="bh"></span> <span>Register</span></a></li>
                <li><a href="{{route('login.index')}}" class="login btn btn-outline btn-round"><span class="bh"></span> <span>Log in</span></a></li>
                <!-- <li></li> -->
            </ul>
        </nav>    
    </div>
</header>
<!-- Header end -->
