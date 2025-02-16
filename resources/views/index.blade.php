<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{__('content.title')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href={{asset('images/logo.png')}} type="image/x-icon">
        <link rel="icon" href={{asset('images/logo.png')}} type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href={{asset('css/assets/bootstrap.min.css')}}>

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href={{asset('css/assets/font-awesome.min.css')}}>

		<!-- Lineawesome Icon -->
        <link rel="stylesheet" href={{asset('css/assets/line-awesome.min.css')}}>

		<!-- Animate Css -->
        <link rel="stylesheet" href={{asset('css/assets/animate.css')}}>

        <!-- Owl Slider -->
        <link rel="stylesheet" href={{asset('css/assets/owl.carousel.min.css')}}>

        <!-- Magnific PopUp -->
        <link rel="stylesheet" href={{asset('css/assets/magnific-popup.css')}}>

        <!-- Custom Style -->
        <link rel="stylesheet" href={{asset('css/assets/normalize.css')}}>
        <link rel="stylesheet" href={{asset('css/style.css')}}>
        <link rel="stylesheet" href={{asset('css/assets/responsive.css')}}>
        <!-- Scroll behavior -->
        <style>
            html{
                scroll-behavior: smooth;

            }
        </style>


    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="load-box">
                <img src={{ asset('images/preloader.gif') }} alt="">
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bar-left">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><i class="la la-phone"></i>{{ __('content.phone') }}</li>
                                <li class="list-inline-item"><i class="la la-envelope"></i>{{ __('content.email') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bar-right d-flex justify-content-end">
                            <ul class="list-unstyled list-inline bar-menu">
                                <li class="list-inline-item">
                                    <a href="{{ app()->getLocale() === 'ar' ? url('en') : url('ar') }}">
                                        <i class="la la-globe"></i>{{ __('content.language') }}
                                    </a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="la la-question"></i>{{ __('content.help') }}</a></li>
                            </ul>
                            <ul class="list-unstyled list-inline bar-social">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Menu Area -->
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand" style="align-items: flex-start;">
                    <a class="navbar-brand" href=''>
                        <img src={{ asset('images/logo.png') }} alt="" style="width: 13em;">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">{{ __('content.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about_us">{{ __('content.about_us') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">{{ __('content.services') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Major_shareholders">{{ __('content.major_shareholders') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#news">{{ __('content.corporate_news') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ app()->getLocale() === 'ar' ? 'ar/contact-us' : 'en/contact-us' }}">{{ __('content.contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href="#"><img src={{ asset('images/logo.png') }} alt="" style="width: 20em; margin-bottom: 2em;"></a>
                                <ul class="list-unstyled">
                                    <li><a href="/" class="nav-link active">{{ __('content.home') }}</a></li>
                                    <li><a href="#about_us">{{ __('content.about_us') }}</a></li>
                                    <li><a class="nav-link" href="#services">{{ __('content.services') }}</a></li>
                                    <li><a href="#Major_shareholders">{{ __('content.major_shareholders') }}</a></li>
                                    <li><a href="#news">{{ __('content.corporate_news') }}</a></li>
                                    <li><a href="/contact-us">{{ __('content.contact') }}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Hero Area Area -->
        <section class="hero-area">
            <div class="slider-wrapper owl-carousel">
                <div class="slider-item slider1">
                    <video autoplay muted loop id="video-background">
                        <source src={{asset('images/vid_main.mp4')}} type="video/mp4">
                        
                      </video>
                    <div class="slider-table">
                        <div class="slider-tablecell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slider-heading wow fadeInDown" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <h1>{{ __('content.welcome_message') }}</h1>
                                        </div>
                                        <div class="slider-para wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <p>{{ __('content.trading_message') }} <br> {{ __('content.trading_subtitle') }}</p>
                                        </div>
                                        <div class="slider-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                            <a href="#services" class="hero-btn">{{ __('content.our_services_btn') }} <i class="la la-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End Hero Area Area -->

        <!-- Feature Area -->
        <section class="feature-area" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>{{ __('content.best_services_title') }}</h3>
                        </div>
                    </div>
                    <div class="col-md-6 feature-lft">
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-1.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_1') }}</h3>
                            </div>
                        </div>
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-2.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_2') }}</h3>
                            </div>
                        </div>
                        <div class="feature-box d-flex flex-row-reverse text-right">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-3.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_3') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 feature-ryt">
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-4.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_4') }}</h3>
                            </div>
                        </div>
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-5.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_5') }}</h3>
                            </div>
                        </div>
                        <div class="feature-box feature-box2 d-flex">
                            <div class="ft-img text-center">
                                <span><img src={{ asset('images/feature-6.png') }} alt=""></span>
                            </div>
                            <div class="ft-content">
                                <h3>{{ __('content.service_6') }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feature Area -->

        <!-- About Us Area -->
        <section class="about-us" id="about_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-0">
                        <div class="about-img">
                            <img src={{ asset('images/about-1.jpg') }} alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="sec-title">
                            <h3>{{ __('content.about_title') }}</h3>
                        </div>
                        <div class="about-content">
                            <p>{{ __('content.about_content') }} <span>{{ __('content.about_detail') }}</span> {{ __('content.about_extended') }}</p>
                            <img src={{ asset('images/signature.png') }} alt="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="num-counter">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="counter-box text-center">
                                        <h2><span class="counter">372</span> <i class="la la-plus"></i></h2>
                                        <p>{{ __('content.services_complete') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="counter-box text-center">
                                        <h2><span class="counter">713</span> <i class="la la-plus"></i></h2>
                                        <p>{{ __('content.award_win') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="counter-box text-center">
                                        <h2><span class="counter">577</span> <i class="la la-plus"></i></h2>
                                        <p>{{ __('content.total_member') }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    <div class="counter-box cointer-last text-center">
                                        <h2><span class="counter">923</span> <i class="la la-plus"></i></h2>
                                        <p>{{ __('content.happy_client') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Area -->

        <!-- Project Area -->
        <section class="project-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>{{ __('content.news_title') }}</h3>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="project-items row">
                            <div class="col-lg-6 col-md-12 grid-item bra">
                                <div class="project-box">
                                    <img src={{ asset('images/pexels-laura-tancredi-7078663.jpg') }} alt="" class="img-fluid">
                                    <div class="layer-box">
                                        <a href=''><i class="la la-plus"></i></a>
                                        <div class="layer-title">
                                            <h6>{{ __('content.news_1') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 grid-item gra">
                                <div class="project-box">
                                    <img src={{ asset('images/pexels-rdne-7947846.jpg') }} alt="" class="img-fluid">
                                    <div class="layer-box">
                                        <a href=''><i class="la la-plus"></i></a>
                                        <div class="layer-title">
                                            <h6>{{ __('content.news_2') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Project Area -->

        <!-- Testimonial Area -->
        <section class="testimonial-area" id="Major_shareholders">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>{{ __('content.shareholders_title') }}</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="testimonial-slider owl-carousel d-flex align-item-center">
                            <div class="testimonial-item">
                                <div class="testimonial-box ">
                                    <div class="d-flex">
                                        <div>
                                            <img src={{ asset('images/mona.jpeg') }} alt="" style="object-fit: cover; width: 10em; height: 10em; border-radius: 50%; object-position:top;">
                                        </div>
                                        <div>
                                            <h6>Mona Hassan Abbas Zaki</h6>
                                            <p class="title">{{ __('content.shareholder') }}</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-box">
                                    <div class="d-flex">
                                        <div>
                                            <img src={{ asset('images/mohamed.png') }} alt="" style="object-fit: cover; width: 10em; height: 10em; border-radius: 50%; object-position:top;">
                                        </div>
                                        <div>
                                            <h6>Mohamed Mohsen Mohamed Mahjoub</h6>
                                            <p class="title">{{ __('content.shareholder') }}</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-box">
                                    <div class="d-flex">
                                        <div>
                                            <img src={{ asset('images/nadia.jpeg') }} alt="" style="object-fit: cover; width: 10em; height: 10em; border-radius: 50%; object-position:top;">
                                        </div>
                                        <div>
                                            <h6>Nadia Hassan Abbas Zaki</h6>
                                            <p class="title">{{ __('content.shareholder') }}</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-box">
                                    <div class="d-flex">
                                        <div>
                                            <img src={{ asset('images/mohamed_mo.jpeg') }} alt="mo" style="object-fit: cover; width: 10em; height: 10em;">
                                        </div>
                                        <div>
                                            <h6>Mohamed Mohsen</h6>
                                            <p class="title">{{ __('content.vice_chairman') }}</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-box">
                                    <div class="d-flex">
                                        <div>
                                            <img src={{ asset('images/basel.png') }} alt="" style="object-fit: cover; width: 10em; height: 10em; border-radius: 50%; object-position:top;">
                                        </div>
                                        <div>
                                            <h6>Basel Mahjoub</h6>
                                            <p class="title">{{ __('content.managing_director') }}</p>
                                        </div>
                                    </div>
                                    <i class="la la-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->

        <!-- Pricing Area -->
        <section class="pricing-table" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h3>{{ __('content.corporate_news_title') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- News Card 1 -->
                    <div class="col-md-4 d-flex">
                        <div class="pricing-box2 flex-grow-1 d-flex flex-column">
                            <div class="pricing-top text-center">
                                <h6>{{ __('content.aspire_capital_title') }}</h6>
                            </div>
                            <div class="pricing-content">
                                <p>{{ __('content.aspire_capital_content') }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- News Card 2 -->
                    <div class="col-md-4 d-flex">
                        <div class="pricing-box2 flex-grow-1 d-flex flex-column">
                            <div class="pricing-top text-center">
                                <h6>{{ __('content.suez_canal_bank_title') }}</h6>
                            </div>
                            <div class="pricing-content">
                                <p>{{ __('content.suez_canal_bank_content') }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- News Card 3 -->
                    <div class="col-md-4 d-flex">
                        <div class="pricing-box2 flex-grow-1 d-flex flex-column">
                            <div class="pricing-top text-center">
                                <h6>{{ __('content.efsa_title') }}</h6>
                            </div>
                            <div class="pricing-content">
                                <p>{{ __('content.efsa_content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Area -->

        <!-- Brand Area -->
        <section class="brand-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-box d-flex justify-content-between align-items-center">
                            <div><img src={{ asset('images/ezzsteel.png') }} alt="" class="img-fluid"></div>
                            <div><img src={{ asset('images/chipsy.png') }} alt="" class="img-fluid"></div>
                            <div><img src={{ asset('images/aldawila.jpg') }} alt="" class="img-fluid"></div>
                            <div><img src={{ asset('images/regina.png') }} alt="" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Brand Area -->

        <!-- Footer Area -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="f-about">
                            <img src={{asset('images/logo00.png')}} alt="" class="img-fluid">
                            <ul class="list-unstyled">
                                <li><i class="la la-map-marker"></i>{{ __('content.address') }}</li>
                                <li><i class="la la-envelope"></i>{{ __('content.email') }}</li>
                                <li><i class="la la-phone"></i>{{ __('content.phone') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="f-link">
                            <h5>{{ __('content.useful_link') }}</h5>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.general_info') }}</a></li>
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.help_center') }}</a></li>
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.services') }}</a></li>
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.privacy_policy') }}</a></li>
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.online_support') }}</a></li>
                                <li><a href="#"><i class="la la-angle-right"></i>{{ __('content.blog_posts') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="f-news">
                            <h5>{{ __('content.subscribe') }}</h5>
                            <form class="f-form" action="#">
                                <input type="text" name="email" placeholder="Enter email here">
                                <button type="submit" name="button">{{__('content.submit')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="copy-text">
                            <p>{{ __('content.copyright') }} <a href="#" target="_blank">Abdelelrahman Tharwat</a></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ft-social">
                            <ul class="list-unstyled list-inline text-right">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back To Top -->
            <div class="back-to-top">
                <a href="#" class="backtotop"><i class="la la-arrow-up"></i></a>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src={{ asset('js/assets/vendor/jquery-1.12.4.min.js') }}></script>

        <!-- Bootstrap -->
        <script src={{ asset('js/assets/popper.min.js') }}></script>
        <script src={{ asset('js/assets/bootstrap.min.js') }}></script>

        <!-- Owl Slider -->
        <script src={{ asset('js/assets/owl.carousel.min.js') }}></script>

        <!-- Magnific PopUp -->
        <script src={{ asset('js/assets/magnific-popup.min.js') }}></script>

        <!-- Smooth Scroll -->
        <script src={{ asset('js/assets/smooth-scroll.js') }}></script>

        <!-- Counter Up -->
        <script src={{ asset('js/assets/counterup.min.js') }}></script>
        <script src={{ asset('js/assets/waypoints.min.js') }}></script>

        <!-- Isotope -->
        <script src={{ asset('js/assets/isotope.pkgd.min.js') }}></script>

        <!-- Syotimer -->
        <script src={{ asset('js/assets/jquery.syotimer.min.js') }}></script>

        <!-- Mean Menu -->
        <script src={{ asset('js/assets/jquery.meanmenu.min.js') }}></script>

        <!-- Wow Js -->
        <script src={{ asset('js/assets/wow.min.js') }}></script>

        <!-- Custom JS -->
        <script src={{ asset('js/plugins.js') }}></script>
        <script src={{ asset('js/custom.js') }}></script>
    </body>

</html>
