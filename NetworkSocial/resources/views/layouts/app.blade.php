<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
      <link rel="stylesheet" href="frontend/css/AdminLTE.min.css">
      {{-- <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
      <link rel="stylesheet" href="frontend/css/ionicons.min.css">
      <link rel="stylesheet" href="frontend/css/AdminLTE.min.css">
      <link rel="stylesheet" href="frontend/css/skins/_all-skins.min.css"> --}}
</head>
<body>
  <div class="main-wrapper-first">
  @include('elements.header');
  @yield('login')
  @yield('register')
  @yield('home')
  @yield('profile')
  @include('elements.footer')
  </div>

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
