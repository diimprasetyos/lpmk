<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('assets/img/favicon.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SI-LPMK</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin-dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/home" class="nav-link {{ Route::currentRouteName() == 'admin-home' ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-header">PROGRAM</li>
        <li class="nav-item">
          <a href="{{ url('/admin/advokasi-kebijakan') }}" class="nav-link {{ Route::currentRouteName() == 'advokasi-kebijakan' ? 'active' : '' }}">
            <i class="fas fa-clipboard nav-icon"></i>
            <p>Advokasi Kebijakaan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/program-aspirasi') }}" class="nav-link {{ Route::currentRouteName() == 'program-aspirasi' ? 'active' : '' }}">
            <i class="fas fa-tasks nav-icon"></i>
            <p>
              Program Aspirasi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/program-perawatan') }}" class="nav-link {{ Route::currentRouteName() == 'program-perawatan' ? 'active' : '' }}">
            <i class="fas fa-tools nav-icon"></i>
            <p>
              Program Perawatan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/program-penguatan-sdm') }}"
            class="nav-link {{ Route::currentRouteName() == 'program-penguatan-sdm' ? 'active' : '' }}">
            <i class="fas fa-industry nav-icon"></i>
            <p>
              Program Penguatan SDM
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/program-penelitian') }}" class="nav-link {{ Route::currentRouteName() == 'program-penelitian' ? 'active' : '' }}">
            <i class="fas fa-file-alt nav-icon"></i>
            <p>
              Program Penelitian
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/mou') }}" class="nav-link {{ Route::currentRouteName() == 'mou' ? 'active' : '' }}">
            <i class="fas fa-handshake nav-icon"></i>
            <p>
              MOU
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/program-wisata-sb') }}" class="nav-link {{ Route::currentRouteName() == 'program-wisata-sb' ? 'active' : '' }}">
            <i class="fas fa-laptop-house nav-icon"></i>
            <p>
              Wisata/Studi Banding
            </p>
          </a>
        </li>
        <li class="nav-header">Danger Zone</li>
        <i class="fas fa-log-out nav-icon"></i>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            <i class="fas fa-door-open nav-icon"> </i>
            <p>{{ __('Logout') }}</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
