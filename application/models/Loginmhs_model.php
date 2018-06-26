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

	function listjuduldosen(){
		$this->db->select('usulan_judul_dosen.nip, data_dosen.nama_dosen, usulan_judul_dosen.judul_dosen, usulan_judul_dosen.deskripsi, usulan_judul_dosen.kuota');
		$this->db->from('usulan_judul_dosen');
		$this->db->join('data_dosen', 'data_dosen.nip=usulan_judul_dosen.nip');

		$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
		
	}

	function ambiljuduldosen(){
		
	}

	function hasilreview(){
		$this->db->select('usulan_ta_mhs.nim, data_mahasiswa.nama, data_mahasiswa.prodi, data_mahasiswa.golongan, usulan_ta_mhs.judul, usulan_ta_mhs.pengerjaan, review_ta.status, review_ta.deskripsi_review');
		$this->db->from('usulan_ta_mhs');
		$this->db->join('data_mahasiswa', 'data_mahasiswa.nim=usulan_ta_mhs.nim');
		$this->db->join('review_ta', 'review_ta.id_usulan=usulan_ta_mhs.id_usulan');

		$data = $this->db->get(); //mengambil seluruh data
    	return $data->result(); //mengembalikan data
		
	}

		 }

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */