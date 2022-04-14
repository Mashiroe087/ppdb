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
                <h1 class="h3 mb-0 text-gray-800">Kelola Siswa</h1>
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
                            <div class="row">
                                <div class="col" style="float: left;">
                                    <a href="<?= base_url('Export/export_file') ?>" class="btn btn-primary">Export Excel</a>
                                </div>
                                <div class="col-lg-5" style="float: right; padding-right: 12px;">
                                    <form action="<?= base_url('Kelola_siswa'); ?>" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword" autocomplete="off" placeholder aria-controls="dataTable">
                                            <div class="input-group-append">
                                                <input class="btn btn-primary" type="submit" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover text-dark">
                                    <thead class="thead-dark text-center">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">No. Pendaftaran</th>
                                            <th scope="col">Nama Lengkap</th>
                                            <th scope="col">Sekolah Asal</th>
                                            <th scope="col">Bid. Studi Dituju</th>
                                            <th scope="col">Tanggal Pendaftaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php foreach ($siswa->result_array() as $s) :
                                            if ($s['is_active'] == 0) {
                                                $color = "table-danger";
                                            } else {
                                                $color = "";
                                            }
                                        ?> <tr class="<?= $color; ?>">
                                                <td><?= ++$page; ?></td>
                                                <td><?= $s['no_pendaftaran']; ?></td>
                                                <td><?= $s['nama']; ?></td>
                                                <td><?= $s['sekolah_asal']; ?></td>
                                                <td><?= $s['jurusan']; ?></td>
                                                <td><?= $s['tgl_pendaftaran']; ?></td>
                                                <td><a href="<?= base_url(); ?>/kelola_siswa/detail/<?= $s['no_pendaftaran'] ?>" id=" detail" class="badge badge-info detailSiswa" style="width: 45px;" data-toggle="modal" data-target="#modalDetail" data-no_pendaftaran="<?= $s['no_pendaftaran']; ?>">Detail</a>
                                                    <a href="<?= base_url(); ?>/kelola_siswa/edit/<?= $s['no_pendaftaran'] ?>" id=" detail" class="badge badge-success editSiswa" style="width: 45px;" data-toggle="modal" data-target="#modalEdit" data-no_pendaftaran="<?= $s['no_pendaftaran']; ?>">Edit</a>
                                                    <a href="<?= base_url(); ?>/kelola_siswa/delete/<?= $s['email']; ?>" class="badge badge-danger" onclick="return confirm('yakin');" style="width: 45px;">Delete</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <h6>Result : <?= $total; ?></h6>
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

                <!-- Modal Detail -->
                <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content modal-xl-5">
                            <div class="modal-header bg-gradient-primary text-light">
                                <h5 class="modal-title" id="judulModal">Detail Siswa</h5>
                            </div>
                            <div class="modal-body">
                                <?= form_open_multipart(base_url('kelola_siswa/detailSiswa')); ?>
                                <div class="row">
                                    <div class="col-md-auto">
                                        <img id="foto" src="<?= base_url('assets/img/default.png'); ?>" class="img-thumbnail" style="width: 170px;">
                                    </div>
                                    <div class="col-mt-4" style="padding-left: 1px;">
                                        <table class="table table-borderless text-dark">
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><label>No. Pendaftaran</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="no_pendaftaran"></label">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>NISN</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="nisn"></label">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>No. SKHUN</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="skhun"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Nama Lengkap</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="nama"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Nama Sekolah Asal</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="sekolah_asal"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Tempat Tanggal Lahir</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="tempat_lahir"></label>, <label id="tgl_lahir"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Jenis Kelamin</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="jenis_kelamin"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Alamat</label></th>
                                                    <td><label>:</label></td>
                                                    <td style="width: 300px;"><label id="alamat"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>No Hp / Telepon</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="hp"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Email</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="email"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Agama</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="agama"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Bid.Studi Keahlian</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="jurusan"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Status Dalam Keluarga</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="status"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Anak ke</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="anak_ke"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Kewarganegaraan</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="kewarganegaraan"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Nama Ayah</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="nama_ayah"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Pekerjaan Ayah</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="pekerjaan_ayah"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Nama Ibu</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="nama_ibu"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>Pekerjaan Ibu</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="pekerjaan_ibu"></label></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><label>No. Hp / Telepon</label></th>
                                                    <td><label>:</label></td>
                                                    <td><label id="hp_ortu"></label></td>
                                                </tr>
                                                <tr>
                                                    <th><label>Dokumen Yang Dilampirkan</label></th>
                                                </tr>
                                                <tr>
                                                    <td><label>Foto</label></td>
                                                    <td><label>:</label></td>
                                                    <td><label id="gambar"></label></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Scan Ijazah</label></td>
                                                    <td><label>:</label></td>
                                                    <td><label id="s_ijazah"></label></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Scan SKHUN</label></td>
                                                    <td><label>:</label></td>
                                                    <td><label id="s_skhun"></label></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Bukti Pembayaran</label></td>
                                                    <td><label>:</label></td>
                                                    <td><label id="foto_pembayaran"></label></td>
                                                </tr>
                                        </table>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Update -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-gradient-primary text-light">
                                <h5 class="modal-title" id="judulModal">Edit Data Siswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('kelola_siswa/edit'); ?>" method="POST">
                                    <?= form_open_multipart('kelola_siswa/edit'); ?>
                                    <div class="col-lg-mt-4 text-dark">
                                        <div class="form-group">
                                            <label for="no_pendaftaran" class="font-weight-bold">No. Pendaftaran</label>
                                            <input type="text" class="form-control" id="no_pendaftaran1" name="no_pendaftaran1" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">NISN</label>
                                            <input type="text" class="form-control" id="nisn1" name="nisn1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">No. SKHUN</label>
                                            <input type="text" class="form-control" id="skhun1" name="skhun1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama1" name="nama1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Nama Sekolah Asal</label>
                                            <input type="text" class="form-control" id="sekolah_asal1" name="sekolah_asal1">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="font-weight-bold">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempat_lahir1" name="tempat_lahir1">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1" class="font-weight-bold">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" id="tgl_lahir1" name="tgl_lahir1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="font-weight-bold">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin1" name="jenis_kelamin1">
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Alamat</label>
                                            <input type="text" class="form-control" id="alamat1" name="alamat1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">No.HP / Telepon</label>
                                            <input type="text" class="form-control" id="hp1" name="hp1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Email</label>
                                            <input type="text" class="form-control" id="email1" name="email1" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="font-weight-bold">Agama</label>
                                            <select class="form-control" id="agama1" name="agama1">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katolik</option>
                                                <option>Buddha</option>
                                                <option>Hindu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="font-weight-bold">Bid. Studi Keahlian</label>
                                            <select class="form-control" id="jurusan1" name="jurusan1">
                                                <option>Farmasi Industri</option>
                                                <option>Jasaboga</option>
                                                <option>Administrasi Perkantoran</option>
                                                <option>Pemasaran</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Status Dalam Keluarga</label>
                                            <input type="text" class="form-control" id="status1" name="status1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Anak ke</label>
                                            <input type="text" class="form-control" id="anak_ke1" name="anak_ke1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" class="font-weight-bold">Kewarganegaraan</label>
                                            <select class="form-control" id="kewarganegaraan1" name="kewarganegaraan1">
                                                <option>WNI</option>
                                                <option>WNA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Nama Ayah</label>
                                            <input type="text" class="form-control" id="nama_ayah1" name="nama_ayah1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" id="pekerjaan_ayah1" name="pekerjaan_ayah1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Nama Ibu</label>
                                            <input type="text" class="form-control" id="nama_ibu1" name="nama_ibu1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" id="pekerjaan_ibu1" name="pekerjaan_ibu1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">No. Hp / Telepon</label>
                                            <input type="text" class="form-control" id="hp_ortu1" name="hp_ortu1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1" class="font-weight-bold">Centang jika sudah mengirimkan file</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="is_approval" name="is_approval">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Izinkan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" style="width: 70px;">Edit</button>
                            </div>
                            </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->