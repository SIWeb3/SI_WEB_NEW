<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logindosen_model extends CI_Model {

	function cek($nip, $password){
		$this->db->where('nip', $nip);
		$this->db->where('password', $password);
		return $this->db->get('data_dosen');
	}

	//function select(){
		//return $this->db->get_where($table, $where);
	//}
	//function tampiljudul($table, $where){
		//return $this->db->get_where($table,$where);

	//}
		function simpan($table, $data){
		$this->db->insert($table, $data);

	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */