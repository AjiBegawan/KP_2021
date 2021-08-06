
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">Tambah Poli</h1>
    
			<?php echo $this->session->flashdata('message');?>
          <form method="post" action="<?php echo base_url('index.php/Poli/proses_tambah_poli') ?>">
			
				<div class="form-group col-md-6">
					<input type="hidden" class="form-control" id="id_poli" name = "id_poli" placeholder="isi dengan nama lengkap" required="*">
					<label for="namaDokter">Nama Poli :</label>
					<input type="text" class="form-control" id="nama_poli" name = "nama_poli" placeholder="isi dengan nama poli" required="*">
				</div> 
				<div class="form-group col-md-6">
					<label for="inputAddress">keterangan </label>
					<textarea class="form-control" id="keterangan" name="keterangan" placeholder="Silahkan isi Keterangan" required="*"></textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-success"> Simpan </button>
					<span><a href="<?php echo base_url(); ?>index.php/Poli/lihat_poli" value="Tidak Setuju" class="btn btn-primary">Batal</a></span>
				
				</div>
			</form>
     </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->




