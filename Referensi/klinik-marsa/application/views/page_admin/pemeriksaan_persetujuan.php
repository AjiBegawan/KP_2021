
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">selamat datang </h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">silahkan untuk diproses persetujuan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
	
					<?php foreach($hasil as $v){ ?>
						<form action="<?php echo site_url('KelolaBooking/update_persetujuan');?>" method="POST">
							<table>
								<tr>
									<td>Nama Pasien</td><td>:</td>
										<input type="hidden" name="kode" value='<?php echo $v->id_booking;?>'>
									<td><?php echo $v->nama_calon_pasien; ?></td>
								</tr>
								<tr>
									<td>No Telepon</td><td>:</td>
									<td><?php echo $v->no_telepon; ?></td>
								</tr>
								<tr>
									<td>No RekMed / No Identitas</td><td>:</td>
									<td><?php echo $v->noRekmed_noId; ?></td>
								</tr>
								<tr>
									<td>No Telepon</td><td>:</td>
									<td><?php echo $v->tanggal; ?></td>
								</tr>
								<tr>
									<td>Alamat</td><td>:</td>
									<td><?php echo $v->alamat; ?></td>
								</tr>
								
								<td>
									<input type="submit" name="persetujuan" value="Setuju" class="btn btn-primary">
									<input type="submit" name="persetujuan" value="Tidak Setuju" class="btn btn-primary">
									<a href="<?php echo base_url(); ?>index.php/KelolaBooking/data_persetujuan" value="Tidak Setuju" class="btn btn-primary">Batal</a>
								</td>										
							</table>
						</form>
					<?php } ?>
					
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
