<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Campus Inventory</title>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mainstyle.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&display=swap') }}" rel="stylesheet">

        <!-- Favicons -->

        <link rel="shortcut icon" type="text/css" href="images/favicon.png">
        <link rel="apple-touch-icon" type="text/css" href="images/apple-touch-icon.png">

        @laravelPWA

    </head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            @if (Auth::check())
            <button class="btn btn-link btn-sm order-0 order-lg-0 ml-2x" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            @endif
            <a class="navbar-brand font-weight-bold" href="/">Campus Inventory</a>
            <!-- Navbar-->
            @if (Auth::guest())
            <div class="ml-auto">
                <ul class="navbar-nav ml-md-0 mr-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button">Register</a>
                    </li>
                </ul>
            </div>
            @else
            <div class="ml-auto">
                <ul class="navbar-nav ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-2x" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user fa-fw"></i>
                            <span>
                                {{ auth()->user()->username }}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            @endif
        </nav>
        @if (Auth::guest())
        <main>
            @yield('content')
        </main>
        @else
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" id="dashboard" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a>
                            @if(auth()->user()->role == "admin")
                            <a class="nav-link" id="fakultas" href="/fakultas">
                                <div class="sb-nav-link-icon"><i class="fas fa-archway"></i></div>
                                Fakultas</a>
                            <a class="nav-link" id="jurusan" href="/jurusan">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Jurusan</a>
                            <a class="nav-link" id="ruangan" href="/ruangan">
                                <div class="sb-nav-link-icon"><i class="fas fa-door-open"></i></div>
                                Ruangan</a>
                            <a class="nav-link" id="barang" href="/barang">
                                <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                Barang</a>
                            @elseif(auth()->user()->role == "staff")
                            <a class="nav-link" id="barang" href="/barang">
                                <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                                Barang</a>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <div class="text-capitalize">{{ auth()->user()->role }}</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Musavi Ardabilly 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        @endif
        <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('vendor/fontawesome/js/all.js') }}"></script>
        <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    </body>
</html>