<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APTSI | Dashboard</title>
	<link rel="shortcut icon" href="<?php echo base_url('asset/images/icon.png');?>" />
	<link rel="stylesheet" type="text/css" media="all" href=" <?php echo base_url();?>asset/style.css" />
</head>
<body>
<?php $query=$this->db->select('*')->from('laporan')->where('status',0)->get();$baru=$query->num_rows();?>
<?php $query=$this->db->select('*')->from('laporan')->where('status',1)->get();$proses=$query->num_rows();?>
<?php $query=$this->db->select('*')->from('laporan')->where('status',2)->get();$selesai=$query->num_rows();?>
<?php $totalLaporan= $baru+$proses+$selesai;?>
    <div id="wrapper">
       <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url();?>asset/images/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Dhani Sulistiyo</strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url();?>Admin/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="<?php echo base_url();?>"><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
                </li>
                <li>
                    <a href="<?php echo site_url();?>Admin/berita"><i class="fa fa-diamond"></i> <span class="nav-label">Berita</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo site_url();?>Admin/laporanBaru">Laporan Baru  <?php if ($baru>0){?> <span class="label label-danger pull-right"><?php echo $baru;?></span> <?php } ?> </a></li>
                        <li><a href="<?php echo site_url();?>Admin/laporanProses">Laporan Proses<?php if ($proses>0){?> <span class="label label-warning pull-right"><?php echo $proses;?></span> <?php } ?></a></li>
                        <li><a href="<?php echo site_url();?>Admin/laporanSelesai">Laporan Selesai <span class="label label-primary pull-right"><?php echo $selesai;?>/<?php echo $totalLaporan;?></span> </a></li>
                    </ul>
                </li>
				<li>
                    <a href="<?php echo site_url();?>Admin/adminmanagement"><i class="fa fa-pie-chart"></i> <span class="nav-label">User Management</span>  </a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
			
        </div>
            <ul class="nav navbar-top-links navbar-right">
			<li><span class="m-r-sm text-muted welcome-message">Selamat Datang di Aplikasi Pelaporan Tempat Sampah Ilegal</span></li>
                <li>
                    <a href="<?php echo site_url();?>Admin/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>
        </nav>
        </div>
    
