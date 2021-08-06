
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Selamat Datang</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      
                  <thead>
                    <tr>
                      
                      <th>Nama Pengguna</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Status</th>
                      
                      <th>
                        <div align="center"><a href="<?= site_url('KelolaPengguna/tambah_pengguna') ?>" method="POST"class="btn btn-default btn-xs" style="border-radius: 10px;"><i class="fa fa-plus"></i> Tambah Pengguna</a></div></th>
                      <!-- <th>Aksi</th> -->
                
                    </tr>
                  </thead>
                  
                   
                  <tbody>
                    <?php
                    
                    if(isset($data_pengguna)){
                      foreach ($data_pengguna as $pgn) {
                        # code...

                    ?>
                    <tr>
                      
                      
                      <td><?php echo $pgn->nama; ?></td>
                      <td><?php echo $pgn->username; ?></td>
                      <td><?php echo $pgn->password; ?></td>
                      <td><?php echo $pgn->level;?></td>
                      <td>
                        <div align="center">
                          <a href="<?php echo site_url('KelolaPengguna/form_ubah_pengguna/'.$pgn->id_pengguna);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i>Ubah</a>
                          <a href="<?php echo site_url('KelolaPengguna/hapus_pengguna/'.$pgn->id_pengguna);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash"></i>   Hapus</a>
                        </div>
                      </td>
                    </tr>
                  <?php }
                }
                ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
