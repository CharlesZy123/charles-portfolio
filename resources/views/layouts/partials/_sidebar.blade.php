<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="{{ route('login') }}">CF Varquez</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://twitter.com/DMonZy1" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/zy.varQuez.charles.05" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/zy-var-6372722b5/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                @guest
                    <li><a href="/" class="nav-link scrollto {{ Request::routeIs('welcome') ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Home</span></a></li>

                    <li><a href="{{ route('about.page') }}" class="nav-link scrollto {{ Request::routeIs('about.page') ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>

                    <li><a href="" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>

                    <li><a href="" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>

                    <li><a href="" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>

                    <li><a href="" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                @else
                    <li><a href="{{ route('home') }}" class="nav-link scrollto {{ Request::routeIs('home') ? 'active' : '' }}"><i class="bx bxs-dashboard"></i> <span>Dashboard</span></a></li>

                    {{-- <li><a href="#" class="nav-link scrollto"><i class="bx bx-cog"></i> <span>Settings</span></a> --}}
                        <ul class="sub-menu">
                            <li><a href="{{ route('about.page') }}" class="nav-link scrollto {{ Request::routeIs('about.page') ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>
                            <li><a href="#" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                            <li><a href="#" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                            <li><a href="#" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                            {{-- <li><a href="#" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> --}}
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link scrollto">
                            <i class="bx bx-log-out-circle"></i> <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
