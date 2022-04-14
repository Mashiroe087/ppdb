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

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

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
        <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <?= $this->session->flashdata('message'); ?>
        </div>
      </div>

      <!-- Card Header - Dropdown -->
      <div class="card shadow mb-4 text-dark">
        <div class="card-body">
          <h5 class="card-title">Selamat Datang <?= $user['nama']; ?></h5>
          <div class="row">
            <div class="col-md-auto">
              <img src="<?= base_url('assets/img/foto/') . $profil['image']; ?>" alt="..." class="img-thumbnail" style="max-width: 200px;">
            </div>

            <div class="col-mt-4" style="padding-left: 15px;">
              <table class="table table-borderless text-dark">
                <tbody>
                  <tr>
                    <th scope="row"><label>NISN</label></th>
                    <td><label>:</label></td>
                    <td><label><?= $user['nisn']; ?></label></td>
                  </tr>
                  <tr>
                    <th scope="row"><label>Nama Lengkap</label></th>
                    <td><label>:</label></td>
                    <td><label><?= $user['nama']; ?></label></td>
                  </tr>
                  <tr>
                    <th scope="row"><label>Tempat Tanggal Lahir</label></th>
                    <td><label>:</label></td>
                    <td><label><?= $user['tempat_lahir']; ?>, <?= $user['tgl_lahir']; ?></label></td>
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
                    <th scope="row"><label>Nama Sekolah Asal</label></th>
                    <td><label>:</label></td>
                    <td><label><?= $user['sekolah_asal']; ?></label></td>
                  </tr>
              </table>
            </div>
          </div>
          <label>Silahkan mengirimkan berkas-berkas berikut untuk memenuhi syarat pendaftaran :</label>
          <table>
            <tr>
              <th><label>1. Foto 3X4 <label></label></label></th>
              <td><label id="scan_image" style="margin-left: 50px; font-weight: bold;"></label></td>
            </tr>
            <tr>
              <th><label>2. Scan Ijazah</label></th>
              <td><label id="scan_ijazah" style="margin-left: 50px; font-weight: bold;"></label></td>
            </tr>
            <tr>
              <th><label>3. Scan SKHUN</label></th>
              <td><label id="scan_skhun" style="margin-left: 50px; font-weight: bold;"></label></td>
            </tr>
            <tr>
              <th><label>4. Bukti Pembayaran</label></th>
              <td><label id="scan_pembayaran" style="margin-left: 50px; font-weight: bold;"></label></td>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->