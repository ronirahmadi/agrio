@extends('submenu.layout.footer')
@section('submenu.jenispupuk')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agrio Pestisida Organik - NSI</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Gardnma HTML 5 Template " />

    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/thm-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/slick-slider/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/language-switcher/polyglot-language-switcher.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- template styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />


</head>


<body>

    <!-- Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner">
                        <img src="{{ asset('assets/img/agrio - load.png') }}" alt="">
                    </div>
                    <div class="txt-loading">
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="g" class="letters-loading">
                            g
                        </span>
                        <span data-text-preloader="r" class="letters-loading">
                            r
                        </span>
                        <span data-text-preloader="i" class="letters-loading">
                            i
                        </span>
                        <span data-text-preloader="o" class="letters-loading">
                            o
                        </span>
                        <span data-text-preloader="-" class="letters-loading">
                            -
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <div class="page-wrapper">
        <!--Start Main Header One-->
        <header class="main-header main-header-one">
            <!--Start Main Header One Top-->
           
            <!--End Main Header One Top-->

            <!--Start Main Header One Bottom-->
            <div class="main-header-one__bottom">
                <div class="main-header-one__bottom-inner">
                    <nav class="main-menu main-menu-one">
                        <div class="main-menu__wrapper clearfix">
                            <div class="auto-container">
                                <div class="main-menu__wrapper-inner">
                                    <div class="main-header-one__bottom-left">
                                        <div class="logo-box-one">
                                            <a href="index.html">
                                                <img src="{{ asset('assets/img/agrio.png') }}" alt="Awesome Logo"
                                                    title="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="main-header-one__bottom-middle">
                                        <div class="main-menu-box">
                                            <a href="#" class="mobile-nav__toggler">
                                                <i class="fa fa-bars"></i>
                                            </a>

                                            <ul class="main-menu__list">
                                                <li>
                                                    <a href="{{ route('beranda') }}">Home <span class="line"></span></a>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="{{ route('about') }}">About <span class="line"></span></a>
                                                </li>

                                                <li class="dropdown current">
                                                    <a href="#">Pages <span class="line"></span></a>
                                                    <ul>
                                                        <li><a href="{{ route('jenistanaman') }}">Jenis Tanaman</a></li>
                                                        <li><a href="{{ route('jenishama') }}">Jenis Hama</a></li>
                                                        <li><a href="{{ route('jenispupuk') }}">Jenis Pupuk</a></li>
                                                        <li><a href="{{ route('jenislahan') }}">Lahan</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="{{ route('contact') }}">Contact <span class="line"></span></a>
                                                </li>
                                                <li>
                                                    <div class="main-header-one__bottom-right">
                                                        <div class="header-search-box">
                                                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass text-primary"></a>
                                                        </div>
                                                    </div>                                               
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

  

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!--End Main Header One Bottom-->
        </header>
        <!--End Main Header One-->

        <!-- isi Jenis Hama -->
        <div class="stricky-header stricky-header--three stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/img/unsplash/bg1.jpg)">
            </div>
            <div class="shape1">
                <img src="assets/images/shapes/page-header-shape1.png" alt="#">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <h2>Pupuk</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li>Pupuk</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <!-- ISI CARD -->
            <section class="services-one">
                <div class="container">
                    <div class="sec-title text-center">
                        <div class="sec-title__tagline">
                            <span class="left"></span>
                            <h6>Pupuk</h6>
                            <span class="right"></span>
                        </div>
                        <h2 class="sec-title__title">Cari Berdasarkan Pupuk</h2>
                    </div>

                    <div class="search-container">
                        <form class="d-flex" action="#">
                            <label for="search" class="sr-only">search here</label>
                            <input class="form-control" type="text" id="search" placeholder="Search Here..." />
                            <button type="submit" aria-label="search submit" class="thm-btn">
                                <i class="icon-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>

                    <div>
                        <!--Start Services One Single-->
                        <div class="row">
                            <div class="gradient-bg"></div>
                            <!--Start Services One Single-->
                            <div  class="col-md-3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <div class="services-one__single">
                                    <div class="services-one__single-img">
                                        <div class="services-one__single-img-bg"
                                            style="background-image: url(assets/images/shapes/services-v1-shape1.png);"></div>
                                        <div class="overlay-icon">
                                            <div class="icon-box">
                                                <span class="icon-gardening-1"></span>
                                            </div>
                                        </div>
                                        <img src="assets/img/tanaman1.jpg" alt="#">
                                    </div>

                                    <div class="services-one__single-content text-center">
                                        <h2><a href="arbor-management.html">Yogyakarta</a></h2>
                                        <p>Yogyakarta yang berada di ketinggian 113 mdpl</p>
                                    </div>
                                </div>
                            </div>


                        <!--End Services One Single-->                            
                    </div>
                </div>
            </section>
        </div>


        

        

        <!-- Selesai Jenis Hama -->

                        

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="icon-down-arrow"></i>
    </a>
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-migrate/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/typed-2.0.11/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-slider/slick.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progress-bar/knob.js') }}"></script>

    <!-- Template js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>



</body>

</html>

@endsection   