<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewer extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Reviewer_model');
		$this->load->model('Pengajuan_Model');
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


public function reviewjudul(){
		/*$data = array(
				'id_review_mhs'=>$this->input->post('id_review_mhs'),
				'id_usulan'=>$this->input->post('id_usulan'),
				'nip'=> $this->input->post('nip'),
				'status'=> $this->input->post('status'),
				'deskripsi_review'=> $this->input->post('deskripsi_review'),
				

			);*/
			//$data1 =$this->load->database("review_ta"); 
			$data = array(
			'uniqid'=>'reviewjudul',
			);
			$this->load->view("reviewer/header");
			$this->load->model("Reviewer_model");
			$id_review_mhs=$this->session->userdata('$id_review_mhs');
			$data['review'] = $this->Reviewer_model->list_review($id_review_mhs);

			$this->load->view('reviewer/reviewjudul',$data);
			$this->load->view("reviewer/footer");

			//$this->load->view('reviewer/content',$data);
		//$this->logindosen_model->simpan('review_ta', $data);
		//$this->session->set_flashdata('success', 'Input judul berhasil');
			//redirect(base_url('reviewer/index'));
	}
	public function edit(){
		$this->load->view("reviewer/header");
		$this->load->model("Reviewer_model");
		$id_review_mhs=$this->session->userdata('$id_review_mhs');
		$data['review1'] = $this->Reviewer_model->list_review($id_review_mhs);
		$data['review2'] = $this->Reviewer_model->list($id_review_mhs);
		$data['review3'] = $this->Reviewer_model->list1($id_review_mhs);
		$this->load->view('reviewer/edit_review',$data);
		$this->load->view("reviewer/footer");			
	}
public function edit_simpan(){
	$id_review_mhs=$this->input->post('id_review_mhs');
	 $data['status'] = $this->input->post('status');
    $data['deskripsi_review'] = $this->input->post('deskripsi_review');
$this->Reviewer_model->edit_simpan($id_review_mhs, $data);
redirect(site_url('reviewer/reviewjudul'));
}
public function daftarusulanjudul(){
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

	function forminputjuduldosen(){
		$data = array(
				
				'nip'=> $this->input->post('nip'),
				'judul_dosen'=> $this->input->post('juduldosen'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'kuota'=> $this->input->post('kuota'),
				
			);

		$this->logindosen_model->simpan('usulan_judul_dosen', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('reviewer/daftarusulanjudul'));
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
		$this->load->view('reviewer/content',$data);
		//$this->load->view('kordinator/footer');
	}
	function usulanmhs1(){
		/*$data = array(
			'uniqid' => 'usulantamhs',
			// $this->load->model('usulanmahasiswa_model'),
			// 'inner' => $this->usulanmahasiswa_model->tampil_usulan($this->session->userdata('nip')),
			// $this->load->view('dosen/usulantamhs'),
		);*/
		$this->load->model('Reviewer_model');
		$nip=$this->session->userdata('nip');
		$data = array(
			'uniqid' => 'usulantamhs',
			$this->load->model('Reviewer_model'),
			'inner' => $this->Reviewer_model->tampil_usulan($nip),
		);
			/*$this->load->view('dosen/header');
			$this->load->model('usulanmahasiswa_model');
			$nip=$this->session->userdata('nip');
			$data['inner']= $this->usulanmahasiswa_model->tampil_usulan($nip);
			$this->load->view('dosen/usulantamhs',$data);
			$this->load->view('dosen/footer');*/
			$this->load->view('reviewer/content',$data);
	}

function usulan(){
		$x['inner'] = $this->Reviewer_model->tampil_usulan();
		$this->load->view('reviewer/usulantamhs',$x);
	}

 }

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */