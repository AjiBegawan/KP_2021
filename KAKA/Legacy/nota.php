<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap-reboot.min.css">
    <style type="text/css">
        body,
        td,
        th {
            font-family: "Courier New", Courier, monospace;
        }
    </style>
</head>

<body>
    <p>
        <?php
        require_once('koneksi.php');
        $query = mysqli_query($con, "SELECT * FROM pesanan");
        $data = mysqli_fetch_array($query);
        ?>
    </p>
    <p>
    <p>
    <p>&nbsp;</p>
    <form id="form1" name="form1" method="post" action="">
        <table width="503" border="0" align="center">
            <tr>
                <td align="right"> <span class="tulisan_satu"><img src="assets/image/LogoPic.png" width="150" height="50" /></span></td>
                <td colspan="5" align="center"><span class="tulisan_satu">NOTA PEMESANAN FOTO</span></td>
            </tr>
            <tr>
                <td height="7" colspan="6">
                    <hr />
                </td>
            </tr>
            <tr>
                <td width="162">ID pesanan</td>
                <td width="19" align="center">:</td>
                <td colspan="4"><?php echo $data['id_pesanan']; ?></td>
            </tr>
            <tr>
                <td width="162">PAKET</td>
                <td width="19" align="center">:</td>
                <td colspan="4"><?php
                                if ($data['id'] == "PKT01") {
                                    echo ("Paket Premium");
                                } else if ($data['id'] == "PKT02") {
                                    echo ("Paket Standart");
                                } else if ($data['id'] == "PKT03") {
                                    echo ("Paket Basic");
                                } else if ($data['id'] == "PKT04") {
                                    echo ("Paket Hemat");
                                } ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['nama']; ?> </td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['no_telp']; ?></td>
            </tr>
            <tr>
                <td>Jadwal</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['tanggal']; ?></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['jam']; ?></td>
            </tr>
            <!-- Menambahkan baris baru untuk menampilkan total harga dari db, Jangan lupa di tabel pesanan di tambah kolom total dengan tipe data int -->
            <tr>
                <td>Total</td>
                <td align="center">:</td>
                <td colspan="4">Rp. <?php echo $data['total']; ?></td>
            </tr>
            <!-- Batas bawah -->
            <tr>
                <td height="75" colspan="6" align="center">
                    <p>TERIMAKASIH</p>
                </td>
            </tr>
            <tr>
                <td height="75" colspan="6" align="right">
                    <p>Bag.Administrasi</p>
                </td>
            </tr>


        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </form>

    <script language="javascript">
        window.print();
    </script>
</body>

</html>