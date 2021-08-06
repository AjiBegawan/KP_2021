
      
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pengajuan Booking Telah di proses</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <div class="row">
                    <div class=" col-md-12">
                    	<!--<div> <i class="fas fa-print"></i> Cetak Bukti Booking</div> -->
                      
                  <thead>
					<tr>
						<td>No</td>
						<td>Id Booking</td>
						<td>Pasien</td>
						<td>No Telepon</td>
						<td>No Rekmed / No Identitas</td>
						<td>Tanggal</td>
						<td>Waktu Layanan</td>
						<td>Jam</td>
						<td>Alamat</td>
						<td>Persetujuan</td>
						<td>Aksi</td>

						
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
							foreach($booking as $v){
					?>
					<tr>
						<td><?php echo $nomor++ ;?></td>
						<td><?php echo $v->id_booking ;?></td>
						<td><?php echo $v->nama_calon_pasien ;?></td>
						<td><?php echo $v->no_telepon ;?></td>
						<td><?php echo $v->noRekmed_noId ;?></td>
						<td><?php echo $v->tanggal ;?></td>
						<td><?php echo $v->waktu_layanan ;?></td>
						<td><?php echo $v->jam_layanan ;?></td>
						<td><?php echo $v->alamat ;?></td>
						<td><?php echo $v->persetujuan ;?></td>
						<td>
                        <div align="center">
                        	


                         <button onclick="printIt(<?php echo $v->id_booking ?>, '<?php echo $v->alamat ?>','<?php echo $v->jam_layanan ?>', '<?php echo $v->waktu_layanan ?>', '<?php echo $v->tanggal ?>', '<?php echo $v->no_telepon ?>', '<?php echo $v->nama_calon_pasien ?>')" class="btn btn-default btn-xs" <?php if ($v->persetujuan == 'tidak setuju') {
                         	echo 'disabled';
                         } ?>> <i class="fa fa-print" ></i> Cetak</button></div></td>
                   
						
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
								<p>Apakah anda yakin akan membatalkan booking ini?</p>
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

<script>

	function asupeuy(id_booking, alamat){
		alert(alamat);
	}
	
	function printIt(id_booking, alamat,jam, waktu, tanggal, telepon, nama) {
		var card = `<table class="table-bordered">
	<tr>
		<td colspan="3" style="text-align: center">Booking</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center">KLIKNIK MARSA</td>
	</tr>
	<tr style="border-top: 1px solid black">
		<td>Nama calon pasien</td>
		<td style="width: 10px">   :   </td>
		<td>`+nama+`</td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td style="width: 10px">   :   </td>
		<td>`+telepon+`</td>
	</tr>
	<tr>
		<td>tanggal</td>
		<td style="width: 10px">   :  </td>
		<td>`+tanggal+`</td>
	</tr>
	<tr>
		<td>Waktu</td>
		<td style="width: 10px">   :  </td>
		<td>`+waktu+`</td>
	</tr>
	<tr>
		<td>Jam</td>
		<td style="width: 10px">   :   </td>
		<td>`+jam+`</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td style="width: 10px">   :   </td>
		<td>`+alamat+`</td>
	</tr>
	<tr>
		<td>id Booking</td>
		<td style="width: 10px">   :   </td>
		<td>`+id_booking+`</td>
	</tr>
	<tr> <td colspan = '3'> Silahkan Datang 10 Menit Sebelum Jam Booking</td></tr>


</table>`
  var win = window.open();
  self.focus();
  win.document.open();
  win.document.write('<'+'html'+'><'+'body'+'>');
  win.document.write(card);
  win.document.write('<'+'/body'+'><'+'/html'+'>');
  win.document.close();
  win.print();
  win.close();
}
</script>		