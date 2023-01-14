<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../assets/img/apple-icon.png" rel="apple-touch-icon" sizes="76x76">
    <link type="image/png" href="../assets/img/favicon.png" rel="icon">
    <title>
        Registration | Toothless Merchant
    </title>
    <link href="https://www.creative-tim.com/product/blk-design-system-pro" rel="canonical" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../assets/css/mystyle.css" rel="stylesheet">
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/blk-design-system-pro.min.css?v=1.0.0" rel="stylesheet" />
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="register-page">
    <div class="wrapper">
        <div class="page-header">
            <div class="page-header-image"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 mx-auto">
                        <div class="square square-7" id="square7"></div>
                        <div class="square square-8" id="square8"></div>
                        <div class="card card-register">
                            <div class="card-header">
                                <img class="card-img" src="../assets/img/square1.png" alt="Card image">
                                <h4 class="card-title" style="font-size: 3.8rem">Register</h4>
                            </div>
                            <form class="form" method="POST" action="{{ route('register') }}">
                                <div class="card-body">
                                    @csrf
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-single-02"></i>
                                            </div>
                                        </div>
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-email-85"></i>
                                            </div>
                                        </div>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-lock-circle"></i>
                                            </div>
                                        </div>
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-lock-circle"></i>
                                            </div>
                                        </div>
                                        <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-check text-left">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" required>
                                            <span class="form-check-sign"></span>
                                            I agree to the
                                            <a href="javascript:void(0)">terms and conditions</a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-info btn-round btn-lg" type="submit">Get Started</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="register-bg"></div>
            <div class="square square-1" id="square1"></div>
            <div class="square square-2" id="square2"></div>
            <div class="square square-3" id="square3"></div>
            <div class="square square-4" id="square4"></div>
            <div class="square square-5" id="square5"></div>
            <div class="square square-6" id="square6"></div>
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
    </div>

    <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/slick.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/anime.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/demo/demo.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/js/blk-design-system-pro.min.js?v=1.0.0') }}" type="text/javascript"></script>

    <script src="../assets/demo/jquery.sharrre.js"></script>
    <script>
        $(document).ready(function() {

            // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window,
                document, 'script', '//connect.facebook.net/en_US/fbevents.js');

            try {
                fbq('init', '111649226022273');
                fbq('track', "PageView");

            } catch (err) {
                console.log('Facebook Track Error:', err);
            }


            //
            //

        });
    </script>
    <noscript>
        <img src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" style="display:none" height="1" width="1" />
    </noscript>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-pro"
            });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"76243eb818434b56","version":"2022.10.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>

</html>
