<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand">
                <img src="{{ asset('app/images/logo-banner44.png') }}" class="navbar-brand-img" alt="logo">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.profile.user.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                        <a class="nav-link" href="{{route('admin.order.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Orders List</span>
                        </a>
                        <!--<a class="nav-link" href="{{route('admin.role.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Role List</span>
                        </a>
                        <a class="nav-link" href="{{route('admin.user.create.role.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Create Role</span>
                        </a>-->
                        <a class="nav-link" href="{{route('users.create', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Create Manager</span>
                        </a>
                        <a class="nav-link" href="{{route('users.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Managers List</span>
                        </a>
                        <a class="nav-link" href="{{route('admin.customer.index', ['language' => app()->getLocale()])}}">
                            <i class="ni ni-collection text-yellow"></i>
                            <span class="nav-link-text">Customers List</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
