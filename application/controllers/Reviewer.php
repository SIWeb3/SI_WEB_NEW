<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('logindosen_model');
	}


	public function index()
	{
		$data = array(
			'success'=> $this->session->flashdata('success'),
			'error'=> $this->session->flashdata('error'),
			'uniqid'=>'home',
		);

		$this->load->view('reviewer/content', $data);
	}

	public function inputjuduldosen(){
		$data = array(
			'uniqid'=>'juduldosen',
		);

		$this->load->view('reviewer/content',$data);
	}

	function forminputjuduldosen(){
		$data = array(
				
				'nip'=> $this->input->post('nip'),
				'judul_dosen'=> $this->input->post('juduldosen'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'kuota'=> $this->input->post('kuota'),
			);

		$this->logindosen_model->simpan('usulan_judul_dosen', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('reviewer/index'));
	}

	function daftarusulanjudul(){
		$data = array(
			'uniqid' => 'daftarusulanjudul',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_judul(),
		);

		$this->load->view('reviewer/content',$data);
	}

	function daftar(){
		$x['inner'] = $this->Pengajuan_Model->tampil_judul();
		$this->load->view('reviewer/daftarusulanjudul',$x);
	}

	function formdaftarusulanjuduldosen(){

	}

 }

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */