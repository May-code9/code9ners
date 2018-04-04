<!DOCTYPE html>
<html>
<head>
  <title>Johnnygo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <script src="cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="wordpress_62555/handyman/wp-content/uploads/2017/05/cropped-fav-78x78.png" sizes="32x32" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/may.css">
  @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @endif
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};
  </script>
</head>
<body>
  <div class="page">
    @if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')
    <header class="page-header isStuck" id="stuck_container" style="top: 0px; visibility: visible; position: fixed; width: 100%; margin-top: 0px;">
      <div class="container color_white">
        <div class="logo"><a href="{{ route('public_home') }}"><img src="assets/images/logo.png"></a></div>
        @if(Route::currentRouteName() == 'login')
        <a class="btn btn_sm btn_default" href="{{ route('register') }}">Register</a>
        @else
        <a class="btn btn_sm btn_default" href="{{ route('login') }}">Login</a>
        @endif
      </a>
    @else
    <header class="page-header" id="stuck_container">
      <div class="container color_white">
        <div class="logo"><a href="{{ route('public_home') }}"><img src="assets/images/logo.png"></a></div>
        <nav>
          <ul class="menu menu_header" id="menu">
            <li class="menu__item"><a href="#demos">Demos</a></li>
            <li class="menu__item"><a href="#headers">Headers</a></li>
            <li class="menu__item"><a href="#footers">Footers</a></li>
            <li class="menu__item"><a href="#blog">Blog</a></li>
            <li class="menu__item"><a href="#shop">Shop</a></li>
          </ul>
        </nav>
        @guest
        <a class="btn btn_sm btn_default" href="{{ route('login') }}">Login | Register</a>
        @else
        <a class="btn btn_sm btn_default" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ Auth::user()->name }} | Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        @endguest
        @endif

      </div>
    </header>

    @yield('content')

    <footer class="page-footer bg_secondary" style="background-color: #487095;">
      <div class="container text_center color_white">
        <div class="title-sep title-sep_white"></div>
        <h2>Become the Owner of</h2>
        <h2 class="h1">JohnnyGo Multi-Skin Theme!</h2><a class="btn btn_md btn_primary" target="blank" href="https://www.templatemonster.com/cart.php?add=62555&price_variant=regular">Purchase now!</a>
        <div class="copyright color_white">&#169; <span id="copyright-year"></span> Jetimpex, Inc and Web Templates Ltd. All Rights Reserved.</div>
      </div>
    </footer>
  </div>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/tmstickup.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
