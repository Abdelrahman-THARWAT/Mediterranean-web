<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.thetahmid.com/themes/konsol-v1.0/22-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2025 01:30:42 GMT -->
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
                                <a class="nav-link" href="/">{{ __('content.home') }}</a>
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
                                <a class="nav-link active" href="{{ app()->getLocale() === 'ar' ? 'ar/contact-us' : 'en/contact-us' }}">{{ __('content.contact') }}</a>
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
                                    <li><a href="/" >Home</a>

                                    </li>
                                    <li><a href="/">about us</a>

                                    </li>
                                    <li><a href="/">Services</a>

                                    </li>
                                    <li><a href="/">our Major Shareholders</a>

                                    </li>
                                    <li><a href="/">our Corporate News</a>

                                    </li>
                                    <li><a href="/contact-us" class="active">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <h2>{{__('content.contact')}}</h2>
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="/"><i class="la la-home"></i>{{__('content.home')}}</a> <i class="la la-angle-right"></i></li>
                                <li class="list-inline-item">{{__('content.contact')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb Area -->

        <!-- Contact Area -->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="get-in-touch">
                    <div class="sec-title">
                        <h3>{{ __('content.contact_title') }}</h3>
                    </div>
                    <div class="contact-form">
                        <form id="ajax-contact" method="post" action="https://www.thetahmid.com/themes/konsol-v1.0/send.php">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{ __('content.name_label') }}</label>
                                    <p><input type="text" id="name" name="name" placeholder="{{ __('content.name_placeholder') }}"></p>
                                </div>
                                <div class="col-md-12">
                                    <label>{{ __('content.email_label') }}</label>
                                    <p><input type="text" id="email" name="email" placeholder="{{ __('content.email_placeholder') }}"></p>
                                </div>
                                <div class="col-md-12">
                                    <label>{{ __('content.message_label') }}</label>
                                    <p><textarea name="message" id="message" placeholder="{{ __('content.message_placeholder') }}"></textarea></p>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">{{ __('content.submit_button') }}</button>
                                </div>
                            </div>
                            <div id="form-messages"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.5270125236174!2d31.21322166952455!3d30.03375785946891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846d6804ff6dd%3A0xd0ebe58f0e5962ec!2s15%20Al%20Mesaha%2C%20Ad%20Doqi%20A%2C%20Dokki%2C%20Giza%20Governorate%203750311!5e0!3m2!1sen!2seg!4v1737662573122!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-12">
                <div class="contact-box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-item d-flex">
                                <div>
                                    <img src={{ asset('images/c-map.png') }} alt="">
                                </div>
                                <div>
                                    <h6>{{ __('content.location') }}</h6>
                                    <p>{{ __('content.location_address') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item d-flex">
                                <div>
                                    <img src={{ asset('images/c-email.png') }} alt="">
                                </div>
                                <div>
                                    <h6>{{ __('content.email') }}</h6>
                                    <p>{{ __('content.email_address') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item d-flex">
                                <div>
                                    <img src={{ asset('images/c-phone.png') }} alt="">
                                </div>
                                <div>
                                    <h6>{{ __('content.phone') }}</h6>
                                    <p>{{ __('content.phone_number') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="con-social text-center">
                    <p>{{ __('content.follow_us') }}</p>
                    <ul class="list-unstyled list-inline">
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
</section>
<!-- End Contact Area -->

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
        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>

    </body>

<!-- Mirrored from www.thetahmid.com/themes/konsol-v1.0/22-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2025 01:30:44 GMT -->
</html>
