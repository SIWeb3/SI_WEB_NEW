<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logindosen_model extends CI_Model {

	function cek($nip, $password){
		$this->db->where('nip', $nip);
		$this->db->where('password', $password);
		return $this->db->get('data_dosen');
	}

	function select(){
		$query = $this->db->get('listjudul');  
         return $query;   
	}
}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */