  <div class="container">
	<!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
		  <div class="img-header row justify-content-center">
		  <img src="<?php echo base_url(); ?>/asset_login/img/logo.png" style="margin-top:30px; width:200px; margin-left=50px" alt="IMG">
		  </div>
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Registrasi Akun</h1>
              </div>
              <form class="user" method="post" action="<?php echo site_url('Login/prosesInsert') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" required="*" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                </div>
                
			         <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" required="*" placeholder="Username" >
                
                </div>
				        <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" required="*" placeholder="Password">
                  </div>
                  <!--<div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" name="repeatpass" placeholder="Repeat Password">
                  </div> -->
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Buat Akun
                </button> 
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small" href="<?php echo site_url('Login'); ?>">Sudah Punya Akun? LOGIN</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>