<?php
class list_dosen extends CI_Controller{    
    function index(){
    	$this->load->view("header");
        $this->load->model("list_dosen_model");
        //$judul          = "Daftar Barang";
        //$data['judul']  = $judul;
        $data['review'] = $this->list_dosen_model->list_review()->result();
        $data['r'] = $this->list_dosen_model->list_review()->row_array();
        $this->load->view('tampilan_listdosen',$data);
        $this->load->view("footer");
    }
}
?>