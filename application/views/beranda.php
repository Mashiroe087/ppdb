<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('beranda'); ?>">PPDB SMK WIRAKARYA 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('beranda'); ?>">Beranda
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('profil'); ?>">Profil Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pendaftaran'); ?>">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-primary py-5 mb-5" style="background-image: url('assets/img/Gedung1.png'); height:500px">
    <div class="container h-100">
        <div class="row h-100 align-items-center" style="margin-top: 150px;">
            <div class="col-lg-10">
                <h1 class="display-4 text-white mt-5 mb-2 text-white">PPDB SMK Wirakarya 2</h1>
                <h4 class="lead mb-5 text-warning"><b> SIAP KERJA - CERDAS - MANDIRI - BERDAYA SAING </b></h4>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-md-8 mb-5 text-justify">
            <h2>Menerima Siswa Baru Tahun 2020-2021</h2>
            <hr>
            <p>Salah satu SMK di Bandung yang berakreditasi "A" yang mencetak siswa yang mampu bersaing dan menciptakan siswa yang cerdas, mandiri dan mampu bekerjasama dalam segi Ekstrakuler dan masyarakat </p>
            <p>SMK Wirakarya 2 mempersiapkan Sumber Daya Manusia untuk menghadapi Era Industrial 4.0, Masyarakat Ekonomi Asia (MEA). Siap menjembatani lulusan dalam peningkatan Sumber Daya Manusia melalui program Magang ke Jepang di LPK Wirakarya Training Centre juga program kerja ke Korea di LPK 'Y' Seoulina</p>
            <p>Tata cara pendaftaran SMK Wirakarya 2 </p>
            <img src="<?= base_url('assets/img/urutan_pendaftaran.png'); ?>" class="img-fluid">
            <a class="btn btn-primary btn-lg mt-3" href="<?= base_url('pendaftaran'); ?>">Daftar Sekarang &raquo;</a>
        </div>
        <div class="col-md-4 mb-5">
            <h2>Contact Us</h2>
            <hr>
            <address>
                <strong>Media Social</strong>
                <br><i class="fab fa-facebook-square"> <a href="https://www.facebook.com/infoppdbsmkwirakarya">@infoppdbsmkwirakarya</a></i>
                <br><i class="fab fa-instagram-square"> <a href="https://instagram.com/smkwirakarya1_2">@smkwirakarya1_2</a></i>
                <br><i class="fas fa-envelope"> smkwirakarya2@yahoo.co.id</i>
                <br><i class="fas fa-phone-alt"> +62 22 5952727</i>
            </address>
            <hr>
            <address>
                <strong>Contact Person</strong>
                <br><img src="<?= base_url('assets/img/whatsapp_icon.png'); ?>" class="img-fluid" style="width: 30px;"> <a class="text-dark" href="https://api.whatsapp.com/send?phone=6289527289131">Rahmady Krisna</a></i>
                <br><img src="<?= base_url('assets/img/whatsapp_icon.png'); ?>" class="img-fluid" style="width: 30px;"> <a class="text-dark" href="https://api.whatsapp.com/send?phone=6281221107650">Ibu Neng Widanensih</a></i>

            </address>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/img/brosur1.jpg') ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Penerimaan Siswa Baru</h4>
                    <p class="card-text text-justify">Selamat datang calon siswa baru tahun 2020-2021 di kampus smk wirakarya 2.</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.facebook.com/infoppdbsmkwirakarya" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/img/berbagi.jpg') ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Berbagi Terhadap Sesama...</h4>
                    <p class="card-text text-justify">Program berbagi takjil atau berbuka puasa merupakan program tahunan SMK wirakarya di bidang sosial dan keagamaan...</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.facebook.com/infoppdbsmkwirakarya" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url('assets/img/berbagi_masker.jpg') ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Berbagi Mencegah Covid</h4>
                    <p class="card-text text-justify">Berbagi 2000 masker & 1000 botol hand sanitizer untuk pencegahan penyebab virus covid-19</p>
                </div>
                <div class="card-footer">
                    <a href="https://www.facebook.com/infoppdbsmkwirakarya" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
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