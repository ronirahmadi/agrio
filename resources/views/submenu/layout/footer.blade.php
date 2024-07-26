@yield('submenu.jenishama')  
@yield('submenu.jenispupuk')  
@yield('submenu.jenistanaman')  
@yield('submenu.jenislokasi')  
@yield('submenu.contact')  
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
