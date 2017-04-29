<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
	    $this->load->view('home');
	}

	public function gambaranumum()
	{
		$data = array(
			'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
			'background' => 'Profile/Header/gambaranumum.jpg', //background breadcrumb setiap halaman berbeda
			'uri1' => '<li><a>Profil</a></li>', //segmen uri 1 pada breadcrumb
			'uri2' => 'Gambaran Umum', //segmen uri 2 pada breadcrumb
			'isi' => 'gambaranumum' //buka view gambaran umum
			);
	    $this->load->view('user/main', $data);
	}

	public function visi()
	{
	    $data = array(
	    	'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
	    	'background' => 'Profile/Header/visi.jpg', //background breadcrumb setiap halaman berbeda
	    	'uri1' => '<li><a>Profil</a></li>', //segmen uri 1 pada breadcrumb
	    	'uri2' => 'Visi & Misi', //segmen uri 2 pada breadcrumb
			'isi' => 'visi-misi' //buka view visi-misi
			);
	    $this->load->view('user/main', $data);
	}


	public function tupoksi()
	{
	    $data = array(
	    	'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
	    	'background' => 'Profile/Header/tuposi.jpg', //background breadcrumb setiap halaman berbeda
	    	'uri1' => '<li><a>Profil</a></li>', //segmen uri 1 pada breadcrumb
	    	'uri2' => 'Tugas Pokok & Fungsi', //segmen uri 2 pada breadcrumb
			'isi' => 'tupoksi' //buka view filosofi
			);
	    $this->load->view('user/main', $data);
	}

}