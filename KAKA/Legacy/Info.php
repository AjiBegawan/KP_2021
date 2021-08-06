<!DOCTYPE html>
<html lang="en">
<?php include("menu.php"); ?>

<head>
    <meta charset="utf-8">
    <title>About</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <style>
        .left {
            width: 70%;
            height: 400px;
            background-color: white;
            padding: 25px;
            text-align: justify;
            font-family: 'Open Sans', sans-serif;
        }

        .right {
            width: 30%;
            height: 400px;
            background-color: white;
            padding: 25px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    require_once("koneksi.php");
    $query = mysqli_query($con, "SELECT * FROM info");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="left">
        <h1><?php echo $data['judul'] ?></h1>
        <div class="text-wrap">
            <p><?php echo $data['isi'] ?></p>
        </div>
    </div>

    <div class="right">
        <img src="assets/image/baby12.png" style="width: 200px; height: 300px; display: block; margin-left: auto; margin-right: auto;">
    </div>
</body>
<div class="footer">
    <?php include("footer.php"); ?>
</div>
</html>