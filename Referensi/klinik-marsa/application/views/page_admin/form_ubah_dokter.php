
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">Form Ubah Dokter</h1>
    
	<?php echo form_open_multipart('KelolaDokter/proses_ubah_dokter');?>
		<div class="form-group col-md-6">
			<input type="hidden" class="form-control" id="id_dokter" name = "id_dokter" value='<?php echo $data->id_dokter;?>' required="*">
			
			<label for="namaDokter">Nama Dokter:</label>
			<input type="text" class="form-control" id="nama_dokter" name = "nama_dokter" value='<?php echo $data->nama_dokter;?>' required="*">
		</div>
		  
		<div class="form-group col-md-6">
			<label for="namaDokter">No Telpon:</label>
			<input type="text" class="form-control" id="no_tlp" name = "no_tlp" value='<?php echo $data->no_telepon;?>' required="*">
		</div>
	 
		<div class="form-group col-md-6	">
		  <label for="jam">Status Dokter</label>
		  <select id="status" class="form-control" name="status">
			<option><?php echo $data->status_dokter;?></option>
			<option value="Tetap">Tetap</option>
			<option value="Tidak Tetap">Tidak Tetap</option>
		  </select>
		</div>
		<div class="form-group col-md-6">
      		<label for="jam">Nama Poli</label>
      		<select id="dokter" class="form-control" name="dokter" required="required">
        		<option value="">Pilih Poli : </option>
        			<?php $no=1;
              	foreach ($data3 as $poli) { ?>
            	<option value="<?php echo $poli->id_poli?>"><?php echo $poli->nama_poli ?></option>
            		<?php } ?>
      		</select>
    	</div>
				
		<div class="form-group col-md-6">
			<label for="inputAddress">Tempat Praktek </label>
			<input class="form-control" id="tempat" name="tempat" value='<?php echo $data->tempat_praktek;?>' ></textarea>
		</div>
	<button type="submit" class="btn btn-success"> Simpan</button>
	<span><a href="<?php echo base_url(); ?>index.php/KelolaDokter/lihat_dokter" value="Tidak Setuju" class="btn btn-primary">Batal</a></span>

	<?php echo form_close(); ?> 



        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->




