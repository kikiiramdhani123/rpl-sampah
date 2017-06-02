<?php $this->load->view('Layout/Header');?>
<?php $query=$this->db->select('*')->from('laporan')->where('status',0)->get();$baru=$query->num_rows();?>
<?php $query=$this->db->select('*')->from('laporan')->where('status',1)->get();$proses=$query->num_rows();?>
<?php $query=$this->db->select('*')->from('laporan')->where('status',2)->get();$selesai=$query->num_rows();?>
<div class="wrapper wrapper-content">    
 <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">New</span>
                                <h5>Laporan Baru</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $baru;?></h1>                               
                                <small>Laporan Tempat Sampah Ilegal</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-warning pull-right">Prosess</span>
                                <h5>Laporan Prosess</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $proses;?></h1>
                                <small>Penanganan Laporan Sampah</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-primary pull-right">Finnish</span>
                                <h5>Laporan Selesai</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo $selesai;?></h1>
                                <small>Laporan Sudah di Selesaikan</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-info pull-right">News</span>
                                <h5>Post Berita</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins">7</h1>
                                <small>Jumlah Posting Berita</small>
                            </div>
                        </div>
            </div>
        </div>
        </div>
<?php $this->load->view('Layout/Footer');?>