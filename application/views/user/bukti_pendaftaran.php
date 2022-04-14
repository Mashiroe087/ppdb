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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
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
                <h1 class="h3 mb-0 text-gray-800">Cetak Bukti Pendaftaran</h1>
            </div>

            <!-- Card Header - Dropdown -->
            <div class="card shadow mb-4 text-dark">
                <div class="card-body" style="padding-bottom: 300px;">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="<?= base_url('assets/img/foto/') . $profil['image']; ?>" alt="..." class="img-thumbnail" style="max-width: 200px;">
                        </div>
                        <div class="col-mt-4" style="padding-left: 15px;">
                            <table class="table table-borderless text-dark">
                                <tbody>
                                    <tr>
                                        <th scope="row"><label>No. Pendaftaran</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['no_pendaftaran']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>NISN</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['nisn']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>No. SKHUN</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['skhun']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Nama Lengkap</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['nama']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Nama Sekolah Asal</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['sekolah_asal']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Tempat Tanggal Lahir</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['tempat_lahir']; ?>, <?= $user['tgl_lahir']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Jenis Kelamin</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['jenis_kelamin']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Alamat</label></th>
                                        <td><label>:</label></td>
                                        <td style="width: 350px;"><label><?= $user['alamat']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>No Hp / Telepon</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['hp']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Email</label></th>
                                        <td><label>:</label></td>
                                        <td id="email"><label><?= $user['email']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Agama</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['agama']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Bid.Studi Keahlian Yang Dipilih</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['jurusan']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Status Dalam Keluarga</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['status']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Anak ke</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['anak_ke']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Kewarganegaraan</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['kewarganegaraan']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Nama Ayah</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['nama_ayah']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Pekerjaan Ayah</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['pekerjaan_ayah']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Nama Ibu</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['nama_ibu']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>Pekerjaan Ibu</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['pekerjaan_ibu']; ?></label></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><label>No. Hp / Telepon</label></th>
                                        <td><label>:</label></td>
                                        <td><label><?= $user['hp_ortu']; ?></label></td>
                                    </tr>
                            </table>

                            <a href="laporan_pendaftaran" class="btn btn-primary">Print</a>
                        </div>
                        <table style="margin-top: 20px; margin-right: 30px;" data-image="">
                            <tr>
                                <th><label>Lampiran</label></th>
                            </tr>
                            <tr>
                                <td><label>1. Foto 3 x 4</label></td>
                                <td><label id="scan_image" class="text-success" style="font-weight: bold; margin-left: 11px;"></label></td>
                            </tr>
                            <tr>
                                <td><label>2. Scan Ijazah</label></td>
                                <td><label id="scan_ijazah" class="text-success" style="font-weight: bold; margin-left: 11px;"></label></td>
                            </tr>
                            <tr>
                                <td><label>3. Scan SKHUN</label></td>
                                <td><label id="scan_skhun" class="text-success" style="font-weight: bold; margin-left: 11px;"></label></td>
                            </tr>
                            <tr>
                                <td><label>4. Bukti Pembayaran </label></td>
                                <td><label id="scan_pembayaran" class="text-success" style="font-weight: bold; margin-left: 10px;"></label></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->