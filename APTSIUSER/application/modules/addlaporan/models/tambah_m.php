<?php
	class Tambah_m extends CI_Model {
		
		//Method
		public function insert($nama_pelapor,$no_telp,$deskripsi,$lokasi,$foto) {
			$data = array ('nama_pelapor' => $nama_pelapor,'no_telp' => $no_telp,'deskripsi' => $deskripsi,'lokasi' => $lokasi,'foto' => $foto,'status' => 0,'id_admin' => 1);
			return $this->db->insert('laporan',$data);
		}
	}
?>