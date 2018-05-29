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
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
		);

		$this->load->view('header');
		$this->load->view('logindosen' , $data);
		$this->load->view('footer');
	}


	function masuk(){

		$nip = $this->input->post('nip');
		$password = $this->input->post('password');

		$cek = $this->logindosen_model->cek($nip, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['nip'] = $data->nip;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('hak_akses') == '1')
			{
				redirect('dosen/index');
			}
			elseif($this->session->userdata('hak_akses') == '2')
			{
				redirect('dosen/index');
			}
			elseif($this->session->userdata('hak_akses') == '3')
			{
				redirect('dosen/index');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Username atau Password Salah');
			redirect(base_url('logindosen'));
		}

	}


	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}