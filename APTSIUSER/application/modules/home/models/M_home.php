<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /*function getNewsLatest() { //ambil semua berita untuk halaman news
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(tanggal, '%d %b %Y') AS tanggal",  FALSE );
        $this->db->from('t_berita');
        $this->db->join('t_berita_kategori', 't_berita_kategori.id_kategori = t_berita.id_kategori');
        $this->db->join('t_user', 't_user.id_user = t_berita.id_user');
        $this->db->order_by("id_berita", "desc");
        $this->db->limit(5);

        return $this->db->get();
    }*/

    

}

/* End of file M_news.php */
/* Location: ./application/modules/berita_tag/models/M_news.php */