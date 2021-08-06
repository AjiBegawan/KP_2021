<?php
include 'konfigurasi/koneksi.php';
session_start();
if ($_SESSION['status'] != "login") {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Legacy </title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">



</head>

<body class="breadcrumb-item active fixed-nav sticky-footer bg-dark" id="page-top">

  <nav class="navbar navbar-expand-lg navbar-secondary bg-info fixed-top" id="mainNav">
    <div class="col-sm-6">
      <h4> <a class="fa"><font color = "white">Sistem Informasi Legacy Studio Estetik</font></h4>
    </div>


    <br />
    <br />
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="fa navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="home.php">
            <img src="assets/images/ui/home.png" width="22" height="22" /></i>
            <span class="nav-link-text"><font color = "white"> Home</font></span>

          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paket">
          <a class="nav-link" href="indexpaket.php">
            <img src="assets/images/ui/pakett.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Paket</font></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Info">
          <a class="nav-link" href="info.php">
            <img src="assets/images/ui/inf.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Info</font></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pembayaran">
          <a class="nav-link" href="pembayaran.php">
            <img src="assets/images/ui/pembayaran.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Pembayaran</font></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kontak kami">
          <a class="nav-link" href="kontak.php">
            <img src="assets/images/ui/kontak.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Kontak Kami</font></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Management user">
          <a class="nav-link" href="user.php">
            <img src="assets/images/ui/manauser.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Management User</font></span>
          </a>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="laporan.php">
            <img src="assets/images/ui/i.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Laporan</font></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
          <a class="nav-link" href="konfigurasi/logout.php">
            <img src="assets/images/ui/Logout.png" width="22" height="22" />
            <span class="nav-link-text"><font color = "white"> Logout</font></span>
          </a>
        </li>



        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>

    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">
            <i class="fa fa-fw fa-home"></i>
          </a>
        </li>

        <li>Selamat datang <?php echo $_SESSION['username']; ?> </li>

        <div class="col-lg-9" style="text-align:right">
          <?php echo date("l"); ?>/<?php echo date("Y-m-d"); ?>
          <div id="divjam"></div>
          <div id="watch">
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript">
              $(document).ready(function() {
                function clock() {
                  var now = new Date();
                  var secs = ('0' + now.getSeconds()).slice(-2);
                  var mins = ('0' + now.getMinutes()).slice(-2);
                  var hr = now.getHours();
                  var Time = hr + ":" + mins + ":" + secs;
                  document.getElementById("watch").innerHTML = Time;
                  requestAnimationFrame(clock);
                }

                requestAnimationFrame(clock);
              });
            </script>
          </div>
        </div>
        <div class="row">

          <div class="col-xl-3 col-sm-6 mb-3"></div>
        </div>

        <div class="fa alert-dark row"></div>

        <!--   
    <table border=0 >
    	<tr>
			<td></td>
			<td></td>
    	</tr>
    	<tr>
			<td width="500"></td>
    		<td width="500"></td>
    	<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
    		<td colspan=2></td>
		</tr>
    		<td colspan=2></td>
    	</tr>
		<tr>
			<td colspan=2></td>
    </table>
-->

        <div class="fa alert-dark row"></div>

        <footer class="sticky-footer">
          <div class="container">
            <div class="text-center"><small>@Legacystudio</small>
            </div>
          </div>
        </footer>

        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="js/sb-admin.min.js"></script>
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/sb-admin-charts.min.js"></script>

</body>

</html>