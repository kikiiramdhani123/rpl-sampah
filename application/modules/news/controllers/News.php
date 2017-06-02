<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_news','mymodel');
		$this->load->library('pagination');
	}

	public function index()
	{
		/*pagination*/
		
		$config['base_url'] = base_url().'news/index/';
        $config['total_rows'] = $this->mymodel->total_record();
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $this->pagination->initialize($config);
        $start = $this->uri->segment(3, 0);
        /*pagination*/

	    $data = array(
	    	'home' => 'home', //khusus halaman news, var home diisi home, supaya halaman news gak ada breadcrumb
			//'bahasa' => 'news', //news tidak ada halaman versi english
			'isi' => 'news', //buka view news
			'getNews' => $this->mymodel->getNews($config['per_page'],$start), //untuk menampilkan berita utama
			'getNewsLatest' => $this->mymodel->getNewsLatest(), //untuk menampilkan latest news, limit 5 berita terbaru
			'pagination' => $this->pagination->create_links() //menyiapkan link untuk pagination
			);
	    $this->load->view('user/main', $data);
	}

	public function read($read) //Baca berita perhalaman
	{
		$data = array(
			'home' => 'home', //khusus halaman news, var home diisi home, supaya halaman news gak ada breadcrumb
			//'bahasa' => 'news', //news tidak ada halaman versi english
			'isi' => 'news_read', //buka view news_read
			'getNewsRead' => $this->mymodel->getNewsRead($read),
			'getNewsLatest' => $this->mymodel->getNewsLatest() //untuk menampilkan latest news, limit 5 berita terbaru
			);
		$this->load->view('user/main', $data);	
	}

}