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

    $query = mysqli_query($con, "SELECT * FROM paket");
    while ($data = mysqli_fetch_array($query)) { ?>
        <div id="myDIV">
            <center>
                <div class="col-xs-10 c0l-md-5">
                    <form action="konfigurasi/EPaket.php" method="post">
                        <h3>
                            <font face="Times New Roman, Times, serif">Edit Paket</font>
                        </h3>

                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">ID Paket</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="id" value="<?php echo $data['id']; ?>" />
                            </div>
                        </div>
                        <br />

                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">Kategori</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="kategori" placeholder="kategori" value="<?php echo $data['kategori']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">Harga</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="harga" placeholder="harga" value="<?php echo $data['harga']; ?>" />
                            </div>
                        </div>
                        <br />
                        <div class="form-grup">
                            <label class="control-label col-sm-4 pull-left" for="text">deskripsi</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control alert-info" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
                            </div>
                        </div>
                        <br />
                        <input type="submit" class="btn btn-info" value="Edit">
                    </form>
                    <br>
                    <div class="login-form">
                        <a href="indexpaket.php"><button class="btn btn-info">Cancel</button></a>
                    </div>
                <?php
            }
                ?>
                <br>
                </div>
        </div>
</body>
</html>