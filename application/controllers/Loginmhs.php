<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmhs extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('loginmhs_model');
	}

	public function index()
	{
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'data_dosen' => $this->loginmhs_model->get_dosen(),
		);

		
		$this->load->view('header');
		$this->load->view('loginmhs',$data);
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
			redirect(base_url('welcomemhs'));

		} else {
			$this->session->set_flashdata('error', 'Username atau Password Salah');
			redirect(base_url('loginmhs'));
		}

	}

	function register(){
		$this->cek();
		$data = array('error' => $this->session->flashdata('error'), );
		$this->load->view('header', $data);
		$this->load->view('register', $data);
		$this->load->view('footer', $data);
	}

	function daftar(){
		$cek = $this->loginmhs_model->cek_login('data_mahasiswa', array('nim' =>$this->input->post('nim')))->num_rows();

		if($cek > 0){
			$this->session->set_flashdata('error', 'username telah terdaftar sebelumnya');
			redirect(base_url('loginmhs/register'));
		} else {
			$data = array(
				'nim'=> $this->input->post('nim'),
				'nama'=> $this->input->post('nama'),
				'prodi'=> $this->input->post('prodi'),
				'golongan'=> $this->input->post('golongan'),
				'password'=> $this->input->post('password'),
				
			);

			$this->loginmhs_model->simpan('data_mahasiswa', $data);

			$this->session->set_flashdata('success', 'pendaftaran berhasil, silahkan login');
			redirect(base_url('loginmhs'));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function judulmhs(){
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
		);

		
		$this->load->view('header');
		$this->load->view('listjudulmhs',$data);
		$this->load->view('footer');
	}

	function hasilreview(){
		$cek=$this->loginmhs_model->hasilreview();
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'cek' => $cek
		);

		
		$this->load->view('headermhs');
		$this->load->view('hasilreview',$data);
		$this->load->view('footer');
	}

	
}