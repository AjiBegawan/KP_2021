<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDokter" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user-nurse"></i>
          <span>Kelola Dokter</span>
        </a>
        <div id="collapseDokter" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('KelolaDokter/tambah_dokter'); ?>">Tambah Dokter</a>
            <a class="collapse-item" href="<?php echo site_url('KelolaDokter/lihat_dokter'); ?>">Data Dokter</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePoli" aria-expanded="true" aria-controls="collapsePoli">
          <i class="fas fa-fw fa-home"></i>
          <span>Kelola Poli</span>
        </a>
        <div id="collapsePoli" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('Poli/tambah_poli'); ?>">Tambah Poli</a>
            <a class="collapse-item" href="<?php echo site_url('Poli/lihat_poli'); ?>">Data Poli</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="far fa-fw fa-calendar-alt"></i>
          <span>Kelola Jadwal</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('KelolaJadwal/tambah_jadwal'); ?>">Tambah Jadwal</a>
            <a class="collapse-item" href="<?php echo site_url('KelolaJadwal/lihat_jadwal'); ?>">Data Jadwal</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebooking" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="far fa-fw fa-calendar-check"></i>
          <span>Kelola Booking</span>
        </a>
        <div id="collapsebooking" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('KelolaBooking/data_persetujuan'); ?>">Persetujuan</a>
            <a class="collapse-item" href="<?php echo site_url('KelolaBooking/lihat_data_disetujui'); ?>">Booking disetujui</a>
            <a class="collapse-item" href="<?php echo site_url('KelolaBooking/lihat_data_ditolak'); ?>">Booking tidak disetujui</a>
            <!--<a class="collapse-item" href="utilities-other.html">Other</a> -->
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseberita" aria-expanded="true" aria-controls="collapseTwo">
          <i class="far fa-fw fa-newspaper"></i>
          <span>Kelola Berita</span>
        </a>
        <div id="collapseberita" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('KelolaBerita/tambah_berita');?>">Tambah Berita</a>
            <a class="collapse-item" href="<?php echo site_url('KelolaBerita/lihat_berita');?>">Daftar Berita</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->