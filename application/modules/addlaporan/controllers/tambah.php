<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tambah_m'); 
	}
	
	public function index(){
			$data = array(
			'home' => '', //penanda kalau ini bukan halaman home, agar breadcrumb bisa dipanggil
			'background' => 'Profile/Header/gambaranumum.jpg', //background breadcrumb setiap halaman berbeda
			'uri1' => '<li><a>Profil</a></li>', //segmen uri 1 pada breadcrumb
			'uri2' => 'Gambaran Umum', //segmen uri 2 pada breadcrumb
			'isi' => 'tambah_v' //buka view gambaran umum
			);

		/*$this->load->library('googlemaps');

		$config = array();
		$config['center'] = '-6.598258, 106.811458';
		$config['onboundschanged'] = 'if (!centreGot) {
			var mapCentre = map.getCenter();
			marker_0.setOptions({
				position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
			});
		}
		centreGot = true;';
		$this->googlemaps->initialize($config);
		   
		// set up the marker ready for positioning 
		// once we know the users location
		$marker = array();
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();*/

		
	    $this->load->view('user/main', $data);
    }

	public function upload()
	{
			$nama_pelapor = $this->input->post('nama_pelapor');
			$no_telp = $this->input->post('no_telp');
			$deskripsi = $this->input->post('deskripsi');
			$lokasi = $this->input->post('lokasi');
			$nama_asli = $_FILES['foto']['name'];
			
			$config['upload_path'] = './assets/laporan/';
			$config['allowed_types'] = 'jpeg|gif|jpg|png';
			$config['overwrite'] = 'TRUE';
			$config['file_name'] = $nama_asli;
			$config['remove_spaces'] = 'TRUE';
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('foto')){
				redirect(base_url().'addlaporan/tambah');
			}else{
				$data = array('upload' => $this->upload->data());
				$foto = $data['upload']['file_name'];
				
				$this->tambah_m->insert($nama_pelapor,$no_telp,$deskripsi,$lokasi,$foto);
				redirect(base_url().'pelayanan/angkut');
			}
	}
    
}