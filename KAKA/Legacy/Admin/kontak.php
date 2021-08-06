
<!DOCTYPE html>
<html>
<head>
	<title>	<?php
			include "../judul.php";
		?></title>
	
	
</head>
<body>
<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>

		
 
		<!-- bagian konten Blog -->
		<br> <br>
		<div class="bkonten">
			
			<div class="konten">
				<div class="post-info"bgcolor="#0099FF">
					<b><center >Kontak Kami</center></b>
					<hr>
				</div>
				

				
				<center>
				<div id="outtable">
				  <table>
				  	<thead>
				  		<tr>
				  			<th class="short" bgcolor="#0099FF">Alamat</th>
				  			<th class="short" bgcolor="#0099FF">Mobile</th>
				  			<th class="normal" bgcolor="#0099FF">Email</th>
				  			<th class="short" bgcolor="#0099FF">Aksi</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
								require_once("konfigurasi/koneksi.php");
								$query=mysqli_query($con,"SELECT * FROM kontak");
								$no=1;
								while ($data=mysqli_fetch_array($query)) {												
								?>
				  		
				  			<td><?php echo $data['alamat'];?></td>
				  			<td><?php echo $data['mobile'];?></td>
				  			<td><?php echo $data['email'];?></td>
				  			<td>
				  				<a href="FBalas.php?id=<?php echo $data['id'];?>">Edit</a>
								
				  			</td>
				  			
				  		</tr>
				  <?php
							$no++;
			        	}?>	

				  	</tbody>
				  </table>
				</div>
				</center>
				
				
			</div>
						<br> <br>
			<div class="konten">
				<div class="post-info">
					<b><center>Sosial Media</center></b>
					<hr>
				</div>
				

				
				<center>
				<div id="outtable1">
				  <table >
				  	<thead>
					 
				  		<tr>
				  			<th class="short" bgcolor="#0099FF">Instagram</th>
				  			<th class="short" bgcolor="#0099FF">Facebook</th>
				  			<th class="normal" bgcolor="#0099FF">Twitter</th>
				  			<th class="short" bgcolor="#0099FF">Aksi</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<tr>
				  			<?php
								require_once("konfigurasi/koneksi.php");
								$query=mysqli_query($con,"SELECT * FROM sosmed");
								$no=1;
								while ($data=mysqli_fetch_array($query)) {												
								?>
				  		
				  			<td><?php echo $data['ig'];?></td>
				  			<td><?php echo $data['fb'];?></td>
				  			<td><?php echo $data['twitter'];?></td>
				  			<td>
				  				<a href="FSEdit.php?id=<?php echo $data['id'];?>">Edit</a>
								
				  			</td>
				  			
				  		</tr>
				  <?php
							$no++;
			        	}?>	

				  	</tbody>
				  </table>
				</div>
				</center>
				
				
			</div>
			
			

			
		</div>
		<!-- akhir bagian konten Blog -->
	</div>
 
</body>
</html>