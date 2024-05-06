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

        *{
            font-family: "Shamel-Book" !important
        }

        .fa, .far, .fas {
            font-family: "Font Awesome 5 Free" !important;
        }

        .checkout-area .checkoutd-nav .nav-pills .nav-link:hover {
            border: 2px solid;
            border-radius: 3px;
            background-color: transparent;
            color: var(--secondary);
        }

        .nav-link:hover{
            color:  var(--secondary) !important
        }

        .tp-parallax-wrap, .tp-loop-wrap, .tp-mask-wrap {
            position: relative !important;
        }

        .tp-bgimg{
            height: 800px !important;
        }

        .tp-parallax-wrap{
            left: 0 !important;
            top: 80px !important;
            margin: auto;
            width: fit-content;
            text-align: center
        }

        .tp-caption {
            width: fit-content !important;
            min-width: unset !important;
            text-align: center !important
        }

        .bodyrtl .rev_slider_wrapper .tp-parallax-wrap {
            direction: rtl;
        }
        .tp-caption.BigBold-Title, .BigBold-Title{
            text-align: center !important
        }
    </style>
    @livewireStyles
    @stack('css')
</head>

<body class="bodyrtl">

    <div class="wrapper" style="display: none;">
        <!-- //header style One-->
        <header id="headerSeven" class="header-area header-seven header-desktop" style="font-weight: bolder">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-5 d-flex justify-content-start">
                        <nav class="navbar navbar-expand-lg">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            الرئيسية
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('aboutus') }}">
                                            من نحن
                                        </a>
                                    </li>
                                    @auth('cashier')
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('cashier.sale') }}">
                                                نقطة بيع
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img style="height: 100px" class="img-fluid" src="{{ asset('assets/images/data/home/logo.png') }}" alt="logo here">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 d-flex justify-content-end">
                        @unless (auth('admin')->check() || auth('cashier')->check())
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cashier.login') }}">
                                    تسجيل الدخول
                                </a>
                            </li>
                        </ul>
                        @endunless
                        @if(auth('admin')->check() || auth('cashier')->check())
                        @if(auth('cashier')->check())
                            <ul class="navbar-nav" style="margin-left: 10px">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cashier.purchases') }}">
                                        الفاتورة الحالية
                                    </a>
                                </li>
                            </ul>
                        @endif
                            <ul class="pro-header-right-options">
                                <li class="dropdown profile-tags list-icon">
                                    <button class="btn icon dropdown-toggle" type="button" id="dropdownAccountButton42"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h6 style="margin-bottom: 0;font-size: 0.875rem;font-weight:bolder">
                                            @auth('admin')
                                                {{ auth('admin')->user()->name }}
                                            @else
                                               {{ auth('cashier')->user()->name }}
                                            @endauth
                                        </h6>

                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownAccountButton42">
                                        @auth('admin')
                                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">لوحة التحكم</a>
                                            <a class="dropdown-item" href="{{ route('admin.logout') }}">خروج</a>
                                        @endauth
                                        @auth('cashier')
                                        <a class="dropdown-item" href="{{ route('cashier.profile') }}">البروفايل</a>
                                        <a class="dropdown-item" href="{{ route('cashier.logout') }}">خروج</a>
                                        @endauth
                                    </div>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <!-- //Mobile Header -->
        <header id="headerMobile" class="header-area header-mobile">

            <div class="header-maxi bg-header-bar ">
                <div class="container">

                    <div class="row align-items-center">
                        <div class="col-8 pr-0 flex-col">
                            <div class="navigation-mobile-container">
                                <a href="javascript:void(0)" class="navigation-mobile-toggler">
                                    <span class="fas fa-bars"></span>
                                </a>
                                <nav id="navigation-mobile">
                                    <div class="logout-main">
                                        <div class="welcome">
                                            @unless (auth('admin')->check() || auth('cashier')->check())
                                                <span>مرحباً</span>
                                            @endunless
                                            @auth('cashier')
                                                <span>مرحباً {{ auth('cashier')->user()->name }}</span>
                                            @endauth
                                            @auth('admin')
                                                <span>مرحباً {{ auth('admin')->user()->name }}</span>
                                            @endauth
                                        </div>
                                    </div>

                                    <a class="main-manu btn" href="{{ route('home') }}" >
                                        الرئيسية
                                    </a>
                                    <a class="main-manu btn" href="{{ route('aboutus') }}" >
                                        من نحن
                                    </a>

                                    @unless (auth('admin')->check() || auth('cashier')->check())
                                        <a href="{{ route('cashier.login') }}" class="main-manu btn ">
                                            تسجيل الدخول
                                        </a>
                                    @endunless

                                    @auth('admin')
                                        <a href="{{ route('admin.dashboard') }}" class="main-manu btn ">
                                            لوحة التحكم
                                        </a>
                                        <a href="{{ route('admin.logout') }}" class="main-manu btn ">
                                            خروج
                                        </a>
                                    @endauth


                                    @auth('cashier')
                                        <a class="main-manu btn" href="{{ route('cashier.sale') }}" >
                                            نقطة بيع
                                        </a>
                                        <a href="{{ route('cashier.profile') }}" class="main-manu btn ">
                                            البروفايل
                                        </a>
                                        <a href="{{ route('cashier.purchases') }}" class="main-manu btn">
                                            مشترياتى
                                        </a>
                                        <a href="{{ route('cashier.logout') }}" class="main-manu btn ">
                                            خروج
                                        </a>
                                    @endauth



                                </nav>
                            </div>

                        </div>
                        <div class="col-4 pr-0 flex-col justify-content-end">
                            <a href="{{ route('home') }}" class="logo">
                                <img style="height:50px" class="img-fluid" src="{{ asset('assets/images/data/home/logo.png') }}" alt="logo here">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')

        <div class="container-fluid copyright-main p-0" style="margin-top: 50px">
            <div class="copyright-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-info text-center">
                                ©&nbsp;جميع الحقوق محفوظة لموقع <span dir="ltr">2024 @ <a href="{{ route('home') }}">Easy Storage</a></span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-overlay"></div>
    <a href="#" class="btn-secondary " id="back-to-top" title="Back to top">&uarr;</a>
    <div class="notifications" id="notificationCart" style="z-index: 999999">تم إضافة المنتج فى عرية المشتريات</div>












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
