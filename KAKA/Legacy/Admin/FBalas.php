<!DOCTYPE html>
<html>
<head>
	<title>
			<?php
			include "../judul.php";
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">
	
</head>
<body>
<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>
		<!-- akhir bagian menu -->
 
		
 
		<!-- bagian konten Blog -->
		<center>
				<h3>
					<font face="Times New Roman, Times, serif">Edit kontak kami 
				</h3>
				<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM kontak WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
					<div id="myDIV">
						<form method="POST" action="konfigurasi/TKontak.php" class="login-form">
							
								
								<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>
						<br>	
							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left" for="text">Alamat :</label>
								<div class="col-sm-4">
								<textarea name="alamat" class="form-control alert-info"><?php echo $data['alamat'];?></textarea>
								
							</div>
						<br>
							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left" for="text">Mobile :</label>
								<div class="col-sm-4">
								<input type="text" class="form-control alert-info" name="mobile" value="<?php echo $data['mobile'];?>"/>
							</div>
						<br>	
							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left" for="text">Email :</label>
								<div class="col-sm-4">
								<input type="text" class="form-control alert-info" name="email" value="<?php echo $data['email'];?>"/>
							</div>
							<div class="login-form">
							<a href="kontak.php"><button class="button">Update</button></a>
							
						</form>
						<div class="login-form">
							<a href="kontak.php"><button class="button">Cancel</button></a>
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