      
      <div class="col-md-3">
        <div class="sidebar" id="sidebar-right">

          <div class="widget">
            <div class="widget-heading">
              <div class="title title-main">
                <h5>Berita Dharma</h5>
              </div><!-- .title -->
            </div><!-- .widget-heading -->
            <div class="widget-content">
              <div class="text">
                <p>Berita Seputar Dharma Group.</p>
              </div>
            </div><!-- .widget-content -->
          </div><!-- .widget -->


          <!-- LATEST NEWS -->
          <div class="widget devider-top devider-heavy devider-margin-medium">
            <div class="widget-heading">
              <div class="title title-main">
                <h5>Other posts</h5>
              </div><!-- .title -->
            </div><!-- .widget-heading -->
            <div class="widget-content">
              <div class="tab full-width" data-animation="slide">
                <ul class="tab-heading">
                  <li><h5><a href="blog-default.html#">Latest</a></h5></li>
                </ul><!-- .tab-heading -->
                <div class="tab-content">
                  <div>
                    <section class="posts">

                      <?php
                        //Kita akan melakukan looping sesuai dengan data yang dimiliki
                        $i = 1; //nantinya akan digunakan untuk pengisian Nomor
                        foreach ($getNewsLatest->result() as $row) {
                      ?>
                      <article class="post post-mini post-type-text devider-top devider-margin-medium">
                        <div class="post-heading">
                          <div class="thumbnail">
                            <a class="link" href="<?php echo base_url();?>news/read/<?= $row->slug?>">
                              <span class="btn btn-icon-link"></span>
                              <img src="<?php echo base_url(); ?>assets/images/berita/<?= $row->foto_berita?>" alt="img">
                            </a>
                          </div><!-- .thumbnail -->
                        </div><!-- .post-heading -->
                        <div class="post-content">
                          <div class="title">
                            <h6 ><a href="<?php echo base_url();?>news/read/<?= $row->slug?>"><?= $row->judul?></a></h6>
                          </div><!-- .title -->
                        </div><!-- .post-content -->
                      </article><!-- .post -->
                      <?php
                        $i++;
                        }
                      ?>

                    </section><!-- /post -->
                  </div>
                </div><!-- /tab-content -->
              </div><!-- /tab -->
            </div><!-- /widget-content -->
          </div><!-- /widget -->
          <!-- /LATEST NEWS -->

        </div><!-- /sidebar -->
      </div><!-- /col-md-3 -->

