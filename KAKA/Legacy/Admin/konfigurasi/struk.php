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
        $id_pembayaran = $_GET['id_pembayaran'];
        $query = mysqli_query($con, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
        $data = mysqli_fetch_array($query);
        ?>
    </p>
    <p>
    <p>
    <p>&nbsp;</p>


    <form id="form1" name="form1" method="post" action="">
        <table width="503" border="0" align="center">
            <tr>
                <td align="right"> <span class="tulisan_satu"><img src="LogoPic.png" width="150" height="50" /></span></td>
                <td colspan="5" align="center"><span class="tulisan_satu">KWITANSI PEMBAYARAN FOTO</span></td>
            </tr>
            <tr>
                <td height="7" colspan="6">
                    <hr />
                </td>
            </tr>
            <tr>
                <td width="162">Id pesanan</td>
                <td width="19" align="center">:</td>
                <td colspan="4"><?php echo $data['id_pesanan']; ?></td>
            </tr>
            <tr>
                <td>Paket</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['id']; ?> </td>
            </tr>
            <tr>
                <td>No Pembayaran</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['id_pembayaran']; ?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td align="center">:</td>
                <td colspan="4">Rp.<?php echo $data['total_bayar']; ?></td>
            </tr>
            <tr>
                <td>Bayar</td>
                <td align="center">:</td>
                <td colspan="4">Rp.<?php echo $data['bayar']; ?></td>
            </tr>
            <tr>
                <td>Kembalian</td>
                <td align="center">:</td>
                <td colspan="4">Rp.<?php
                                    $kembalian = $data['bayar'] - $data['total_bayar'];
                                    echo $kembalian;
                                    ?></td>
            </tr>
            <tr>
                <td>Status Bayar</td>
                <td align="center">:</td>
                <td colspan="4"><?php echo $data['status_bayar']; ?></td>
            </tr>

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