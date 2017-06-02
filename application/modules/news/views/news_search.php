

<!-- NEWS SEARCH -->
<div id="page-content" role="main">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <div id="content">

          <header class="devider-bottom devider-heavy devider-margin-medium">
            <h2 class="h4">Hasil Pencarian <b><?= $judul ?></b></h2>
          </header>
          <!-- HASIL PENCARIAN -->
          <?php
            //Kita akan melakukan looping sesuai dengan data yang dimiliki
            $i = 1; //nantinya akan digunakan untuk pengisian Nomor
            foreach ($getSearch->result() as $row) {
          ?>
          <section class="posts">
            <article class="post post-thumb post-type-text">
              <div class="post-heading">
                <div class="thumbnail">
                  <a class="link" href="">
                    <span class="btn btn-icon-link"></span>
                    <img src="<?php echo base_url(); ?>assets/images/berita/<?= $row->foto_berita?>" alt="img" width="170" height="170">
                  </a>
                </div><!-- .thumbnail -->
              </div><!-- .post-heading -->
              <div class="post-content">
                <div class="type"></div><!-- .type -->
                <div class="title">
                  <h2 class="h4"><a href="<?php echo base_url();?>news/read/<?= $row->slug?>"><?= $row->judul?></a></h2>
                  <p class="meta">
                    <span>Posted by <a><?= $row->nama_user?></a></span>
                    <span>In: <a><?= $row->tanggal?></a></span>
                  </p>
                </div><!-- .title -->
                <div class="text">
                  <p><?= $row->deskripsi_singkat?><a href="<?php echo base_url();?>news/read/<?= $row->slug?>"> read more...</a></p>
                </div><!-- .text -->
              </div><!-- .post-content -->
            </article><!-- .post -->
          </section><!-- /posts -->
          <div class="devider-top devider-margin-medium"></div>
          <?php
            $i++;
            }
          ?>
          <!-- /HASIL PENCARIAN -->

        </div><!-- /content -->
      </div><!-- /col-md-9 -->

      <?php 
      $this->load->view('news_nav');
      ?>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page-content -->
<!-- /NEWS SEARCH -->
