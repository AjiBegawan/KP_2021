
<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image:url('<?php echo base_url(); ?>/assets/img/Admin.jpg');">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Halo Admin</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Pengaturan Kendaraan</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
<h1>Data Kendaraan</h1>
<table border="1"  id="myTable" class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>No Kendaraan</th>
        <th>Tahun Pembuatan</th>
        <th>Tipe</th>
        <th>Jenis</th>
        <th>No Rangka</th>
        <th>No Mesin</th>
        <th>Warna</th>
        <th>Warna TNKB</th>
        <th>No BPKB</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach ($data_kendaraan as $kendaraan) {
        echo "<tr>
              <td>$kendaraan->id</td>
              <td>$kendaraan->no_kendaraan</td>
              <td>$kendaraan->tahun_pembuatan</td>
              <td>$kendaraan->tipe</td>
              <td>$kendaraan->jenis</td>
              <td>$kendaraan->no_rangka</td>
              <td>$kendaraan->no_mesin</td>
              <td>$kendaraan->warna</td>
              <td>$kendaraan->warna_tnkb</td>
              <td>$kendaraan->no_bpkb</td>
              <td>" . anchor('kendaraanserver/edit/' . $kendaraan->id, 'Edit') . "
                  " . anchor('kendaraanserver/delete/' . $kendaraan->id, 'Delete') . "</td>
              </tr>";
    }
    ?>
</table>
<a href=<?=base_url()?>index.php/kendaraanserver/create>+ Tambah data</a>
        </div>
    </div>
 </section>
