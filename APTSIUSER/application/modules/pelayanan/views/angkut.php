<div id="page-content" role="main">
  <div class="container">
    <div id="content">

      <div class="container-out ">
        <div class="title title-section">
          <h2>LAPORAN PENGANGKUTAN SAMPAH</h2>
          <span class="sticker">
            <i class="icon fa fa-question-circle-o"></i>
          </span>
        </div><!-- /title.title-section -->
      </div>
      
      
	  
	  
	  
      <div class="x_title">
          <h4>
            <a href="<?php echo base_url();?>addlaporan/tambah" onclick="add()"><i class="fa fa-plus"></i> Tambah Laporan</a>
          </h4>
         <div class="clearfix"></div>
      </div>
	  
		<div class="row">
				<form action="<?php echo base_url();?>pelayanan/cari" method="POST">
					<div class="input-group search col-md-4 pull-right">
						<table class = "table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<tr>
							<th>
							<input type="text" class="form-control" placeholder="Cari Berdasarkan Nama Pelapor" name="cari">
							</th>
							<th>
							<span class="input-group-btn">
								<button class="btn btn-default fa fa-search" type="submit"></button>
							</span>
							</th>
							</tr>
						</table>
					</div>
				</form>
		</div>

      <div class="x_content">
        <table id="table_laporan" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pelapor</th>
              <th>Tanggal Laporan</th>
              <th>Deskripsi Laporan</th>
              <th>Lokasi</th>
              <th>Status Laporan</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=0; foreach ($laporan->result() as $dt){ ?>
            <tr>
              <td><?php echo ++$no;?></td>
              <td><?php echo $dt->nama_pelapor;?></td>
              <td><?php echo $dt->tgl_laporan;?></td>
              <td><?php echo $dt->deskripsi;?></td>
              <td><?php echo $dt->lokasi;?></td>
              <td>

                <?php

                  if($dt->status==1){
                    echo "WAITING";
                  }

                  if($dt->status==0){
                    echo "ON PROCESS";
                  }
				 
				 if($dt->status==2){
                    echo "DONE";
                  }
                ?>

              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
		<ul class="pagination pull-right">
			<?php 
				if($this->uri->segment(2) == "angkut")
				echo $halaman;
			?>
		</ul>
    </div>
      </div><!-- /c_content -->
    </div>
  </div>
</div>