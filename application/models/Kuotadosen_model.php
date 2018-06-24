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
	function delete_kuota($id){
		$this->db->where('nip', $id);
        return $this->db->delete('kuota_dosen');
	}
	function edit_kuota($id){
		$query = $this->db->query("SELECT data_dosen.nama_dosen,kuota_dosen.* FROM `kuota_dosen`,data_dosen where kuota_dosen.nip=data_dosen.nip && data_dosen.nip='$id'");
		return $query->result();
	}
	function update_kuota($data = array(),$id){
		$this->db->where('nip',$id);
		return $this->db->update('kuota_dosen',$data);
	}
	
}