<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name') }} | Newspaper </title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/favicon.png') }}">

    <!-- Dependency Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dependencies/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dependencies/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dependencies/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dependencies/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dependencies/magnific-popup/css/magnific-popup.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <!-- Start wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- start perloader -->
        <div class="pre-loader" id="preloader">
            <div class="loader"></div>
        </div>
        <!-- end perloader -->

        <!-- Start main-content -->
        <div id="main_content" class="footer-fixed">

            <!-- Header -->
            <header class="rt-header sticky-on">

                <!-- sticky-placeholder -->
                <div id="sticky-placeholder"></div>

                <!-- start  topbar -->
                @include('layouts.partials.topbar')
                <!-- end topbar -->

                <!-- Header Main -->
                <div class="header-main header-main-style-5 navbar-wrap" id="navbar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="header-action-bars d-flex align-items-center justify-content-between">

                                <!-- start header actions -->
                                <ul class="header-action-items">
                                    <li>
                                        <div class="humburger layout-2 offcanvas-menu-btn menu-status-open">
                                            <span></span>
                                        </div>
                                    </li>
                                    <li class="item ms-3">
                                        <a href="#"><i class="far fa-user"></i></a>
                                    </li>
                                </ul>
                                <!-- end header actions -->

                                <!-- end humburger icon -->

                                <!-- start logo here -->
                                <div class="site-branding">
                                    <a class="dark-logo" href="index.html"><img width="162" height="52"
                                            src="media/logo/logo-dark.svg" alt="neeon"></a>
                                    <a class="light-logo" href="index.html"><img width="162" height="52"
                                            src="media/logo/logo-light.svg" alt="neeon"></a>
                                </div>
                                <!-- end logo here -->

                                <!-- start header actions -->
                                <ul class="header-action-items">
                                    <li class="item">
                                        <a href="#template-search"><i class="fas fa-search"></i></a>
                                    </li>
                                    <li class="item cart-icon me-2">
                                        <a href="javascript:void(0)" class="cart-menu-btn menu-open-btn">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end header actions -->

                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="header-menu-bars d-flex align-items-center justify-content-center">

                                <!-- start main menu -->
                                <div class="main-menu">
                                    <nav class="main-menu__nav">
                                        <ul>
                                            <li class="main-menu__nav_sub list active">
                                                <a class="animation" href="/">Home</a>

                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end main menu -->

                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- End Header Main -->

                <!-- Header Main -->
                <div class="header-main header-main-style-5_sticky navbar-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="header-action-bars d-flex align-items-center justify-content-between">

                                <!-- start logo here -->
                                <div class="site-branding">
                                    <a class="dark-logo" href="index.html"><img width="162" height="52"
                                            src="media/logo/logo-dark.svg" alt="neeon"></a>
                                    <a class="light-logo" href="index.html"><img width="162" height="52"
                                            src="media/logo/logo-light.svg" alt="neeon"></a>
                                </div>
                                <!-- end logo here -->

                                <!-- start main menu -->
                                <div class="main-menu">
                                    <nav class="main-menu__nav">
                                        <ul>
                                            <li class="main-menu__nav_sub list active">
                                                <a class="animation" href="javascript:void(0)">Home</a>
                                                <ul class="main-menu__dropdown">
                                                    <li><a href="index.html">Home 01 - Main</a></li>
                                                    <li><a href="index2.html">Home 02 - Technology</a></li>
                                                    <li><a href="index3.html">Home 03 - Gaming</a></li>
                                                    <li><a href="index4.html">Home 04 - Illustration</a></li>
                                                    <li><a href="index5.html">Home 05 - Newspaper</a></li>
                                                    <li><a href="index6.html">Home 06 - Magazine</a></li>
                                                    <li><a href="index7.html">Home 07 - Sports</a></li>
                                                    <li><a href="index8.html">Home 08 - Travels</a></li>
                                                    <li><a href="index9.html">Home 09 - Fitness</a></li>
                                                </ul>
                                            </li>
                                            <li class="main-menu__nav_sub list">
                                                <a class="animation" href="javascript:void(0)">Features</a>
                                                <ul class="main-menu__dropdown">
                                                    <li class="main-menu__nav_sub">
                                                        <a href="javascript:void(0)">
                                                            Post Layout
                                                        </a>
                                                        <ul>
                                                            <li><a href="single-post1.html">Single Post 01</a></li>
                                                            <li><a href="single-post2.html">Single Post 02</a></li>
                                                            <li><a href="single-post3.html">Single Post 03</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="author.html">Author Deatils</a></li>
                                                </ul>
                                            </li>
                                            <li class="main-menu__nav_sub list">
                                                <a class="animation" href="javascript:void(0)">Categories </a>
                                                <ul class="main-menu__dropdown">
                                                    <li><a href="life-style.html">Life Style</a></li>
                                                    <li><a href="technology.html">Technology</a></li>
                                                    <li><a href="gaming.html">Gaming</a></li>
                                                    <li><a href="graphics.html">Graphics</a></li>
                                                    <li><a href="politics.html">Politics</a></li>
                                                </ul>
                                            </li>
                                            <li class="main-menu__nav_sub list">
                                                <a class="animation" href="javascript:void(0)">Pages</a>
                                                <ul class="main-menu__dropdown">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>

                                                    <li><a href="404.html">404</a></li>
                                                </ul>
                                            </li>
                                            <li class="main-menu__nav_sub list">
                                                <a class="animation" href="javascript:void(0)">Shop</a>
                                                <ul class="main-menu__dropdown">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="single-shop.html">Shop Deatils</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- end main menu -->

                                <!-- start header actions -->
                                <ul class="header-action-items">
                                    <li class="item">
                                        <a href="#template-search"><i class="fas fa-search"></i></a>
                                    </li>
                                    <li class="item">
                                        <a href="#"><i class="far fa-user"></i></a>
                                    </li>
                                    <li class="item cart-icon">
                                        <a href="javascript:void(0)" class="cart-menu-btn menu-open-btn">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="item-count">0</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="humburger layout-2 offcanvas-menu-btn menu-status-open">
                                            <span></span>
                                        </div>
                                    </li>
                                </ul>
                                <!-- end header actions -->

                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- End Header Main -->

            </header>
            <!-- end header -->

            <!-- start rt-mobile-header -->
            <div class="rt-mobile-header mobile-sticky-on">

                <div id="mobile-sticky-placeholder"></div>
                <!-- end mobile-sticky-placeholder -->

                <div class="mobile-top-bar" id="mobile-top-bar">
                    <ul class="mobile-top-list">
                        <li>
                            <span class="rt-meta">
                                <i class="far fa-calendar-alt icon"></i>
                                <span class="currentDate">DECEMBER 9, 2022</span>
                            </span>
                        </li>
                        <li>
                            <span class="rt-meta">
                                <i class="fas fa-map-marker-alt icon"></i>
                                Chicago 12, Melborne City, USA
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- end mobile-top-bar -->

                <div class="mobile-menu-bar-wrap" id="mobile-menu-bar-wrap">
                    <div class="mobile-menu-bar">
                        <div class="logo">
                            <a href="index.html">
                                <img src="media/logo/logo-dark.svg" alt="neeon" width="162" height="52">
                            </a>
                        </div>
                        <span class="sidebarBtn">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </div>
                    <div class="rt-slide-nav">
                        <div class="offscreen-navigation">
                            <nav class="menu-main-primary-container">
                                <ul class="menu">
                                    <li class="list menu-item-has-children">
                                        <a class="animation" href="javascript:void(0)">Home</a>
                                        <ul class="main-menu__dropdown sub-menu">
                                            <li><a href="index.html">Home 01 - Main</a></li>
                                            <li><a href="index2.html">Home 02 - Technology</a></li>
                                            <li><a href="index3.html">Home 03 - Gaming</a></li>
                                            <li><a href="index4.html">Home 04 - Illustration</a></li>
                                            <li><a href="index5.html">Home 05 - Newspaper</a></li>
                                            <li><a href="index6.html">Home 06 - Magazine</a></li>
                                            <li><a href="index7.html">Home 07 - Sports</a></li>
                                            <li><a href="index8.html">Home 08 - Travels</a></li>
                                            <li><a href="index9.html">Home 09 - Fitness</a></li>
                                        </ul>
                                    </li>
                                    <li class="list menu-item-has-children">
                                        <a class="animation" href="javascript:void(0)">Features</a>
                                        <ul class="main-menu__dropdown sub-menu">
                                            <li class="list menu-item-has-children">
                                                <a href="javascript:void(0)">
                                                    Post Layout
                                                </a>
                                                <ul class="main-menu__dropdown sub-menu">
                                                    <li><a href="single-post1.html">Single Post 01</a></li>
                                                    <li><a href="single-post2.html">Single Post 02</a></li>
                                                    <li><a href="single-post3.html">Single Post 03</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="author.html">Author Deatils</a></li>
                                        </ul>

                                    </li>
                                    <li class="list menu-item-has-children">
                                        <a class="animation" href="javascript:void(0)">Categories</a>
                                        <ul class="main-menu__dropdown sub-menu">
                                            <li><a href="life-style.html">Life Style</a></li>
                                            <li><a href="technology.html">Technology</a></li>
                                            <li><a href="gaming.html">Gaming</a></li>
                                            <li><a href="graphics.html">Graphics</a></li>
                                            <li><a href="politics.html">Politics</a></li>
                                        </ul>
                                    </li>
                                    <li class="list menu-item-has-children">
                                        <a class="animation" href="javascript:void(0)">Pages</a>
                                        <ul class="main-menu__dropdown sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="404.html">404</a></li>

                                        </ul>
                                    </li>
                                    <li class="list menu-item-has-children">
                                        <a class="animation" href="javascript:void(0)">Shop</a>
                                        <ul class="main-menu__dropdown sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="single-shop.html">Shop Deatils</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end rt-mobile-header -->

            <!-- Start Main -->
            <main>
                @yield('content')
            </main>
            <!-- End Main -->

            <!-- Start Footer -->
            @include('layouts.partials.footer')
            <!-- End  Footer -->

        </div>
        <!-- End main-content -->

        <!-- Start  offcanvas menu -->
        <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="right">

            <div class="offcanvas-content">
                <div class="offcanvas-header">
                    <div class="offcanvas-logo">
                        <div class="site-branding">
                            <a class="dark-logo" href="index.html"><img width="162" height="52"
                                    src="media/logo/logo-dark.svg" alt="neeon"></a>
                            <a class="light-logo" href="index.html"><img width="162" height="52"
                                    src="media/logo/logo-light.svg" alt="neeon"></a>
                        </div>
                    </div>
                    <div class="close-btn offcanvas-close">
                        <a href="javascript:void(0)">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="offcanvas-widget">
                    <h3 class="offcanvas-widget-title">About Us</h3>
                    <p>
                        The argument in favor of using filler text goes something like this: If you use arey real
                        content in the Consulting Process anytime you reachtent.
                    </p>
                </div>

                <div class="offcanvas-widget">
                    <h3 class="offcanvas-widget-title">Instagram</h3>
                    <div class="insta-gallery">
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_1.jpg" width="100" height="90" alt="gallery1">
                            </a>
                        </div>
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_2.jpg" width="100" height="90" alt="gallery2">
                            </a>
                        </div>
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_3.jpg" width="100" height="90" alt="gallery3">
                            </a>
                        </div>
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_4.jpg" width="100" height="90" alt="gallery4">
                            </a>
                        </div>
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_5.jpg" width="100" height="90" alt="gallery5">
                            </a>
                        </div>
                        <div class="galleryitem">
                            <a href="https://www.instagram.com/">
                                <img src="media/gallery/ins-gallery_6.jpg" width="100" height="90" alt="gallery6">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="offcanvas-widget footer-widget">
                    <h3 class="offcanvas-widget-title">Contact Info</h3>
                    <ul class="contact-info-list widget-list">
                        <li class="widget-list-item">
                            <i class="fas fa-map-marker-alt list-icon"></i> Chicago 12, Melborne City, USA
                        </li>
                        <li class="widget-list-item">
                            <i class="fas fa-phone-alt list-icon"></i>
                            <a href="tel:123333000999" class="widget-list-link">
                                (123) 333-000-999
                            </a>
                        </li>
                        <li class="widget-list-item">
                            <i class="fas fa-envelope list-icon"></i>
                            <a href="mailto:info@example.com" class="widget-list-link">
                                neeon@gmail.com
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-social style-2 gutter-15">
                        <li class="social-item">
                            <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="https://vimeo.com/" class="social-link vm" target="_blank">
                                <i class="fab fa-vimeo-v"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="https://www.whatsapp.com/" class="social-link wh" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End  offcanvas menu -->


        <!-- Start Search  -->
        <div id="template-search" class="template-search">
            <button type="button" class="close">×</button>
            <form class="search-form">
                <input type="search" value="" placeholder="Search" />
                <button type="submit" class="search-btn btn-ghost style-1">
                    <i class="flaticon-search"></i>
                </button>
            </form>
        </div>
        <!-- End Search -->

        <!-- start back to top -->
        <a href="javascript:void(0)" id="back-to-top">
            <i class="fas fa-angle-double-up"></i>
        </a>
        <!-- End back to top -->

    </div>
    <!-- End wrapper -->

    <!-- Dependency Scripts -->
    <script src="{{ asset('dependencies/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dependencies/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dependencies/appear/appear.min.js') }}"></script>
    <script src="{{ asset('dependencies/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('dependencies/masonry/masonry.min.js') }}"></script>
    <script src="{{ asset('dependencies/magnific-popup/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('dependencies/theia-sticky-sidebar/resize-sensor.min.js') }}"></script>
    <script src="{{ asset('dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('dependencies/validator/validator.min.js') }}"></script>
    <script src="{{ asset('dependencies/tween-max/tween-max.js') }}"></script>
    <script src="{{ asset('dependencies/wow/js/wow.min.js') }}"></script>

    <!-- custom -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>


</html>