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
    <link rel="shortcut icon" href="{{asset('porto/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('porto/img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('porto/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('porto/vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('porto/css/theme-shop.css')}}">



    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{asset('porto/css/demos/demo-hotel.css')}}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('porto/css/skins/skin-hotel.css')}}">

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
                                                @if(!Auth::user())
                                                    <a class="nav-link font-weight-bold" href="{{route('login')}}">
                                                        Login
                                                    </a>
                                                @else
                                                    <a class="nav-link font-weight-bold" href="{{route('logout')}}">
                                                        Logout
                                                    </a>
                                                @endif
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


        <div class="container p-5 m-5">
            <div class="row">
                <div class="col">
                    <img src="{{asset('gambar/gbr1.png')}}" alt="gambar">

                </div>
            </div>
        </div>

        <div class="container py-5">

            <div class="row">

                <div class="col-lg-12 ">

                    <div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
                        <h3 class="mt-4 mb-0 pb-0">Pulau Pahawang</h3>
                        <div class="divider divider-primary divider-small my-3">
                            <hr class="mt-2 me-auto">
                        </div>

                        <p class="lead font-weight-regular">Apakah saat ini Anda sedang merencanakan liburan ke Pulau
                            Pahawang? Ada banyak hal dan kegiatan menarik yang dapat Anda lakukan di sekitaran Pahawang.
                            Kali ini kita akan bahas panduan dan informasi lengkap seputaran pulau andalan wisata
                            Lampung ini/</p>

                        <p class="mt-4">Pulau Pahawang adalah salah satu tujuan wisata favorit dan populer di Provinsi
                            Lampung. Terkenal akan keindahan baharinya, termasuk bawah lautnya. Saat ini sudah banyak
                            penginapan di sekitar pulau dengan berbagai kelebihannya.</p>

                        <div class="row">
                            <div class="col-lg-12">
                                <p>Pulau Pahawang adalah pulau terbesar di sekitar Teluk Ratai. Telah menjadi destinasi
                                    wisata favorit wisatawan dari berbagai daerah di Indonesia.Secara administratif
                                    masuk wilayah Kecamatan Punduh Pidada, Kabupaten Pasawaran, Provinsi Lampung. </p>
                                <p>Yang ditawarkan Pulau Pahawang adalah keindahan pantai dan bawah lautnya. Pulau ini
                                    memiliki banyak pantai bepasir putih di bagian utara, timur, dan selatan.Sebagian
                                    lagi berupa pantai dengan hamparan hutan mangrove yang lebat.Dengan keliling lebih
                                    dari 12 kilometer, pulau ini memiliki luas lebih dar 700an hektar. Dan dihuni oleh
                                    lebih dari 300 kepala keluarga. Yang kebanyakan tinggal di dusun-dusun di dekat
                                    dengan pantai.</p>
                            </div>
                        </div>

                        <h3 class="text-5 my-4 pb-0">Keunggulan Destinasi WIsata ini:</h3>

                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Memiliki spot snorkling dan diving.</li>
                                    <li><i class="fas fa-check"></i> Memiliki keindahan laut yang luar biasa.</li>
                                    <li><i class="fas fa-check"></i> Transportasi umum yang mudah ditemui.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list list-icons list-primary text-uppercase font-weight-bold text-color-dark text-2">
                                    <li><i class="fas fa-check"></i> Jarak tidak terlalu jauh dari Kota Bandarlampung.
                                    </li>
                                    <li><i class="fas fa-check"></i> Banyak penginapan dengan biaya relatif murah.</li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="text-5 my-4 pb-0">Komentar:</h3>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                @foreach($dataKomentar as $row)
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="card-text">{{$row->name}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if(!Auth::user())
                                <p>Anda harus login untuk dapat mengisi kolom komentar. <a href="{{route('login')}}">Login</a>
                                </p>
                            @endif
                            @if(Auth::user())
                                <div class="row">

                                    <div class="col-md-12">
                                        Silahkan tulis komentar anda:
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
                                <div class="row">
                                    <div class="col-md-12">
                                        @if($katakotor !== "")
                                        Hasil kata yang difilter :<span class="text-danger"> {{$katakotor}}</span><br/>
                                        @endif
                                        @if($solusi !== "")
                                            Silahkan anda mengganti kata kasar tersebut dengan kata : <span
                                                class="text-success">{{$solusi}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

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

<!-- Theme Base, Components and Settings -->
<script src="{{asset('porto/js/theme.js')}}"></script>

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
