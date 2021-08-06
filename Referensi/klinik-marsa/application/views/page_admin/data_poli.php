
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Poli</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Poli</th>
                      <th>Keterangan</th>
                      <th>Aksi</th>
                
                    </tr>
                  </thead>
                  
                   
                <tbody>
                    <?php
                    $nomor = 1;
                    if(isset($data_poli)){
                      foreach ($data_poli as $dp) {
                        # code...

                    ?>
                    <tr>
						        <td><?php echo $nomor++ ;?></td>
						        <td><?php echo $dp->nama_poli; ?></td>
						        <td><?php echo $dp->keterangan; ?></td>
						        <td>
                        <div align="center">
                         <a href="<?php echo site_url('Poli/ubah_poli/'.$dp->id_poli);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i>Ubah</a>
                          
                          <a href="#modalhapus" data-toggle="modal" onclick="$('#modalhapus #formhapus').attr('action','<?php echo base_url ('index.php/Poli/hapus_poli/'.$dp->id_poli); ?>')" class="btn btn-default btn-xs"><i class="fas far fa-trash-alt"></i>Hapus</a>
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
  <div class="modal fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Apakah anda yakin akan menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                        <form id="formhapus" action="" method="post">
                          <button class="btn btn-success" data-dismiss="modal">Tidak</button>
                          <button class="btn btn-danger" type="submit">Hapus</button>
                        </form>
                  </div>
                </div>
              </div>
            </div>