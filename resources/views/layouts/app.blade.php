<!doctype html>
<html class="Ar" lang="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="images/miscellaneous/fav.png">
    <title>{{ config('app.name', 'Easy Storage') }}</title>

    <!-- Fontawesome CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.min.css') }}">

    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }} ">

    <style>
        .header-mobile .header-maxi .navigation-mobile-container #navigation-mobile .main-manu {
            text-align: right !important;
        }
    </style>
    @livewireStyles
    @stack('css')
</head>

<body class="bodyrtl">

    <div class="wrapper" style="display: none;">
        <!-- //header style One-->
        <header id="headerSeven" class="header-area header-seven header-desktop">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 d-flex justify-content-start">
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Home
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img class="img-fluid" src="images/logo/logo2.png" alt="logo here">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 d-flex justify-content-end">
                        <ul class="pro-header-right-options">
                            <li class="dropdown profile-tags list-icon">
                                <button class="btn icon dropdown-toggle" type="button" id="dropdownAccountButton42"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="wishlist.html">Wishlist&nbsp;(8)</a>
                                    <a class="dropdown-item" href="compare.html">Compare&nbsp;(2)</a>
                                    <a class="dropdown-item" href="#">Logout</a>

                                </div>
                            </li>
                            <li class="list-icon">
                                <a href="wishlist.html" class="btn icon">
                                    <i class="far fa-heart"></i>
                                    <span class="badge badge-secondary">0</span>
                                </a>
                            </li>

                            <li class="dropdown list-icon">
                                <button class="btn icon dropdown-toggle" type="button" id="dropdownCartButton16"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="badge badge-secondary">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCartButton16">
                                    <ul class="shopping-cart-items">
                                        <li>
                                            <div class="item-thumb">

                                                <div class="image">
                                                    <img class="img-fluid"
                                                        src="images/product_images/product_image_1.jpg"
                                                        alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h3>Modern Single Sofa</h3>
                                                <div class="item-s">1 x $45.00 <i class="fas fa-trash"></i></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item-thumb">

                                                <div class="image">
                                                    <img class="img-fluid"
                                                        src="images/product_images/product_image_3.jpg"
                                                        alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h3>Modern Wood Chair</h3>
                                                <span class="item-s">2 x $90.00 <i class="fas fa-trash"></i></span>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="item-summary">Total&nbsp;:&nbsp;<span>$145.00</span>
                                            </span>
                                        </li>
                                        <li>
                                            <a class="btn btn-link d-grid gap-2 " href="cart-page1.html">View Cart</a>
                                            <a class="btn btn-secondary d-grid gap-2  "
                                                href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>


                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- //Mobile Header -->
        <header id="headerMobile" class="header-area header-mobile">

            <div class="header-maxi bg-header-bar ">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-6 pr-0 flex-col">
                            <div class="navigation-mobile-container">
                                <a href="javascript:void(0)" class="navigation-mobile-toggler">
                                    <span class="fas fa-bars"></span>
                                </a>
                                <nav id="navigation-mobile">
                                    <div class="logout-main">
                                        <div class="welcome">
                                            <span>مرحباً</span>
                                        </div>
                                    </div>

                                    <a class="main-manu btn" href="" >
                                        الرئيسية
                                    </a>
                                    <a href="dashboard.html" class="main-manu btn ">
                                        لوحة التحكم
                                    </a>
                                    <a href="dashboard.html" class="main-manu btn ">
                                        البروفايل
                                    </a>
                                    <a href="wishlist.html" class="main-manu btn">
                                        Wishlist (8)
                                    </a>
                                    <a href="logiut.html" class="main-manu btn ">
                                        Logout
                                    </a>
                                </nav>
                            </div>
                            <a href="index.html" class="logo">
                                <img class="img-fluid" src="images/logo/logo2.png" alt="logo here">
                            </a>
                        </div>
                        <div class="col-6 pl-0">
                            <ul class="pro-header-right-options">

                                <li>
                                    <a href="wishlist.html" class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                        <span class="badge badge-secondary">0</span>
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownCartButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-shopping-bag"></i>
                                        <span class="badge badge-secondary">2</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownCartButton2">
                                        <ul class="shopping-cart-items">
                                            <li>
                                                <div class="item-thumb">

                                                    <div class="image">
                                                        <img class="img-fluid"
                                                            src="images/product_images/product_image_1.jpg"
                                                            alt="Product Image">
                                                    </div>
                                                </div>
                                                <div class="item-detail">
                                                    <h3>Modern Single Sofa</h3>
                                                    <div class="item-s">1 x $45.00 <i class="fas fa-trash"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-thumb">

                                                    <div class="image">
                                                        <img class="img-fluid"
                                                            src="images/product_images/product_image_2.jpg"
                                                            alt="Product Image">
                                                    </div>
                                                </div>
                                                <div class="item-detail">
                                                    <h3>Modern Wood Chair</h3>
                                                    <span class="item-s">2 x $90.00 <i class="fas fa-trash"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="item-summary">Total&nbsp;:&nbsp;<span>$145.00</span>
                                                </span>
                                            </li>
                                            <li>
                                                <a class="btn btn-link d-grid gap-2 " href="cart-page1.html">View
                                                    Cart</a>
                                                <a class="btn btn-secondary d-grid gap-2  "
                                                    href="checkout.html">Checkout</a>
                                            </li>
                                        </ul>


                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="container-fluid copyright-main p-0">
            <div class="copyright-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-info text-center">
                                ©&nbsp;2023 Company, Inc. <a href="privacy.html">Privacy</a>&nbsp;•&nbsp;<a
                                    href="term.html">Terms</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-overlay"></div>
    <a href="#" class="btn-secondary " id="back-to-top" title="Back to top">&uarr;</a>












    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Slider Revolution core JavaScript files -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    @livewireScripts
    @stack('js')
</body>

</html>
