<?php
class list_mahasiswa extends CI_Controller{    
    function index(){
    	$this->load->view("header");
        $this->load->model("list_mahas_model");
        //$judul          = "Daftar Barang";
        //$data['judul']  = $judul;
        $data['review'] = $this->list_mahas_model->list_review()->result();
        $data['r'] = $this->list_mahas_model->list_review()->row_array();
        $this->load->view('tampilan_list',$data);
        $this->load->view("footer");
    }
}
?>