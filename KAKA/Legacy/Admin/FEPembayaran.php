<!DOCTYPE html>
<html>

<head>
    <title> <?php
            include "../judul.php";
            ?></title>

</head>

<body>
    <div class="menu">
        <?php include("dashboard.php"); ?>
    </div>
    <?php
    require_once("konfigurasi/koneksi.php");
    $id_pembayaran = $_GET['id_pembayaran'];

    $query = mysqli_query($con, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
    while ($data = mysqli_fetch_array($query)) { ?>
        <div id="myDIV">
            <center>
                <div class="col-xs-10 c0l-md-5">
                    <form action="konfigurasi/Epembayaran.php" method="post">
                        <h3>
                            <font face="Times New Roman, Times, serif">Edit Pembayaran</font>
                        </h3>

                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">ID Pembayaran</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="id_pembayaran" value="<?php echo $data['id_pembayaran']; ?>" />
                            </div>
                        </div>
                        <br />

                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">ID Pesanan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="id_pesanan" placeholder="Id pesanan" value="<?php echo $data['id_pesanan']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">Paket</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="id" placeholder="Paket" value="<?php echo $data['id']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">tanggal</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="tanggal" value="<?php echo $data['tanggal']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">Total Bayar</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="total_bayar" value="<?php echo $data['total_bayar']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">Bayar</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="bayar" value="<?php echo $data['bayar']; ?>" />
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
                        <input type="submit" class="btn btn-info" value="Edit">
                    </form>
                    <br>
                    <div class="login-form">
                        <a href="pembayaran.php"><button class="btn btn-info">Cancel</button></a>
                    </div>
                <?php
            }

                ?>
                <br>
                </div>
        </div>

</body>

</html>