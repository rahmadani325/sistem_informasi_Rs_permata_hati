<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">RS Permata Hati</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">nama anda</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          
          <li class="nav-header">Main Navigation</li>
          <li class="nav-item">
            <a href="{{route('uang.index') }}" class="nav-link">
              <i class="fas fa-book"></i>
              <p>Keuangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('pasien.index') }}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Data Pasien</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('pegawai.index') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Pegawai</p>
            </a>
          </li>     
          <li class="nav-item">
            <a href="{{route('gudang.index') }}" class="nav-link">
              <i class="fas fa-book"></i>
              <p>Gudang</p>
            </a>
          </li>     
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>