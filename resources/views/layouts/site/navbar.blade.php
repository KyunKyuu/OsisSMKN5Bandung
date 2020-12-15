<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
            
          <div class="col-6 col-md-3 col-xl-4  d-block">

            <h5 class="mb-0 site-logo"><a href="{{route('home')}}" class="text-black h5 mb-0">
              <img src="{{asset('site/images/osiss.svg')}}" width="190" />
              
          </div>

          <div class="col-12 col-md-9 col-xl-8 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#" class="nav-link">Tentang</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="{{route('home')}}#tentang-kami" class="nav-link">Tentang Kami</a></li>
                    <li><a href="{{route('home')}}#sekbid" class="nav-link">Sekbid Osis</a></li>
                    <li><a href="{{route('home')}}#vidio-osis" class="nav-link">Vidio OSIS</a></li>
                    <li><a href="{{route('home')}}#eskul" class="nav-link">Ekstrakulikuler</a></li>
                    <li><a href="{{route('home')}}#blog" class="nav-link">Kegiatan Osis</a></li>
                    <li><a href="{{route('home')}}#kirim-saran" class="nav-link">Saran Untuk Kami</a></li>
                  </ul>
                </li>
                
                 <li class="has-children">
                  <a href="#" class="nav-link">Pemiltos</a>
                    <ul class="dropdown arrow-top">
                      @guest
                       <li><a href="{{route('voting_guest')}}" class="nav-link">Lihat Kandidat</a></li>
                      @endguest

                      @auth
                       <li><a href="{{route('voting')}}" class="nav-link">Lihat Kandidat</a></li>
                      @endauth
                      <li><a href="{{route('jumlah_voting')}}" class="nav-link">Jumlah Voting</a></li>
                    </ul>
                 </li>
                 <li><a href="{{route('blog')}}" class="nav-link">Blog Kegiatan</a></li>
                 
              @guest
                <li><a href="{{route('login')}}" class="btn btn-primary mr-2 mb-2  nav-link" style="color:white;"><i class="icon-hand-grab-o">  Login to Vote</i></a></li>
              @endguest
              @auth
                @if(auth()->user()->role == 'siswa')
                <li><a href="{{route('voting')}}" class="btn btn-primary mr-2 mb-2  nav-link" style="color:white;">Voting Now</a></li>
                @elseif(auth()->user()->role == 'admin')
                <li><a href="{{route('dashboard')}}" class="btn btn-primary mr-2 mb-2  nav-link" style="color:white;">Dashboard</a></li>
                @endif
                <li><a style="color: white;" class="btn btn-danger mr-2 mb-2  nav-link" href="{{ route('logout') }}"
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
            </nav>
          </div>


          <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>