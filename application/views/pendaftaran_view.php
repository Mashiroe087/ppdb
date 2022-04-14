<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('beranda'); ?>">PPDB SMK WIRAKARYA 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('beranda'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profil'); ?>">Profil Sekolah</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('pendaftaran'); ?>">Pendaftaran
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 mt-5 text-dark">

            <!-- Title -->
            <h2 class="mt-4">Pendaftaran Siswa Baru</h2>
            <hr>

            <!-- Post Content -->
            <form class="user" method="post" action="<?= base_url('pendaftaran') ?>">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleFormControlInput1">No.Pendaftaran</label>
                            <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran" readonly value="<?php echo $kodeunik ?>" placeholder="">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Tanggal Pendaftaran</label>
                            <input type="text" class="form-control" id="tgl_pendaftaran" name="tgl_pendaftaran" readonly value="<?php echo date("d-m-Y"); ?>">
                        </div>
                    </div>
                </div>
                <h5 class="font-weight-bold">SISWA / SISWI</h5>
                <div class="form-group">
                    <label for="exampleFormControlInput1">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" value="<?= set_value('nisn'); ?>">
                    <?= form_error('nisn', '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No.SKHUN/Tahun</label>
                    <input type="text" class="form-control" id="skhu" name="skhu" value="<?= set_value('skhu'); ?>">
                    <?= form_error('skhu', '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                    <?= form_error('name', '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Sekolah Asal</label>
                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?= set_value('sekolah_asal'); ?>">
                    <?= form_error('sekolah_asal', '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="exampleFormControlInput1">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-0">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= set_value('tgl_lahir'); ?>">
                            <?= form_error("tgl_lahir", '<small class="text-danger pl-0">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check" id="jenis_kelamin" name="jenis_kelamin">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-Laki">
                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                    <?= form_error("alamat", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">No.Hp / Tlp.Rumah</label>
                    <input type="text" class="form-control" id="hp" name="hp" value="<?= set_value('hp'); ?>">
                    <?= form_error("hp", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="name@example.com">
                    <?= form_error("email", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select class="form-control" id="agama" name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Buddha</option>
                        <option>Hindu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Bid. Studi Keahlian Yang Dipilih</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option>Farmasi Industri</option>
                        <option>Jasaboga</option>
                        <option>Administrasi Perkantoran</option>
                        <option>Pemasaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Status Dalam Keluarga</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?= set_value('status'); ?>">
                    <?= form_error("status", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Anak ke</label>
                    <input type="number" class="form-control" id="anak" name="anak" value="<?= set_value('anak'); ?>">
                    <?= form_error("anak", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kewarganegaraan</label>
                    <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                        <option>WNI</option>
                        <option>WNA</option>
                    </select>
                </div>
                <br>
                <h5 class="font-weight-bold">ORANG TUA</h5>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Ayah</label>
                    <input type="text" class="form-control" id="name_ayah" name="name_ayah" value="<?= set_value('name_ayah'); ?>">
                    <?= form_error("name_ayah", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pekerjaan Ayah</label>
                    <input type="text" class="form-control" id="pkr_ayah" name="pkr_ayah" value="<?= set_value('pkr_ayah'); ?>">
                    <?= form_error("pkr_ayah", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Ibu</label>
                    <input type="text" class="form-control" id="name_ibu" name="name_ibu" value="<?= set_value('name_ibu'); ?>">
                    <?= form_error("name_ibu", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pekerjaan Ibu</label>
                    <input type="text" class="form-control" id="pkr_ibu" name="pkr_ibu" value="<?= set_value('pkr_ibu'); ?>">
                    <?= form_error("pkr_ibu", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">HP/No. Telepon Orang Tua</label>
                    <input type="text" class="form-control" id="hp_ortu" name="hp_ortu" value="<?= set_value('hp_ortu'); ?>">
                    <?= form_error("hp_ortu", '<small class="text-danger pl-0">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <br>
            <br>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-2 bg-dark">
    <div class="container">
        <h4 class="m-0 text-center text-white">SMK Wirakarya 2 Ciparay</h4>
        <p class="m-0 text-center text-white">Jl. Raya Andir No. 17 Kec. Ciparay Kab. Bandung 40381</p>
        <p class="m-0 text-center text-white">Telp. (022)85966402 Fax. (022)85966402 Email : smkwirakarya2@yahoo.co.id</p>
        <hr class="m-0 bg-center bg-white">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>