<!-- NAVIGASI -->
<header id="header">

<!-- KONTAK -->
  <aside class="topbar">
    <div class="container">
      <ul class="touch">
        <li><i class="fa fa-child"></i> Selamat Datang di Website Resmi Dinas Kebersihan dan Pertamanan Kota Bogor</li>
        <li><i class="fa fa-clock-o"></i> Working hours: Mon-Fri (8.00 am - 4.00 pm)</li>
        <li><i class="fa fa-envelope-o"></i> dkp@kotabogor.go.id</li>
      </ul><!-- .touch -->
    </div><!-- .container -->
  </aside><!-- .topbar -->
  <!-- /KONTAK -->

  <div class="navbar megamenu-width">
    <div class="container">
      <div class="navbar-inner" id="navnav">

      	<!-- logo -->
        <a href="<?php echo base_url();?>home" class="logo" >
          <img src="<?php echo base_url(); ?>assets/user/images/logodkp.png" alt="DKP">
        </a>

        <ul id="mobile-menu">
            <li>
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-reorder"></i>
              </button>
            </li>
        </ul><!-- #mobile-menu -->

        <!-- main-menu -->
        <ul id="main-menu" class="collapse navbar-collapse nav slide">
          <li><a href="<?php echo base_url();?>home">Beranda<span>Halaman Utama!</span></a></li>

          <!-- PROFIL MEGAMENU 2 -->
          <li class="megamenu"><a>Profil<i class="carret"></i><span>Profil DKP Bogor!</span></a>
            <ul class="dropdown megamenu-category">
              <li>
                <div class="row">
                  <div class="col-md-16">
                    
                    <div class="title">
                      <h5></h5>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                      <div class="teaser teaser-up">
                        <div class="teaser-img">
                          <img src="<?php echo base_url(); ?>assets/user/images/Profile/gambaranumum.jpg" alt="img">
                        </div>
                        <a class="teaser-bg" href="<?php echo base_url(); ?>profil/gambaranumum"></a>
                        <div class="teaser-info">
                          <div class="title">
                            <p style="font-size:13px;">Gambaran Umum </p>
                          </div>
                          <a class="btn btn-green btn-icon-link" href="<?php echo base_url();?>profil/gambaranumum"></a>
                        </div>
                      </div><!-- /teaser -->
                    </div><!-- /col-sm-2 -->

                    <div class="col-sm-3">
                      <div class="teaser teaser-up">
                        <div class="teaser-img">
                          <img src="<?php echo base_url(); ?>assets/user/images/Profile/visimisi.jpg" alt="img">
                        </div>
                        <a class="teaser-bg" href="<?php echo base_url(); ?>profil/visi"></a>
                        <div class="teaser-info">
                          <div class="title">
                            <p style="font-size:13px;">Visi & Misi</p>
                          </div>
                          <a class="btn btn-green btn-icon-link" href="<?php echo base_url();?>profil/visi"></a>
                        </div>
                      </div><!-- /teaser -->
                    </div><!-- /col-sm-2 -->

                    <div class="col-sm-3">
                      <div class="teaser teaser-up">
                        <div class="teaser-img">
                          <img src="<?php echo base_url(); ?>assets/user/images/Profile/tupoksi.jpg" alt="img">
                        </div>
                        <a class="teaser-bg" href="<?php echo base_url(); ?>profil/tupoksi"></a>
                        <div class="teaser-info">
                          <div class="title">
                            <p style="font-size:12px;">Tugas Pokok & Fungsi</p>
                          </div>
                          <a class="btn btn-green btn-icon-link" href="<?php echo base_url();?>profil/tupoksi"></a>
                        </div>
                      </div><!-- /teaser -->
                    </div><!-- /col-sm-2 -->

                  </div><!-- /col-md-12 -->
                </div><!-- /row -->
              </li>
            </ul>
          </li>
          
          <li><a>Pelayanan<i class="carret"></i><span>Pelayanan!</span></a>
            <ul class="dropdown">
              <li><a href="<?php echo base_url();?>pelayanan/angkut">Pengangkutan Sampah</a></li>
            </ul>
          </li>
<!--
          <li><a href="<?php echo base_url();?>news">Berita<span>Berita!</span></a></li>

<!--          <li><a href="<?php echo base_url();?>karir">Karir<span>Karir!</span></a></li>
        </ul><!-- /main-menu -->

      </div><!-- /navbar-inner -->
    </div><!-- /container -->
  </div><!-- /navbar -->
</header><!-- /header -->
<!-- /NAVIGASI -->
