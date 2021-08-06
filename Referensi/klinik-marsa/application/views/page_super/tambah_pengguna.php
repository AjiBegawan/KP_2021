
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-4 text-white-800">Tambah Pengguna</h1>

	<form action="<?php echo site_url('KelolaPengguna/proses_tambah_pengguna');?>" method="post">
		<div class="form-group col-md-6">
			<label for="namaDokter">Username :</label>
			<input type="text" class="form-control" name = "username" placeholder="Isi dengan username" required="*">
		</div>
		  
		<div class="form-group col-md-6">
			<label for="namaDokter">Password :</label>
			<input type="text" class="form-control"  name = "password" placeholder="Isi dengan password" required="*">
		</div>
		
		<div class="form-group col-md-6">
			<label for="namaDokter">Nama :</label>
			<input type="text" class="form-control"  name = "nama" placeholder="Isi dengan nama" required="*">
		</div>

		<div class="form-group col-md-6	">
		  <label >Level :</label>
		  <select  class="form-control" name="level">
			<option value="">Pilih Level</option>
			<option value="administrasi">Administrasi</option>
			<option value="minisment">Minisment</option>
		  </select>
		</div>
		
		<button type="submit" class="btn btn-success"> Simpan </button>
	</form>
</div>
</div>