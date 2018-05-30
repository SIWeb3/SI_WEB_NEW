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
}