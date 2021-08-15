<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
	<!--  All snippets are MIT license http://bootdey.com/license -->
	<title>profile edit data and skills - Bootdey.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\styleProfile.css'); ?>" media="all" />
</head>

<body>
	<div class="container">
		<div class="main-body">
			<!-- Header -->
			<?php require_once('application\views\template\_header2.php'); ?>
			<!-- End Header -->
			<br>

			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb" class="main-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo site_url('Home') ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo site_url('Profile') ?>">User Profile</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
				</ol>
			</nav>
			<!-- /Breadcrumb -->
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4><?= $user->nama; ?></h4>
									<p class="text-dark mb-1"><?= $user->aliran_seni; ?></p>
									<p class="text-dark font-size-sm"><?= $user->alamat; ?></p>
									<button class="btn btn-primary">Follow</button>
									<button class="btn btn-outline-primary">Message</button>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form method="POST" action="<?php echo site_url('Profile/editUserData'); ?>">
						<div class="card">
							<div class="card-body">
								
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Twitter</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->twitter; ?>" name="twitter">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Instagram</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->instagram; ?>" name="instagram">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Facebook</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->facebook; ?>" name="facebook">
									</div>
								</div>

							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Full Name</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->nama; ?>" name="nama">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->email; ?>" name="email">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Phone</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->phone; ?>" name="phone">
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Address</h6>
									</div>
									<div class="col-sm-9 text-dark">
										<input type="text" class="form-control" value="<?= $user->alamat; ?>" name="alamat">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 text-dark">
										<input type="submit" class="btn btn-primary px-4 btn-center" value="Save Changes">
									</div>
								</div>
							</div>

						</div>

					</form>
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<img class="img-thumbnail" src="<?php echo base_url("assets\image\Dftr_nft.jpg"); ?>" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">

	</script>
</body>

</html>