{{-- Sekbid 9 - Teguh Iqbal Prayoga &copy; 2020 --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
     <meta charset="utf-8">
    <meta name="author" content="Osis Smkn 5 Bandung">
    <meta name="title" content="Osis Smkn 5 Bandung">
    <meta name="description" content="Portal Informasi OSIS SMKN 5 Bandung">
    <meta name="keywords" content="osissmkn5bdg, osis, osissmkn5bandung">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <link rel="icon" type="image/png" href="{{asset('site')}}/images/osis.png">
    <link rel="stylesheet" href="{{asset('site/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/jquery-ui.css')}}">

    
    <link rel="stylesheet" href="{{asset('site/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    
    @yield('header')
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
   <!-- Navbar -->
   @include('layouts/site/navbar')
   @include('sweetalert::alert')
   <!-- contect -->
   @yield('contect')
   @yield('sidebar_blog')
   <!-- footer -->
   @include('layouts/site/footer')
  </div> <!-- .site-wrap -->
  <script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('site/js/jquery-ui.js')}}"></script>
  <script src="{{asset('site/js/popper.min.js')}}"></script>
  <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
  
   <script src="{{asset('site/js/magnific-popup.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('site/js/aos.js')}}"></script>
  <script src="{{asset('site/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('site/js/jquery.sticky.js')}}"></script>
  <script src="{{asset('site/js/main.js')}}"></script>
  @stack('footer')
  </body>
</html>