<?php
            require_once('konfigurasi/koneksi.php');
            $id_pesanan = $_GET['id_pesanan'];
            $sql = "SELECT * FROM pesanan  WHERE id_pesanan = '$id_pesanan'";
            $result = mysqli_query($con, $sql);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $row['id_pesanan'] ?> </td>
                    <td> Tanggal : <?php echo $row['tanggal'] ?> / Waktu : <?php echo $row['jam'] ?></td>
                    <td><a href="pembayaran.php" target="_BLANK">BAYAR</a>
                    <td>
                </tr>
            <?php
            } ?>