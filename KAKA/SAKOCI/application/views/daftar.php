<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url('assets/img/Kota Cimahi.png') ?>" rel="icon">
  	<link href="<?php echo base_url('assets/img/Kota Cimahi.png')?>" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="<?php echo base_url('assets/css/style-login.css')?>" rel="stylesheet">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Selamat Datang di SAKOCI</h2>
								<p>Sudah punya akun?</p>
								<a href="<?php echo site_url('Home/login')?>" class="btn btn-white btn-outline-white">Login</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Daftar</h3>
			      		</div>
			      	</div>
							<form action="<?php echo site_url('Login/prosesdaftar');?>" class="signin-form" method="post" >
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" name="username" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control" placeholder="Password" required>
		            </div>
                    <div class="form-group mb-3">
		            	<label class="label" for="password">Konfirmasi Password</label>
		              <input type="password" name= "confirm_pass" class="form-control" placeholder="Konfirmasi Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Daftar</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.js')?>"></script>

	</body>
</html>

