<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Legacy</title>
</head>
<body>
<div class="menu">
		<?php include("dashboard.php"); ?>
	</div>
<center>
<div class="col-xs-10 c0l-md-5">
<font face="Times New Roman, Times, serif">
<form id="form1" name="form1" method="post" action="">
<select name="tahuntagih" id="tahuntagih">
<option> 2021</option>
<option>2022</option>
<option>2023</option>
</select>
<select name="bulantagih" id="bulantagih">
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
<option>Agustus</option>
<option>September</option>
<option>Oktober</option>
<option>November</option>
<option>Desember</option>
<option> Januari</option>
<option>february</option>
<option>Maret</option>

</select>
<input class="btn" type="submit" name="ok" id="ok" value="OK"/>
</form>
<br />
<table width="900" border="0" align="center">
			<tr>
				<thead>
   <center> <table width="1000" border="0" align="center">
    <tr align="center" bgcolor="#0099FF"">
      <td width="35" height="37">No.</td>
      <td width="150">ID Pembayaran</td>
      <td width="100"> ID Pesanan</td>
      <td width="100">Paket</td>
      <td width="62">Tanggal</td>
      <td width="120">Total Bayar</td>
      <td width="120">Bayar</td>
       <td width="200">Status Bayar</td>
       </tr>
				</thead>
				<tbody>
					<tr>
       <?php
						require_once("konfigurasi/koneksi.php");
						$query = mysqli_query($con, "SELECT * FROM pembayaran");
						$no = 1;
						while ($data = mysqli_fetch_array($query)) {


						?>
							<td align ="center"><?php echo $no; ?></td>
							<td align ="center"><?php echo $data['id_pembayaran']; ?></td>
							<td align ="center"><?php echo $data['id_pesanan'] ?></td>
							<td align ="center"><?php echo $data['id'] ?></td>
							<td align ="center"><?php echo $data['tanggal'] ?></td>
							<td align ="center">Rp.<?php echo $data['total_bayar'] ?></td>
							<td align ="center">Rp.<?php echo $data['bayar'] ?></td>
							<td align ="center"><?php echo $data['status_bayar'] ?></td>
                            
					</tr>
				<?php
							$no++;
						}
				?>
        
         </tr>
			</tbody>
    </table>
	
    <td align="center"><a href ="struk_laporan.php"><img src="assets/images/ui/print.jpeg" width="73" height="69" /></a></td>
</body>
</html>