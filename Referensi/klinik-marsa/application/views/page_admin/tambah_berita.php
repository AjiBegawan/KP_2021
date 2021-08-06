
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h4 mb-4 text-white-800">Tambah Berita</h1>
          
         <?php echo form_open_multipart('KelolaBerita/proses_tambah_berita');?>
            <div class="form-group col-md-8">
              <label for="namaLengkap">Judul Berita</label>
              <input type="text" class="form-control" id="notlp" name = "judul" placeholder="Isi dengan judul berita" required="*">
            </div>

            <div class="form-group col-md-8">
              <label for="rekamedis">Tanggal:</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukan tanggal" required="">
            </div>

            <div class="form-group col-md-6">
              <label for="inputAddress">Gambar Berita :</label>
          <input type="file" name="userfile" size="30">
          <br><label>Max ukuran gambar 5Mb</label><br>
        </div>  
   <div class="form-group col-md-8">
    <label for="rekamedis">isi berita</label>
    <textarea class="form-control" id="isi" name="isi" placeholder="Masukan Isi Berita" required=""></textarea> 
  </div>
  <div class="form-group col-md-8">
   <!--<button type="submit" class="btn btn-danger"> Batal </button> -->
    <button type="submit" class="btn btn-success"> Simpan </button>
    <?php echo form_close(); ?> 
    </div>
  
</form>


        </div>
        <!-- /.container-fluid -->


      </div>
      <!-- End of Main Content -->




