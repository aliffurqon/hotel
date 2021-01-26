        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Mahasiswa BSI Arfifa Rahman, Krisnanda Dellpiro, Alif Hidayatulloh Dan Anggota Kelompok 4 lainnya 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper --><a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Untuk Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Logout" Untuk Meninggalkan Halaman ini</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?php echo base_url().'welcome' ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url().'assets/vendor1/jquery/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor1/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor1/jquery-easing/jquery.easing.min.js'?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url().'assets/vendor1/chart.js/Chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor1/datatables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendor1/datatables/dataTables.bootstrap4.js'?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url().'assets/js1/sb-admin.min.js'?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?php echo base_url().'assets/js1/demo/datatables-demo.js'?>"></script>
    <script src="<?php echo base_url().'assets/js1/demo/chart-area-demo.js'?>"></script>

  </body>

</html>
<script type="text/javascript">
  $(document).ready(function(){
    $("#example").dataTable();
  });
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>