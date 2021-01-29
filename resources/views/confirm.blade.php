<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('site')}}/css/bootstrap.min.css" >
     <link rel="stylesheet" href="{{asset('site')}}/css/main.css" >
    <title>Konfirmasi Akun</title>
  </head>
  <body>
    <br><br><br>
<div class="container">
  <div class="skill-area section-padding" >
		
<div class="jumbotron mt-5">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
  <img class="display-3 " src="{{asset('site/images/undraw_welcome_cats_thqn(1).svg')}}"  style="margin-left:auto;margin-right:auto;display: block;width: 70%;">
  <hr class="my-3">
  <h5 style="color: black;" class="display-6"><b>Nama :</b> {{auth()->user()->name}}</h5><br>
  <h5 style="color: black;" class="display-6"><b>Nomer Induk Siswa :</b> {{auth()->user()->nis}}</h5><br>

  <h5 style="color: black;" class="display-6"><b>Kelas :</b> {{auth()->user()->kelas}}</h5>
  <br>
  <p class="lead">
    <a class="btn btn-common"  href="{{route('voting')}}" role="button">Ya, ini Saya</a> &nbsp;&nbsp;
     <a  class="btn btn-common" style="background-color: red;" href="{{ route('logout') }}"
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
</div>

</div>
  <script src="{{asset('site')}}/js/bootstrap.min.js"></script>
</body>
</html>