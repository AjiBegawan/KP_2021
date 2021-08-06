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
              <div class="title-box-2"> <style> input[type=submit]{ 
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
                  <h2 align='center'>
                    Informasi Pajak Kendaraan Bermotor
                  </h2>
              </div>
                <table align=center>
		            <form method="POST" action="<?php echo site_url('InfoPajak/Caridata'); ?>">
			        <tr>
                        <td><h5>Nomor Polisi Kendaraan Bermotor</h5></td>
                        <td>:</td>   
				        <td><input type="text" name="no_ken"/></td>
			        </tr>
                    <tr>
                        <td colspan=3 align=center><input type="submit" class ="button" value="Cari"> </td>
			        </tr>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>