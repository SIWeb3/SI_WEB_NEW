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
		 }

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */