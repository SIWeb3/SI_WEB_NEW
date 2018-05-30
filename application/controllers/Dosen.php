<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logindosen extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('logindosen_model');
	}


	public function index()
	{
		$data = array(
			'uniqid'=>'home',
		);

		$this->load->view('dosen/content', $data);
	}

	public function inputjuduldosen(){
		$data = array(
			'uniqid'=>'juduldosen',
		);

		$this->load->view('dosen/content',$data);
	}

	function forminputjuduldosen(){
		$data = array(
				
				'nip'=> $this->input->post('nip'),
				'judul_dosen'=> $this->input->post('juduldosen'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'kuota'=> $this->input->post('kuota'),
			);

		$this->loginmhs_model->simpan('usulan_judul_dosen', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('dosen/index'));
	}

	


}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */