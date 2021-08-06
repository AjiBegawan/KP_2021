
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">FORM PENGAJUAN BOOKING</h1>
          <form action="<?php echo site_url('PengajuanBooking/tambahBooking');?>" method="post">
              <div class="form-group col-md-6">
                  <label for="namaLengkap">Nama Calon Pasien:</label>
                    <input type="text" class="form-control" id="namaLengkap" name = "nama" placeholder="Isi dengan nama lengkap" required="*" value="">
              </div>
              <div class="form-group col-md-6">
                  <label for="namaLengkap">No Telpon:</label>
                    <input type="text" class="form-control" id="notlp" name = "no_tlp" placeholder="Isi dengan No Telpon" required="*" value="" maxlength="12">
                   
                    <input type="hidden" class="form-control" name = "id_pengguna" value="<?= $this->session->userdata('id_pengguna')?>">
              </div>
              <div class="form-group col-md-6">
                    <label for="rekamedis">No Rekam Medis/No identitas:</label>
                    <input type="number" class="form-control" id="norekmed" name="no_in" placeholder="Isi dengan No rekam medis atau No Identitas" required="*" value="">
              </div>
              <div class="form-group col-md-6" id='tanggalll'>
                    <label for="rekamedis">Tanggal:</label>
                        <?php $tgl1 = date('Y-m-d');
                        $tgl_booking = date('Y-m-d',strtotime('+1 days', strtotime($tgl1)));
                        ?>
                    <input type="date" class="form-control" id="tanggal" min="<?php echo $tgl_booking;?>" name="tgl" required="*">
              </div>
              <!--<div class="form-group col-md-6">
                <label for="poli">Pilih Poli : </label>
                  <select id="poli" class="form-control" name="poli" required="required">
                  <option value="">Pilih Poli</option>
                  <?php $no=1;
                  foreach ($data3 as $poli) { ?>
                  <option value="<?php echo $poli->id_poli?>"><?php echo $poli->nama_poli ?></option>
                  <?php } ?>
                  </select>
              </div> -->

              <div class="form-row mb-2">
                <div class="form-group col-md-2">
                    <label for="jam">Waktu Layanan</label>
                      <select id="waktu" class="form-control" name="waktu" >
                      <option value="">Pilih Waktu</option>
                        <?php $no=1;
                        foreach ($data2 as $waktu) { ?>
                      <option value="<?php echo $waktu->id_waktu?>"><?php echo $waktu->waktu_layanan ?></option>
                      <?php } ?>
                      </select>
                </div>	
                <div class="form-group col-md-4">
                    <label for="sel1">Pilih Jam Layanan untuk diBooking:</label>
                    <select class="form-control" name="jam" id="jam"></select>
                </div>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputAddress">Alamat</label>
                <textarea class="form-control" id="keterangan" name="alamat" placeholder="Isi dengan Alamat" value=""></textarea>
            </div class="row">
            <div><button type="submit" class="btn btn-success"> Ajukan </button>
              <span><a href="<?php echo base_url(); ?>index.php/PengajuanBooking" value="Tidak Setuju" class="btn btn-primary">Batal</a></span></div>
        </form>
        <!-- /.container-fluid -->
      </div>

      </div>

     <script src="<?php echo base_url(); ?>/asset_login/vendor/jquery/jquery.min.js"></script>
     <script type="text/javascript">
  $("#waktu").change(function(){

            // variabel dari nilai combo box kendaraan
            var id_waktu = $("#waktu").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                url : "<?php echo base_url();?>index.php/PengajuanBooking/get_jam",
                method : "POST",
                data : {id_waktu:id_waktu},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;

                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id_jamlayanan+'>'+data[i].jam_layanan+'</option>';
                    }
                    $('#jam').html(html);

                }
            });
        });

</script>
    <script type="text/javascript">
  $(document).ready(function(){
      tampil_waktu();

      function tampil_waktu(){
        $.ajax({
            type:'ajax',
            url :'<?php echo site_url('PengajuanBooking/get_waktu');?>',
            dataType : 'json',
            success : function(data){
              var html ='';
              var i;
              for (i =0; i<data.length; i++){
                html += '<div>'+data[i].id_waktu+'</div>'+
                          '<div>'+data[i].waktu_layanan+'</div>';
              }
              $('#show_data').html(html);
            } 
        });
      }
  });
 
</script>




