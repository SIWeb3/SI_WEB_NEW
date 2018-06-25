<?php
class list_dospem extends CI_Controller{    
    function index(){
    	$this->load->view("header");
        $this->load->model("list_dospem_model");
        //$judul          = "Daftar Barang";
        //$data['judul']  = $judul;
        $data['review'] = $this->list_dospem_model->list_review()->result();
        $data['r'] = $this->list_dospem_model->list_review()->row_array();
        $this->load->view('tampilanlist_dospem',$data);
        $this->load->view("footer");
    }
}
?>