
<!DOCTYPE html>
<html>
<head>
	<title>	<?php
			include "../judul.php";
		?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">
	
</head>
<body>

	<!-- akhir bagian header template -->
	<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>
		
 
		<!-- bagian konten Blog -->
		<center>
				<h3>
					<font face="Times New Roman, Times, serif">Edit Social Media 
				</h3>
				<?php
					require_once ("konfigurasi/koneksi.php");
					$id=$_GET['id'];

					$query = mysqli_query($con,"SELECT * FROM sosmed WHERE id='$id'");
					while ($data = mysqli_fetch_array($query)){ ?>
					<div id="myDIV">
						<form method="POST" action="konfigurasi/TSosmed.php" class="login-form">
							
								
								<input type="hidden" class="input" name="id" value="<?php echo $data['id'];?>"/>
							<br>
								<div class="form-grup">
								<label class="control-label col-sm-4 pull-left">Instagram :</label>
								<div class="col-sm-4">
								<input type="url" class="form-control alert-info" name="ig" value="<?php echo $data['ig'];?>"/>
							</div>
							<br>
							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left">Facebook :</label>
								<div class="col-sm-4">
								<input type="url" class="form-control alert-info" name="fb" value="<?php echo $data['fb'];?>"/>
							</div>
							<br>
							<div class="form-grup">
								<label class="control-label col-sm-4 pull-left">Twitter</label>
								<div class="col-sm-4">
								<input type="url" class="form-control alert-info" name="twitter" value="<?php echo $data['twitter'];?>"/>
							</div>
							
							<input type="submit" class="button" value="update">
							
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