<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image:url('<?php echo base_url(); ?>/assets/img/cimahi.jpg');">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">SAKOCI</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Samsat Kota Cimahi</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="about-me pt-4 pt-md-0">
              <div class="title-box-2">
              <style> input[type=submit]{ 
                display: inline-block; 
                padding: 15px 25px; 
                font-size: 24px; 
                cursor: pointer; 
                text-align: center; 
                text-decoration: none; 
                outline: none; 
                color: #fff; 
                border: none; 
                border-radius: 15px; 
                box-shadow: 0 9px #999; 
                opacity: 0.6; 
                transition: 0.3s; 
                font-size: 16px; 
                background: linear-gradient(#1E90FF 45%, #00BFFF 95%); 
                font-weight: bold; 
                width: 25%; 
                padding: 12px 0; 
                } 
              input[type=submit]:active { 
                box-shadow: 0 5px #666; 
                transform: translateY(4px); 
              } 
              .button { 
              border: none; 
              color: white; 
              padding: 16px 32px; 
              text-align: center; 
              font-size: 16px; 
              margin: 4px 2px; 
              opacity: 0.6; 
              transition: 0.3s; 
              display: inline-block; 
              text-decoration: none; 
              cursor: pointer; 
            } 
 
            .button:hover {opacity: 1} </style>
                  <h5 class="title-left">
                  <?php foreach($kendaraan->result() as $row2){?>

                 
                  <?php  foreach($pajak->result() as $row) {?>
                    Pajak Atas Nama <?php echo "$row->nama_pemilik" ?>
                   
                  </h5>
              </div>
              <p class="lead" align="justify">
              Samsat Kota Cimahi Menghimbau untuk Melakukan Pembayaran Pajak Daerah Dengan Deskripsi Sebagai Berikut :
              </p>
              <p class="lead" align="justify">
              - Nomor Polisi Kendaraan Bermotor yang Bersangkutan : <?php echo "$row->no_kendaraan" ?> </br>
              - Merk Kendaraan Bermotor yang Bersangkutan : <?php echo "$row2->merk" ?> </br>
              - Jenis Kendaraan Bermotor yang Bersangkutan : <?php echo "$row2->jenis" ?> </br>
              - Nomor Mesin Kendaraan Bermotor yang Bersangkutan : <?php echo "$row2->no_mesin" ?> </br>
              - Nomor Rangka Kendaraan Bermotor yang Bersangkutan : <?php echo "$row2->no_rangka" ?> </br>
              - Warna Tanda Nomor Kendaraan Bermotor Indonesia : <?php echo "$row2->warna_tnkb" ?> </br>
              - Total Biaya Pokok Pajak Kendaraan Bermotor : Rp. <?php echo "$row->biaya_pokok" ?> </br>
              </p>
              <p class="lead" align="center">
			  <form method="POST" action="<?php echo site_url('InfoPajak/KodeBayar'); ?>">
			  <td align=center><input type="submit" align=center class ="button" value="Generate Kode Pembayaran"> </td>
              <?php } ?>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>