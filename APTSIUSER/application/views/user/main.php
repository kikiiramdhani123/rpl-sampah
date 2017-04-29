<?php 
$this->load->view('user/header');
$this->load->view('user/navigasi');
if ($home != 'home') {
	$this->load->view('user/breadcrumb');
}
$this->load->view($isi);
$this->load->view('user/footer');
 ?>