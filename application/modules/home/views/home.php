<!-- SLIDER -->
<div class="page-slider-wrap">
  <div id="page-slider">

      <ul>

        <li data-transition="zoomout" data-masterspeed="1300">
        <!-- MAIN IMAGE -->
        <img src="<?php echo base_url(); ?>assets/user/images/slider.png"  alt="bg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
        <!-- LAYER NR. 1 -->
        <div class="tp-caption slider-title text-right sfl" data-x="right" data-hoffset="-15" data-y="top" data-voffset="230" data-speed="1000" data-start="600" data-easing="Back.easeInOut" data-endspeed="300" style="color:#fff"></div>
        </li>

    </ul>

  </div><!-- /page-slider -->
</div><!-- /page-slider-wrap -->
<!-- /SLIDER -->
<!--
<div id="page-content" role="main">
  <div class="container">
    <div id="content">


      <!-- LATEST NEWS 
      <div class="container-out">
        <div class="title title-section">
          <h2>LATEST NEWS</h2>
          <span class="sticker">
            <i class="icon fa fa-newspaper-o"></i>
          </span>
        </div><!-- .title.title-section 

        <div data-animate="fadeInDown">
          <div class="carousel-wrap">
            <ul class="carousel-nav">
              <li><a href="index.html#" class="btn btn-icon-prev prev"></a></li>
              <li><a href="index.html#" class="btn btn-icon-next next"></a></li>
            </ul><!-- .carousel-nav 
            <div class="carousel" data-visible="3">

              <?php
                //Kita akan melakukan looping sesuai dengan data yang dimiliki
                $i = 1; //nantinya akan digunakan untuk pengisian Nomor
                foreach ($getNewsLatest->result() as $row) {
              ?>
              <article class="post post-latest post-type-text">
                <div class="post-heading">
                  <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>assets/images/berita/<?= $row->foto_berita ?>" alt="img" style="width: 366px; height: 205px;">
                  </div><!-- .thumbnail 
                </div><!-- .post-heading 
                <div class="post-content">
                  <div class="type"></div><!-- .type 
                  <div class="title">
                    <h2 class="h4"><a href="<?php echo base_url();?>news/read/<?= $row->slug?>"><?= $row->judul?></a></h2>
                    <p class="meta">
                      <span class="meta-date"><?= $row->tanggal ?></span>
                    </p>
                  </div><!-- .title 
                  <div class="text">
                    <p><?= $row->deskripsi_singkat ?> <a href="<?php echo base_url();?>news/read/<?= $row->slug?>">...more...</a></p>
                  </div><!-- .text 
                </div><!-- .post-content 
              </article><!-- .post 
              <?php
                $i++;
                }
              ?>

            </div><!-- .carousel 
            <div class="carousel-pagi"></div>
          </div><!-- .carousel-wrap 
        </div>

      </div><!-- .container-out -->
      <!-- /LATEST NEWS 


    </div><!-- /content -->

  </div><!-- /container -->
</div><!-- /page-content -->
