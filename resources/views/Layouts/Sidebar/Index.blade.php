<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="/" class="brand-link d-flex flex-column align-items-center nav nav-pills nav-sidebar">
      <img src="{{ asset('Logo/Logo-TELKOM.png') }}" alt="Logo" class="w-50">
      <p class="text-sm nav-header">Sistem Informasi Manajemen Aset</p>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-header">Internal</li>
            <li class="nav-item">
               <a href="{{ route('home') }}"
                  class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Dashboard
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('users.index') }}"
                  class="nav-link {{ Route::currentRouteName() === 'users.index' ? 'active' : ' '}}">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>
                     Pengguna
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{ route('tower.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-broadcast-tower"></i>
                  <p>
                     Data Tower
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-satellite-dish"></i>
                  <p>
                     Aset Tower
                  </p>
               </a>
            </li>
            <li class="nav-header">Eksternal</li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                     Maintenance
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-bell"></i>
                  <p>
                     Kelola Notifikasi
                     <span class="badge badge-info right">2</span>
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users-cog"></i>
                  <p>
                     Data Team
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-envelope-open-text"></i>
                  <p>
                     Data Laporan
                     <i class="fas fa-angle-left right"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Laporan Maintenance</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Laporan Sparepart</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-inbox"></i>
                        <p>Request Maintenance</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wifi"></i>
                        <p>Laporan Lokasi Tower</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-people-arrows"></i>
                        <p>Laporan Data Team</p>
                     </a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>