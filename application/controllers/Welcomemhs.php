<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomemhs extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('loginmhs_model');
	}

	public function index(){
		$cek=$this->loginmhs_model->listjuduldosen();
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'cek' => $cek
		);


		$this->load->view('headermhs');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	function formusulanjudul(){
		$this->load->model('usulanmahasiswa_model');
		$tgl_awal = $this ->usulanmahasiswa_model->get_jadwal_awal();
        $tgl_akhir = $this ->usulanmahasiswa_model->get_jadwal_akhir();

        
        date_default_timezone_set('Asia/Jakarta');
            $y = date("Y");
            $m=date("m");
            $d=date("d");
            $akhir = explode('-',$tgl_akhir['Tgl_akhir']);
            $awal = explode('-',$tgl_awal['Tgl_awal']);
            
            if(($y-$awal[0]==0 && $m-$awal[1]==0 && $d-$awal[2]>=0)&&($y-$akhir[0]==0 && $m-$akhir[1]==0 && $d-$akhir[2]<=0)){
             
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error', 'Maaf belum waktunya input judul tugas akhir'),
			'data_dosen' => $this->loginmhs_model->get_dosen(),
			
		);

		$this->load->view('headermhs');
		$this->load->view('pengajuanjudul', $data);
		$this->load->view('footer');
		}
		else{

		$this->load->view('headermhs');
		$this->load->view('home1');
		$this->load->view('footer');
		}
	}

	function inputjudul(){
		$data = array(
				'tgl_input' => $this->input->post('tgl_input'),
				'nim'=> $this->input->post('nim'),
				'prodi'=> $this->input->post('prodi'),
				'golongan'=> $this->input->post('golongan'),
				'judul'=> $this->input->post('judul'),
				'pengerjaan'=> $this->input->post('pengerjaan'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'dosen_pembimbing'=> $this->input->post('dosen_pembimbing'),
				'judul_dosen' => $this->input->post('judul_dosen'),
			);

		$this->loginmhs_model->simpan('usulan_ta_mhs', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('Welcomemhs/judulmhs'));
	}

	function formujianproposal(){
		
		$data = array(
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'data_dosen' => $this->loginmhs_model->get_dosen(),
		);

		$this->load->view('headermhs');
		$this->load->view('pengajuanujianproposal', $data);
		$this->load->view('footer');
	}

	function daftarujian(){
		$nim=$this->input->post('nim');
		$judul=$this->input->post('judul');
		$nip=$this->input->post('dosen_pembimbing');
		$file=$this->input->post('file');

		$this->load->library('upload');

		$config['upload_path'] = FCPATH.'assets/proposal';
		$config['allowed_types'] = 'doc|pdf';
		$config['overwrite'] = TRUE;
		$config['max_size']  = '1024';
		
		
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('file')){
			$this->session->set_flashdata('error', 'Upload file gagal !'.$this->upload->display_errors());
			redirect(base_url('Welcomemhs/formujianproposal'));
			
		} else {

			$data = array(
			'nim' => $nim,
			'judul' => $judul,
			'nip' => $nip,
			'upload_file' => $_FILES['file']['name'],
			);

			$this->loginmhs_model->simpan('pendaftaran_proposal', $data);
			$this->session->set_flashdata('success', 'Pendaftaran Ujian Proposal Berhasil');
			redirect(base_url('Welcomemhs/index'));
		}
	}

	function judulmhs(){
		$nim=$this->session->userdata('nim');
		$cek=$this->loginmhs_model->listjudul($nim)->result();
		$data = array (
			'success' => $this->session->flashdata('success'),
			'error' => $this->session->flashdata('error'),
			'cek' => $cek
		);

		$this->load->view('headermhs');
		$this->load->view('listjudulmhs',$data);
		$this->load->view('footer');
	}

	function ambiljuduldosen(){
		/*$data = array(
				
				'nip'=> $this->input->post('nip'),
				'judul_dosen'=> $this->input->post('juduldosen'),
				'deskripsi'=> $this->input->post('deskripsi'),
				'kuota'=> $this->input->post('kuota'),
			);*/

		$this->loginmhs_model->simpan('ambiljuduldosen', $data);
		$this->session->set_flashdata('success', 'Input judul berhasil');
			redirect(base_url('Welcomemhs/index'));
	}

	
  }



