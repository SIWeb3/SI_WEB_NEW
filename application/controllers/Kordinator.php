<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kordinator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Kuotadosen_model');
        
	}
	public function index()
	{
		$data = array(
				'success' => $this->session->flashdata('success'),
				'error' => $this->session->flashdata('error'),
				'data_dosen'=>$this->Kuotadosen_model->datadosen(),
				'lihatkuota'=>$this->Kuotadosen_model->lihatkuota(),
				
				);
				
		$this->load->view('kordinator/header');
		$this->load->view('kordinator/kuotadosen',$data);
		$this->load->view('kordinator/footer');
	}
	function isikuota(){
		if (isset($_POST['kirim'])){
			$data = $this->Kuotadosen_model->input(array (
			'nip' => $this->input->post('nama_dosen'),
			'kuota' => $this->input->post('kuota')));
			$this->session->set_flashdata('success', 'Berhasil di tambahkan');
			redirect(base_url('Kordinator'));
		}else{
			$this->session->set_flashdata('error', 'Error di tambahkan');
			redirect(base_url('Kordinator'));
		}
	}
}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */