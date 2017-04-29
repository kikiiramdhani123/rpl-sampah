<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_news extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function total_record() { //hitung jumlah total data
        $this->db->from("berita");
        return $this->db->count_all_results();
    }

    function getNews($limit, $start = 0) { //ambil semua berita untuk halaman news, dengan pagination
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(tgl_posting, '%d') AS hari",  FALSE ); //%d : Hari di bulan ini, angka (00-31)
        $this->db->select("DATE_FORMAT(tgl_posting, '%b') AS bulan",  FALSE ); //%b : Singkatan nama bulan (Bahasa Inggris) (Jan..Dec))
        $this->db->select("DATE_FORMAT(tgl_posting, '%Y') AS tahun",  FALSE ); //%Y : Tahun, empat angka
        $this->db->from('berita');
        //$this->db->join('t_user', 't_user.id_user = berita.id_user');
        $this->db->order_by("id_berita", "desc");
        $this->db->limit($limit, $start);

        return $this->db->get();
    }

    function getNewsRead($read) { //ambil 1 berita untuk halaman news_read, tanpa pagination
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(tgl_posting, '%d') AS hari",  FALSE ); //%d : Hari di bulan ini, angka (00-31)
        $this->db->select("DATE_FORMAT(tgl_posting, '%b') AS bulan",  FALSE ); //%b : Singkatan nama bulan (Bahasa Inggris) (Jan..Dec))
        $this->db->select("DATE_FORMAT(tgl_posting, '%Y') AS tahun",  FALSE ); //%Y : Tahun, empat angka
        $this->db->from('berita');
        //$this->db->join('t_user', 't_user.id_user = berita.id_user');
        $this->db->where('slug', $read);
        $query = $this->db->get();

        return $query->row_array();
    }

    function getNewsLatest() { //ambil berita untuk latest news, limit 5 berita terbaru
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by("id_berita", "desc");
        $this->db->limit(5);

        return $this->db->get();
    }


}

/* End of file M_news.php */
/* Location: ./application/modules/berita_tag/models/M_news.php */



/*

function getTags(){
        $this->db->select('id_berita, tag_berita');
        $this->db->from('berita');
        $this->db->order_by("id_berita", "desc");

        return $this->db->get();
    }

    function getKategori(){
        $this->db->select('*');
        $this->db->from('berita_kategori');
        $this->db->order_by("id_kategori", "desc");

        return $this->db->get();
    }
*/