<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('site/fonts/icomoon/style.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('auth/css/style.css')}}">
</head>
<body>

    
        @include('sweetalert::alert')
    	@yield('content')

     <!-- JS -->
    <script src="{{asset('auth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('auth/js/main.js')}}"></script>
</body>
</html>