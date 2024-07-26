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
                                            <a href="{{ route('beranda') }}">
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

                                                <li class="current">
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
                    <h2 class="sec-title-three__title">About Our Company</h2>
                </div>
                <div class="row">
                    <!-- ISI COMPANY -->
                    <div class="about-three__content-text1">
                        <p class="fs-5"> <b>PT. Nanoteknologi Swadaya Indonesia (NSI) </b>stands at 
                        the forefront of Agricultural Innovation in Indonesia by implementing 
                        Nanotechnology into Agriculture products. We utilize renewable, eco-friendly 
                        natural sources as main materials and committed to sustainable practice. The 
                        team is <b> led by dr. Hanson</b>, M. Biomed, a Medical Doctor and Scientist 
                        witPT. Nanoteknologi Swadaya Indonesia (NSI) stands at the forefront of 
                        Agricultural Innovation in Indonesia by implementing Nanotechnology into 
                        Agriculture products. We utilize renewable, eco-friendly natural sources 
                        as main materials and committed to sustainable practice. The team is led by dr. Hanson, M. Biomed, a Medical 
                        Doctor and Scientist with expertise in Nanomedicine & Molecular Medicine who brings over 
                        10 years of experience in practical Agriculture.h <b>expertise in Nanomedicine & Molecular 
                        Medicine </b> who brings over <b>10 years of experience in practical Agriculture.</b></p>

                        <br>

                        <p class="fs-5">
                            Before the commercial release of our product, PT NSI dedicated meticulous research
                            to perfect each formulation <b>ensuring product stability, safety, and efficacy.</b> This
                            was followed by <b>field trials conducted on hundreds of farms </b> with different
                            specifications (soil type, altitude, humidity, water source) and various plant varieties
                            to verify the effectiveness of our products
                        </p>

                        <br>

                        <p class="fs-5">
                            <b>AGRIO.</b> was the 1st Acclaimed Organic Nanoparticle Pesticide in Indonesia, released
                            by PT.  NSI on January 2024, since then, it has earned hundreds of success stories
                            among farmers across Indonesia (Aceh, Sumatra Utara, Riau, Bengkulu, Lampung,
                            Kalimantan Tengah, Yogyakarta, Jawa Tengah, Jawa Timur, and Bali).
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!--End Features Two-->
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
                                        <h2><span class="odometer" data-count="100">00</span> <span
                                                class="plus">+</span> </h2>
                                        <h3>Planted Done</h3>
                                    </div>
                                </div>
                            </li>

                            <li class="counter-one__single">
                                <div class="counter-one__single-inner">
                                    <div class="icon-box">
                                        <span class="icon-agriculture"></span>
                                    </div>

                                    <div class="content-box">
                                        <h2><span class="odometer" data-count="5">00</span></h2>
                                        <h3>Location</h3>
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
                                        <h3>User</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--End Counter One -->
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
                                                    <li><a href="{{ route('jenislokasi') }}">Lokasi</a></li>
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
 