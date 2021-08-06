
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-4 text-white-800">Ubah Poli</h1>

  <form action="<?php echo site_url('Poli/proses_ubah_poli');?>" method="post">
    <div class="form-group col-md-6">
      <input type="hidden" class="form-control" name = "id_poli" value='<?php echo $data->id_poli;?>' >
      
      <label for="namaDokter">Nama Poli :</label>
      <input type="text" class="form-control" name = "nama_poli" value='<?php echo $data->nama_poli;?>' required="*">
    </div>
      
    <div class="form-group col-md-6">
      <label for="namaDokter">Keterangan :</label>
      <input type="text" class="form-control"  name = "keterangan" value='<?php echo $data->keterangan;?>' required="*">
    </div>
    
    
    <button type="submit" class="btn btn-success"> Simpan </button>
     <span><a href="<?php echo base_url(); ?>index.php/Poli/lihat_poli" value="batal" class="btn btn-primary">Batal</a></span>
  </form>
</div>
</div>