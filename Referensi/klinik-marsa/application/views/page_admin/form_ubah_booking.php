
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">FORM UBAH PENGAJUAN BOOKING</h1>
          <form action="<?php echo site_url('KelolaBooking/proses_ubah_booking');?>" method="post">
            <input type="hidden" class="form-control" name="id_booking"  value='<?php echo $data->id_booking;?>' required="*">
              <div class="form-group col-md-8">
                  <label for="namaLengkap">Nama Calon Pasien:</label>
                    <input type="text" class="form-control" id="namaLengkap" name = "nama" value='<?php echo $data->nama_calon_pasien;?>' required="*">
              </div>
              <div class="form-group col-md-8">
                  <label for="namaLengkap">No Telpon:</label>
                    <input type="number" class="form-control" id="notlp" name = "no_tlp" placeholder="Isi dengan No Telpon" required="*" value='<?php echo $data->no_telepon;?>'>
                    <input type="hidden" class="form-control" name = "id_pengguna" value="<?= $this->session->userdata('id_pengguna')?>">
              </div>
              <div class="form-group col-md-8">
                    <label for="rekamedis">No Rekam Medis/No identitas:</label>
                    <input type="number" class="form-control" id="norekmed" name="no_in" placeholder="Isi dengan No rekam medis atau No Identitas" required="*" value='<?php echo $data->noRekmed_noId;?>'>
              </div>
              <div class="form-group col-md-8" id='tanggalll'>
                    <label for="rekamedis">Tanggal:</label>
                        <?php $tgl1 = date('Y-m-d');
                        $tgl_booking = date('Y-m-d',strtotime('+2 days', strtotime($tgl1)));
                        ?>
                    <input type="date" class="form-control" id="tanggal" min="<?php echo $tgl_booking;?>" name="tgl" value='<?php echo $data->tanggal;?>' required="*" >
              </div>

              <div class="form-row mb-2">
                <div class="form-group col-md-3">
                    <label for="jam">Waktu Layanan</label>
                      <select id="waktu" class="form-control" name="waktu" >
                      
                      <option ><?php echo $data->waktu_layanan;?></option>
                        <?php $no=1;
                        foreach ($data1 as $waktu) { ?>
                      <option value="<?php echo $waktu->id_waktu?>"><?php echo $waktu->waktu_layanan ?></option>
                      <?php } ?>
                      </select>
                </div>	
                <div class="form-group col-md-5">
                    <label for="sel1">Pilih Jam Layanan untuk diBooking:</label>
                    <select class="form-control" name="jam" id="jam" value='<?php echo $data->jam_layanan;?>'></select>
                </div>
            </div>
            <div class="form-group col-md-8">
                <label for="inputAddress">Alamat</label>
                <input class="form-control" id="alamat" name="alamat" value='<?php echo $data->alamat;?>'>
            </div class="row">
            <div><button type="submit" class="btn btn-success"> Ajukan </button>
              <span><a href="<?php echo base_url(); ?>index.php/KelolaBooking/data_persetujuan" value="Tidak Setuju" class="btn btn-primary">Batal</a></span></div>
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




