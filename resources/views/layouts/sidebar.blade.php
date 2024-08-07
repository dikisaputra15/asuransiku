 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Asuransi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Hi, {{auth()->user()->name}}</li>
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

    <?php if(auth()->user()->roles == 'admin'){ ?>
          <li class="nav-item">
            <a href="{{ Route('user.index') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Management User
              </p>
            </a>
          </li>

    <?php } ?>

    <?php if(auth()->user()->roles == 'peternak'){ ?>
          <li class="nav-item">
            <a href="{{ Route('pesertaasuransi.index') }}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Pengajuan Asuransi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/informasi" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Informasi Pengajuan
              </p>
            </a>
          </li>
    <?php } ?>

    <?php if(auth()->user()->roles == 'staff'){ ?>
          <li class="nav-item">
            <a href="{{ Route('periksakesehatan.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pemeriksaan Kesehatan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/home/baperiksa" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan Pemeriksaan
              </p>
            </a>
          </li>
    <?php } ?>

    <?php if(auth()->user()->roles == 'kepala'){ ?>
        <li class="nav-item">
            <a href="{{ Route('pesertaasuransi.index') }}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Validasi Pengajuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/home/permohonan" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Laporan Pengajuan
              </p>
            </a>
          </li>
    <?php } ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
