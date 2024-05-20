<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XC26028VX1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XC26028VX1');
    </script>
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
                <a href="{{ route('index') }}" class="d-inline-block logo"><img alt="Pofo" src="{{ asset('/web/images/citizen/logo.webp') }}" /></a>
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
    @include('message')
</body>

</html>