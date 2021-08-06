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
              <?php
                function randomString($length = 10) {
                    $str = "";
                    $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
                    $max = count($characters) - 1;
                    for ($i = 0; $i < $length; $i++) {
                        $rand = mt_rand(0, $max);
                        $str  .= $characters[$rand];
                    }
                    return $str;
                }?>

              <h5 class="title-left">
                    Generater Kode Bayar
              </h5>
              </div>
              <p class="lead" align="Center">
              <h2 align=center><?php echo randomString();?></h2>
              </p>
              <p class="lead" align="center"> <i>Silakan lakukan proses pembayaran dengan mitra kami</i></br>
              <img src="<?php echo base_url(); ?>/assets/img/partner.png"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
