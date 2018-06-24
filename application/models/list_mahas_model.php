<?php
class list_mahas_model extends CI_Model{
    
    function list_review(){
        // ambil data barang dari tabel barang
        $review = $this->db->get('data_mahasiswa');
        return $review;
    }
    
    function product($nip){
        return $this->db->get_where('data_mahasiswa',array('nim'=>$nim));
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
}