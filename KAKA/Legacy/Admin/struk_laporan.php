<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-reboot.min.css">
<style type="text/css">
body,td,th {
	font-family: "Courier New", Courier, monospace;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

				<thead>
        <center> <table width="1000" border="0" align="center">
        <tr align="center">
    <td height="37" colspan="8"><p class="tulisan_satu">  LAPORAN ADMINISTRASI LEGACY</p>
    <p class="tulisan_satu" align="left">Tahun : 2021</p>
    <p class="tulisan_satu" align="left">Bulan : MEI</p></td>
  </tr>
  </table>
   <center> <table width="1000" border="1" align="center">
    <tr align="center">
      <td width="35" height="37">No.</td>
      <td width="164">ID Pembayaran</td>
      <td width="189"> ID Pesanan</td>
      <td width="189">Paket</td>
      <td width="110">Tanggal</td>
      <td width="167">Total Bayar</td>
      <td width="171">Bayar</td>
       <td width="110">Status Bayar</td>
       </tr>
				</thead>
				<tbody>
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
    <br />
    <br />
            <tr>
            <h3>
           <td align="center">&nbsp;</td>
           <td align="center">&nbsp;</td>
           <td align="center">&nbsp;</td>
           <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
            <td align="center">&nbsp;</td>
           <td align="center"><font face="Comic Sans MS, cursive">
    Total Pembayaran :            <?php
          $sql = mysqli_query($con, "SELECT SUM(bayar)
FROM pembayaran");
          while ($data = mysqli_fetch_array($sql)) {
          ?>
        
        <?php echo "Rp." . number_format($data['SUM(bayar)']); ?></td>
      
    <?php
          }
    ?> </td>
          

  <td align="center">&nbsp;</td>
          </h3>
  </tr>

    
</table>
</form>
<script language="javascript">window.print();
 </script>
</body>
</html>