 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href={{ asset('img/apple-icon.png') }} rel="apple-touch-icon" sizes="76x76">
     <link type="image/png" href={{ asset('img/favicon.png') }} rel="icon">
     <title>
         HALAMAN ADMIN
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
                         <a class="nav-link btn btn-default d-none d-lg-block" data-toggle="modal" data-target="#myModal2">
                             <i class="tim-icons icon-cloud-download-93"></i> Sign In
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link btn btn-default d-none d-lg-block" data-toggle="modal" data-target="#myModal2">
                             <i class="tim-icons icon-cloud-download-93"></i> Sign Up
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                             @csrf
                         </form>
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

         <div class="carousel slide container" id="carouselExampleInterval" data-bs-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active" data-bs-interval="10000">
                     <img class="d-block w-100" src={{ asset('assets/img/profile-page.png') }} alt="...">
                 </div>
                 <div class="carousel-item" data-bs-interval="2000">
                     <img class="d-block w-100" src="..." alt="...">
                 </div>
                 <div class="carousel-item">
                     <img class="d-block w-100" src="..." alt="...">
                 </div>
             </div>
             <button class="carousel-control-prev" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" type="button">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" data-bs-target="#carouselExampleInterval" data-bs-slide="next" type="button">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Next</span>
             </button>
         </div>

         <div class="col-2 container mt-3">
             <h2>Game</h2>
             <div class="card border-0 shadow">
                 <img class="img" src={{ asset('assets/img/cercuri.png') }} alt="..." height="200px">
                 <div class="card-body">
                     <h5 class="card-title"></h5>
                     <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" href="/user/templateprod">
                         Detail
                     </a>
                 </div>
             </div>
         </div>


         <div class="main">
             <div class="section section-basic" id="basic-elements">
                 <img class="path" src="assets/img/path1.png">
                 <div class="container">
                     <h2 class="title">Basic Elements</h2>
                     <h3>Buttons</h3>
                     <p class="category">Pick your style</p>
                     <div class="row">
                         <div class="col-md-10">
                             <button class="btn btn-primary" type="button">Default</button>
                             <button class="btn btn-primary btn-round" type="button">Round</button>
                             <button class="btn btn-primary btn-round" type="button">
                                 <i class="tim-icons icon-heart-2"></i> With Icon
                             </button>
                             <button class="btn btn-primary btn-icon btn-round" type="button">
                                 <i class="tim-icons icon-heart-2"></i>
                             </button>
                             <button class="btn btn-primary btn-simple btn-round" type="button">Simple</button>
                         </div>
                     </div>
                     <p class="category">Pick your size</p>
                     <div class="row">
                         <div class="col-md-10">
                             <button class="btn btn-primary btn-sm">Small</button>
                             <button class="btn btn-primary">Regular</button>
                             <button class="btn btn-primary btn-lg">Large</button>
                         </div>
                     </div>
                     <p class="category">Pick your color</p>
                     <div class="row">
                         <div class="col-md-12">
                             <button class="btn">Default</button>
                             <button class="btn btn-primary">Primary</button>
                             <button class="btn btn-info">Info</button>
                             <button class="btn btn-success">Success</button>
                             <button class="btn btn-warning">Warning</button>
                             <button class="btn btn-danger">Danger</button>
                             <button class="btn btn-neutral">Neutral</button>
                         </div>
                     </div>
                     <br />
                     <h3>Links</h3>
                     <div class="row">
                         <div class="col-md-8">
                             <button class="btn btn-link">Default</button>
                             <button class="btn btn-link btn-primary">Primary</button>
                             <button class="btn btn-link btn-info">Info</button>
                             <button class="btn btn-link btn-success">Success</button>
                             <button class="btn btn-link btn-warning">Warning</button>
                             <button class="btn btn-link btn-danger">Danger</button>
                         </div>
                     </div>
                     <div class="space-70"></div>
                     <div id="inputs">
                         <h3>Inputs</h3>
                         <p class="category">Form Controls</p>
                         <div class="row">
                             <div class="col-sm-6 col-lg-3">
                                 <div class="form-group">
                                     <input class="form-control" type="text" value="" placeholder="Regular" />
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="form-group has-success">
                                     <input class="form-control form-control-success" type="text" value="Success" />
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="form-group has-danger">
                                     <input class="form-control form-control-danger" type="email" value="Error Input" />
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="input-group">
                                     <div class="input-group-prepend">
                                         <span class="input-group-text"><i class="fa fa-user"></i></span>
                                     </div>
                                     <input class="form-control" type="text" placeholder="Left Font Awesome Icon">
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="input-group">
                                     <input class="form-control" type="text" placeholder="Right Nucleo Icon">
                                     <div class="input-group-append">
                                         <span class="input-group-text"><i class="tim-icons icon-lock-circle"></i></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="space-70"></div>
                     <div class="row" id="checkRadios">
                         <div class="col-sm-6 col-lg-3">
                             <p class="category">Checkboxes</p>
                             <div class="form-check">
                                 <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox">
                                     <span class="form-check-sign"></span>
                                     Unchecked
                                 </label>
                             </div>
                             <div class="form-check">
                                 <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox" checked>
                                     <span class="form-check-sign"></span>
                                     Checked
                                 </label>
                             </div>
                             <div class="form-check disabled">
                                 <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox" disabled>
                                     <span class="form-check-sign"></span>
                                     Disabled Unchecked
                                 </label>
                             </div>
                             <div class="form-check disabled">
                                 <label class="form-check-label">
                                     <input class="form-check-input" type="checkbox" checked disabled>
                                     <span class="form-check-sign"></span>
                                     Disabled Checked
                                 </label>
                             </div>
                         </div>
                         <div class="col-sm-6 col-lg-3">
                             <p class="category">Radios</p>
                             <div class="form-check form-check-radio">
                                 <label class="form-check-label">
                                     <input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option1">
                                     <span class="form-check-sign"></span>
                                     Radio is off
                                 </label>
                             </div>
                             <div class="form-check form-check-radio">
                                 <label class="form-check-label">
                                     <input class="form-check-input" id="exampleRadios1" name="exampleRadios" type="radio" value="option2" checked>
                                     <span class="form-check-sign"></span>
                                     Radio is on
                                 </label>
                             </div>
                             <div class="form-check form-check-radio disabled">
                                 <label class="form-check-label">
                                     <input class="form-check-input" id="exampleRadios2" name="exampleRadios1" type="radio" value="option3" disabled>
                                     <span class="form-check-sign"></span>
                                     Disabled radio is off
                                 </label>
                             </div>
                             <div class="form-check form-check-radio disabled">
                                 <label class="form-check-label">
                                     <input class="form-check-input" id="exampleRadios2" name="exampleRadios1" type="radio" value="option4" disabled checked>
                                     <span class="form-check-sign"></span>
                                     Disabled radio is on
                                 </label>
                             </div>
                         </div>
                         <div class="col-sm-6 col-lg-3">
                             <p class="category">Toggle Buttons</p>
                             <input class="bootstrap-switch" name="checkbox" type="checkbox" checked />
                             <br>
                             <input class="bootstrap-switch" name="checkbox" data-on-label="ON" data-off-label="OFF" type="checkbox" />
                         </div>
                         <div class="col-sm-6 col-lg-3">
                             <p class="category">Sliders</p>
                             <div class="slider" id="sliderRegular"></div>
                             <br>
                             <div class="slider slider-primary" id="sliderDouble"></div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section section-navbars">
                 <img class="path" src="assets/img/path3.png">
                 <div class="container" id="menu-dropdown">
                     <div class="row">
                         <div class="col-md-6">
                             <h4>Menu</h4>
                             <nav class="navbar navbar-expand-lg bg-primary">
                                 <div class="container">
                                     <a class="navbar-brand" href="#">Menu</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                     <div class="collapse navbar-collapse" id="example-navbar">
                                         <ul class="navbar-nav">
                                             <li class="nav-item active">
                                                 <a class="nav-link" href="#">
                                                     <p>Link</p>
                                                 </a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link" href="#">
                                                     <p>Link</p>
                                                 </a>
                                             </li>
                                             <li class="nav-item dropdown">
                                                 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="http://example.com" aria-haspopup="true" aria-expanded="false">
                                                     <p>
                                                         Dropdown
                                                     </p>
                                                 </a>
                                                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-item" href="#">Action</a>
                                                     <a class="dropdown-item" href="#">Another action</a>
                                                     <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </nav>
                         </div>
                         <div class="col-md-6">
                             <h4>Menu with Icons</h4>
                             <nav class="navbar navbar-expand-lg bg-info">
                                 <div class="container">
                                     <a class="navbar-brand" href="#">Icons</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-icons" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                     <div class="collapse navbar-collapse" id="example-navbar-icons">
                                         <ul class="navbar-nav ml-auto">
                                             <li class="nav-item">
                                                 <a class="nav-link" href="#pablo"><i class="tim-icons icon-send" aria-hidden="true"></i></a>
                                             </li>
                                             <li class="nav-item">
                                                 <a class="nav-link" href="#pablo"><i class="tim-icons icon-single-02" aria-hidden="true"></i></a>
                                             </li>
                                             <li class="nav-item dropdown">
                                                 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                                                     <i class="tim-icons icon-settings-gear-63" aria-hidden="true"></i>
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-header">Dropdown header</a>
                                                     <a class="dropdown-item" href="#">Action</a>
                                                     <a class="dropdown-item" href="#">Another action</a>
                                                     <a class="dropdown-item" href="#">Something else here</a>
                                                     <div class="divider"></div>
                                                     <a class="dropdown-item" href="#">Separated link</a>
                                                     <div class="divider"></div>
                                                     <a class="dropdown-item" href="#">One more separated link</a>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </nav>
                         </div>
                     </div>
                     <h3 class="title mb-3">Navigation</h3>
                 </div>
                 <div id="navbar">
                     <div class="navigation-example">
                         <!-- Navbar Primary  -->
                         <nav class="navbar navbar-expand-lg bg-primary">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#pablo">Primary color</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-primary" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-primary">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item active">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-world"></i> Discover
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-single-02"></i> Profile
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-settings-gear-63"></i> Settings
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Primary -->
                         <!-- Navbar Info -->
                         <nav class="navbar navbar-expand-lg bg-info">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#pablo">Info Color</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-info" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-info">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item active">
                                             <a class="nav-link" href="#pablo">
                                                 Discover
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 Profile
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 Settings
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Info -->
                         <!-- Navbar Success -->
                         <nav class="navbar navbar-expand-lg bg-success">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#">Success Color</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-success" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-success">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item active">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-world"></i>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-single-02"></i>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="tim-icons icon-settings-gear-63"></i>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Success -->
                         <!-- Navbar Warning -->
                         <nav class="navbar navbar-expand-lg bg-warning">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#pablo">Warning Color</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-warning" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-warning">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-facebook-square"></i>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-twitter"></i>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-google-plus"></i>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-instagram"></i>
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Warning -->
                         <!-- Navbar Danger -->
                         <nav class="navbar navbar-expand-lg bg-danger">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#pablo">Danger Color</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-danger" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-danger">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-facebook-square"></i> Share
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-twitter"></i> Tweet
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-pinterest"></i> Pin
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Danger -->
                         <!-- Navbar Transparent -->
                         <nav class="navbar navbar-expand-lg navbar-transparent">
                             <div class="container">
                                 <div class="navbar-translate">
                                     <a class="navbar-brand" href="#pablo">Transparent</a>
                                     <button class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-transparent" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                         <span class="navbar-toggler-bar bar1"></span>
                                         <span class="navbar-toggler-bar bar2"></span>
                                         <span class="navbar-toggler-bar bar3"></span>
                                     </button>
                                 </div>
                                 <div class="collapse navbar-collapse" id="example-navbar-transparent">
                                     <ul class="navbar-nav ml-auto">
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-facebook-square"></i> Facebook
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-twitter"></i> Twitter
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="#pablo">
                                                 <i class="fab fa-instagram"></i> Instagram
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </nav>
                         <!-- End Navbar Transparent-->
                     </div>
                 </div>
             </div>
             <!-- End .section-navbars  -->
             <div class="section section-tabs">
                 <div class="container">
                     <div class="title">
                         <h3 class="mb-3">Navigation Tabs</h3>
                     </div>
                     <div class="row">
                         <div class="col-md-10 col-xl-6 ml-auto mr-auto">
                             <div class="mb-3">
                                 <small class="text-uppercase font-weight-bold">With icons</small>
                             </div>
                             <!-- Nav tabs -->
                             <div class="card">
                                 <div class="card-header">
                                     <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                                                 <i class="tim-icons icon-spaceship"></i> Profile
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                                                 <i class="tim-icons icon-settings-gear-63"></i> Settings
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                                                 <i class="tim-icons icon-bag-16"></i> Options
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                                 <div class="card-body">
                                     <!-- Tab panes -->
                                     <div class="tab-content tab-space">
                                         <div class="tab-pane active" id="link1">
                                             <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                                 <br />
                                                 <br /> Dramatically visualize customer directed convergence without revolutionary ROI.
                                             </p>
                                         </div>
                                         <div class="tab-pane" id="link2">
                                             <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                                 <br />
                                                 <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                                             </p>
                                         </div>
                                         <div class="tab-pane" id="link3">
                                             <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                                 <br />
                                                 <br /> Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-10 col-xl-6 ml-auto mr-auto">
                             <div class="mb-3">
                                 <small class="text-uppercase font-weight-bold">With text</small>
                             </div>
                             <!-- Tabs with Background on Card -->
                             <div class="card">
                                 <div class="card-header">
                                     <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                                         <li class="nav-item">
                                             <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                                                 Profile
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                                                 Settings
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                                                 Options
                                             </a>
                                         </li>
                                     </ul>
                                 </div>
                                 <div class="card-body">
                                     <!-- Tab panes -->
                                     <div class="tab-content tab-space">
                                         <div class="tab-pane active" id="link4">
                                             <p> These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.
                                                 <br />But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures
                                             </p>
                                         </div>
                                         <div class="tab-pane" id="link5">
                                             <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level
                                                 that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                         </div>
                                         <div class="tab-pane" id="link6">
                                             <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will
                                                 be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Tabs on plain Card -->
                         </div>
                     </div>
                 </div>
             </div>
             <!-- End Section Tabs -->
             <div class="section section-pagination">
                 <img class="path" src="assets/img/path4.png">
                 <img class="path path1" src="assets/img/path5.png">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6">
                             <h3 class="mb-4">Progress Bars</h3>
                             <div class="progress-container">
                                 <span class="progress-badge">Default</span>
                                 <div class="progress">
                                     <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                         <span class="progress-value">25%</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="progress-container progress-primary">
                                 <span class="progress-badge">Primary</span>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                         <span class="progress-value">60%</span>
                                     </div>
                                 </div>
                             </div>
                             <br>
                             <h3 class="mb-5">Navigation Pills</h3>
                             <ul class="nav nav-pills nav-pills-primary nav-pills-icons">
                                 <li class="nav-item">
                                     <a class="nav-link active show" data-toggle="tab" href="#link7">
                                         <i class="tim-icons icon-atom"></i> Home
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#link8">
                                         <i class="tim-icons icon-chat-33"></i> Messages
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-toggle="tab" href="#link9">
                                         <i class="tim-icons icon-settings-gear-63"></i> Settings
                                     </a>
                                 </li>
                             </ul>
                         </div>
                         <div class="col-md-6">
                             <h3 class="mb-5">Pagination</h3>
                             <ul class="pagination pagination-primary">
                                 <li class="page-item active">
                                     <a class="page-link" href="#">1</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">2</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">3</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">4</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">5</a>
                                 </li>
                             </ul>
                             <ul class="pagination">
                                 <li class="page-item">
                                     <a class="page-link" href="#link" aria-label="Previous">
                                         <span aria-hidden="true"><i class="tim-icons icon-double-left" aria-hidden="true"></i></span>
                                     </a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">1</a>
                                 </li>
                                 <li class="page-item active">
                                     <a class="page-link" href="#link">2</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link">3</a>
                                 </li>
                                 <li class="page-item">
                                     <a class="page-link" href="#link" aria-label="Next">
                                         <span aria-hidden="true"><i class="tim-icons icon-double-right" aria-hidden="true"></i></span>
                                     </a>
                                 </li>
                             </ul>
                             <br>
                             <h3 class="mb-5">Labels</h3>
                             <span class="badge badge-default">Default</span>
                             <span class="badge badge-primary">Primary</span>
                             <span class="badge badge-success">Success</span>
                             <span class="badge badge-info">Info</span>
                             <span class="badge badge-warning">Warning</span>
                             <span class="badge badge-danger">Danger</span>
                             <span class="badge badge-neutral">Neutral</span>
                         </div>
                     </div>
                     <br>
                 </div>
             </div>
             <div class="section section-notifications" id="notifications">
                 <div class="container">
                     <div class="space"></div>
                     <h3>Notifications</h3>
                     <div class="alert alert-primary alert-with-icon">
                         <button class="close" data-dismiss="alert" type="button" aria-hidden="true" aria-label="Close">
                             <i class="tim-icons icon-simple-remove"></i>
                         </button>
                         <span class="tim-icons icon-coins" data-notify="icon"></span>
                         <span>
                             <b> Congrats! - </b> This is a regular notification made with ".alert-primary"</span>
                     </div>
                     <div class="alert alert-info alert-with-icon">
                         <button class="close" data-dismiss="alert" type="button" aria-hidden="true" aria-label="Close">
                             <i class="tim-icons icon-simple-remove"></i>
                         </button>
                         <span class="tim-icons icon-trophy" data-notify="icon"></span>
                         <span>
                             <b> Heads up! - </b> This is a regular notification made with ".alert-info"</span>
                     </div>
                     <div class="alert alert-success alert-with-icon">
                         <button class="close" data-dismiss="alert" type="button" aria-hidden="true" aria-label="Close">
                             <i class="tim-icons icon-simple-remove"></i>
                         </button>
                         <span class="tim-icons icon-bell-55" data-notify="icon"></span>
                         <span>
                             <b> Well done! - </b> This is a regular notification made with ".alert-success"</span>
                     </div>
                     <div class="alert alert-warning alert-with-icon">
                         <button class="close" data-dismiss="alert" type="button" aria-hidden="true" aria-label="Close">
                             <i class="tim-icons icon-simple-remove"></i>
                         </button>
                         <span class="tim-icons icon-bulb-63" data-notify="icon"></span>
                         <span>
                             <b> Warning! - </b> This is a regular notification made with ".alert-warning"</span>
                     </div>
                     <div class="alert alert-danger alert-with-icon">
                         <button class="close" data-dismiss="alert" type="button" aria-hidden="true" aria-label="Close">
                             <i class="tim-icons icon-simple-remove"></i>
                         </button>
                         <span class="tim-icons icon-support-17" data-notify="icon"></span>
                         <span>
                             <b> Oh snap! - </b> This is a regular notification made with ".alert-danger"</span>
                     </div>
                 </div>
             </div>
             <!--  end notifications -->
             <!-- Typography -->
             <div class="section section-typo">
                 <img class="path" src="assets/img/path1.png">
                 <img class="path path1" src="assets/img/path3.png">
                 <div class="container">
                     <h3 class="title">Typography</h3>
                     <div id="typography">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="typography-line">
                                     <h1>
                                         <span>Header 1</span>The Life of BLK• Design System
                                     </h1>
                                 </div>
                                 <div class="typography-line">
                                     <h2>
                                         <span>Header 2</span>The Life of BLK• Design System
                                     </h2>
                                 </div>
                                 <div class="typography-line">
                                     <h3>
                                         <span>Header 3</span>The Life of BLK• Design System
                                     </h3>
                                 </div>
                                 <div class="typography-line">
                                     <h4>
                                         <span>Header 4</span>The Life of BLK• Design System
                                     </h4>
                                 </div>
                                 <div class="typography-line">
                                     <h5>
                                         <span>Header 5</span>The Life of BLK• Design System
                                     </h5>
                                 </div>
                                 <div class="typography-line">
                                     <h6>
                                         <span>Header 6</span>The Life of BLK• Design System
                                     </h6>
                                 </div>
                                 <div class="typography-line">
                                     <p>
                                         <span>Paragraph</span>
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that
                                         things could be at.
                                     </p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Quote</span>
                                     <blockquote>
                                         <p class="blockquote blockquote-primary">
                                             "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that
                                             things could be at."
                                             <br>
                                             <br>
                                             <small>
                                                 - Noaa
                                             </small>
                                         </p>
                                     </blockquote>
                                 </div>
                                 <div class="typography-line">
                                     <span>Muted Text</span>
                                     <p class="text-muted">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                     </p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Primary Text</span>
                                     <p class="text-primary">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Info Text</span>
                                     <p class="text-info">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Success Text</span>
                                     <p class="text-success">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Warning Text</span>
                                     <p class="text-warning">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                     </p>
                                 </div>
                                 <div class="typography-line">
                                     <span>Danger Text</span>
                                     <p class="text-danger">
                                         I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                 </div>
                                 <div class="typography-line">
                                     <h2>
                                         <span>Small Tag</span>
                                         Header with small subtitle
                                         <br>
                                         <small>Use "small" tag for the headers</small>
                                     </h2>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="space-50"></div>
                     <div id="images">
                         <h3 class="mb-5">Images</h3>
                         <div class="row">
                             <div class="col-sm-3 col-6">
                                 <small class="d-block text-uppercase font-weight-bold mb-4">Image</small>
                                 <img class="img-fluid rounded shadow" src="assets/img/ryan.jpg" alt="Rounded image" style="width: 150px;">
                             </div>
                             <div class="col-sm-3 col-6">
                                 <small class="d-block text-uppercase font-weight-bold mb-4">Circle Image</small>
                                 <img class="img-fluid rounded-circle shadow" src="assets/img/james.jpg" alt="Circle image" style="width: 150px;">
                             </div>
                             <div class="col-sm-3 col-6 mt-sm-0 mt-5">
                                 <small class="d-block text-uppercase font-weight-bold mb-4">Raised</small>
                                 <img class="img-fluid rounded shadow-lg" src="assets/img/lora.jpg" alt="Raised image" style="width: 150px;">
                             </div>
                             <div class="col-sm-3 col-6 mt-sm-0 mt-5">
                                 <small class="d-block text-uppercase font-weight-bold mb-4">Circle Raised</small>
                                 <img class="img-fluid rounded-circle shadow-lg" src="assets/img/mike.jpg" alt="Raised circle image" style="width: 150px;">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section section-javascript" id="javascriptComponents">
                 <img class="path" src="assets/img/path5.png">
                 <img class="path path1" src="assets/img/path5.png">
                 <div class="container">
                     <h3 class="title mb-5">Javascript components</h3>
                     <h4 class="mb-5">Modal</h4>
                     <div class="row" id="modals">
                         <div class="col-md-4">
                             <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                 Launch Modal
                             </button>
                         </div>
                         <div class="col-md-4">
                             <button class="btn btn-warning" data-toggle="modal" data-target="#myModal1">
                                 Launch Modal Mini
                             </button>
                         </div>
                         <div class="col-md-4">
                             <button class="btn btn-success" data-toggle="modal" data-target="#myModal2">
                                 Launch Modal Form
                             </button>
                         </div>
                     </div>
                     <br />
                     <br />
                     <h4 class="mb-5 mt-3">Datepicker</h4>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="datepicker-container">
                                 <div class="form-group">
                                     <input class="form-control datepicker" id="datepicker" data-datepicker-color="primary" type="text" value="10/05/2016">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <h4 class="mb-5 mt-3">Popovers</h4>
                             <button class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Here will be some very useful information about his popover." type="button">
                                 On top
                             </button>
                             <button class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right"
                                 data-content="Here will be some very useful information about his popover.<br> Here will be some very useful information about his popover." type="button">
                                 On right
                             </button>
                             <button class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Here will be some very useful information about his popover." type="button">
                                 On bottom
                             </button>
                             <button class="btn btn-default btn-sm" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Here will be some very useful information about his popover." data-color="primary" type="button">
                                 On left
                             </button>
                         </div>
                         <div class="col-md-6">
                             <h4 class="mb-5 mt-3">Tooltips</h4>
                             <button class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="left" data-container="body" data-animation="true" data-delay="100" type="button" title="Tooltip on left">On left</button>
                             <button class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="top" data-container="body" data-animation="true" type="button" title="Tooltip on top">On top</button>
                             <button class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" data-container="body" data-animation="true" type="button" title="Tooltip on bottom">On bottom</button>
                             <button class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="right" data-container="body" data-animation="true" type="button" title="Tooltip on right">On right</button>
                             <div class="clearfix"></div>
                             <br>
                             <br>
                         </div>
                     </div>
                 </div>
                 <div class="section">
                     <div class="container">
                         <div class="title">
                             <h3>Carousel</h3>
                         </div>
                         <div class="row justify-content-between align-items-center">
                             <div class="col-lg-5 mb-lg-0 mb-5">
                                 <h1 class="font-weight-light text-white">Bootstrap carousel</h1>
                                 <p class="mt-4 text-white">Black Design comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                                 <a class="btn btn-warning mt-4" href="./docs/1.0/components/alerts.html">See all components</a>
                             </div>
                             <div class="col-lg-6">
                                 <div class="carousel slide" id="carouselExampleControls">
                                     <div class="carousel-inner">
                                         <div class="carousel-item active">
                                             <img class="d-block w-100" src="assets/img/denys.jpg" alt="First slide">
                                         </div>
                                         <div class="carousel-item">
                                             <img class="d-block w-100" src="assets/img/fabien-bazanegue.jpg" alt="Second slide">
                                         </div>
                                         <div class="carousel-item">
                                             <img class="d-block w-100" src="assets/img/mark-finn.jpg" alt="Third slide">
                                         </div>
                                     </div>
                                     <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleControls" role="button">
                                         <i class="tim-icons icon-minimal-left"></i>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                     <a class="carousel-control-next" data-slide="next" href="#carouselExampleControls" role="button">
                                         <i class="tim-icons icon-minimal-right"></i>
                                         <span class="sr-only">Next</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section section-nucleo-icons">
                 <img class="path" src="assets/img/path3.png">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-lg-8 col-md-12">
                             <h2 class="title">Nucleo Icons</h2>
                             <h4 class="description">
                                 BLK• Design System PRO comes with 100 custom icons made by our friends from NucleoApp. The official package contains over 2.100 thin icons which are looking great in combination with BLK• Design System PRO Make sure you check all of them and use those that you like
                                 the most.
                             </h4>
                             <div class="btn-wrapper">
                                 <a class="btn btn-primary btn-round" href="./docs/1.0/foundation/icons.html" target="_blank">View Demo Icons</a>
                                 <a class="btn btn-primary btn-simple btn-round btn-lg" href="https://nucleoapp.com/?ref=1712" target="_blank">View All Icons</a>
                             </div>
                         </div>
                     </div>
                     <div class="blur-hover">
                         <a href="./docs/1.0/foundation/icons.html">
                             <div class="icons-container blur-item on-screen mt-5">
                                 <!-- Center -->
                                 <i class="icon tim-icons icon-coins"></i>
                                 <!-- Right 1 -->
                                 <i class="icon icon-sm tim-icons icon-spaceship"></i>
                                 <i class="icon icon-sm tim-icons icon-money-coins"></i>
                                 <i class="icon icon-sm tim-icons icon-link-72"></i>
                                 <!-- Right 2 -->
                                 <i class="icon tim-icons icon-send"></i>
                                 <i class="icon tim-icons icon-mobile"></i>
                                 <i class="icon tim-icons icon-wifi"></i>
                                 <!-- Left 1 -->
                                 <i class="icon icon-sm tim-icons icon-key-25"></i>
                                 <i class="icon icon-sm tim-icons icon-atom"></i>
                                 <i class="icon icon-sm tim-icons icon-satisfied"></i>
                                 <!-- Left 2 -->
                                 <i class="icon tim-icons icon-gift-2"></i>
                                 <i class="icon tim-icons icon-tap-02"></i>
                                 <i class="icon tim-icons icon-wallet-43"></i>
                             </div>
                             <span class="blur-hidden h5 text-primary">Eplore all the 21.000+ Nucleo Icons</span>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="section section-signup">
                 <div class="container">
                     <div class="squares square-1"></div>
                     <div class="squares square-2"></div>
                     <div class="squares square-3"></div>
                     <div class="squares square-4"></div>
                     <div class="row row-grid justify-content-between align-items-center">
                         <div class="col-lg-6">
                             <h3 class="display-3 text-white">A beautiful Black Design
                                 <span class="text-white">completed with examples</span>
                             </h3>
                             <p class="mb-3 text-white">The Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful
                                 Bootstrap 4 Design System.</p>
                             <div class="btn-wrapper">
                                 <a class="btn btn-info" href="examples/register-page.html">Register Page</a>
                             </div>
                         </div>
                         <div class="col-lg-6 mb-lg-auto">
                             <div class="card card-register">
                                 <div class="card-header">
                                     <img class="card-img" src="assets/img/square1.png" alt="Card image">
                                     <h4 class="card-title">Register</h4>
                                 </div>
                                 <div class="card-body">
                                     <form class="form">
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text">
                                                     <i class="tim-icons icon-single-02"></i>
                                                 </div>
                                             </div>
                                             <input class="form-control" type="text" placeholder="Full Name">
                                         </div>
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text">
                                                     <i class="tim-icons icon-email-85"></i>
                                                 </div>
                                             </div>
                                             <input class="form-control" type="text" placeholder="Email">
                                         </div>
                                         <div class="input-group">
                                             <div class="input-group-prepend">
                                                 <div class="input-group-text">
                                                     <i class="tim-icons icon-lock-circle"></i>
                                                 </div>
                                             </div>
                                             <input class="form-control" type="text" placeholder="Password">
                                         </div>
                                         <div class="form-check text-left">
                                             <label class="form-check-label">
                                                 <input class="form-check-input" type="checkbox">
                                                 <span class="form-check-sign"></span>
                                                 I agree to the
                                                 <a href="javascript:void(0)">terms and conditions</a>.
                                             </label>
                                         </div>
                                     </form>
                                 </div>
                                 <div class="card-footer">
                                     <a class="btn btn-info btn-round btn-lg" href="javascript:void(0)">Get Started</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section section-examples" data-background-color="black">
                 <img class="path" src="assets/img/path1.png">
                 <div class="space-50"></div>
                 <div class="container text-center">
                     <div class="row">
                         <div class="col-sm-6">
                             <a href="examples/landing-page.html">
                                 <img class="img-raised" src="assets/img/landing-page.png" alt="Image">
                             </a>
                             <a class="btn btn-simple btn-primary btn-round" href="examples/landing-page.html">View Landing Page</a>
                         </div>
                         <div class="col-sm-6">
                             <a href="examples/profile-page.html">
                                 <img class="img-raised" src="assets/img/profile-page.png" alt="Image">
                             </a>
                             <a class="btn btn-simple btn-primary btn-round" href="examples/profile-page.html">View Profile Page</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="section section-download" id="#download-section" data-background-color="black">
                 <img class="path" src="assets/img/path1.png">
                 <div class="container">
                     <div class="row justify-content-md-center">
                         <div class="col-md-12 col-lg-8 text-center">
                             <h2 class="title">Do you love this Bootstrap 4 Design System?</h2>
                             <h4 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the design system in HTML format. Start a new project or give an old Bootstrap project a new look!</h4>
                         </div>
                         <div class="col-md-12 col-lg-8 text-center">
                             <a class="btn btn-primary btn-round btn-lg" href="https://www.creative-tim.com/product/blk-design-system" role="button">
                                 Download HTML
                             </a>
                             <!-- <a class="btn btn-primary btn-lg btn-simple btn-round" href="https://www.invisionapp.com/now" role="button" target="_blank">
                         Download PSD/Sketch
                     </a> -->
                         </div>
                     </div>
                     <br>
                     <br>
                     <br>
                     <!-- <div class="row mt-5 text-center">
                 <div class="col-md-8 ml-auto mr-auto">
                     <h2>Want more?</h2>
                     <h5 class="description">We've just launched <a href="http://demos.creative-tim.com/black-kit-pro/presentation.html" target="_blank">BLK• Design System PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 Design System.</h4>
                 </div>
                 <div class="col-md-12">
                     <a class="btn btn-neutral btn-round btn-lg" href="http://demos.creative-tim.com/black-kit-pro/presentation.html" target="_blank">
                         <i class="tim-icons icon-cloud-upload-94"></i> Upgrade to PRO
                     </a>
                 </div>
             </div> -->
                     <br>
                     <br>
                     <div class="row row-grid align-items-center my-md">
                         <div class="col-lg-6">
                             <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                             <h4 class="font-weight-light mb-0">Let's get in touch on any of these platforms.</h4>
                         </div>
                         <div class="col-lg-6 text-lg-center btn-wrapper">
                             <a class="btn btn-icon btn-twitter btn-round btn-lg" id="twitter" data-toggle="tooltip" data-original-title="Tweet!">
                                 <i class="fab fa-twitter"></i>
                             </a>
                             <a class="btn btn-icon btn-facebook btn-round btn-lg" id="facebook" data-toggle="tooltip" data-original-title="Share!">
                                 <i class="fab fa-facebook-square"></i>
                             </a>
                             <a class="btn btn-icon btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github" href="https://github.com/creativetimofficial" target="_blank">
                                 <i class="fab fa-github"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Sart Modal -->
             <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header justify-content-center">
                             <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                                 <i class="tim-icons icon-simple-remove"></i>
                             </button>
                             <h4 class="title title-up">Modal title</h4>
                         </div>
                         <div class="modal-body">
                             <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and
                                 supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                             </p>
                         </div>
                         <div class="modal-footer">
                             <button class="btn btn-default" type="button">Nice Button</button>
                             <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                         </div>
                     </div>
                 </div>
             </div>
             <!--  End Modal -->
             <!-- Mini Modal -->
             <div class="modal fade modal-mini modal-primary modal-mini" id="myModal1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header justify-content-center">
                             <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                                 <i class="tim-icons icon-simple-remove text-white"></i>
                             </button>
                             <div class="modal-profile">
                                 <i class="tim-icons icon-single-02"></i>
                             </div>
                         </div>
                         <div class="modal-body">
                             <p>Always have an access to your profile</p>
                         </div>
                         <div class="modal-footer">
                             <button class="btn btn-link btn-neutral" type="button">Back</button>
                             <button class="btn btn-link btn-neutral" data-dismiss="modal" type="button">Close</button>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Form Modal -->
             <div class="modal fade modal-black" id="myModal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
                 <div class="modal-dialog">
                     <div class="modal-content">
                         <div class="modal-header justify-content-center">
                             <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                                 <i class="tim-icons icon-simple-remove text-white"></i>
                             </button>
                             <div class="text-muted ml-auto mr-auto text-center">
                                 <h3 class="mb-0">Sign in with</h3>
                             </div>
                         </div>
                         <div class="modal-body">
                             <div class="btn-wrapper text-center">
                                 <a class="btn btn-neutral btn-icon" href="#">
                                     <img src="assets/img/github.svg">
                                 </a>
                                 <a class="btn btn-neutral btn-icon" href="#">
                                     <img src="assets/img/google.svg">
                                 </a>
                             </div>
                             <div class="text-muted mb-4 mt-3 text-center">
                                 <small>Or sign in with credentials</small>
                             </div>
                             <form role="form">
                                 <div class="form-group mb-3">
                                     <div class="input-group input-group-alternative">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="tim-icons icon-email-85"></i>
                                             </span>
                                         </div>
                                         <input class="form-control" type="email" placeholder="Email">
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
                                 <div class="form-check mt-3">
                                     <label class="form-check-label">
                                         <input class="form-check-input" type="checkbox" checked>
                                         <span class="form-check-sign"></span>
                                         Remember me!
                                     </label>
                                 </div>
                                 <div class="text-center">
                                     <button class="btn btn-primary my-4" type="button">Sign in</button>
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
