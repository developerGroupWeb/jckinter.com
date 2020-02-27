<!-- Header start -->
<header class="header04">
    <div class="container d-flex align-items-center">
        <a class="logo" href="{{route('home.index')}}">
            <img src="{{ asset('app/images/logo.png') }}" alt="">
        </a>
        <nav class="primary-menu m-auto">
            <a id="mobile-menu-toggler" href="#"><i class="fas fa-bars"></i></a>
            <ul>
                <li class="current-menu-item has-menu-child"><a href="{{route('home.index')}}">Home</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('home.index') }}">Home 01</a></li>
                        <li><a href="{{ route('currencyconverter.index') }}">Home 02</a></li>

                    </ul>
                </li>
                <li><a href="{{ route('currencyconverter.index') }}">Send Money</a></li>
                <li><a href="landing-page-receive.html">Receive Money</a></li>
                <li class="has-menu-child"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="how-it-works-send.html">How it works - Send</a></li>
                        <li><a href="how-it-works-receive.html">How it works - Receive</a></li>
                        <li><a href="how-it-works-paybills.html">How it works - Paybills</a></li>
                        <li><a href="landing-page-ecommerce.html">Landing - Ecommerce</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="404.html">404 Error page</a></li>
                        <li><a href="coming-soon.html">Coming soon</a></li>
                        <li><a href="signup.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="has-menu-child">
                    <a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="about-01.html">About 01</a></li>
                        <li><a href="about-02.html">About 02</a></li>
                    </ul>
                </li>
                <li class="has-menu-child">
                    <a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li></li> -->
            </ul>
        </nav>
        <a href="{{route('home.login')}}" class="login btn-default"><span class="bh"></span> <span>login</span></a>
        <a href="{{route('home.register')}}" class="login btn ml-3"><span class="bh"></span> <span>Signup</span></a>
    </div>
</header>
<!-- Header end -->
