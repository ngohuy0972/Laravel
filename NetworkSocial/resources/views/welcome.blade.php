<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="frontend/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Network Social</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="frontend/css/custom-style.css">
        <link rel="stylesheet" href="frontend/css/linearicons.css">
        <link rel="stylesheet" href="frontend/css/owl.carousel.css">
        <link rel="stylesheet" href="frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="frontend/css/nice-select.css">
        <link rel="stylesheet" href="frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="frontend/css/bootstrap.css">
        <link rel="stylesheet" href="frontend/css/main.css">
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            
        <div class="main-wrapper-first">
            <header>
                <div class="container">
                    <div class="header-wrap">
                        <div class="header-top d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="frontend/img/favicon.ico" alt="logo" style="width: 50px; margin-top: 50px;"></a>
                            </div>
                            <div class="main-menubar d-flex align-items-center">
                                <nav class="hide">
                                    <a href="index.html">Home</a>
                                    <a href="generic.html">Notification</a>
                                    <a href="elements.html">Profile</a>
                                </nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="banner-area">
                <div class="container">
                    <div class="row justify-content-center height align-items-center">
                        <div class="col-lg-8">
                            <div class="banner-content text-center">
                                <span class="text-white top text-uppercase">Enjoying Amazing Experience</span>
                                <h1 class="text-white text-uppercase">Join Now</h1>
                                <a href="{{route('login')}}" class="primary-btn d-inline-flex align-items-center"><span class="mr-10">Get Started</span><span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('elements.footer')
        <script src="frontend/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="frontend/js/vendor/bootstrap.min.js"></script>
        <script src="frontend/js/jquery.ajaxchimp.min.js"></script>
        <script src="frontend/js/owl.carousel.min.js"></script>
        <script src="frontend/js/jquery.nice-select.min.js"></script>
        <script src="frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="frontend/js/main.js"></script>
    </body>        
</html>
