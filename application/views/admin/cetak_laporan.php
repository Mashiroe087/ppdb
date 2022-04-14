        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/default.png'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cetak Laporan</h1>
                    </div>

                    <!-- Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="card shadow mb-4 text-dark">
                                <div class="card-body" style="padding-bottom: 100px;">
                                    <div class="row">
                                        <div class="col-lg">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th>
                                                            <h5><b>Data Pendaftar</b></h5>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Siswa Yang Mendaftar</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $user ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mengundurkan Diri</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $resign ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            <h5 style="margin-top: 30px;"><b>Bid. Studi</b></h5>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>Bid. Studi Farmasi Industri</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $farmasi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bid. Studi Jasaboga</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $jasaboga ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bid. Studi Administrasi Perkantoran</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $administrasi ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bid. Studi Pemasaran</td>
                                                        <td align="center" style="padding-left: 100px;"><?= $pemasaran ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <a href="<?= base_url('laporan_pendaftaran/admin') ?>" class="btn btn-primary mt-4">Print</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->