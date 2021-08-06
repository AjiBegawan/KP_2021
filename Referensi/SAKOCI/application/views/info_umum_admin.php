<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="about-me pt-4 pt-md-0">
              <div class="title-box-2">
                  <h5 class="title-left">
                  Jadwal Samling dan Samdong
                  </h5>
              </div>
              <p class="lead" align="justify">
              KELENGKAPAN YANG HARUS DIBAWA UNTUK LAYANAN SAMSAT KELILING:
                <br>1. IDENTITAS / TANDA JATI DIRI ASLI PEMOHON/PEMILIK YANG SAH.
                <br>2. STNK ASLI.
                <br>3. BUKTI PELUNASAN PKB DAN SWDKLL (SKPD TELAH DIVALIDASI) TAHUN TERAKHIR.
                <br>4. BPKB ASLI (KHUSUS WILAYAH POLDA METRO JAYA : BEKASI, CIKARANG, CINERE, DEPOK)

                <br>LAYANAN SAMSAT KELILING DAN SAMSAT GENDONG INI HANYA UNTUK PEMBAYARAN PKB TAHUNAN
                <br>(TIDAK UNTUK PROSES PERGANTIAN PLAT NOMOR 5 TAHUNAN)
                </p>
            <br>
              <p class="lead" align="justify">
              <table border="1" align="center" id="myTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php 
                        foreach($jadwal->result() as $row){
                            echo "<tr>";
                    ?>
                            <form action="<?php echo site_url('InfoUmum/prosesupdate/'.$row->ID);?>" method="post">
                                <td><input type="text" name="hari" class="form-control" value="<?php echo "$row->hari";?>" required></td>
                                <td><input type="text" name="jam" class="form-control" value="<?php echo "$row->jam";?>" required></td>
                                <td><input type="text" name="lokasi" class="form-control" value="<?php echo "$row->lokasi";?>" required></td>
                                <td><button type="submit" class="form-control">Save</button></td>
                            </form>
                    <?php
                            echo "</tr>";
                        }
                    ?> 
                </tbody>
            </table>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript">
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
            </script>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>