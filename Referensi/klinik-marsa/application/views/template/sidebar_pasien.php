<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url('PengajuanBooking') ?>">
        <div class="sidebar-brand-icon rotate-n">
          <i class="fas fa-heartbeat"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KLINIK MARSA</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard 
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li> -->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

    

      <!-- Nav Item - Pengajuan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('PengajuanBooking/buatPengajuan')?>">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Pengajuan</span></a>
      </li>
      <!-- Nav Item - Pengajuan -->
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('PengajuanBooking/lihatPengajuanBooking')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Lihat Pengajuan</span></a>
      </li>

      <!-- Nav Item - Agenda -->
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('PengajuanBooking/lihatAgenda')?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Agenda Saya</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>