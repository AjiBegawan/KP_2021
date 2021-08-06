
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">selamat datang </h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data booking yang disetujui saja</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                      
                  <thead>
					<tr>
						<td>No</td>
						<td>Pasien</td>
						<td>No Telepon</td>
						<td>No Rekam Medis</td>
						<td>Tanggal</td>
						<td>Waktu Layanan</td>
						<td>Jam</td>
						<td>Alamat</td>
						<td>persetujuan</td>
						<td>Aksi</td>
					</tr>
					</thead>
				<tbody>
					<?php
						$nomor = 1;
							foreach($hasil as $v){
					?>
					<tr>
						<td><?php echo $nomor++ ;?></td>
						<td><?php echo $v->nama_calon_pasien ;?></td>
						<td><?php echo $v->no_telepon ;?></td>
						<td><?php echo $v->noRekmed_noId ;?></td>
						<td><?php echo $v->tanggal ;?></td>
						<td><?php echo $v->waktu_layanan ;?></td>
						<td><?php echo $v->jam_layanan ;?></td>
						<td><?php echo $v->alamat ;?></td>
						<td><?php echo $v->persetujuan ;?></td>
						<td>
							<div>
								<a href="#modalhapus" data-toggle="modal" onclick="$('#modalhapus #formhapus').attr('action','<?php echo base_url ('index.php/KelolaBooking/hapus_booking/'.$v->id_booking); ?>')" class="btn btn-default btn-xs"><i class="fas far fa-trash-alt"></i>Hapus</a>
							</div>
						</td>
					</tr>
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