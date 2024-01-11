<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo Section -->
      <div class="logo">
          <a href="/home">
              <img src="assets/img/logo.png" alt="Logo Poliklinik POLIJE" class="img-fluid">
          </a>
      </div>

      <!-- Navigation Section -->
      <nav id="navbar" class="navbar">
          <ul>
              <li><a href="#hero" class="nav-link scrollto active">Beranda</a></li>
              <li><a href="#features" class="nav-link scrollto">Tentang</a></li>
              <li><a href="#details" class="nav-link scrollto">Layanan</a></li>
              <li><a href="#contact" class="nav-link scrollto">Kontak</a></li>

              <!-- User Authentication Dropdown -->
              <!-- User Authentication Dropdown -->
              @auth
              <li class="dropdown ms-3">
                <a href="#" class="text-decoration-none dropdown-toggle d-flex align-items-center" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="assets/img/user1.jpg" alt="Avatar Pengguna" class="rounded-circle me-2" style="width: 35px; height: 35px;"> <!-- Anda bisa mengganti dengan avatar pengguna -->
                  <span>{{ auth()->user()->name }}</span> <!-- Nama Pengguna -->
              </a>
              
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                  @if (auth()->user()->roles === 'admin')
                  <li><a href="/dashboard" class="dropdown-item"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                  @else
                  <!-- Notifikasi -->
                  <li><a href="/notifikasi" class="dropdown-item"><i class="fas fa-bell"></i> Notifikasi</a></li>
                  <li><a href="/antrian" class="dropdown-item"><i class="fas fa-list"></i> Menu Antrian</a></li>
                  <li><a href="/layanan" class="dropdown-item"><i class="fas fa-tools"></i> Layanan</a></li>
                  @endif
                  <!-- Pisahkan dengan garis jika diperlukan -->
                  <div class="dropdown-divider"></div>
                  <!-- Logout -->
                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">
                          <i class="fas fa-sign-out-alt"></i> Keluar
                      </button>
                  </form>
              </ul>
              </li>
              @endauth

          </ul>
          <!-- Mobile Navigation Toggle Button -->
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->
