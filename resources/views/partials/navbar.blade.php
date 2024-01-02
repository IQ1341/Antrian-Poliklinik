<!-- ======= Header ======= -->
<header id="header" class="fixed-top  header-transparent ">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <!-- <h1><a href="index.html">Poliklinik POLIJE</a></h1> -->

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/home"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="#features">Tentang</a></li>
        <li><a class="nav-link scrollto" href="#details">Layanan</a></li>
        <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
     

      @auth
        <div class="dropdown ms-3">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
              @if (auth()->user()->roles === 'admin')
                <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
              @else
                <li><a class="dropdown-item" href="/antrian">Menu Antrian </a></li>
              @endif    
              
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <span class="align-middle">Keluar</span>
                  </button>
                </form>

            </ul>
        </div>
      @else
        <a href="/login" class="getstarted scrollto">Masuk</a>
      @endauth
    </ul>
    <i class="bi bi-list mobile-nav-toggle "></i>
  </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->