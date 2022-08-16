<!DOCTYPE html>
<html class="sticky-header-reveal">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pulau Pahawang | Tempat Wisata</title>

    <meta name="keywords" content="WebSite Template"/>
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('porto/img/favicon.ico')}}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{asset('porto/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('porto/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/animate/animate.compat.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-shop.css')}}">

    <!-- Revolution Slider CSS -->
    <link rel="stylesheet" href="{{asset('porto/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/demos/demo-hotel.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/skin-hotel.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('porto/vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body>

<div class="body">

    <header id="header" class="header-effect-reveal"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 220, 'stickySetTop': '-66px'}">
        <div class="header-body border-top-0">

            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="demo-hotel.html">
                                    <img alt="Porto" width="122" height="50"
                                         src="{{asset('porto/img/demos/hotel/logo.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-bottom-line">
                                <div
                                    class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link font-weight-bold" href="{{route('frontend.home')}}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link font-weight-bold" href="demo-hotel-hotel.html">
                                                    About
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link font-weight-bold" href="{{route('login')}}">
                                                    Login
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        <section class="page-header page-header-modern bg-primary m-0 py-0">
            <div class="container py-2">
                <div class="row py-3">
                    <div class="col-md-12 align-self-center p-static text-center">
                        <h1 class="text-light mt-4 mb-0 pb-0 font-weight-bold text-8">Location</h1>
                        <div class="divider divider-light divider-small my-3 text-center">
                            <hr class="mt-2 mx-auto">
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center">
                        <ul class="breadcrumb breadcrumb-light d-block mb-4 text-center">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li class="active">Pulau Pahawang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="container p-0 m-0 w-100 mw-100">
            <div class="row">
                <div class="col">
                    <img src="{{asset('gambar/gbr1.png')}}" alt="gambar">

                </div>
            </div>
            <div class="row  p-5 m-5">
                <div class="col">
                    <h5>KOLOM KOMENTAR:</h5>
                    @foreach($dataKomentar as $row)
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">{{$row->name}}</p>
                            </div>
                        </div>
                    @endforeach
                    @if(Auth::user())

                        <div class="row">

                            <div class="col-md-12">
                                <form action="{{route('usr.filter')}}" method="post">
                                    <div class="row">
                                        @csrf
                                        <div class="col-md-12">
                                                <textarea name="filter" id="" class="form-control" cols="30"
                                                          rows="10">   </textarea>
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <button class="btn btn-sm btn-primary">Submit</button>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>

    </div>

</div>

<div class="footer-copyright bg-tertiary pt-3 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-4 pb-3 py-lg-0">

            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <p class="text-2 m-0 p-relative bottom-2">© Copyright 2022. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>

<!-- Vendor -->
<script src="{{asset('porto/vendor/plugins/js/plugins.min.js')}}"></script>
<script src="{{asset('porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('porto/js/theme.js')}}"></script>

<!-- Revolution Slider Scripts -->
<script src="{{asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('porto/js/views/view.contact.js')}}"></script>

<!-- Demo -->
<script src="{{asset('porto/js/demos/demo-hotel.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('porto/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('porto/js/theme.init.js')}}"></script>


</body>
</html>
