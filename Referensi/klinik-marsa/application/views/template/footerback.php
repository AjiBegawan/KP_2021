
<!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Klinik Marsa 2020</span>
          </div>
        </div>
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
<!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/asset_login/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset_login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>/asset_login/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>/asset_login/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>/asset_login/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>/asset_login/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>/asset_login/js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>/asset_login/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>/asset_login/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>/asset_login/js/demo/datatables-demo.js"></script>

 <!--  <script type="text/javascript">
        $(document).ready(function(){
 
            $('#waktu').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('PengajuanBooking/getJam');?>",
                    method : "POST",
                    data : {id: id},
                    data2 : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i,j;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].jam_layanan+'>'+data[i].jam_layanan+'</option>';
                            // html += '<option value='+data2[i].stok_sparepart+'>'+data2[i].stok_sparepart+'</option>';
                        }
                        $('#jam').html(html);
                    }
                });
                return false;
            });  
        });
  </script> -->
  </body>

</html>