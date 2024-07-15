@extends('submenu.layout.footer')
@section('submenu.about')


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
                                                <li>
                                                    <a href="{{ route('beranda') }}">Home <span class="line"></span></a>
                                                </li>

                                                <li class="dropdown current">
                                                    <a href="{{ route('about') }}">About <span class="line"></span></a>
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#">Pages <span class="line"></span></a>
                                                    <ul>
                                                        <li><a href="{{ route('jenistanaman') }}">Jenis Tanaman</a></li>
                                                        <li><a href="{{ route('jenishama') }}">Jenis Hama</a></li>
                                                        <li><a href="{{ route('jenispupuk') }}">Jenis Pupuk</a></li>
                                                        <li><a href="{{ route('jenislokasi') }}">Lokasi</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a href="contact.html">Contact <span class="line"></span></a>
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

        <!-- isi about -->
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
                    <h2>About us</h2>
                    <ul class="thm-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Features Two-->
        <section class="features-two">
            <div class="features-two__bg" style="background-image: url(assets/images/backgrounds/features-v2-bg.png);">
            </div>
            <div class="auto-container">
                <div class="sec-title-three text-center">
                    <div class="sec-title-three__tagline">
                        <h6>What we offer</h6>
                    </div>
                    <h2 class="sec-title-three__title">How does we works</h2>
                </div>
                <div class="row">
                    <!--Start Features Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-content">
                                <div class="count-box">
                                    01
                                </div>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-gardening-2"></span>
                                    </div>

                                    <div class="content-box">
                                        <div class="title">
                                            <h2><a href="arbor-management.html">Garden Renovation</a></h2>
                                        </div>
                                        <p>Prevailed mr tolerably discourse arance <br> estimable applauded to kiyh so.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="features-two__single-img">
                                <img src="assets/images/resources/features-v2-img1.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End Features Two Single-->

                    <!--Start Features Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-content">
                                <div class="count-box">
                                    02
                                </div>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-chair"></span>
                                    </div>

                                    <div class="content-box">
                                        <div class="title">
                                            <h2><a href="arbor-management.html">Landscape Install</a></h2>
                                        </div>
                                        <p>Prevailed mr tolerably discourse arance <br> estimable applauded to kiyh so.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="features-two__single-img">
                                <img src="assets/images/resources/features-v2-img2.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End Features Two Single-->

                    <!--Start Features Two Single-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="features-two__single">
                            <div class="features-two__single-content">
                                <div class="count-box">
                                    03
                                </div>
                                <div class="inner">
                                    <div class="icon-box">
                                        <span class="icon-pruning-shears"></span>
                                    </div>

                                    <div class="content-box">
                                        <div class="title">
                                            <h2><a href="arbor-management.html">Garden Clearance</a></h2>
                                        </div>
                                        <p>Prevailed mr tolerably discourse arance <br> estimable applauded to kiyh so.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="features-two__single-img">
                                <img src="assets/images/resources/features-v2-img3.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End Features Two Single-->
                </div>
            </div>
        </section>
        <!--End Features Two-->


        <!--Start About Three -->
        <section class="about-three">
            <div class="about-three__bg" style="background-image: url(assets/images/backgrounds/about-v3-bg.png);">
            </div>
            <div class="container">
                <div class="row">

                    <!--Start About Three Counter-->
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <div class="about-three__counter">
                            <ul>
                                <li>
                                    <h2><span class="odometer" data-count="85">00</span>%</h2>
                                    <h3>Satisfied Customers.</h3>
                                    <p>Prevai tolerably discours <br> estimable applaud.</p>
                                </li>

                                <li>
                                    <h2><span class="odometer" data-count="99">00</span>%</h2>
                                    <h3>Claim Success </h3>
                                    <p>Prevai tolerably discours <br> estimable applaud.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End About Three Counter-->

                    <!--Start About Three Img-->
                    <div class="col-xl-4 col-lg-5 col-md-7">
                        <div class="about-three__img">
                            <div class="about-three__img-shape1">
                                <img src="assets/images/shapes/about-v3-shape1.png" alt="#">
                            </div>
                            <div class="inner">
                                <img src="assets/images/about/about-v3-img1.jpg" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--End About Three Img-->

                    <!--Start About Three Content-->
                    <div class="col-xl-6">
                        <div class="about-three__content">
                            <div class="sec-title-three">
                                <div class="sec-title-three__tagline">
                                    <h6>About company</h6>
                                </div>
                                <h2 class="sec-title-three__title">We want help you <br> to grow planting.</h2>
                            </div>

                            <div class="about-three__content-text1">
                                <p>There are many variats of passages the majority
                                    have suffered a in some form by available companu
                                    alte pic alte in some form by to at available.</p>
                            </div>

                            <div class="about-three__content-text2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-box">
                                            <ul>
                                                <li>
                                                    <h4> <span class="icon-tick"></span>Watering & Irrigation</h4>
                                                </li>

                                                <li>
                                                    <h4> <span class="icon-tick"></span>Plant Stands & Trays</h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-box">
                                            <ul>
                                                <li>
                                                    <h4> <span class="icon-tick"></span>Lawn Maintenance</h4>
                                                </li>

                                                <li>
                                                    <h4> <span class="icon-tick"></span>Yard & Garden Decor</h4>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End About Three Content-->
                </div>
            </div>
        </section>
        <!--End About Three -->


        <!--Start Services Three -->
        <section class="services-three">
            <div class="shape2  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                    class="float-bob-y" src="assets/images/shapes/services-v3-shape1.png" alt="#"></div>
            <div class="shape3 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                    class="float-bob-y" src="assets/images/shapes/services-v3-shape2.png" alt="#">
            </div>
            <div class="services-three__bg"
                style="background-image: url(assets/images/backgrounds/services-v3-bg.jpg);"></div>
            <div class="container">
                <div class="services-three__top">
                    <div class="sec-title-three">
                        <div class="sec-title-three__tagline">
                            <h6>What we do</h6>
                        </div>
                        <h2 class="sec-title-three__title">Get exceptional <br> service for growth</h2>
                    </div>

                    <div class="services-three__top-text">
                        <p>There are many variats of passage Lorem Ipsum the majority
                            have suffered alte in some form by available Companuy
                            alte pic alte in some form by to at available.</p>
                    </div>
                </div>


                <div class="row">
                    <!--Start Services Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="services-three__single">
                            <div class="shape1"></div>
                            <div class="services-three__single-icon">
                                <div class="inner">
                                    <span class="icon-gardener-1"></span>
                                </div>
                                <div class="icon">
                                    <span>+</span>
                                </div>
                            </div>

                            <div class="services-three__single-content">
                                <div class="title">
                                    <h2><a href="arbor-management.html">Garden Landscaping</a></h2>
                                </div>
                                <p>The laying out andin in care of
                                    plot of ground devoted partally
                                    lokally or wholly avail Natural at
                                    element present garden...</p>

                                <div class="bottom-box">
                                    <div class="btn-box">
                                        <a href="arbor-management.html">Read More</a>
                                    </div>
                                    <div class="count-box">
                                        <span>01</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="services-three__single">
                            <div class="shape1"></div>
                            <div class="services-three__single-icon">
                                <div class="inner">
                                    <span class="icon-shovels"></span>
                                </div>
                                <div class="icon">
                                    <span>+</span>
                                </div>
                            </div>

                            <div class="services-three__single-content">
                                <div class="title">
                                    <h2><a href="arbor-management.html">Soil Marking</a></h2>
                                </div>
                                <p>The laying out andin in care of
                                    plot of ground devoted partally
                                    lokally or wholly avail Natural at
                                    element present garden...</p>

                                <div class="bottom-box">
                                    <div class="btn-box">
                                        <a href="arbor-management.html">Read More</a>
                                    </div>
                                    <div class="count-box">
                                        <span>02</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="services-three__single">
                            <div class="shape1"></div>
                            <div class="services-three__single-icon">
                                <div class="inner">
                                    <span class="icon-agriculture"></span>
                                </div>
                                <div class="icon">
                                    <span>+</span>
                                </div>
                            </div>

                            <div class="services-three__single-content">
                                <div class="title">
                                    <h2><a href="arbor-management.html">Patios & Courtyards</a></h2>
                                </div>
                                <p>The laying out andin in care of
                                    plot of ground devoted partally
                                    lokally or wholly avail Natural at
                                    element present garden...</p>

                                <div class="bottom-box">
                                    <div class="btn-box">
                                        <a href="arbor-management.html">Read More</a>
                                    </div>
                                    <div class="count-box">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Services Three Single-->

                    <!--Start Services Three Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                        <div class="services-three__single">
                            <div class="shape1"></div>
                            <div class="services-three__single-icon">
                                <div class="inner">
                                    <span class="icon-gardening"></span>
                                </div>
                                <div class="icon">
                                    <span>+</span>
                                </div>
                            </div>

                            <div class="services-three__single-content">
                                <div class="title">
                                    <h2><a href="arbor-management.html">Commercial Planting</a></h2>
                                </div>
                                <p>The laying out andin in care of
                                    plot of ground devoted partally
                                    lokally or wholly avail Natural at
                                    element present garden...</p>

                                <div class="bottom-box">
                                    <div class="btn-box">
                                        <a href="arbor-management.html">Read More</a>
                                    </div>
                                    <div class="count-box">
                                        <span>04</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End Services Three Single-->
                </div>
            </div>
        </section>
        <!--End Services Three -->

        <!--Start Counter One -->
        <section class="counter-one">
            <div class="auto-container">
                <div class="counter-one__inner">
                    <div class="container">
                        <ul class="counter-one__box">
                            <li class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-shovels"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2><span class="odometer" data-count="191">00</span> <span
                                                class="plus">+</span> </h2>
                                        <h3>Project Done</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-agriculture"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2><span class="odometer" data-count="2">00</span>k</h2>
                                        <h3>Global Reach</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-gardener-1"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2><span class="odometer" data-count="37">00</span> <span class="plus">+</span>
                                        </h2>
                                        <h3>User Active</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-gardener-1"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2><span class="odometer" data-count="9">00</span> <span class="plus">+</span>
                                        </h2>
                                        <h3>Awards Win</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Counter One -->

        <!--Start Testimonials Three -->
        <section class="testimonials-three testimonials-three--about">
            <div class="shape2"><img src="assets/images/shapes/testimonials-v3-shape2.png" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Start Testimonials Three Left-->
                    <div class="col-xl-4">
                        <div class="testimonials-three__left">
                            <div class="sec-title-three">
                                <div class="sec-title-three__tagline">
                                    <h6>Testimonials</h6>
                                </div>
                                <h2 class="sec-title-three__title">What our coustomers <br> say ?</h2>
                            </div>

                            <div class="testimonials-three__left-text">
                                <p>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit sed do eiusmod </p>
                            </div>

                            <ul class="testimonials-three__left-list">
                                <li>
                                    <div class="shape1"><img src="assets/images/shapes/testimonials-v3-shape1.png"
                                            alt="#"></div>
                                    <div class="icon-box">
                                        <span class="icon-tick"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>We Promise To Provide <br> Upfront Pricing</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="shape1"><img src="assets/images/shapes/testimonials-v3-shape1.png"
                                            alt="#"></div>
                                    <div class="icon-box">
                                        <span class="icon-tick"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>We Promise To Provide <br> Upfront Pricing</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Testimonials Three Left-->

                    <!--Start Testimonials Three Right-->
                    <div class="col-xl-8">
                        <div class="testimonials-three__right">

                            <div class="testimonials-three__thumb-outer">
                                <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <div class="testimonials-three__img">
                                                <div class="inner">
                                                    <img src="assets/images/testimonial/testimonial-v3-img1.jpg"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonials-three__img">
                                                <div class="inner">
                                                    <img src="assets/images/testimonial/testimonial-v3-img2.jpg"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonials-three__img">
                                                <div class="inner">
                                                    <img src="assets/images/testimonial/testimonial-v3-img3.jpg"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="testimonials-three__img">
                                                <div class="inner">
                                                    <img src="assets/images/testimonial/testimonial-v3-img4.jpg"
                                                        alt="#">
                                                </div>
                                            </div>
                                        </div><!-- /.swiper-slide -->


                                    </div>
                                </div>
                            </div>

                            <div class="testimonials-three__right-content">
                                <div class="swiper-container gallery-main">
                                    <div class="swiper-wrapper">

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-three__single">
                                                <div class="testimonials-three__single-inner">
                                                    <div class="testimonials-three__single-top">
                                                        <div class="name">
                                                            <h3>Jessica Brown</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="testimonials-three__single-middle">
                                                        <div class="text-box">
                                                            <p>Pellentesque habitant morbi tristique senectus netus et
                                                                malesuada fames ac turp egestas. morbi tristique
                                                                senectus netus et malesuada fames ac turp fames ac turp
                                                                egestas malesuada</p>
                                                        </div>

                                                        <div class="img-box">
                                                            <div class="icon-box">
                                                                <span class="icon-quote-1"></span>
                                                            </div>
                                                            <div class="inner">
                                                                <img src="assets/images/testimonial/testimonial-v3-img7.jpg"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonials-three__single-bottom">
                                                    <p>CEO & Co founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-three__single">
                                                <div class="testimonials-three__single-inner">
                                                    <div class="testimonials-three__single-top">
                                                        <div class="name">
                                                            <h3>Jessica Brown</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="testimonials-three__single-middle">
                                                        <div class="text-box">
                                                            <p>Pellentesque habitant morbi tristique senectus netus et
                                                                malesuada fames ac turp egestas. morbi tristique
                                                                senectus netus et malesuada fames ac turp fames ac turp
                                                                egestas malesuada</p>
                                                        </div>

                                                        <div class="img-box">
                                                            <div class="icon-box">
                                                                <span class="icon-quote-1"></span>
                                                            </div>
                                                            <div class="inner">
                                                                <img src="assets/images/testimonial/testimonial-v3-img8.jpg"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonials-three__single-bottom">
                                                    <p>CEO & Co founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-three__single">
                                                <div class="testimonials-three__single-inner">
                                                    <div class="testimonials-three__single-top">
                                                        <div class="name">
                                                            <h3>Jessica Brown</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="testimonials-three__single-middle">
                                                        <div class="text-box">
                                                            <p>Pellentesque habitant morbi tristique senectus netus et
                                                                malesuada fames ac turp egestas. morbi tristique
                                                                senectus netus et malesuada fames ac turp fames ac turp
                                                                egestas malesuada</p>
                                                        </div>

                                                        <div class="img-box">
                                                            <div class="icon-box">
                                                                <span class="icon-quote-1"></span>
                                                            </div>
                                                            <div class="inner">
                                                                <img src="assets/images/testimonial/testimonial-v3-img9.jpg"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonials-three__single-bottom">
                                                    <p>CEO & Co founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->

                                        <!--Start Swiper Slide-->
                                        <div class="swiper-slide">
                                            <div class="testimonials-three__single">
                                                <div class="testimonials-three__single-inner">
                                                    <div class="testimonials-three__single-top">
                                                        <div class="name">
                                                            <h3>Jessica Brown</h3>
                                                        </div>
                                                        <div class="rating-box">
                                                            <ul>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="icon-pointed-star"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="testimonials-three__single-middle">
                                                        <div class="text-box">
                                                            <p>Pellentesque habitant morbi tristique senectus netus et
                                                                malesuada fames ac turp egestas. morbi tristique
                                                                senectus netus et malesuada fames ac turp fames ac turp
                                                                egestas malesuada</p>
                                                        </div>

                                                        <div class="img-box">
                                                            <div class="icon-box">
                                                                <span class="icon-quote-1"></span>
                                                            </div>
                                                            <div class="inner">
                                                                <img src="assets/images/testimonial/testimonial-v3-img6.jpg"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonials-three__single-bottom">
                                                    <p>CEO & Co founder</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Swiper Slide-->
                                    </div>
                                </div>

                                <div id="testimonial-one__carousel-pagination"></div>
                                <!-- /#Testimonials Two Carousel Pagination -->

                            </div>
                        </div>
                    </div>
                    <!--End Testimonials Three Right-->
                </div>
            </div>
        </section>
        <!--End Testimonials Three -->

        <!--Start Team Two -->
        <section class="team-two team-two--about">
            <div class="container">
                <div class="sec-title-three text-center">
                    <div class="sec-title-three__tagline">
                        <h6>Our Team</h6>
                    </div>
                    <h2 class="sec-title-three__title">Our expert members</h2>
                </div>
                <div class="row">
                    <!--Start Team Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <img src="assets/images/team/team-v2-img1.jpg" alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-two__single-content">
                                <h2><a href="team-details.html">Amanda Tim</a></h2>
                                <p>Stocker</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team Two Single-->
                    <!--Start Team Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <img src="assets/images/team/team-v2-img2.jpg" alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-two__single-content">
                                <h2><a href="team-details.html">Humbled Dow</a></h2>
                                <p>Gardenist</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team Two Single-->

                    <!--Start Team Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms"
                        data-wow-duration="1000ms">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <img src="assets/images/team/team-v2-img3.jpg" alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-two__single-content">
                                <h2><a href="team-details.html">Munia Anchor</a></h2>
                                <p>Garden Experts</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team Two Single-->

                    <!--Start Team Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                        data-wow-duration="1000ms">
                        <div class="team-two__single">
                            <div class="team-two__single-img">
                                <img src="assets/images/team/team-v2-img4.jpg" alt="#">
                                <ul class="social-links clearfix">
                                    <li class="share"><a href="#"><span class="icon-share"></span></a>
                                        <ul class="social-links-inner">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-two__single-content">
                                <h2><a href="team-details.html">Albert Hopper</a></h2>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <!--End Team Two Single-->
                </div>
            </div>
        </section>
        <!--End Team Two -->
        <!-- Selesai About -->


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
                                        <a href="index.html"><img src="assets/images/resources/footer-logo.png"
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