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

    function datadosen(){
	$query = $this->db->query("SELECT nip,nama_dosen FROM data_dosen");
	return $query->result();

	}
    function data_mahasiswa(){
	$query = $this->db->query("SELECT nim,nama FROM data_mahasiswa");
	return $query->result();
	}

	function input($data = array()){
	return $this->db->insert('mahasiswa_bimbingan',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}

	function lihatdospem(){
	$query = $this->db->query("SELECT mahasiswa_bimbingan.nip,data_dosen.nama_dosen, data_dosen.prodi, mahasiswa_bimbingan.nim, data_mahasiswa.nama, data_mahasiswa.prodi,data_mahasiswa.golongan FROM `mahasiswa_bimbingan` INNER JOIN data_dosen on data_dosen.nip=mahasiswa_bimbingan.nip INNER JOIN data_mahasiswa on data_mahasiswa.nim=mahasiswa_bimbingan.nim ");
		return $query->result();
	}

		function tampil_usulan(){
		$x=$this->db->query("SELECT usulan_ta_mhs.nim, data_mahasiswa.nama, usulan_ta_mhs.prodi, usulan_ta_mhs.golongan, usulan_ta_mhs.judul, usulan_ta_mhs.pengerjaan, usulan_ta_mhs.deskripsi, usulan_ta_mhs.tgl_input, usulan_ta_mhs.judul_dosen,usulan_ta_mhs.status_pilih FROM `usulan_ta_mhs` INNER JOIN data_mahasiswa on data_mahasiswa.nim=usulan_ta_mhs.nim INNER JOIN review_ta ON usulan_ta_mhs.id_usulan=review_ta.id_usulan where usulan_ta_mhs.dosen_pembimbing && review_ta.status='diterima'"); //mengambil semua data dari tabel data_users dan users
	# code...		
	     //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}
}