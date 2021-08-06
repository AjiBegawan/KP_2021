<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image:url('<?php echo base_url(); ?>/assets/img/cimahi.jpg');">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">SAKOCI</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Kritik dan Saran</span><strong class="text-slider"></strong></p>
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
                  <h2 align='center'>
                    Kritik dan Saran
                  </h2>
              </div>
              <style>
                .container {
                }

                h2{
                background-color: #1E90FF;
                text-align:center;
                color: #fff;
                }
                
                input[type=text]{
                width: 96%;
                height: 25px;
                padding: 15px;
                margin-bottom: 25px;
                margin-top: 5px;
                color: #1E90FF;
                font-size: 19px;
                }
                input[type=area]{
                width: 96%;
                height: 25px;
                padding: 55px;
                margin-bottom: 25px;
                margin-top: 5px;
                border: 5px solid #ccc;
                color: #1E90FF;
                font-size: 19px;
                }
                
                label{
                color: #1E90FF;
                text-shadow: 0 1px 0 #fff;
                font-size: 24px;
                font-weight: bold;
                }
                
                input[type=submit]{
                font-size: 16px;
                background: linear-gradient(#1E90FF 45%, #00BFFF 95%);
                color: #fff;
                font-weight: bold;
                width: 100%;
                padding: 12px 0;
                }
                </style>
                <div class="container">
                <form action="<?php echo site_url('krisar/prosesTambah'); ?>" method="post">
                <label>Subyek</label><input type="text" name="subjek"><br>
                <label>Kritik dan Saran</label><br>
                <textarea name="pesan" type="area" cols="125" rows="7"></textarea>
                <input type="submit" value="Tambah"> 
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>