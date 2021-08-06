
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"></h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      
                  <thead>
                    <tr>
                      <th>Id Berita</th>
                      <th>Judul Berita</th>
                      <th>Tanggal </th>
                      <th>Gambar</th>
                      <th>Isi Berita</th>
                      <th>Aksi</th>
                
                    </tr>
                  </thead>
                  
                   
                  <tbody>
                    <?php
                    
                
                      foreach ($data_berita as $db) {?>
                    <tr>
                      
                      <td><?php echo $db->id_berita; ?></td>
                      <td><?php echo $db->judul_berita; ?></td>
                      <td><?php echo $db->tanggal_berita; ?></td>
                      <td><?php echo $db->gambar; ?></td>
                      <td><?php echo $db->isi_berita; ?></td>
                      <td>
                        <div align="center">
                         <a href="<?php echo site_url('KelolaBerita/ubah_berita/'.$db->id_berita);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i>Ubah</a>
                          
                          <a href="#modalhapus" data-toggle="modal" onclick="$('#modalhapus #formhapus').attr('action','<?php echo base_url ('index.php/KelolaBerita/hapus_berita/'.$db->id_berita); ?>')" class="btn btn-default btn-xs"><i class="fas far fa-trash-alt"></i>Hapus</a>
                        </div>
                     </td>
                    </tr>
                  <?php }
                
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