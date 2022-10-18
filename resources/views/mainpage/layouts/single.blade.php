<!DOCTYPE html>

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Portal News</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- plugins -->

    <link rel="stylesheet" href="{{ asset('mainpage/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mainpage/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mainpage/plugins/slick/slick.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('mainpage/css/style.css') }}" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('mainpage/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('mainpage/images/favicon.png') }}" type="image/x-icon">

</head>

<body>
    <!-- start of navbar -->
    {{-- @include('mainpage.components.navbar') --}}

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="py-4"></div>
                <section class="section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class=" col-lg-9  mb-5 mb-lg-0">
                                @yield('articlesingle')

                            </div>
                            <div class="col-lg-9 col-md-12 mt-5">
                                <a href="/" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

    <footer class="footer">
        <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
                stroke-width="2" />
        </svg>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 text-center text-md-left mb-4">
                    <ul class="list-inline footer-list mb-0">
                        <strong>Copyright &copy; 2014-2021</strong>
                    </ul>
                </div>
                <div class="col-md-1 text-center mb-4">
                    <a class="navbar-brand order-1" href="/">
                        Portal News
                    </a>
                </div>
                <div class="col-md-5 text-md-right text-center mb-4">
                    <ul class="list-inline footer-list mb-0">

                        <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>

                        <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- JS Plugins -->
    <script src="{{ asset('mainpage/plugins/jQuery/jquery.min.js') }}"></script>

    <script src="{{ asset('mainpage/plugins/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('mainpage/plugins/slick/slick.min.js') }}"></script>

    <script src="{{ asset('mainpage/plugins/instafeed/instafeed.min.js') }}"></script>


    <!-- Main Script -->
    <script src="{{ asset('mainpage/js/script.js') }}"></script>
</body>

</html>
