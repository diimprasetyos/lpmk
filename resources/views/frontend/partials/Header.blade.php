<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="/kecamatan" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/favicon.png" alt="">
      <h1 style="margin-top: 10px;">LPMK Tanjungrejo<span>.</span></h1>
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="/kecamatan">Beranda</a></li>
        <li class="dropdown"><a href="/profile"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/profile/visi-misi">Visi Misi</a></li>
            <li><a href="/profile/tupoksi">Tupoksi</a></li>
            <li><a href="/profile/struktur-organisasi">Struktur Organisasi</a></li>
            <li><a href="/profile/kondisi-geografi">Kondisi Geografi</a></li>
            <li class="dropdown"><a href="#"><span>Data Wilayah</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="/profile/kondisi-demografi">Kondisi Demografi</a></li>
                <li><a href="/profile/organisasi-kemasyarakatan">Organisasi Kemasyarakatan</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/profile">Profil LPMK</a></li>
            <li class="dropdown"><a href="#"><span>Aplikasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="https://lpse.malangkota.go.id/">Aplikasi Rencana Umum Pengadaan</a></li>
                <li><a href="http://simbada.malangkota.go.id/">Asset Daerah</a></li>
                <li><a href="http://smep.malangkota.go.id/">Evaluasi Pembangunan Daerah</a></li>
                <li><a href="http://simrenda.malangkota.go.id/">Musrenbang</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a href="/layanan/informasi-layanan"><span>Layanan Publik</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="/layanan/informasi-layanan">Layanan Kelurahan</a></li>
            <li><a href="https://sambat.malangkota.go.id/">Pengaduan Online</a></li>
            <li><a href="/layanan/staff">Pejabat & Staff</a></li>
          </ul>
        </li>
        <li><a href="/berita">Berita</a></li>
        <li><a href="/layanan/cek-bantuan">Kontak & Pengaduan</a></li>
        @guest
          @if (Route::has('login'))
            <a href="/login" class="ml-4 btn-login-custom">Login</a>
          @endif
          @if (Route::has('register'))
            <a href="/register" class="ml-4 btn-register-custom">Register</a>
          @endif
        @else
          <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/home">Dashboard</a></li>
              <li><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          @endguest

      </ul>
    </nav><!-- .navbar -->
  </div>
</header>
