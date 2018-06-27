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
	    return $x->result(); //mengembalikan data? 

	    $x=$this->db->query("select review_ta.id_review_mhs,review_ta.id_usulan,usulan_ta_mhs.deskripsi,usulan_ta_mhs.dosen_pembimbing,usulan_ta_mhs.tgl_input,review_ta.status,review_ta.deskripsi_review from' review_ta, usulan_ta_mhs'");
	}

	function tampil_mhs(){
		$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('data_mahasiswa'); //dari tabel data_users
	    //$this->db->join('data_dosen', 'usulan_judul_dosen.nip = data_dosen.nip', 'left'); //menyatukan tabel users menggunakan left join
	    $x = $this->db->get(); //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}

	function tampil_dsn(){
		$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('data_dosen'); //dari tabel data_users
	    //$this->db->join('data_dosen', 'usulan_judul_dosen.nip = data_dosen.nip', 'left'); //menyatukan tabel users menggunakan left join
	    $x = $this->db->get(); //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}

	function tampil_dpm(){
		$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('usulan_ta_mhs'); //dari tabel data_users
	    //$this->db->join('data_dosen', 'usulan_judul_dosen.nip = data_dosen.nip', 'left'); //menyatukan tabel users menggunakan left join
	    $x = $this->db->get(); //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}

	function kordinator_edit($nip){
    $sql = sprintf("update data_dosen set nip='$this->nip',nama_dosen='$this->nama_dosen',hak_akses='$this->hak_akses'");
    $this->db->query($sql);
    }

    function edit_simpan($data=array(),$nip){
    $this->db->where('nip',$nip);
    $this->db->update('data_dosen',$data);
    }


}