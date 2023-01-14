<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="{{ asset('assets/img/apple-icon.png') }}" rel="apple-touch-icon" sizes="76x76">
     <link type="image/png" href="./assets/img/favicon.png" rel="icon">
     <title>
         Toothless Merchant
     </title>
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
     <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
     <!-- Nucleo Icons -->
     <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
     <!-- CSS Files -->
     <link href="{{ asset('assets/css/blk-design-system.css?v=1.0.0') }}" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
     
 </head>

 <body class="index-page">
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="100">
         <div class="container">
             <div class="navbar-translate">
                 <a class="navbar-brand" data-placement="bottom" href="https://demos.creative-tim.com/blk-design-system/index.html" title="Designed and Coded by Creative Tim" rel="tooltip" target="_blank">
                     <span>Toothless</span> Merchant
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
                 <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                     <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="/game" role="tablist">
                        <i class="tim-icons icon-controller"></i> Game
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                        <i class="tim-icons icon-paper"></i> Article
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                        <i class="tim-icons icon-settings-gear-63"></i> Options
                      </a>
                    </li>
                 </ul>
             </div>
         </div>
     </nav>
     <!-- End Navbar -->

     <div class="wrapper">
        
        <div class="content-wrap">
        <div class="main mt-5 pt-5">
        @yield('main')

        </div>
    </div>
</div>

</body>
</html>