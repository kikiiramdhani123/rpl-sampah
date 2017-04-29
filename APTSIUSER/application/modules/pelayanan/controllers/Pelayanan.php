<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelayanan');
		$this->load->library('pagination');		
	}

	public function angkut()
	{
		$config['base_url'] = base_url().'pelayanan/angkut/';
		$config['total_rows'] = $this->M_pelayanan->jmllaporan();
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
			
		//format tampilan
		$config['full_tag_open'] = '<ul class="pagination pull-right">';$config['full_tag_close'] = '</ul>';$config['first_tag_open'] = '<li>';$config['first_tag_close'] = '</li>';$config['prev_tag_open'] = '<li>';$config['prev_tag_close'] = '</li>';$config['next_tag_open'] = '<li>';$config['next_tag_close'] = '</li>';$config['last_tag_open'] = '<li>';$config['cur_tag_open'] = '<li class="active"><a href="#"><span class="sr-only">(current)</span>';$config['cur_tag_close'] = '</a></li>';$config['num_tag_open'] = '<li>';$config['num_tag_close'] = '</li>';$config['first_link']='<span class="glyphicon glyphicon-fast-backward"></span>';$config['last_link']='<span class="glyphicon glyphicon-fast-forward"></span>';$config['next_link']='<span class="fa fa-chevron-right"></span>';$config['prev_link']='<span class="fa fa-chevron-left"></span>';
			
		$this->pagination->initialize($config);
			
		$data = array(
			'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
			'background' => 'Profile/Header/gambaranumum.jpg', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
			'uri1' => '<li><a>Pelayanan</a></li>', //segmen uri 1 pada breadcrumb
			'uri2' => 'Pengangkutan Sampah', //segmen uri 2 pada breadcrumb
			'isi' => 'angkut' //buka view dlc
			);
		$data['halaman']=$this->pagination->create_links();
		$laporan = $this->M_pelayanan->view($config['per_page'],$this->uri->segment(3));
        $data['laporan'] = $laporan;
	    $this->load->view('user/main', $data);
	}

    public function cari()
	{
		$nama_pelapor = $this->input->post('cari');
		$data = array(
				'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
				'background' => 'Profile/Header/gambaranumum.jpg', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
				'uri1' => '<li><a>Pelayanan</a></li>', //segmen uri 1 pada breadcrumb
				'uri2' => 'Pengangkutan Sampah', //segmen uri 2 pada breadcrumb
				'isi' => 'angkut' //buka view dlc
			);
		$data['laporan'] = $this->M_pelayanan->cari($nama_pelapor);
	    $this->load->view('user/main', $data);
	}
    
}