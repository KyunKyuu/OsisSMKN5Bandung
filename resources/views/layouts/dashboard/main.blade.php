<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 <link rel="icon" type="image/png" href="{{asset('site')}}/images/osis.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Dashboard OSIS SMKN 5 Bandung
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard/css/paper-dashboard.css')}}" rel="stylesheet" />
 
  @stack('header')
</head>

<body class="">
    @include('layouts.dashboard.navbar')
    @include('sweetalert::alert')
    @yield('content')
    @include('layouts.dashboard.footer')

  </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('dashboard/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/js/core/popper.min.js')}}"></script>
  <script src="{{asset('dashboard/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboard/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('dashboard/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('dashboard/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('dashboard/js/paper-dashboard.min.js')}}" type="text/javascript"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  @stack('footer')
</body>

</html>