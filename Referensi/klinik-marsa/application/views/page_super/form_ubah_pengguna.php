
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-4 text-white-800">form ubah pengguna</h1>

	<form action="<?php echo site_url('KelolaPengguna/proses_ubah_pengguna');?>" method="post">
		<div class="form-group col-md-6">
			<input type="hidden" class="form-control" name = "id_pengguna" value='<?php echo $data->id_pengguna;?>' >
			
			<label for="namaDokter">Username :</label>
			<input type="text" class="form-control" name = "username" value='<?php echo $data->username;?>' placeholder="isi dengan username" required="*">
		</div>
		  
		<div class="form-group col-md-6">
			<label for="namaDokter">Password :</label>
			<input type="password" class="form-control"  name = "password" value='<?php echo $data->password;?>' placeholder="isi dengan password" required="*">
		</div>
		
		<div class="form-group col-md-6">
			<label for="namaDokter">Nama :</label>
			<input type="text" class="form-control"  name = "nama" value='<?php echo $data->nama;?>' placeholder="isi dengan nama" required="*">
		</div>

		<div class="form-group col-md-6	">
		  <label >Level :</label>
		  <select  class="form-control" name="level">
			<option><?php echo $data->level;?></option>
			<option value="administrasi">Administrasi</option>
			<option value="pasien">Pasien</option>
			<option value="minisment">Minisment</option>
		  </select>
		</div>
		
		<button type="submit" class="btn btn-success"> Simpan </button>
	</form>
</div>
</div>