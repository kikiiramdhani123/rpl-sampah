

<!-- NEWS READ -->
<div id="page-content" role="main">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <div id="content">

          <header class="devider-bottom devider-heavy devider-margin-medium">
            <p class="meta">
              <span>Posted by <a href=""><?= $getNewsRead['nama_user'] ?></a></span>
            </p><!-- .meta -->
            <h1><?= $getNewsRead['judul'] ?></h1>
          </header>

          <article class="post post-single post-type-text">
            <div class="post-heading">
              <div class="thumbnail">
                <img src="<?php echo base_url(); ?>assets/images/berita/<?= $getNewsRead['foto_berita'] ?>" alt="img">
              </div><!-- .thumbnail -->
            </div><!-- .post-heading -->
            <div class="post-content">
              <div class="content-left">
                <div class="article-date">
                  <span class="type"></span>
                  <span class="day"><?= $getNewsRead['hari'] ?></span>
                  <span class="month"><?= $getNewsRead['bulan'] ?></span>
                  <span class="year"><?= $getNewsRead['tahun'] ?></span>
                </div> <!-- .article-date  -->
              </div><!-- .content-left -->
              <div class="content-right">
                <div class="text">
                  <p><?= $getNewsRead['isi'] ?></p>
                </div><!-- .text -->
                
                <!--
                <aside class="article-nav devider-top devider-half">
                  <ul>
                    <li class="prev">
                      <strong>Previous:</strong><br><a href="portfolio-single.html" rel="prev">Neque porro quisquam est, qui</a>
                    </li>
                    <li class="next">
                      <strong>Next:</strong><br><a href="portfolio-single.html" rel="next">Ex ea commodo</a>
                    </li>
                  </ul>
                </aside> .article-nav -->

                <div class="tags devider-top devider-half">
                  <h5 class="heading">Tagged with:</h5>
                  <p>
                    <?php
                      $tagRead = explode(", ",$getNewsRead['nama_tags']);
                      for ($i=0; $i <= count($tagRead) ; $i++) { 
                        if ( isset($tagRead[$i]) ) { echo "<a href='".base_url()."news/tag/$tagRead[$i]' rel='tag'>$tagRead[$i]</a>"; }else{ /*false value, tag tidak ada*/ }
                      }
                    ?>
                  </p>
                </div><!-- .tags -->

              </div><!-- .content-right -->
            </div><!-- .post-content -->
          </article><!-- /posts -->
          <div class="devider-top devider-margin-medium"></div>

        </div><!-- /content -->
      </div><!-- /col-md-9 -->

      <?php 
      $this->load->view('news_nav');
      ?>

    </div><!-- /row -->
  </div><!-- /container -->
</div><!-- /page-content -->
<!-- /NEWS READ -->
