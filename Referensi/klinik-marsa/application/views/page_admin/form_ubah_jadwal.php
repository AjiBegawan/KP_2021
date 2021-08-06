
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">Form ubah Jadwal Dokter</h1>
          <?php echo $this->session->flashdata('message');?>
          <form method="post" action="<?php echo base_url('index.php/KelolaJadwal/proses_ubah_jadwal') ?>">


    <!-- <div class="form-row mb-2">  -->
    <div class="form-group col-md-4">
		<input type="hidden" class="form-control" name = "id_jadwal" value='<?php echo $data->id_jadwal;?>' >
		
      <label for="jam">Nama Dokter</label>
      <select id="dokter" class="form-control" name="dokter">
        <option value=""><?php echo $data->nama_dokter;?> </option>
        <?php $no=1;
              foreach ($data1 as $dokter) { ?>
            <option value="<?php echo $dokter->id_dokter?>"><?php echo $dokter->nama_dokter ?></option>
            <?php } ?>
      </select>
    </div>
    <!-- <div class="form-row mb-2">  -->
    <div class="form-group col-md-4">
      <label for="jam">Waktu Layanan : </label>
      <select id="waktu" class="form-control" name="waktu">			  
			 <option ><?php echo $data->waktu_layanan;?></option>
			<?php $no=1;
				foreach ($data2 as $waktu) { ?>
			  
				<option value="<?php echo $waktu->id_waktu?>"><?php echo $waktu->waktu_layanan ?></option>
            <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="jam">Hari : </label>
      <select id="hari" class="form-control" name="hari" required="required">
        <option ><?php echo $data->hari;?></option>
        <option value="Senin">Senin</option>
        <option value="Selasa">Selasa</option>
        <option value="Rabu">Rabu</option>
        <option value="Kamis">Kamis</option>
        <option value="Jumat">Jumat</option>

          </select>
        </div>
  <button type="submit" class="btn btn-success"> Simpan </button>
  <span><a href="<?php echo base_url(); ?>index.php/KelolaJadwal/lihat_jadwal" value="batal" class="btn btn-primary">Batal</a></span>


</form>


        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->




