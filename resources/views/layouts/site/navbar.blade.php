 <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="{{route('home')}}" class="navbar-brand"><img src="{{asset('site/images/osiss.svg')}}" width="145" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#hero-area">
                  Home
                </a>
              </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tentang<i class="lni-arrow-down"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{route('home')}}#tentang_kami">Tentang Kami</a>
                <a class="dropdown-item " href="{{route('home')}}#sekbid">Seksi Bidang</a>
                <a class="dropdown-item " href="{{route('home')}}#video_osis">Video OSIS</a>
                 <a class="dropdown-item " href="{{route('home')}}#eskul">Eskrakulikuler</a>
                 <a class="dropdown-item " href="{{route('home')}}#galeri_osis">Galeri OSIS</a> 
                
              </div>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}#saran">
                  Saran
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">
                  Blog
                </a>
              </li>
               @guest
                <li class="nav-item"><a href="{{route('voting_guest')}}" class="nav-link">Pemiltos</a></li>
              @endguest

              @auth
               <li class="nav-item"><a href="{{route('voting')}}" class="nav-link">Pemiltos</a></li>
              @endauth

              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">
                 Login
                </a>
              </li>
              @endguest
              @auth
                @if(auth()->user()->role == 'admin')
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">
                    Dashboard
                    </a>
                  </li>
                @endif
                  <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                  Logout
                </a>
               </li>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                  </form>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
        </header>