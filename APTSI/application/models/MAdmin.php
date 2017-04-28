<?php

class MAdmin extends CI_Model {
    var $table='admin';
    function __construct() {
        parent::__construct();
    }
    public function validasi_admin($data_admin){
        $this->db->where("username",$data_admin['username']);
        $this->db->where("password",$data_admin['password']);
        return $this->db->get('admin')->row();
    }
	
    function getAdmin(){
        $query=$this->db->select('*')->from($this->table)->where('username',$this->session->userdata('admin')['username'])->get();
        return $query->result();
    }   

	function laporanBaru(){
		$query=$this->db->select('*')->from('laporan')->where('status',0)->get();
        return $query->result();
	}
	
	function laporanProses(){
		$query=$this->db->select('*')->from('laporan')->where('status',1)->get();
        return $query->result();
	}
	
	function laporanSelesai(){
		$query=$this->db->select('*')->from('laporan')->where('status',2)->get();
        return $query->result();
	}
	
	function hapuslaporan($id){
        $this->db->where('id_laporan',$id);
        $this->db->delete(array('laporan'));
    }
    function makelaporanproses($id){
        $data=array(
            'status'=> 1
        );
        $this->db->where('id_laporan',$id);
        $this->db->update('laporan',$data);
    }
	
	function makelaporanselesai($id){
        $data=array(
            'status'=> 2
        );
        $this->db->where('id_laporan',$id);
        $this->db->update('laporan',$data);
    }
	

	
}
