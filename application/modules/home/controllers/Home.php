<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
	    	'home' => 'home', //untuk membedakan antara halaman home dengan halaman lain
			'judul' => '',  //untuk judul breadcrumb
			'bahasa' => 'home/home_eng',  //untuk pindah ke halaman versi inggrisnya
			'isi' => 'home', //untuk load view halaman terkait
			//'getNewsLatest' => $this->mymodel->getNewsLatest(), //untuk menampilkan latest news
			
			);
	    $this->load->view('user/main', $data);
	}

	
}