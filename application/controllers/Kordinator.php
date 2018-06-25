<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kordinator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Kuotadosen_model');
		$this->load->model('logindosen_model');
		$this->load->model('koor_model');
        
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
		$this->load->view('kordinator/home',$data);
		$this->load->view('kordinator/footer');
	}

	public function kuota()
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


	public function inputjuduldosen(){
		$data = array(
			'uniqid'=>'cobajuduldosen',
		);

		$this->load->view('kordinator/content',$data);
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
			redirect(base_url('kordinator/daftarusulanjudul'));
	}

	function daftarusulanjudul(){
		$data = array(
			'uniqid' => 'cobadaftarusulanjudul',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_judul(),
		);

		$this->load->view('kordinator/content',$data);
	}

	function daftar(){
		$x['inner'] = $this->Pengajuan_Model->tampil_judul();
		$this->load->view('kordinator/daftarusulanjudul',$x);
	}

	function formdaftarusulanjuduldosen(){

	}

	public function daftarmhs()
	{
		$data = array(
			'uniqid' => 'cobadaftarmahasiswa',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_mhs(),
		);
		$this->load->view('kordinator/content',$data);
	}

	function daftarmahasiswa(){
		$x['inner'] = $this->Pengajuan_Model->tampil_mhs();
		$this->load->view('kordinator/datamahasiswa',$x);
	}


	public function daftardsn()
	{
		$data = array(
			'uniqid' => 'cobadaftardosen',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_dsn(),
		);
		$this->load->view('kordinator/content',$data);
	}

	function daftardosen(){
		$x['inner'] = $this->Pengajuan_Model->tampil_dsn();
		$this->load->view('kordinator/datadosen',$x);
	}
	function deletekuota(){
		if(isset($_GET['nip'])){
		$id=$_GET['nip'];
		//echo"$id";
		$this->Kuotadosen_model->delete_kuota($id);
		$this->session->set_flashdata('success', 'Berhasil di hapus');
		redirect(base_url('Kordinator'));
		}
	}
	function editkuota(){
		if(isset($_GET['nip'])){
		$id=$_GET['nip'];
		echo"$id";
		
		$data = array(
				'isi'=>$this->Kuotadosen_model->edit_kuota($id)
				);
		$this->load->view('kordinator/header');
		$this->load->view('kordinator/edit_kuota',$data);
		$this->load->view('kordinator/footer');
		}
	}
	public function updatekuota(){
		if(isset($_POST['kirim'])){
			$id = $this->input->post('nip');
			$insert = $this->Kuotadosen_model->update_kuota(array(
				'kuota' => $this->input->post('kuota')
            ), $id);
			$this->session->set_flashdata('success', 'Berhasil di update');
			redirect(base_url('Kordinator'));
		}
		else{
			echo"gagal";
		}
	  }


}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */