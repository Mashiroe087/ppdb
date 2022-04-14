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
                <h1 class="h3 mb-0 text-gray-800">Pengumuman Siswa</h1>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>

            <!-- Card Body -->
            <div class="card shadow mb-4 text-dark">
                <div class="card-body" style="padding-bottom: 100px;">
                    <div class="row">
                        <div class="col-lg">
                            <div class="col-lg-5" style="float: right; padding-right: 0px;">
                                <form action="<?= base_url('pengumuman_siswa/search'); ?>" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword" autocomplete="off" placeholder aria-controls="dataTable">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover text-dark">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <!-- <th scope="col">No.</th> -->
                                            <th scope="col">No. Pendaftaran</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Sekolah Asal</th>
                                            <th scope="col">Bid. Studi Dituju</th>
                                            <th scope="col">Tanggal Pendaftaran</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($siswa->result_array() as $s) :
                                            if (count($s) <= 4) {
                                                $color = "table-danger";
                                            } else {
                                                $color = "table-success";
                                            }
                                        ?> <tr class="<?= $color; ?>">
                                                <!-- <td><?= ++$page; ?></td> -->
                                                <td><?= $s['no_pendaftaran']; ?></td>
                                                <td><?= $s['nama']; ?></td>
                                                <td><?= $s['sekolah_asal']; ?></td>
                                                <td><?= $s['jurusan']; ?></td>
                                                <td><?= $s['tgl_pendaftaran']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col">
                                        <!--Tampilkan pagination-->
                                        <?php echo $pagination; ?>
                                    </div>

                                </div>
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