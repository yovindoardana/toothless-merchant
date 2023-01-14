 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href={{ asset('img/apple-icon.png') }} rel="apple-touch-icon" sizes="76x76">
     <link type="image/png" href={{ asset('img/favicon.png') }} rel="icon">
     <title>
         TOOTHLESS
     </title>
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
     <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <!-- Nucleo Icons -->
     <link href={{ asset('css/nucleo-icons.css') }} rel="stylesheet" />
     <!-- CSS Files -->
     <link href={{ asset('assets/css/blk-design-system.css?v=1.0.0') }} rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href={{ asset('assets/demo/demo.css') }} rel="stylesheet" />
 </head>

 <body class="index-page">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
         <div class="container">
             <div class="navbar-translate">
                 <a class="navbar-brand" data-placement="bottom" href="https://demos.creative-tim.com/blk-design-system/index.html" title="Designed and Coded by Creative Tim" rel="tooltip" target="_blank">
                     <span>TOOTHLESS•</span> incredible payment
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
                                 BLK•
                             </a>
                         </div>
                         <div class="col-6 collapse-close text-right">
                             <button class="navbar-toggler" data-toggle="collapse" data-target="#navigation" type="button" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                 <i class="tim-icons icon-simple-remove"></i>
                             </button>
                         </div>
                     </div>
                 </div>

                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link btn btn-default d-none d-lg-block" data-toggle="modal" data-target="#myModalSignIn">
                             <i class="tim-icons icon-cloud-download-93"></i> Sign In
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link btn btn-default d-none d-lg-block" data-toggle="modal" data-target="#myModalSignUp">
                             <i class="tim-icons icon-cloud-download-93"></i> Sign Up
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- End Navbar -->
     <div class="wrapper">
         <div class="page-header header-filter">
             <div class="squares square1"></div>
             <div class="squares square2"></div>
             <div class="squares square3"></div>
             <div class="squares square4"></div>
             <div class="squares square5"></div>
             <div class="squares square6"></div>
             <div class="squares square7"></div>
             <div class="container">
                 <div class="brand content-center">
                     <h1 class="h1-seo">Burn You Money Here</h1>
                     <h3>A beautiful Design System for Bootstrap 4. It's Free and Open Source.</h3>
                 </div>
             </div>
         </div>

         <div class="col-2 container mt-3">
             <h2>Game</h2>
             <div class="card border-0 shadow">
                 <img class="img" src={{ asset('assets/img/cercuri.png') }} alt="..." height="200px">
                 <div class="card-body">
                     <h5 class="card-title"></h5>
                     <a class="nav-link btn btn-primary d-none d-lg-block text-white" data-toggle="modal" data-target="#ModalMLBB">
                         Detail
                     </a>
                 </div>
             </div>
         </div>


         <!-- Form Modal -->
         <div class="modal fade modal-black" id="myModalSignIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header justify-content-center">
                         <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                             <i class="tim-icons icon-simple-remove text-white"></i>
                         </button>
                         <div class="text-muted ml-auto mr-auto text-center">
                             <h3 class="mb-0">Sign In</h3>
                         </div>
                     </div>
                     <div class="modal-body">
                         <form role="form" action="">
                             <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-email-85"></i>
                                         </span>
                                     </div>
                                     <input class="form-control" type="text" placeholder="Username">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-key-25"></i>
                                         </span>
                                     </div>
                                     <input class="form-control" type="password" placeholder="Password">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-key-25"></i>
                                         </span>
                                     </div>
                                     <input class="form-control" type="password" placeholder="Re-type Password">
                                 </div>
                             </div>
                             <div class="form-check mt-3">
                                 <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox" checked>
                                     <span class="form-check-sign"></span>
                                     Show Password
                                 </label>
                             </div>
                             <div class="text-center">
                                 <button class="btn btn-primary my-4" type="button">Sign Up</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>

         {{-- Start Modal MLBB --}}
         <div class="modal fade modal-black" id="ModalMLBB" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header justify-content-center">
                         <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                             <i class="tim-icons icon-simple-remove text-white"></i>
                         </button>
                         <div class="text-muted ml-auto mr-auto text-center">
                             <h3 class="mb-0">Mobile Legends <br>BangBang</h3>
                         </div>
                     </div>
                     <div class="justify-content-center">
                         <img src={{ asset('assets/img/mlbb.png') }}>
                     </div>
                     <div class="modal-body">
                         <form role="form" action="">
                             <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-email-85"></i>
                                         </span>
                                     </div>
                                     <input class="form-control" type="text" placeholder="Insert User ID">
                                     <input class="form-control" type="text" placeholder="Zone ID">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                     <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                         <i class="fa fa-cogs d-lg-none d-xl-none"></i> Choose Item
                                     </a>
                                     <div class="dropdown-menu dropdown-with-icons">
                                         <a class="dropdown-item" href="">
                                             <i class="tim-icons icon-paper"></i>xxx
                                         </a>
                                     </div>
                                     <div class="mt-2">
                                         <p>Price : IDR <span></span></p>
                                     </div>
                                 </div>
                             </div>
                             <div class="text-center">
                                 <button class="btn btn-primary my-4" type="button">Continue Payment</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>


         <div class="modal fade modal-black" id="myModalSignUp" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header justify-content-center">
                         <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                             <i class="tim-icons icon-simple-remove text-white"></i>
                         </button>
                         <div class="text-muted ml-auto mr-auto text-center">
                             <h3 class="mb-0">Sign Up Now!</h3>
                         </div>
                     </div>
                     <div class="modal-body">
                         <form role="form" action="{{ route('register') }}">
                             @csrf
                             <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-email-85"></i>
                                         </span>
                                     </div>
                                     <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('username') }}" required autocomplete="name" autofocus placeholder="Enter Username">
                                 </div>
                             </div>
                             <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-email-85"></i>
                                         </span>
                                     </div>
                                     <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-key-25"></i>
                                         </span>
                                     </div>
                                     <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="new-password" placeholder="Enter Password">
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text">
                                             <i class="tim-icons icon-key-25"></i>
                                         </span>
                                     </div>
                                     <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="Re-type Password">
                                 </div>
                             </div>
                             <div class="text-center">
                                 <button class="btn btn-primary my-4" type="submit">Sign Up</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!--  End Modal -->
     </div>
     <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <h1 class="title">BLK•</h1>
                 </div>
                 <div class="col-md-3">
                     <ul class="nav">
                         <li class="nav-item">
                             <a class="nav-link" href="./index.html">
                                 Home
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="./examples/landing-page.html">
                                 Landing
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="./examples/register-page.html">
                                 Register
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="./examples/profile-page.html">
                                 Profile
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <ul class="nav">
                         <li class="nav-item">
                             <a class="nav-link" href="https://creative-tim.com/contact-us">
                                 Contact Us
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="https://creative-tim.com/about-us">
                                 About Us
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="https://creative-tim.com/blog">
                                 Blog
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="https://opensource.org/licenses/MIT">
                                 License
                             </a>
                         </li>
                     </ul>
                 </div>
                 <div class="col-md-3">
                     <h3 class="title">Follow us:</h3>
                     <div class="btn-wrapper profile">
                         <a class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us" href="https://twitter.com/creativetim" target="_blank">
                             <i class="fab fa-twitter"></i>
                         </a>
                         <a class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us" href="https://www.facebook.com/creativetim" target="_blank">
                             <i class="fab fa-facebook-square"></i>
                         </a>
                         <a class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us" href="https://dribbble.com/creativetim" target="_blank">
                             <i class="fab fa-dribbble"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     </div>
     <!--   Core JS Files   -->
     <script src={{ asset('assets/js/core/jquery.min.js') }} type="text/javascript"></script>
     <script src={{ asset('assets/js/core/popper.min.js') }} type="text/javascript"></script>
     <script src={{ asset('assets/js/core/bootstrap.min.js') }} type="text/javascript"></script>
     <script src={{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}></script>
     <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
     <script src={{ asset('assets/js/plugins/bootstrap-switch.js') }}></script>
     <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
     <script src={{ asset('assets/js/plugins/nouislider.min.js') }} type="text/javascript"></script>
     <!-- Chart JS -->
     <script src={{ asset('assets/js/plugins/chartjs.min.js') }}></script>
     <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
     <script src={{ asset('assets/js/plugins/moment.min.js') }}></script>
     <script src={{ asset('assets/js/plugins/bootstrap-datetimepicker.js') }} type="text/javascript"></script>
     <!-- Black Dashboard DEMO methods, don't include it in your project! -->
     <script src={{ asset('assets/demo/demo.js') }}></script>
     <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
     <script src={{ asset('assets/js/blk-design-system.min.js?v=1.0.0') }} type="text/javascript"></script>
     <script>
         $(document).ready(function() {
             blackKit.initDatePicker();
             blackKit.initSliders();
         });

         function scrollToDownload() {

             if ($('.section-download').length != 0) {
                 $("html, body").animate({
                     scrollTop: $('.section-download').offset().top
                 }, 1000);
             }
         }
     </script>
 </body>

 </html>
