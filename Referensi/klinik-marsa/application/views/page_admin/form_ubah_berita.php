
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">Form Ubah Berita</h1>
    
	<?php echo form_open_multipart('KelolaBerita/proses_ubah_berita');?>
		<div class="form-group col-md-6">
			<input type="hidden" class="form-control" id="id_berita" name = "id_berita" value='<?php echo $data->id_berita;?>' required="*">
			
			<label for="judulBerita">Judul Berita:</label>
			<input type="text" class="form-control" id="judul_berita" name = "judul_berita" value='<?php echo $data->judul_berita;?>' required="*">
		</div>
		  
		<div class="form-group col-md-6">
			<label for="tanggalBerita">Tanggal:</label>
			<input type="text" class="form-control" id="tanggal_berita" name = "tanggal_berita" value='<?php echo $data->tanggal_berita;?>' required="*">
		</div>

		<div class="form-group col-md-6">
			<label for="gambarBerita">Gambar:</label>
			<input type="text" class="form-control" id="gambar" name = "gambar" value='<?php echo $data->gambar;?>' required="*">
		</div>
				
		<div class="form-group col-md-6">
			<label for="isiBerita">Isi Berita </label>
			<input class="form-control" id="isi_berita" name="isi_berita" required=""> value='<?php echo $data->isi_berita;?>' ></textarea>
		</div>
	<button type="submit" class="btn btn-success"> Simpan</button>
	<span><a href="<?php echo base_url(); ?>index.php/KelolaBerita/lihat_berita" value="Tidak Setuju" class="btn btn-primary">Batal</a></span>

	<?php echo form_close(); ?> 



        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->




