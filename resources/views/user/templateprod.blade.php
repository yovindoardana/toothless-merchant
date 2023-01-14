 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href={{ asset('img/apple-icon.png') }} >
   <title>
     TOOTHLESS-Product
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
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
     <div class="container">
       <div class="navbar-translate">
         <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
           <span>TOOTHLESS•</span> incredible payment
         </a>
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-bar bar1"></span>
           <span class="navbar-toggler-bar bar2"></span>
           <span class="navbar-toggler-bar bar3"></span>
         </button>
       </div>
       <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hi, #
            </button>
            <div class="dropdown-menu bg-transparent justify-content-center">
              <a href="" class=" btn btn-info">Profile</a>
              <a href="" class=" btn btn-info">Transaction History</a>
              <a href="" class=" btn btn-danger">
                Sign Out</a>
            </div>
          </div>
        </div>
     </div>
   </nav>
   <!-- End Navbar -->
    <div class="main my-5">
      @yield('konten')
    </div>

     <footer class="footer">
       <div class="container">
         <div class="row">
           <div class="col-md-3">
             <h1 class="title">Thoothless</h1>
           </div>
           <div class="col-md-3">

           </div>
           <div class="col-md-3">

           </div>
           <div class="col-md-3">
             <h3 class="title">Follow us:</h3>
             <div class="btn-wrapper profile">
               <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                 <i class="fab fa-twitter"></i>
               </a>
               <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                 <i class="fab fa-facebook-square"></i>
               </a>
               <a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                 <i class="fab fa-dribbble"></i>
               </a>
             </div>
           </div>
         </div>
       </div>
     </footer>
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
 