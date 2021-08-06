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
        <h3>
            <font face="Times New Roman, Times, serif">Info Studio
        </h3>
        <table width="900" border="0" align="center">
            <thead>
                <tr>
                    <td width="87" height="38" align="center" bgcolor="#0099FF"> ID </td>
                    <td width="81" height="38" align="center" bgcolor="#0099FF"> Judul </td>
                    <td width="109" height="38" align="center" bgcolor="#0099FF"> Isi </td>
                    <td width="81" height="38" align="center" bgcolor="#0099FF"> Aksi </td>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once("konfigurasi/koneksi.php");
                $query = mysqli_query($con, "SELECT * FROM info");
                $no = 1;
                while ($data = mysqli_fetch_array($query)) {


                ?>
                    <td><?php echo $data['id'] ?></td>
                    <td><?php echo $data['judul'] ?></td>
                    <td><?php echo $data['isi'] ?></td>
                    <td>
                        <a href="FEInfo.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

</body>

</html>