<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmhs extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('loginmhs_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('loginmhs');
		$this->load->view('footer');
	}

	function cek(){
		if(@$this->session->userdata('NIM')){
			redirect(base_url());
		}

	}

	function masuk(){
		$this->cek();

		$nim=$this->input->post('nim');
		$password=$this->input->post('password');

		$where = array(
			'nim' => $nim ,
			'password' => $password, 
		);

		$cek=$this->loginmhs_model->cek_login('data_mahasiswa', $where)->num_rows();
		$result=$this->loginmhs_model->cek_login('data_mahasiswa', $where)->row();

		if($cek > 0){

			$data_session= array(
				'nim' => $result->nim,
				'password' => $result->$password,
			);

			$this->session->set_userdata($data_session);
			redirect(base_url());

		} else {
			$this->session->set_flashdata('error', 'Username atau Password Salah');
			redirect(base_url('loginmhs'));
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
