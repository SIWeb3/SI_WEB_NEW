<?php
class Reviewer_model extends CI_Model{
     function __construct(){
        parent::__construct();  
    }
    function list_review($id_review_mhs){
        // ambil data barang dari tabel barang
        //$review = $this->db->get('review_ta');

        //return $review;
    	/*$this->db->select('review_ta.id_review_mhs','usulan_ta_mhs.id_usulan','usulan_ta_mhs.judul','usulan_ta_mhs.deskripsi','usulan_ta_mhs.dosen_pembimbing','usulan_ta_mhs.tgl_input','review_ta.status','review.ta.deskripsi_review');
    	$this->db->from('review_ta','usulan_ta_mhs');
    	//$this->db->join("review_ta"," usulan_ta_mhs.id_usulan = review_ta.id_usulan",'right');
    	$this->db->where("review_ta.id_review_mhs", $id_review_mhs);
*/

    	$w=$this->db->query("select review_ta.id_review_mhs,review_ta.id_usulan,usulan_ta_mhs.judul,usulan_ta_mhs.deskripsi,usulan_ta_mhs.dosen_pembimbing,usulan_ta_mhs.tgl_input,review_ta.status,review_ta.deskripsi_review from review_ta, usulan_ta_mhs");
        return $w->result();
    }
function list(){
    $q=$this->db->query("select judul from usulan_ta_mhs");
    return $q->result();
} 
function list1(){
    $q=$this->db->query("select deskripsi from usulan_ta_mhs");
    return $q->result();
}   
    function product($id_review_mhs){
        return $this->db->get_where('review_ta',array('id_review_mhs'=>$id_review_mhs));
      	
    }
     function edit_review($id_review_mhs){
    $sql = sprintf("update review_ta set id_review_mhs='$this->id_review_mhs',id_usulan='$this->id_usulan',nip='$this->nip',status='$this->status',deskripsi_review='$this->deskripsi_review'");
    $this->db->query($sql);
    }

    function edit_simpan($id_review_mhs,$data){
    $this->db->where('id_review_mhs',$id_review_mhs);
    $this->db->update('review_ta',$data);
    }


}