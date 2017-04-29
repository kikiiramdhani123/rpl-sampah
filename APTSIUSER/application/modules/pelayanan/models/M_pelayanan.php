<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelayanan extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function view($perpage,$uri) {
			$this->db->select('*');
			$this->db->from('laporan');
			$this->db->limit($perpage,$uri);
			return $this->db->get();	
		}
	
	public function jmllaporan() {
		$this->db->select('*');
		$this->db->from('laporan');
		return $this->db->count_all_results();
	}
	
	public function cari($nama_pelapor) {
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->like('nama_pelapor',$nama_pelapor);
		return $this->db->get();
	}

}

/* End of file m_berita_kategori.php */
/* Location: ./application/modules/berita_kategori/models/m_berita_kategori.php */