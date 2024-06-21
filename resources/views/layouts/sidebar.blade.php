 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">NAVIGATION</li>
          <li class="nav-item menu-open">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
      
          <li class="nav-item">
            <a href="{{ Route('user.index') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ Route('suratpengantar.index') }}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Surat Pengantar
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ Route('pesertaasuransi.index') }}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Peserta Asuransi Ternak
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ Route('periksakesehatan.index') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Pemeriksaan Kesehatan 
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>