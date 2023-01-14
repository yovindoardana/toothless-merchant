<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
    <link type="image/png" href="../assets/img/favicon.png" rel="icon">
    <title>Login | Toothless Merchant</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
    <link href="../assets/css/mystyle.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/blk-design-system-pro.min.css?v=1.0.0" rel="stylesheet" />
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="squares square1"></div>
    <div class="squares square2"></div>
    <div class="squares square3"></div>
    <div class="squares square4"></div>
    <div class="squares square5"></div>
    <div class="squares square6"></div>
    <div class="page-header">
        <div class="page-header-image"></div>
        <div class="container">
            <div class="col-lg-5 col-md-8 mx-auto">
                <div class="card card-login">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card-header">
                            <img class="card-img" src="../assets/img/square-purple-1.png" alt="Card image">
                            <h4 class="card-title">{{ __('Login') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="tim-icons icon-key-25"></i></span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary btn-round btn-lg btn-block" type="submit" href="#pablo">Login</button>
                        </div>
                        <div class="pull-left ml-3 mb-3">
                            <h6>
                                <a class="link footer-link" href="{{ route('register') }}">Create Account</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/slick.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/anime.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="../assets/js/plugins/moment.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="../assets/demo/demo.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="../assets/js/blk-design-system-pro.min.js?v=1.0.0" type="text/javascript"></script>
    <script src="../assets/demo/jquery.sharrre.js"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"76137d93e9d289c2","version":"2022.10.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>

</html>
