<!DOCTYPE html>
<html>

<head>
	<title> <?php
			include "../judul.php";
			?></title>

</head>

<body>

	<!-- bagian header template -->
	<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>



	<!-- bagian konten Blog -->

	<?php
	require_once("konfigurasi/koneksi.php");
	$username = $_GET['username'];

	$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
	while ($data = mysqli_fetch_array($query)) { ?>
		<div id="myDIV">
			<center>
				<div class="col-xs-10 c0l-md-5">
					<form action="konfigurasi/UserEdit.php" method="post">
						<h3>
							<font face="Times New Roman, Times, serif">Edit User
						</h3>
						<div class="form-grup">
							<label class="control-label col-sm-4 pull-left" for="text">Nama Lengkap</label>
							<div class="col-sm-4">
								<input type="text" class="form-control alert-info" name="namaL" value="<?php echo $data['namaL']; ?>" />
							</div>
							<br />

							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left" for="text">Username</label>
								<div class="col-sm-4">
									<input type="text" class="form-control alert-info" name="username" value="<?php echo $data['username']; ?>" readonly />
								</div>
								<br />
								<div class="form-grup">
									<label class="control-label col-sm-4 pull-left" for="text">Password</label>
									<div class="col-sm-4">
										<input type="password" class="form-control alert-info" name="password" value="<?php echo $data['password']; ?>" />
									</div>
									<br />
									<div class="form-grup">
										<label class="control-label col-sm-4 pull-left" for="text">Email</label>
										<div class="col-sm-4">
											<input type="text" class="form-control alert-info" name="email" value="<?php echo $data['email']; ?>" />
										</div>
										<br />
										<div class="form-grup">
											<label class="control-label col-sm-4 pull-left" for="text">Jenis Kelamin</label>
											<div class="col-sm-4">
												<select name="jk">
													<option value="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
											<br />
											<div class="form-grup">
												<label class="control-label col-sm-4 pull-left" for="text">Nomor Telfon</label>
												<div class="col-sm-4">
													<input type="text" class="form-control alert-info" name="telp" value="<?php echo $data['telp']; ?>" />
												</div>
												<br />


												<input type="submit" class="btn btn-info" value="update">

					</form>
					<br> <br>
					<div class="login-form">
						<a href="user.php"><button class="btn btn-info">Cancel</button></a>
					</div>
				<?php
			}

				?>
				<br>
				</div>


		</div>




		</div>
		<!-- akhir bagian konten Blog -->
		</div>

</body>

</html>