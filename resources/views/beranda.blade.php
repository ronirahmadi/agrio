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
                                                <li class="dropdown current">
                                                    <a href="{{ route('beranda') }}">Home <span class="line"></span></a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('about') }}">About <span class="line"></span></a>
                                                </li>

                                                <li class="dropdown">
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
                                                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
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

        <div class="stricky-header stricky-header--one stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Start Main Slider -->
        <section class="main-slider main-slider-one">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">


                    <!--Start Main Slider One-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image:url(assets/img/unsplash/bg1.jpg)">
                        </div>
                        <div class="shape1"><img class="float-bob-y" src="assets/images/shapes/slider-v1-shape1.png"
                                alt="#"></div>
                        <div class="shape2"><img src="assets/images/shapes/slider-v1-shape2.png" alt="#"></div>

                        

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="title">
                                    <h2>Organik <br> Pesticide & <br> Bio Booster</h2>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">Discover more</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Slider One-->

                    <!--Start Main Slider One-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image:url(assets/img/tanaman2.jpg)">
                        </div>
                        <div class="shape1"><img class="float-bob-y" src="assets/images/shapes/slider-v1-shape1.png"
                                alt="#"></div>
                        <div class="shape2"><img src="assets/images/shapes/slider-v1-shape2.png" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="title">
                                    <h2>Semi Quantum  <br> Physics</h2>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">Discover more</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Slider One-->

                    <!--Start Main Slider One-->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image:url(assets/img/tanaman1.jpg)">
                        </div>
                        <div class="shape1"><img class="float-bob-y" src="assets/images/shapes/slider-v1-shape1.png"
                                alt="#"></div>
                        <div class="shape2"><img src="assets/images/shapes/slider-v1-shape2.png" alt="#"></div>


                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="title">
                                    <h2>Higher Suface <br> Area</h2>
                                </div>
                                <div class="btn-box">
                                    <a class="thm-btn" href="contact.html">
                                        <span class="txt">Discover more</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Main Slider One-->

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--End Main Slider-->

        <!--Start About One -->
        <section class="about-one">
            <div class="shape1 float-bob-y"><img src="assets/images/shapes/about-v1-shape1.png" alt="#"></div>
            <div class="shape2 float-bob-y"><img src="assets/images/shapes/about-v1-shape2.png" alt="#"></div>
            <div class="shape3"></div>
            <div class="about-one__bg" style="background-image: url(assets/img/tanaman1.jpg);">
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6"></div>
                    <!--Start About One Content-->
                    <div class="col-xl-6">
                        <div class="about-one__content">
                            <div class="sec-title mt-3">
                                <div class="sec-title__tagline">
                                    <h6>About Us </h6>
                                    <span class="right"></span>
                                </div>
                                <h2 class="sec-title__title">Nanotechnology <br> What is it?  <br> Why does it matter?</h2>
                            </div>

                            <div class="about-one__content-text1">
                                <p class="text1">Nanotechnology is the science, engineering, and application of materials and devices with dimensions and tolerances in the nanometer range (one billionth of a meter)</p>
                                <p class="text2">Science of size manipulation to either increase or decrease particle size into nanometers. Comparatively nanoparticle is 11/200-1/300 smaller than the average size of human cells.</p>
                            </div>

                            <div class="about-one__content-text2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text2-single">
                                            <h3> <span class="icon-confirmation"></span>Semi Quantum Physics</h3>
                                            <p>
                                            Nanoparticle physics falls between quantum and Newtonian laws, causing materials to change function and mechanism due to their size.</p>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-text2-single">
                                            <h3> <span class="icon-confirmation"></span> Higher Surface Area</h3>
                                            <p>Nanoparticle have larger surface area when compared to the same volume of material made up of bigger particles.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="about-one__content-bottom">
                                <div class="btn-box">
                                    <a class="thm-btn" href="about.html">
                                        <span class="txt">Discover more</span>
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>

                                <div class="client-info">
                                    <!-- <div class="img-box">
                                        <img src="assets/images/about/about-v1-img2.jpg" alt="#">
                                    </div> -->

                                    <div class="text-box">
                                        <h3>Dr.Hansen</h3>
                                        <p>CEO of Agrio Pesticide</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End About One Content-->
                </div>
            </div>
        </section>
        <!--End About One -->


        <!--Start Services One -->
        <section class="services-one">
            <div class="gradient-bg"></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <span class="left"></span>
                        <h6>Plantation</h6>
                        <span class="right"></span>
                    </div>
                    <h2 class="sec-title__title">Our Plantation</h2>
                </div>

                <div class="row">
                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="shape1"><img src="assets/images/shapes/services-v1-shape2.png" alt="#">
                            </div>
                            <div class="shape2"><img src="assets/images/shapes/services-v1-shape3.png" alt="#">
                            </div>
                            <div class="shape3"><img src="assets/images/shapes/services-v1-shape4.png" alt="#">
                            </div>
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

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="shape1"><img src="assets/images/shapes/services-v1-shape2.png" alt="#">
                            </div>
                            <div class="shape2"><img src="assets/images/shapes/services-v1-shape3.png" alt="#">
                            </div>
                            <div class="shape3"><img src="assets/images/shapes/services-v1-shape4.png" alt="#">
                            </div>
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/services-v1-shape1.png);"></div>
                                <div class="overlay-icon">
                                    <div class="icon-box">
                                        <span class="icon-gardening-1"></span>
                                    </div>
                                </div>
                                <img src="assets/img/tanaman2.jpg" alt="#">
                            </div>

                            <div class="services-one__single-content text-center">
                                <h2><a href="arbor-management.html">Temanggung</a></h2>
                                <p>Temanggung yang berada di ketinggian 2.100 mdpl</p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="shape1"><img src="assets/images/shapes/services-v1-shape2.png" alt="#">
                            </div>
                            <div class="shape2"><img src="assets/images/shapes/services-v1-shape3.png" alt="#">
                            </div>
                            <div class="shape3"><img src="assets/images/shapes/services-v1-shape4.png" alt="#">
                            </div>
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/services-v1-shape1.png);"></div>
                                <div class="overlay-icon">
                                    <div class="icon-box">
                                        <span class="icon-gardening-1"></span>
                                    </div>
                                </div>
                                <img src="assets/img/tanaman3.jpg" alt="#">
                            </div>

                            <div class="services-one__single-content text-center">
                                <h2><a href="arbor-management.html">Magelang</a></h2>
                                <p>Magelang yang berada di ketinggian 300 mdpl</p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->

                    <!--Start Services One Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="services-one__single">
                            <div class="shape1"><img src="assets/images/shapes/services-v1-shape2.png" alt="#">
                            </div>
                            <div class="shape2"><img src="assets/images/shapes/services-v1-shape3.png" alt="#">
                            </div>
                            <div class="shape3"><img src="assets/images/shapes/services-v1-shape4.png" alt="#">
                            </div>
                            <div class="services-one__single-img">
                                <div class="services-one__single-img-bg"
                                    style="background-image: url(assets/images/shapes/services-v1-shape1.png);"></div>
                                <div class="overlay-icon">
                                    <div class="icon-box">
                                        <span class="icon-gardening-1"></span>
                                    </div>
                                </div>
                                <img src="assets/img/tanaman4.jpg" alt="#">
                            </div>

                            <div class="services-one__single-content text-center">
                                <h2><a href="arbor-management.html">Bali</a></h2>
                                <p>Bali yang berada di ketinggian 2.020 mdpl </p>
                            </div>
                        </div>
                    </div>
                    <!--End Services One Single-->
                </div>
            </div>
        </section>
        <!--End Services One -->


        <!--Start Projects One-->
        <section class="projects-one">
            <div class="projects-one__bg" style="background-image: url(assets/img/tanaman2.jpg);">
            </div>
            <div class="container">
                <div class="sec-title">
                    <div class="sec-title__tagline">
                        <h6>Plantation</h6>
                        <span class="right"></span>
                    </div>
                    <h2 class="sec-title__title">We Have Successful<br> In Indonesia</h2>
                </div>

                <div class="projects-one__inner">
                    <ul class="row filter-layout masonary-layout">
                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="projects-one__single mb60">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman1.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In <br>
                                                Temanggung</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="projects-one__single mb30">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman2.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In<br>
                                                Magelang</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="projects-one__single">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman3.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In <br>
                                                Bali</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="projects-one__single">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman4.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In <br>
                                                Kalimantan</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="projects-one__single">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman2.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In <br>
                                                Yogyakarta</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="projects-one__single mb0">
                                <div class="projects-one__single-img">
                                    <img src="assets/img/tanaman4.jpg" alt="#">
                                    <div class="btn-box">
                                        <a href="#"><span class="icon-right-arrow-1"></span></a>
                                    </div>
                                    <div class="overlay-content">
                                        <span>farming</span>
                                        <h2><a href="#">In <br>
                                                Tegal</a></h2>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Projects One-->


        <!--Start Work Process One-->
        <section class="work-process-one">
            <div class="shape1"></div>
            <div class="shape2"><img src="assets/images/shapes/work-process-v1-shape1.png" alt="#"></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <span class="left"></span>
                        <h6>Work Process</h6>
                        <span class="right"></span>
                    </div>
                    <h2 class="sec-title__title">Agrio Distribution System</h2>
                </div>
                <div class="row filter-layout masonary-layout">
                    <!--Start Work Process One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="work-process-one__single">
                            <div class="work-process-one__single-icon">
                                <div class="inner">
                                    <span class="icon-gardener"></span>
                                </div>
                                <div class="count-box"></div>
                            </div>

                            <div class="work-process-one__single-content text-center">
                                <h2><a href="arbor-management.html">Registration Form</a></h2>
                                <p>fill out the registration form</p>

                            </div>
                        </div>
                    </div>
                    <!--End Work Process One Single-->

                    <!--Start Work Process One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="work-process-one__single style2 mt100">
                            <div class="work-process-one__single-icon">
                                <div class="inner">
                                    <span class="icon-watering-plants"></span>
                                </div>
                                <div class="count-box"></div>
                            </div>

                            <div class="work-process-one__single-content text-center">
                                <h2><a href="arbor-management.html">Invoicing
                                    </a></h2>
                                <p>After registration we will check <br> and provide an invoice</p>

                            </div>
                        </div>
                    </div>
                    <!--End Work Process One Single-->

                    <!--Start Work Process One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="work-process-one__single mt50">
                            <div class="work-process-one__single-icon">
                                <div class="inner">
                                    <span class="icon-home"></span>
                                </div>
                                <div class="count-box"></div>
                            </div>

                            <div class="work-process-one__single-content text-center">
                                <h2><a href="arbor-management.html">Delivery Expedition</a></h2>
                                <p>Fertilizer will be sent to the<br> destination address</p>

                            </div>
                        </div>
                    </div>
                    <!--End Work Process One Single-->

                    <!--Start Work Process One Single-->
                    <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="work-process-one__single style2">
                            <div class="work-process-one__single-icon">
                                <div class="inner">
                                    <span class="icon-field"></span>
                                </div>
                                <div class="count-box"></div>
                            </div>

                            <div class="work-process-one__single-content text-center">
                                <h2><a href="arbor-management.html">Customors</a></h2>
                                <p>fertilizer will reach the <br> customer</p>

                            </div>
                        </div>
                    </div>
                    <!--End Work Process One Single-->
                </div>
            </div>
        </section>
        <!--End Work Process One-->


        <!--Start Footer One -->
        <footer class="footer-one">
            <div class="footer-one__bg" style="background-image: url(assets/images/shapes/footer-v1-shape3.png);"></div>
            <div class="shape1 float-bob-y"><img src="assets/images/shapes/footer-v1-shape1.png" alt="#"></div>
            <div class="shape2 float-bob-y"><img src="assets/images/shapes/footer-v1-shape2.png" alt="#"></div>
            <!--Start Footer-->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!--Start Footer Widget Single-->
                        <div class="col-xl-5 col-lg-5  wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__single">
                                <div class="footer-widget__single-about">
                                    <div class="logo-box">
                                        <a href="{{ route('beranda') }}"><img src="assets/img/agrio.png"
                                                alt="#"></a>
                                    </div>

                                    <form class="footer-widget__subscribe-box">
                                        <div class="title-box">
                                            <h5>Subsrcibe for Latest Articles and Resources</h5>
                                        </div>
                                        <div class="footer-widget__subscribe-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="footer-widget__subscribe-btn">
                                                <span>Go</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Widget Single-->

                        <!--Start Footer One Right-->
                        <div class="col-xl-7 col-lg-7">
                            <div class="footer-one__right">
                                <div class="row">
                                    <!--Start Footer One Right Single-->
                                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                                        <div class="footer-one__right-single mb50">
                                            <div class="title">
                                                <h2>Menu</h2>
                                            </div>
                                            <div class="footer-one__right-single-services">
                                                <ul class="footer-one__right-single-list">
                                                    <li><a href="{{ route('beranda') }}">Home</a></li>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="#">Pages</a></li>
                                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer One Right Single-->

                                    <!--Start Footer One Right Single-->
                                    <div class="col-xl-3 col-lg-3 wow animated fadeInUp" data-wow-delay="0.3s">
                                        <div class="footer-one__right-single mb50">
                                            <div class="title">
                                                <h2>Pages</h2>
                                            </div>
                                            <div class="footer-one__right-single-links">
                                                <ul class="footer-one__right-single-list">
                                                    <li><a href="{{ route('jenistanaman') }}">Jenis Tanaman</a></li>
                                                    <li><a href="{{ route('jenishama') }}">Jenis Hama</a></li>
                                                    <li><a href="{{ route('jenispupuk') }}">Jenis Pupuk</a></li>
                                                    <li><a href="{{ route('jenislahan') }}">Lahan</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer One Right Single-->

                                    <!--Start Footer One Right Single-->
                                    <div class="col-xl-5 col-lg-5 wow animated fadeInUp" data-wow-delay="0.4s">
                                        <div class="footer-one__right-single">
                                            <div class="title">
                                                <h2>Contact</h2>
                                            </div>
                                            <div class="footer-one__right-single-contact">
                                                <p> <a href="mailto:yourmail@email.com">AgrioPestisida@Agrio.com</a>
                                                    <br> Yogyakarta Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Footer One Right Single-->
                                </div>

                                <div class="footer-one__right-bottom wow animated fadeInUp" data-wow-delay="0.1s">
                                    <ul class="social-links">
                                        <li> <a href="#"><span class="icon-twitter"></span></a> </li>
                                        <li> <a href="#"><span class="icon-facebook"></span></a> </li>
                                        <li> <a href="#"><span class="icon-pinterest"></span></a> </li>
                                        <li> <a href="#"><span class="icon-instagram"></span></a> </li>
                                    </ul>

                                    <div class="footer-one__right-bottom-contact">
                                        <div class="icon-box">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="content-box">
                                            <p>Call Us</p>
                                            <h4><a href="#">+62 819-7795-9326</a></h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Footer One Right-->
                    </div>
                </div>
            </div>
            <!--End Footer-->


            <div class="footer-one__bottom">
                <div class="container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>Copyright © 2024 Agrio Pestisida Organik.</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!--End Footer One-->

    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
                <i class="icon-plus"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/resources/mobile-nav-logo.png" alt="" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@example.com">AgrioPestisida@mail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:123456789">444 000 777 66</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>

        </div>
    </div>

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