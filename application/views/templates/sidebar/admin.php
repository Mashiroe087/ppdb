<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="<?= base_url('assets/img/wirakarya.png'); ?>" class="img-fluid">
                </div>
                <div class="sidebar-brand-text mx-2 mt-2">PPDB SMK Wirakarya 2</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3 my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('kelola_siswa') ?>">
                    <i class="fas fa-tasks"></i>
                    <span>Kelola Siswa</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('pengumuman_siswa') ?>">
                    <i class="fas fa-bullhorn"></i>
                    <span>Pengumuman Siswa</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('laporan') ?>">
                    <i class="fas fa-print"></i>
                    <span>Cetak Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->