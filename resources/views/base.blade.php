<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="Cybernetics">
    <!-- description -->
    <meta name="description" content="{{ $description }}">
    <!-- keywords -->
    <meta name="keywords" content="{{ $keywords }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/web/images/citizen/favicon.webp') }}">
    <!--<link rel="apple-touch-icon" href="{{ asset('/web/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/web/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/web/images/apple-touch-icon-114x114.png') }}">-->
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/font-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/theme-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/web/css/responsive.css') }}" />
</head>

<body>
    <!-- start navigation -->
    <nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
        <!-- start logo -->
        <div class="col-12 sidenav-header">
            <div class="logo-holder">
                <a href="index.html" class="d-inline-block logo"><img alt="Pofo" src="{{ asset('/web/images/citizen/logo.webp') }}" /></a>
            </div>
            <!-- end logo -->
            <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        @include('nav')
    </nav>
    <!-- end navigation -->
    <div class="sidebar-wrapper mobile-height">
        @yield("content")
        <!-- start feature box section  -->
        <section id="why" class="wow animate__fadeIn bg-extra-dark-gray wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                    <!-- start feature box item -->
                    <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">01.</h3>
                            <span class="text-large line-height-22 padding-20px-left padding-20px-left w-100">Creativity.<br> Discover talent.</span>
                        </div>
                        <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-sm-8 feature-box-1 md-margin-60px-bottom sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">02.</h3>
                            <span class="text-large line-height-22 padding-20px-left w-100">Technology.<br> Expert analysis.</span>
                        </div>
                        <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-sm-8 feature-box-1 wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center margin-15px-bottom alt-font">
                            <h3 class="char-value letter-spacing-minus-1 text-medium-gray font-weight-300 mb-0">03.</h3>
                            <span class="text-large line-height-22 padding-20px-left w-100">Discover.<br> Explore work.</span>
                        </div>
                        <p class="w-90 lg-w-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since. Lorem Ipsum has been the industry.</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-deep-pink margin-5px-top float-start"></div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end feature box section -->
        <!-- start footer -->
        @include('footer')
        <!-- end footer -->
    </div>
    <!-- start scroll to top -->
    <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
    <!-- end scroll to top  -->
    <!-- javascript -->
    <script type="text/javascript" src="{{ asset('/web/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/jquery.nav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/hamburger-menu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/web/js/theme-vendors.min.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('/web/js/main.js') }}"></script>
</body>

</html>