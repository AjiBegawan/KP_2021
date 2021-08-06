<!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">selamat datang </h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data booking </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      <form method="get" action="" style="display: grid;grid-template-columns: 0fr 0fr 0fr 0fr;grid-gap: 10px;">
                  <div>
                  <label>Tampilkan Berdasarkan</label>
                  <select name="filter" id="filter" style="width: 136px;" class="form-control" required>
                      <option value="">Pilih</option>
                      <option value="1">Per Tanggal</option>
                      <option value="2">Per Bulan</option>
                      <option value="3">Per Tahun</option>
                  </select>
                 </div>
                  <div id="form-tgl">
                      <label>Tanggal</label><br>
                      <input type="date" name="tanggal" class="form-control" style="width: 185px;"/>
                  </div>

                  <div id="form-bln">
                      <label>Bulan</label><br>
                      <select name="bulan" style="width: 136px;" class="form-control">
                          <option value="">Pilih</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                      </select>
                     
                  </div>

                  <div id="form-thn">
                      <label>Tahun</label><br>
                      <select name="tahun" id="tahun" style="width: 136px;" class="form-control">
                          <option value="">Pilih</option>
                          <?php
                          foreach($tahun as $k){  // Ambil data tahun dari model yang dikirim dari controller
                              echo '<option value="'.$k->tahun.'">'.$k->tahun.'</option>';
                          }
                          ?>
                      </select>
                      
                  </div>

                  <button type="submit" class="btn btn-primary btn-sm m-r-10" style="height: 38px;margin-top: 27px;">Tampilkan</button>

          </form>
          <a href="<?php echo base_url("index.php/Laporan"); ?>"><button class="btn btn-primary btn-sm m-r-10" style="height: 38px;margin-top: 27px;">Reset</button></a>
           <a href="<?php echo $url_cetak; ?>"><button class="btn btn-warning btn-sm m-r-10" style="height: 38px;margin-top: 27px;"><i class="fa fa-file-pdf-o"></i> CETAK PDF</button></a><br /><br />

                      
                  <thead>

            <tr>
            <td>No</td>
            <td>Id Booking</td>
            <td>Pasien</td>
            <td>No Telepon</td>
            <td>No Rekmed / No Identitas</td>
            <td>Tanggal</td>
            <td>Waktu Layanan</td>
            <td>Jam</td>
            <td>Alamat</td>
            <td>Perrsetujuan</td>
          </tr>
        </thead>
        <tbody>
          <?php
            $nomor = 1;
              foreach($booking as $v){
          ?>
          <tr>
            <td><?php echo $nomor++ ;?></td>
            <td><?php echo $v['id_booking'] ;?></td>
            <td><?php echo $v['nama_calon_pasien'] ;?></td>
            <td><?php echo $v['no_telepon'] ;?></td>
            <td><?php echo $v['noRekmed_noId'] ;?></td>
            <td><?php echo $v['tanggal'] ;?></td>
            <td><?php echo $v['waktu_layanan'] ;?></td>
            <td><?php echo $v['jam_layanan'] ;?></td>
            <td><?php echo $v['alamat'] ;?></td>
            <td><?php echo $v['persetujuan'] ;?></td>
          </tr>
          <?php } ?>
        </tbody>
              </table>
              </div>
            </div>
              </div>
            </div>
            </div>
          </div>
          <!-- /.container-fluid -->
          </div>
          <!-- End of Main Content -->
        <div class="modal fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Pesan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Apakah anda yakin akan menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                  <form id="formhapus" action="" method="post">
                    <button class="btn btn-success" data-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                  </form>
                </div>
              </div>
              </div>
            </div>    

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
 <script>
    $(document).ready(function(){ // Ketika halaman selesai di load

        $('#form-tgl, #form-bln, #form-thn').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
            $('#filter').change(function(){ // Ketika user memilih filter
                if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                    $('#form-bln, #form-thn').hide(); // Sembunyikan form bulan dan thn
                    $('#form-tgl').show(); // Tampilkan form tgl
                    $("input").attr("required", "true"); // Tampilkan form tgl
                }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                    $('#form-tgl').hide(); // Sembunyikan form tgl
                    $('#form-bln, #form-thn').show();
                    $("select").attr("required", "true"); // Tampilkan form bln dan thn
                }else{ // Jika filternya 3 (per thn)
                    $('#form-tgl, #form-bln').hide(); // Sembunyikan form tgl dan bln
                    $('#form-thn').show(); // Tampilkan form thn
                    $("#tahun").attr("required", "true");
            }

            $('#form-tgl input, #form-bln select, #form-thn select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
 </script>    