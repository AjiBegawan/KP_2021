<!DOCTYPE html>
<html>

<head>
	<title> <?php
			include "../judul.php";
			?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">

</head>

<body>
	<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>
	<!-- akhir bagian menu -->



	<!-- bagian konten Blog -->


	<center>
		<div class="col-xs-10 c0l-md-5">
			<form action="konfigurasi/TUser.php" method="post">
				<h3>
					<font face="Times New Roman, Times, serif">Tambah User
				</h3>

				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Nama Lengkap</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="namaL" placeholder="Nama Lengkap" />
					</div>
				</div>
				<br />

				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Username</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="username" placeholder="Username" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Passsword</label>
					<div class="col-sm-4">
						<input type="password" class="form-control alert-info" name="password" placeholder="Password" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Email</label>
					<div class="col-sm-4">
						<input type="email" class="form-control alert-info" name="email" placeholder="Email" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Jenis kelamin</label>
					<div class="col-sm-4">
						<select name="jk">
							<option values="Laki-Laki">Laki-Laki</option>
							<option values="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Nomor Telfon</label>
					<div class="col-sm-4">
						<input type="number" class="form-control alert-info" name="telp" placeholder="Nomor Telp" />
					</div>
				</div>
				<br />
				<input type="submit" class="btn btn-info" value="Simpan">
			</form>
			<br>
		</div>

		<script>
			function myFunction() {
				var x = document.getElementById("myDIV");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
			}
		</script>
		<br> <br> <br>
		<table width="900" border="0" align="center">
			<tr>

				<thead>
					<tr>
						<td width="87" height="38" align="center" bgcolor="#0099FF"> No </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Nama </td>
						<td width="109" height="38" align="center" bgcolor="#0099FF"> Username </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Password </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Email </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Jenis Kelamin </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> No Telp </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Aksi </td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						require_once("konfigurasi/koneksi.php");
						$query = mysqli_query($con, "SELECT * FROM user");
						$no = 1;
						while ($data = mysqli_fetch_array($query)) {



						?>
							<td><?php echo $no; ?></td>
							<td><?php echo $data['namaL']; ?></td>
							<td><?php echo $data['username'] ?></td>
							<td><input type="password" class="pwd" value="<?php echo substr($data['password'], 25) ?>" disabled></td>
							<td><?php echo $data['email'] ?></td>
							<td><?php echo $data['jk'] ?></td>
							<td><?php echo $data['telp'] ?></td>
							<td>
								<a href="FEUser.php?username=<?php echo $data['username']; ?>">Edit</a>
								<a href="konfigurasi/HUser.php?username=<?php echo $data['username']; ?>">Hapus</a>
							</td>
					</tr>
				<?php
							$no++;
						}
				?>
			</tr>
			</tbody>
		</table>




		</div>




		</div>
		<!-- akhir bagian konten Blog -->
		</div>

</body>

</html>