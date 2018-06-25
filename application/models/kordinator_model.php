<?php
class kordinator_model extends CI_Model{
    
    function list_review(){
        // ambil data barang dari tabel barang
        $review = $this->db->get('usulan_ta_mhs');
        return $review;
    }
    
    function product($nip){
        return $this->db->get_where('usulan_ta_mhs',array('nim'=>$nim));
    }

    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
}