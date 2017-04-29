<!-- GAMBARAN UMUM -->
<div id="page-content" role="main">
  <div class="container">
    <div id="content">
		<div class="container-out">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-inner">
              <form  id="contact-form" enctype="multipart/form-data" action="<?php echo base_url();?>addlaporan/tambah/upload" method="POST" >
                <div class="title">
                  <h2 class="h3">Tambah Laporan</h2>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label for="nama_kontak">Nama Pelapor<span class="require">(required)</span></label>
                      <input class="form-control" type="text" maxlength="100" name="nama_pelapor" id="nama_pelapor" minlength="2" required />
                    </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
                  <div class="col-sm-6">
                    <div class="form-field">
                      <label for="email_kontak">Nomor Telepon<span class="require">(required)</span></label>
                      <input class="form-control" type="text" name="no_telp" id="no_telp" maxlength="12" required />
                    </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
				  <div class="col-sm-12">
                    <div class="form-field">
                      <label for="nama_kontak">Lokasi<span class="require">(required)</span></label>
                      <input class="form-control" type="text" name="lokasi" id="lokasi" required />
                    </div><!-- .form-field -->
                  </div><!-- .col-sm-6 -->
                </div><!-- .row -->
                <div class="form-field">
                  <label for="message">Deskripsi<span class="require">(required)</span></label>
                  <textarea class="form-control" maxlength="5000" rows="10" name="deskripsi" id="deskripsi" required></textarea>
                </div><!-- .form-field -->
				<div class="form-field">
					<label for="nama_kontak">Foto<span class="require">(required)</span></label>
                    <input class="form-control" type="file" id="foto" name="foto" required />
                </div><!-- .form-field -->
                  
                <div class="form-field text-right">
                  <input type="submit" value="Laporkan" class="btn" id="btnSave">
                </div><!-- .form-field -->
              </form>

            </div><!-- .form -->
          </div><!-- .col-sm-7 -->

          
        </div><!-- .row -->
      </div><!-- .container-out -->

 
    </div><!-- /content -->
  </div><!-- /container -->
</div><!-- /page-content -->
