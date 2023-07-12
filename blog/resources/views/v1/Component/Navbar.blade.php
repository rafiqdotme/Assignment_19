<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
            <h1>Ostad<span>.</span>app</h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ asset('/register') }}">Registration</a></li>
                <li><a href="{{ asset('/login') }}">Login</a></li>
                <li><a href="{{ asset('/about') }}">About</a></li>
                <li><a href="{{ asset('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header>