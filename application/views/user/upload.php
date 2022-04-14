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
                <h1 class="h3 mb-0 text-gray-800">Upload File</h1>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <!-- Card Header - Dropdown -->
            <div class="card shadow mb-4 text-dark">
                <div class="card-body" style="padding-bottom: 300px;">
                    <h5 class="card-title">Silahkan pilih file yang akan diupload</h5>

                    <div class="row">
                        <div class="col-lg-5">

                            <?= form_open_multipart('upload/aksi_uploads/'); ?>
                            <label for="formGroupExampleInput">1. Foto 3x4 (Format : Jpg,Jpeg,Png)<label class="text-danger">*</label></label>
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <label for="formGroupExampleInput">2. Scan Ijazah (Format : Jpg,Jpeg,Png,pdf)<label class="text-danger">*</label></label>
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input" id="file_ijazah" name="file_ijazah">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <label for="formGroupExampleInput">3. Scan SKHUN (Format : Jpg,Jpeg,Png,pdf)<label class="text-danger">*</label></label>
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input" id="file_skhun" name="file_skhun">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <label for="formGroupExampleInput">4. Bukti Pembayaran (Format : Jpg,Jpeg,Png)<label class="text-danger">*</label></label>
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input" id="image_pembayaran" name="image_pembayaran">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Upload</button>
                            </form>
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