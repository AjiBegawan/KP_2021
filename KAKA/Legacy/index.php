<html>

<head>
	<title>
		<?php
		include "judul.php";
		?>
	</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slide.css">

</head>

<body>
	<div class="wrapper">
		<div class="menu">
			<?php include("menu.php"); ?>
		</div>
		<div class="header">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<img src="assets/image/4.png" style="width:100%">
				</div>

				<div class="mySlides fade">
					<img src="assets/image/3.png" style="width:100%">
				</div>


				<div class="mySlides fade">
					<img src="assets/image/2.png" style="width:100%">
				</div>

				<div class="mySlides fade">
					<img src="assets/image/1.png" style="width:100%">
				</div>

			</div><br><br><br><br><br><br>
		</div>
		
		<div class="konten">
			<div class="konten1">
					<h6>PACKET 1</h6>
					<h5>PREMIUM PACKET</h5>
					<br>
					<br>
					<br>
					<a href="premiumpacket.php"><input class="s1" type="submit" name="READ MORE" value="Check"></a>
			</div>
			<div class="konten2">
					<h6>PACKET 2</h6>
					<h5>STANDART PACKET</h5>
					<br>
					<br>
					<br>
					<a href="standartpacket.php"><input class="s1" type="submit" name="READ MORE" value="Check"></a>
			</div>
			<div class="konten3">
					<h6>PACKET 3</h6>
					<h5>BASIC PACKET</h5>
					<br>
					<br>
					<br>
					<a href="basicpacket.php"><input class="s1" type="submit" name="READ MORE" value="Check"></a>
			</div>
			<div class="konten4">
					<h6>PACKET 4</h6>
					<h5>PACKET HEMAT</h5>
					<br>
					<br>
					<br>
					<a href="packethemat.php"><input class="s1" type="submit" name="READ MORE" value="Check"></a>
			</div>
		</div>
		<div class="footer">
			<div class="footer">
				<?php include("footer.php"); ?>
			</div>
		</div>
	</div>
</body>

</html>
<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		slides[slideIndex - 1].style.display = "block";
		setTimeout(showSlides, 4000); // Change image every 2 seconds
	}


	/*

	*/
</script>