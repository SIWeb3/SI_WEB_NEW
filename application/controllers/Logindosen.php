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
		$hak_akses = $this->input->post('hak_akses');

		$cek = $this->logindosen_model->cek($nip, $password, $hak_akses);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['nip'] = $data->nip;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$sess_data['nim'] = $data->nim;
				$this->session->set_userdata($sess_data);
				$this->session->set_userdata($nip);
				$this->session->set_userdata($password);
				$this->session->set_userdata($hak_akses);
				$this->session->set_userdata($nim);


			}

			if($this->session->userdata('hak_akses') == '1')
			{
				redirect('dosen/index');
			}
			elseif($this->session->userdata('hak_akses') == '2')
			{
				redirect('reviewer/index');
			}
			elseif($this->session->userdata('hak_akses') == '3')
			{
				redirect('kordinator/index');
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