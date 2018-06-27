<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('logindosen_model');
		$this->load->model('Pengajuan_Model');
	}


	public function index()
	{
		$data = array(
			'success'=> $this->session->flashdata('success'),
			'error'=> $this->session->flashdata('error'),
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

		$this->logindosen_model->simpan('usulan_judul_dosen', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('dosen/index'));
	}

	function daftarusulanjudul(){
		$data = array(
			'uniqid' => 'daftarusulanjudul',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_judul(),
		);

		$this->load->view('dosen/content',$data);
	}

	function daftar(){
		$x['inner'] = $this->Pengajuan_Model->tampil_judul();
		$this->load->view('dosen/daftarusulanjudul',$x);
	}

	function usulanmhs1(){
		/*$data = array(
			'uniqid' => 'usulantamhs',
			// $this->load->model('usulanmahasiswa_model'),
			// 'inner' => $this->usulanmahasiswa_model->tampil_usulan($this->session->userdata('nip')),
			// $this->load->view('dosen/usulantamhs'),
		);*/
		$this->load->model('usulanmahasiswa_model');
		$nip=$this->session->userdata('nip');
		$data = array(
			'uniqid' => 'usulantamhs',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->usulanmahasiswa_model->tampil_usulan($nip),
		);
			/*$this->load->view('dosen/header');
			$this->load->model('usulanmahasiswa_model');
			$nip=$this->session->userdata('nip');
			$data['inner']= $this->usulanmahasiswa_model->tampil_usulan($nip);
			$this->load->view('dosen/usulantamhs',$data);
			$this->load->view('dosen/footer');*/
			$this->load->view('dosen/content',$data);
	}

	function usulan(){
		$x['inner'] = $this->usulanmahasiswa_model->tampil_usulan();
		$this->load->view('dosen/usulantamhs',$x);
	}

	function formdaftarusulanjuduldosen(){

	}

	public function dosbim()
	{
		$data = array(
			'uniqid' => 'mahasiswabimbingan',
				'success' => $this->session->flashdata('success'),
				'error' => $this->session->flashdata('error'),
				'data_dosen'=>$this->Pengajuan_Model->datadosen(),
				'data_mahasiswa'=>$this->Pengajuan_Model->data_mahasiswa(),
				'lihat'=>$this->Pengajuan_Model->lihatdospem(),	
				//'isi_dospem'=>$this->Pengajuan_Model->input(),		
				);
				
		//$this->load->view('kordinator/header');
		$this->load->view('dosen/content',$data);
		//$this->load->view('kordinator/footer');
	}

 }

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */