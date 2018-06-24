<?php 
 
class Pengajuan_Model extends CI_Model{
	function tampil_data(){
		return $this->db->get('usulan_judul_dosen');
	}

	function tampil_judul(){
		$this->db->select('usulan_judul_dosen.*, data_dosen.nama_dosen'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('usulan_judul_dosen'); //dari tabel data_users
	    $this->db->join('data_dosen', 'usulan_judul_dosen.nip = data_dosen.nip', 'left'); //menyatukan tabel users menggunakan left join
	    $x = $this->db->get(); //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}
}