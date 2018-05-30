<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmhs_model extends CI_Model {
	public $nim;
	public $nama_dosen;
	public $prodi;

	function cek_login($table, $where){
		return $this->db->get_where($table,$where);
	}

	function simpan($table, $data){
		$this->db->insert($table, $data);
	}

	public function get_dosen(){
	     $query = $this->db->query("SELECT * FROM data_dosen");
		return $query->result();
	}	

	function listjudul($nim){
		// $this->db->select('*');	
		// $this->db->join('data_dosen', 'data_dosen.nip=usulan_ta_mhs.dosen_pembimbing');
		// $this->db->from('usulan_ta_mhs');
		// $this->db->where('nim', $nim);

		// $query=$this->db->get();
		// return $query;

		$this->db->select('*');
		$this->db->from('usulan_ta_mhs');
		$this->db->where('nim', $nim);

		$query=$this->db->get();
		return $query;

	}


		 }

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */