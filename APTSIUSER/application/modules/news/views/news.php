

<!-- NEWS -->
<div id="page-content" role="main">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <div id="content">

          <header class="devider-bottom devider-heavy devider-margin-medium">
            <h1>Berita</h1>
          </header>
          <!-- KONTEN BERITA -->
          <?php
            //Kita akan melakukan looping sesuai dengan data yang dimiliki
            $i = 1; //nantinya akan digunakan untuk pengisian Nomor
            foreach ($getNews->result() as $row) {
          ?>
          <article class="post post-list post-type-text">
            <div class="post-heading">
              <div class="thumbnail">
                <a class="link" href="<?php echo base_url();?>news/read/<?= $row->slug?>">
                  <span class="btn btn-icon-link"></span>
                  <img src="<?php echo base_url(); ?>assets/images/berita/<?= $row->foto_berita?>" alt="img" width="850" height="480">
                </a>
              </div><!-- .thumbnail -->
            </div><!-- .post-heading -->
            <div class="post-content">
              <div class="content-left">
                <div class="article-date">
                  <span class="type"></span>
                  <span class="day"><?= $row->hari?></span>
                  <span class="month"><?= $row->bulan?></span>
                  <span class="year"><?= $row->tahun?></span>
                </div> <!-- .article-date  -->
              </div><!-- .content-left -->
              <div class="content-right">
                <div class="title">
                  <h2><a href="<?php echo base_url();?>news/read/<?= $row->slug?>"><?= $row->judul?></a></h2>
                  <p class="meta">
                    <span>Posted by <a><?= $row->nama_user?></a></span>
                  </p>
                </div><!-- .title -->
                <div class="text">
                  <p><?= $row->deskripsi_singkat?></p>
                  <p> <a class="btn" href="<?php echo base_url();?>news/read/<?= $row->slug?>">READ MORE</a></p>
                </div><!-- .text -->
              </div><!-- .content-right -->
            </div><!-- .post-content -->
          </article><!-- /posts -->
          <div class="devider-top devider-margin-medium"></div>
          <?php
            $i++;
            }
          ?>
          <!-- /KONTEN BERITA -->

          <!-- PAGINATION -->
          <?php echo $pagination; ?>
          <!-- /PAGINATION -->
        </div><!-- /content -->
      </div><!-- /col-md-9 -->

      <?php 
      $this->load->view('news_nav');
      ?>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page-content -->
<!-- /NEWS -->
