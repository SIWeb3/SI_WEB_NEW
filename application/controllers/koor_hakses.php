<?php
class koor_hakses extends CI_Controller{    
    function index(){
    	$this->load->view("header");
        $this->load->model("koor_model");
        //$judul          = "Daftar Barang";
        //$data['judul']  = $judul;
        $data['review'] = $this->koor_model->list_review()->result();
        $data['r'] = $this->koor_model->list_review()->row_array();
        $this->load->view('tampilan_koor',$data);
        $this->load->view("footer");
      
    }

        public function hakakses()
    {
        $data = array(
            'uniqid' => 'reviewer_edit',
                'success' => $this->session->flashdata('success'),
                'error' => $this->session->flashdata('error'),
                'data_dosen'=>$this->koor_model->datadosen(),       
                );
                
        //$this->load->view('kordinator/header');
        $this->load->view('kordinator/content',$data);
        //$this->load->view('kordinator/footer');
    }
    function isihakakses(){
        if (isset($_POST['kirim'])){
            $data = $this->koor_model->input(array (

            'nip' => $this->input->post('nama_dosen'),
            'hakakses' => $this->input->post('hakakses')));
            $this->session->set_flashdata('success', 'Berhasil di tambahkan');
            redirect(base_url('Kordinator/'));
        }else{
            $this->session->set_flashdata('error', 'Error di tambahkan');
            redirect(base_url('Kordinator/kuota'));
        }
    }

    function edithakakses(){
        if(isset($_GET['nip'])){
        $id=$_GET['nip'];
        echo"$id";
        
        $data = array(
            'uniqid' => 'reviewer_edit',
                'isi'=>$this->koor_model->edit_hak($id)
                );
        $this->load->view('kordinator/header');
        $this->load->view('kordinator/edit_hak',$data);
        $this->load->view('kordinator/footer');
        }
    }
    public function updatehakakses(){
        if(isset($_POST['kirim'])){
            $id = $this->input->post('nip');
            $insert = $this->koor_model->update_hak(array(
                'hak' => $this->input->post('hak')
            ), $id);
            $this->session->set_flashdata('success', 'Berhasil di update');
            redirect(base_url('Kordinator'));
        }
        else{
            echo"gagal";
        }
    }

}
?>