<?php
class kordinator_hakses extends CI_Controller{    
    function index(){
        $this->load->view("header");
        $this->load->model("koor_model");
        //$judul          = "Daftar Barang";
        //$data['judul']  = $judul;
        $data['review'] = $this->kordinator_model->list_review()->result();
        $data['r'] = $this->kordinator_model->list_review()->row_array();
        $this->load->view('tampilan_koor',$data);
        $this->load->view("footer");
    }

     function edit(){
        $this->load->model('kordinator_model');
        $nip = $this->uri->segment(4);
        $data['product'] = $this->kordinator_model->product($nim)->row_array();
        $this->load->view('reviewer_edit',$data);
    }

    function edit_simpan(){
        $id         = $this->input->post('id');
        $databarang = array(
            'nip'   =>  $this->input->post('nip'),
            'nama_dosen'   =>  $this->input->post('nama_dosen'),
            'hak_akses'    =>  $this->input->post('hak_akses'),
            'prodi'        =>  $this->input->post('prodi'));
        $this->db->where('nip',$id);
        $this->db->update('kordinator_hakses',$databarang);
        redirect('kordinator_hakses');
    }
}
?>