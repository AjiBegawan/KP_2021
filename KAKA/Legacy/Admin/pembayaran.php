<?php
require_once("konfigurasi/koneksi.php");
$query = mysqli_query($con, "SELECT * FROM pembayaran");
$no = 1;
while ($data = mysqli_fetch_array($query)) {

	$id = $data['id_pembayaran'];
	$urut = substr($id, 9, 3);
	$tambah = (int) $urut + 1;
	$tgl = date("d");
	$bln = date("m");
	$thn = date("y");
	if (strlen($tambah) == 1) {
		$format = "PBY" . $tgl . $bln . $thn . "00" . $tambah;
	} else if (strlen($tambah) == 2) {
		$format = "PBY" . $tgl . $bln . $thn . "0" . $tambah;
	} else {
		$format = "PBY" . $tgl . $bln . $thn . $tambah;
	}
?>
<?php
}
?>
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
			<form action="konfigurasi/Tbayar.php" method="post">
				<h3>
					<font face="Times New Roman, Times, serif">Form Pembayaran
				</h3>

				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">ID Pembayaran</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="id_pembayaran" value="<?php echo $format; ?>" readonly />
					</div>
				</div>
				<br />

				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">ID Pesanan</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="id_pesanan" placeholder="Id pesanan" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Paket</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="id" placeholder="Paket" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">tanggal</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="tanggal" value="<?php echo date("d-m-Y"); ?>" readonly />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Total Bayar</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="total_bayar" value="" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Bayar</label>
					<div class="col-sm-4">
						<input type="text" class="form-control alert-info" name="bayar" value="" />
					</div>
				</div>
				<br />
				<div class="form-grup">
					<label class="control-label col-sm-4 pull-left" for="text">Status bayar</label>
					<div class="col-sm-4">
						<select name="status_bayar">
							<option values="Lunas">Lunas</option>
							<option values="Belum lunas">Belum Lunas</option>
						</select>
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
						<td width="81" height="38" align="center" bgcolor="#0099FF"> ID Pembayaran </td>
						<td width="109" height="38" align="center" bgcolor="#0099FF"> ID Pesanan </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Paket </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> tanggal </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Total Bayar </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Bayar </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Status Bayar </td>
						<td width="81" height="38" align="center" bgcolor="#0099FF"> Aksi </td>
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
							<td><?php echo $no; ?></td>
							<td><?php echo $data['id_pembayaran']; ?></td>
							<td><?php echo $data['id_pesanan'] ?></td>
							<td><?php echo $data['id'] ?></td>
							<td><?php echo $data['tanggal'] ?></td>
							<td>Rp.<?php echo $data['total_bayar'] ?></td>
							<td>Rp.<?php echo $data['bayar'] ?></td>
							<td><?php echo $data['status_bayar'] ?></td>
							<td>
								<a href="FEpembayaran.php?id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Edit</a>
								<a href="konfigurasi/Hpembayaran.php?id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Hapus</a>
								<a href="konfigurasi/struk.php?id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Cetak</a>
							</td>
					</tr>
				<?php
							$no++;
						}
				?>
			</tr>
			</tbody>
		</table>

</body>

</html>