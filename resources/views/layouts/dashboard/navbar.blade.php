 <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('site/images/osis.png')}}" width="40">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          OSIS SMKN 5
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{route('dashboard')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
         
         <hr>

          <li>
            <a href="{{route('sekbid')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Seksi Bidang</p>
            </a>
          </li>

          <li>
            <a href="{{route('eskul')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Eskul</p>
            </a>
          </li>

          <li>
            <a href="{{route('dashboard_blog')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Blog</p>
            </a>
          </li>

         <hr>

          <li>
            <a href="{{route('siswa')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table Siswa</p>
            </a>
          </li>
          <li>
            <a href="{{route('siswa_sudah_memilih')}}">
              <i class="nc-icon nc-tile-56"></i>
              <p> Siswa Sudah Memilih</p>
            </a>
          </li>
          <li>
            <a href="{{route('kandidat')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Kandidat Calon</p>
            </a>
          </li>
          <li>
            <a href="{{route('tanggal_voting')}}">
              <i class="nc-icon nc-time-alarm"></i>
              <p>Waktu Acara</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard OSIS</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <form action="{{route('logout')}}" method="post">
              @csrf 
              <li class="nav-item">
                <button class="nav-link btn-rotate" type="submit">LOGOUT</button>
               
              </li>
              </form>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->