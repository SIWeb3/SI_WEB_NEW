<?php
class Kuotadosen_model extends CI_Model {
	function datadosen(){
		$query = $this->db->query("SELECT nip,nama_dosen FROM data_dosen");
		return $query->result();
	}
	function input($data = array()){
		return $this->db->insert('kuota_dosen',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	function lihatkuota(){
		$query = $this->db->query("SELECT data_dosen.nip,data_dosen.nama_dosen,kuota_dosen.kuota FROM `data_dosen` INNER JOIN kuota_dosen on data_dosen.nip=kuota_dosen.nip");
		return $query->result();
	}
	
}