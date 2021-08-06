<div id="home" class="intro route bg-image" style="background-image:url('<?php echo base_url(); ?>/assets/img/Admin.jpg');">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="intro-title mb-4">Halo Admin</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Pengaturan Kendaraan</span><strong class="text-slider"></strong></p>
        </div>
      </div>
    </div>
  </div>

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <h5 align=center> Daftar Kritik dan Saran yang Masuk </h5>
    <table border="1" align="center" id="myTable" class="table table-striped table-bordered">
    <thead> 
    <tr> 
        <th>ID</th><th>Subjek</th><th>Pesan</th><th>Aksi</th>
    </tr>
    </tr>
    <thead>
    <tbody> 
    <?php 
        foreach($krisar->result() as $row){
        echo "<tr>";
            $hapus = '<a href="'.site_url("Krisar_admin/hapus/".$row->id).'">hapus</a>';     
            echo "<td>$row->id</td>"; 
            echo "<td>$row->subjek</td>";
            echo "<td>$row->pesan</td>";
            echo "<td colspan=3>"; 
            echo $hapus; 
            echo "</td>";  
        echo "</tr>"; 
        } 
    ?> 
    </tbody>
    </table>
    </div> 
    </div>
    </div>
    </div> 
</section>

