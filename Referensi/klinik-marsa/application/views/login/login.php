  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
			  <div class="img-header row justify-content-center">
				<img src="<?php echo base_url(); ?>/asset_login/img/logo.png" style="margin-top:30px; width:250px; margin-left=50px" alt="IMG">
				
				</div>
				  <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method="post" action="<?php echo site_url('Login/prosesLogin') ?>">
				  
                    <div class="form-group">
					             <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukan username anda..." required="">
					           </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password anda..." required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
					         <hr>
                    
                     <div class="text-center">
                    <a class="small" href="<?php echo site_url('Login/registrasi');?> ">Buat Akun Baru!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
