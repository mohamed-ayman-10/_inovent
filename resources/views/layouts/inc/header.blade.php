<header>
    <div class="banner"></div>
    <nav id="navbar" class="navbar bgcolorlight fixed-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                {{-- <span class="bi bi-text-center fs-1"></span> --}}
                <div class="menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light @yield('home')" aria-current="page"
                            href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light @yield('events')" href="{{ url('events') }}">Explore Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Profile</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="searsh me-3">
                        <i class="bi bi-search rounded"></i>
                        <input type="text" class="w-100 h-100 text-light px-2 py-1">
                    </div>
                    <button class="text-light signup me-3" type="submit">Signup</button>
                    <div class="dropdown">
                        <button class="bg-transparent lang text-light border-0 dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            EN
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">EN</a></li>
                            <li><a class="dropdown-item" href="#">AR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="body">
        <div class="container position-relative">
            <div class="row h-100">
                <div class="col-md-8 d-grid home-box mb-4">
                    <div class="box-left text-center text-md-start">
                        <h1 class="box-h1 text-main-2">
                            The Wonderful Visual <br>
                            <strong>Adventure</strong>
                        </h1>
                        <p class="pe-md-5 pe-0 mt-4 box-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex eacommodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
                <div class="col-md-4 d-grid home-box">
                    <div class="box-right">
                        <a href="#" class="a-1 rounded-pill bg-main-2 text-light d-block mx-auto mb-4">RESERVE
                            YOUR
                            SEAT</a>
                        <a href="#" class="a-2 rounded-pill text-light d-block mx-auto">See more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- <div class="row h-100">
    <div class="col-md-8 left position-absolute text-center text-md-start">
        <h1>
            The Wonderful Visual <br>
            <strong>Adventure</strong>
        </h1>
        <p class="pe-md-5 pe-0 mt-4 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex eacommodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="col-md-4 right position-absolute">
        <a href="#" class="a-1 rounded-pill bg-main text-light mx-auto mb-4">RESERVE YOUR SEAT</a>
        <a href="#" class="a-2 rounded-pill text-light mx-auto">See more</a>
    </div>
</div> --}}
