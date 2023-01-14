<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('assets/img/apple-icon.png') }}" rel="apple-touch-icon" sizes="76x76">
    <link type="image/png" href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    {{-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> --}}
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/blk-design-system.min.css?v=1.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/blk-design-system-pro.min.css?v=1.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl.theme.default.css') }}">

    <script src="https://kit.fontawesome.com/0dedfb2926.js" crossorigin="anonymous"></script>
    <title>Toothless</title>
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" data-placement="bottom" href="/" title="Designed and Coded by Creative Tim" rel="tooltip">
                    <span>TOOTHLESS •</span> incredible payment
                </a>
                <button class="navbar-toggler navbar-toggler" data-toggle="collapse" data-target="#navigation" type="button" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a>
                                Toothless Merchant
                            </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation" type="button" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                            <i class="tim-icons icon-single-02" aria-hidden="true"></i>
                        </a>

                        @if (Route::has('login'))
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
                                @auth
                                    @if (Auth::user()->role == 'admin')
                                        <a class="dropdown-header">Account</a>
                                        <a class="dropdown-item text-capitalize">{{ Auth::user()->name }}</a>
                                        <a class="dropdown-item" href="/game">Games</a>
                                        <a class="dropdown-item" href="/category">Categories</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    @else
                                        <a class="dropdown-header">{{ Auth::user()->name }}</a>
                                        <a class="dropdown-item" href={{ route('user.edit', Auth::user()->id) }}>Edit Profile</a>
                                        <a class="dropdown-item" href={{ route('transaction.index') }}>Transaction History</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    @endif
                                @else
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modalSignIn" href="#">
                                        <i class="tim-icons icon-lock-circle"></i>
                                        Sign In
                                    </a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#modalRegistrasi" href="#">
                                        <i class="tim-icons icon-key-25"></i>
                                        Register
                                    </a>
                                @endauth
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        @yield('main')

        <footer class="footer footer-simple">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a class="nav-link" href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                                License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a class="copyright-link" href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a class="copyright-link" href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
    @include('modal.loginModal')
    @include('modal.registrasiModal')
    <!--   Core JS Files   -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="{{ asset('assets/js/jquery.v3.6.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/demo/demo.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/jquery.sharrre.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/carosel.js') }}"></script>

    <script src="{{ asset('assets/js/pricelist.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            blackKit.initDatePicker();
            blackKit.initSliders();

            // $('#tableProduct').DataTable({
            //     paging: true,
            //     ordering: true
            // });
        });
    </script>
</body>

</html>
