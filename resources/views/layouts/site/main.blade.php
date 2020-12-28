{{-- Sekbid 9 - Teguh Iqbal Prayoga &copy; 2020 --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
     <link rel="icon" href="{{asset('site/images/osis.png')}}" type="image/png" > 
    <link rel="stylesheet" href="{{asset('site')}}/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('site')}}/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('site')}}/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{asset('site')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('site')}}/css/owl.theme.css">
    
    <link rel="stylesheet" href="{{asset('site')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('site')}}/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('site')}}/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('site')}}/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{asset('site')}}/css/responsive.css">
    @yield('header')
  </head>
  <body>
   
   <!-- Navbar -->
   @include('layouts/site/navbar')
   @include('sweetalert::alert')
   <!-- contect -->
   @yield('contect')

   <!-- footer -->
   @include('layouts/site/footer')
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('site')}}/js/jquery-min.js"></script>
    <script src="{{asset('site')}}/js/popper.min.js"></script>
    <script src="{{asset('site')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('site')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('site')}}/js/jquery.mixitup.js"></script>
    <script src="{{asset('site')}}/js/wow.js"></script>
    <script src="{{asset('site')}}/js/jquery.nav.js"></script>
    <script src="{{asset('site')}}/js/scrolling-nav.js"></script>
    <script src="{{asset('site')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('site')}}/js/jquery.counterup.min.js"></script>  
    <script src="{{asset('site')}}/js/nivo-lightbox.js"></script>     
    <script src="{{asset('site')}}/js/jquery.magnific-popup.min.js"></script>     
    <script src="{{asset('site')}}/js/waypoints.min.js"></script>   
    <script src="{{asset('site')}}/js/jquery.slicknav.js"></script>
    <script src="{{asset('site')}}/js/main.js"></script>
    @stack('footer')

  </body>
</html>
