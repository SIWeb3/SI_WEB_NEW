<?php
class list_dosen_model extends CI_Model{
    
    function list_review(){
        // ambil data barang dari tabel barang
        $review = $this->db->get('data_dosen');
        return $review;
    }
    
    function product($nip){
        return $this->db->get_where('data_dosen',array('nip'=>$nip));
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
}