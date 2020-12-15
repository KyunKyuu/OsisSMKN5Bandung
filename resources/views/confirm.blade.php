
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('site')}}/images/osis.png">

</head>
<body>
	
<div class="container">
  <div class="site-section" style="margin-bottom: 40px;">
		<br><br><br><br>
<div class="jumbotron">
  <img class="display-3" src="{{asset('site/images/undraw_welcome_cats_thqn(1).svg')}}" width="450" style="margin-left:auto;margin-right:auto;display:block;">
  <hr class="my-3">
  <h4 class="display-6"><b>Nama :</b> {{auth()->user()->name}}.</h4><br>
  <h4 class="display-6"><b>Nomer Induk Siswa :</b> {{auth()->user()->nis}}.</h4><br>
  <h4 class="display-6"><b>Kelas :</b> {{auth()->user()->kelas}}.</h4>
  <br>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="{{route('voting')}}" role="button">Ya, ini Saya</a> &nbsp;&nbsp;
     <a  class="btn btn-danger btn-lg" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">					  
              Bukan, ini bukan Saya
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    
  </p>
</div>
</div>

</div>
<script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('site/js/jquery-ui.js')}}"></script>
  <script src="{{asset('site/js/popper.min.js')}}"></script>
  <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
</body>
</html>