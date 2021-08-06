<!DOCTYPE html>
<html lang="en">
    <?php 
        include "menu.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    </title>
    <script language="javascript">
        function myFunction(imgs) {
        // Get the expanded image
        var expandImg = document.getElementById("expandedImg");
        // Get the image text
        var imgText = document.getElementById("imgtext");
        // Use the same src in the expanded image as the image being clicked on from the grid
        expandImg.src = imgs.src;
        // Use the value of the alt attribute of the clickable image as text inside the expanded image
        imgText.innerHTML = imgs.alt;
        // Show the container element (hidden with CSS)
        expandImg.parentElement.style.display = "block";
        }
    </script>
    <style>
        body{
            background: white;
            color: black;
        }
        .footer{
            width: 100%;
            height: 50px;
            line-height: 50px;
            position: absolute;
            bottom: 0px;
        }
        pre{
            display: block;
            font-family: 'Calibri','Impact';
            font-size : 20px;
            white-space: pre;
        }
        /* Style the images inside the grid */
        .column img {
        opacity: 0.8;
        cursor: pointer;
        }

        .column img:hover {
        opacity: 1;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* The expanding image container (positioning is needed to position the close button and the text) */
        .container {
        position: relative;
        display: none;
        }

        /* Expanding image text */
        #imgtext {
        position: absolute;
        bottom: 15px;
        left: 30px;
        color: black;
        font-family: 'Bright Orchid';
        font-size: 20px;
        }

        /* Closable button inside the image */
        .closebtn {
        position: absolute;
        top: 10px;
        right: 15px;
        color: black;
        font-size: 35px;
        cursor: pointer;
        }

        .btn {
            box-sizing: border-box;
            -webkit-appearance: none;
                -moz-appearance: none;
                    appearance: none;
            background-color: transparent;
            border: 2px solid #e74c3c;
            border-radius: 0.6em;
            color: #e74c3c;
            cursor: pointer;
            display: flex;
            align-self: center;
            font-size: 20px;
            font-weight: 300;
            line-height: 1;
            margin: 20px;
            padding: 1.2em 2.8em;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            font-family: 'Franklin Gothic Demi', 'sans-serif';
            font-weight: 800;
        }
        .btn:hover, .btn:focus {
            color: #000000;
            outline: 0;
        }
        .third {
            border-color: #3498db;
            color: #fff;
            text-align:center;
            box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
            transition: all 150ms ease-in-out;
        }
        .third:hover {
            box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
        }
    </style>
</head>
<body>
<?php 
        require_once('Admin/konfigurasi/koneksi.php');
        $sql = "SELECT * FROM paket WHERE kategori LIKE 'hemat'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<table border="0" align="center">
    <td>
        <div class="row">
            <div class="column" >
            <img src="assets/image/baby1.jpg" height ="120" width="100" border="4" alt="Contoh 1"  onclick="myFunction(this);">
            </div>
            <div class="column">
                    <img src="assets/image/baby6.jpg" height ="120" width="100" border="4" alt="Contoh 2" onclick="myFunction(this);">
            </div>
        </div>
    </td>
    <td height="535" width = "600" align="center" style="background-color:#c5c5c5" >
        <div class="container">
            <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

            <!-- Expanded image -->
                <img id="expandedImg" style="width:55%">
            <!-- Image text -->
            <div id="imgtext"></div>
        </div>
    </td>
    </td>
    <td height="535" width = "500">
           
        <pre align="left">
            <font size="+8"><strong><?php echo $row['kategori'] ?></strong></font>
            <font size="+4"><strong><?php echo $row['id'] ?></strong></font>
        </pre>
        <pre align="left">
            Price
            <label><font size="+2">Rp. <?php echo $row['harga'] ?></font></label>
        </pre>
        <pre align="left">
            <?php echo $row['deskripsi'] ?>
        </pre>
        <!-- partial:index.partial.html -->
            <a href="indexpesan.php" class="btn third">PESAN SEKARANG</a>
        <!-- partial -->
    </td>
    </tr>
    <?php
    } ?>
</body>
<div class="footer">
            <div class="footer">
                <?php include("footer.php"); ?>
            </div>
        </div>
</html>