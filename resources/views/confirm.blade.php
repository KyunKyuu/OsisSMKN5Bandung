<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('site')}}/css/bootstrap.min.css" >

    <title>Konfirmasi Akun</title>
  </head>
  <body>
    <br><br><br>
<div class="container">
  <div class="skill-area section-padding" >
		<br><br>
<div class="jumbotron">
  <img class="display-3" src="{{asset('site/images/undraw_welcome_cats_thqn(1).svg')}}" width="450" style="margin-left:auto;margin-right:auto;display:block;">
  <hr class="my-3">
  <h4 style="font-size: 25px;"  class="display-6"><b>Nama :</b> {{auth()->user()->name}}</h4><br>
  <h4 style="font-size: 25px;" class="display-6"><b>Nomer Induk Siswa :</b> {{auth()->user()->nis}}</h4><br>
  <h4 style="font-size: 25px;" class="display-6"><b>Kelas :</b> {{auth()->user()->kelas}}</h4>
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
  <script src="{{asset('site')}}/js/bootstrap.min.js"></script>
</body>
</html>