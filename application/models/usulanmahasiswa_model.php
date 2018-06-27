<?php 
 
class usulanmahasiswa_model extends CI_Model{

	public function get_jadwal_awal(){
        $this ->db ->select('Tgl_awal');
		$this ->db ->from('tanggal');
		$query = $this ->db ->get()->row_array();
		return $query;
    }
    public function get_jadwal_akhir(){
        $this ->db ->select('Tgl_akhir');
		$this ->db ->from('tanggal');
		$query = $this ->db ->get()->row_array();
		return $query;
    }
	
	public function get_jadwal(){
		return $this ->db ->get('tanggal');
	}

	function tampil_usulan($id){
		$x=$this->db->query("SELECT usulan_ta_mhs.nim, data_mahasiswa.nama, usulan_ta_mhs.prodi, usulan_ta_mhs.golongan, usulan_ta_mhs.judul, usulan_ta_mhs.pengerjaan, usulan_ta_mhs.deskripsi, usulan_ta_mhs.tgl_input, usulan_ta_mhs.judul_dosen,usulan_ta_mhs.status_pilih FROM `usulan_ta_mhs` INNER JOIN data_dosen on usulan_ta_mhs.dosen_pembimbing=data_dosen.nip INNER JOIN data_mahasiswa on data_mahasiswa.nim=usulan_ta_mhs.nim INNER JOIN review_ta ON usulan_ta_mhs.id_usulan=review_ta.id_usulan where usulan_ta_mhs.dosen_pembimbing='$id' && review_ta.status='diterima'"); //mengambil semua data dari tabel data_users dan users
	# code...		
	     //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}
	function tampil_mhs(){
		$this->db->select('*'); //mengambil semua data dari tabel data_users dan users
	    $this->db->from('data_dosen'); //dari tabel data_users
	    //$this->db->join('data_dosen', 'usulan_judul_dosen.nip = data_dosen.nip', 'left'); //menyatukan tabel users menggunakan left join
	    $x = $this->db->get(); //mengambil seluruh data
	    return $x->result(); //mengembalikan data
	}
	function usulan_mahasiswa($id){
		$y=$this->db->query("INSERT INTO mahasiswa_bimbingan_sementara (nip, nim) SELECT nim
		FROM data_mahasiswa
		INNER JOIN data_dosen ON data_dosen.nip = data_mahasiswa.nim");
	}
}