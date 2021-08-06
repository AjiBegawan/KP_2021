
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Dokter</th>
                      <th>No Telepon</th>
                      <th>Status Dokter</th>
                      <th>Foto</th>
                      <th>Tempat praktek</th>
                      <th>Aksi</th>
                
                    </tr>
                  </thead>
                  
                   
                <tbody>
                    <?php
                    $nomor = 1;
                    if(isset($data_dokter)){
                      foreach ($data_dokter as $dr) {
                        # code...

                    ?>
                    <tr>
						        <td><?php echo $nomor++ ;?></td>
						        <td><?php echo $dr->nama_dokter; ?></td>
						        <td><?php echo $dr->no_telepon; ?></td>
						        <td><?php echo $dr->status_dokter; ?></td>
						        <td><img src='<?=base_url()?>upload/<?=$dr->gambar;?>'width="100px" height="100px"></td>
						        <td><?php echo $dr->tempat_praktek;?></td>
						        <td>
                        <div align="center">
                         <a href="<?php echo site_url('KelolaDokter/ubah_dokter/'.$dr->id_dokter);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i>Ubah</a>
                          
                          <a href="#modalhapus" data-toggle="modal" onclick="$('#modalhapus #formhapus').attr('action','<?php echo base_url ('index.php/KelolaDokter/hapus_dokter/'.$dr->id_dokter); ?>')" class="btn btn-default btn-xs"><i class="fas far fa-trash-alt"></i>Hapus</a>
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