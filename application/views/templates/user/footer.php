  <!-- Footer -->
  <footer>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to leave?</h5>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
              </div>
          </div>
      </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/scripts.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>


  <script>
      $('.custom-file-input').on('change', function() {
          let fileName = $(this).val().split('\\').pop();
          $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
          var email = $('#email').text();

          $.ajax({
              url: "http://localhost/ppdb/Bukti_pendaftaran/lampiran",
              data: {
                  email: email
              },
              type: "post",
              method: "get",
              dataType: "json",
              success: function(data) {
                  console.log(data);
                  var scan_image = data.image;
                  console.log(scan_image);
                  var scan_ijazah = data.file_ijazah;
                  var scan_skhun = data.file_skhun;
                  var scan_pembayaran = data.image_pembayaran;
                  if (scan_image == "default.png") {
                      $('#scan_image').attr("class", "text-danger");
                      $('#scan_image').html("SILAHKAN UPLOAD FILE");
                  } else {
                      $('#scan_image').attr("class", "text-success");
                      $('#scan_image').html("SUKSES");
                  }

                  if (scan_ijazah == "") {
                      $('#scan_ijazah').attr("class", "text-danger");
                      $('#scan_ijazah').html("SILAHKAN UPLOAD FILE");
                  } else {
                      $('#scan_ijazah').attr("class", "text-success");
                      $('#scan_ijazah').html("SUKSES");
                  }

                  if (scan_skhun == "") {
                      $('#scan_skhun').attr("class", "text-danger");
                      $('#scan_skhun').html("SILAHKAN UPLODA FILE");
                  } else {
                      $('#scan_skhun').attr("class", "text-success");
                      $('#scan_skhun').html("SUKSES");
                  }

                  if (scan_pembayaran == "") {
                      $('#scan_pembayaran').attr("class", "text-danger");
                      $('#scan_pembayaran').html("SILAHKAN UPLOAD FILE");
                  } else {
                      $('#scan_pembayaran').attr("class", "text-success");
                      $('#scan_pembayaran').html("SUKSES");
                  }
              },
          });
      });
  </script>

  </body>

  </html>