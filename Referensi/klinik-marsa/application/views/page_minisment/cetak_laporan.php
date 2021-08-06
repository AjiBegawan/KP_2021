<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>
</head>
<body>
  <h3 align="center"><?php echo $keterangan; ?> <br>Klinik Marsa</h3><br>
  <table border="1" cellpadding="5" align="center">
  <tr>
     <th align=center>Nama Pasien</th>                                                
     <th align=center>No Telpon</th>                                                
     <th align=center>No Rekam Medis/No Identitas</th>
     <th align=center>Tanggal </th>
     <th align=center>Waktu Layanan</th>
     <th align=center>Jam Layanan</th>
     <th align=center>Alamat</th>
     <th align=center>Persetujuan</th>
  </tr>

<?php
$totalqty = 0;$totalest = 0;$total = 0;
    if( ! empty($booking)){
      foreach($booking as $data){
            $tgl = date('d-m-Y', strtotime($data['tanggal']));
            
        echo "<tr >";
        echo "<td align=center>".$data['nama_calon_pasien']."</td>";
        echo "<td align=center>".$data['no_telepon']."</td>";
        echo "<td align=center>".$data['noRekmed_noId']."</td>";
        echo "<td align=center>".$tgl."</td>";
        echo "<td align=center>".$data['waktu_layanan']."</td>";
        echo "<td align=center>".$data['jam_layanan']."</td>";
        echo "<td align=center>".$data['alamat']."</td>";
        echo "<td align=center>".$data['persetujuan']."</td>";
        
        echo "</tr>";
        // $totalqty += $data['qty'];
        // $totalest += $data['estimasi'];
        // $total += $data['total'];
        }
        
        // echo "<tr>";
        // echo "<td align=center><b>Jumlah Total</b></td>";
        // echo "<td align=center colspan='3'></td>";
        // echo "<td align=center><b>".$totalqty."</b></td>";
        // echo "<td align=center><b>Rp.".number_format($totalest, 0, ',', '.')."</b></td>";
        // echo "<td align=center><b>Rp.".number_format($total, 0, ',', '.')."</b></td>";
        // echo "</tr>";
    }
  ?>
  </table><br><br><br>
 
  <br><br><br><br><br>
  <div style="margin-left: 750px;">
    <div><?=tanggal_indonesia_lengkap(tanggal());?> </div><br><br><br>
    <div><u><?= $this->session->userdata('nama_lengkap');?></u></div>
  </div>
</body>
</html>