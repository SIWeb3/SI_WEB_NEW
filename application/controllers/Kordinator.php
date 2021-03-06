<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kordinator extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->helper('form');
		$this->load->model('Kuotadosen_model');
		$this->load->model('logindosen_model');
		$this->load->model('koor_model');
		$this->load->model('Pengajuan_Model');
		$this->load->library('pdf');
        
	}
	public function index()
	{
		$data = array(
			'uniqid' => 'kuotadosen',
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
			'uniqid' => 'kuotadosen',
				'success' => $this->session->flashdata('success'),
				'error' => $this->session->flashdata('error'),
				'data_dosen'=>$this->Kuotadosen_model->datadosen(),
				'lihatkuota'=>$this->Kuotadosen_model->lihatkuota(),		
				);
				
		//$this->load->view('kordinator/header');
		$this->load->view('kordinator/content',$data);
		//$this->load->view('kordinator/footer');
	}

	public function dosenbimbing()
	{
		$data = array(
			'uniqid' => 'penentuandospem',
				'success' => $this->session->flashdata('success'),
				'error' => $this->session->flashdata('error'),
				'data_dosen'=>$this->Pengajuan_Model->datadosen(),
				'data_mahasiswa'=>$this->Pengajuan_Model->data_mahasiswa(),
				'lihat'=>$this->Pengajuan_Model->lihatdospem(),		
				);
				
		//$this->load->view('kordinator/header');
		$this->load->view('kordinator/content',$data);
		//$this->load->view('kordinator/footer');
	}
	function isikuota(){
		if (isset($_POST['kirim'])){
			$data = $this->Kuotadosen_model->input(array (

			'nip' => $this->input->post('nama_dosen'),
			'kuota' => $this->input->post('kuota')));
			$this->session->set_flashdata('success', 'Berhasil di tambahkan');
			redirect(base_url('Kordinator/kuota'));
		}else{
			$this->session->set_flashdata('error', 'Error di tambahkan');
			redirect(base_url('Kordinator/kuota'));
		}
	}

		public function dospem()
	{
		$data = array(
			'uniqid' => 'penentuandospem',
				'success' => $this->session->flashdata('success'),
				'error' => $this->session->flashdata('error'),
				'data_dosen'=>$this->Pengajuan_Model->datadosen(),
				'data_mahasiswa'=>$this->Pengajuan_Model->data_mahasiswa(),
				'lihat'=>$this->Pengajuan_Model->lihatdospem(),	
				//'isi_dospem'=>$this->Pengajuan_Model->input(),		
				);
				
		//$this->load->view('kordinator/header');
		$this->load->view('kordinator/content',$data);
		//$this->load->view('kordinator/footer');
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
		$this->load->view('kordinator/content',$data);
		//$this->load->view('kordinator/footer');
	}

		function isi_dospem(){
		if (isset($_POST['kirim'])){
			$data = $this->Pengajuan_Model->input(array (

			'nip' => $this->input->post('nama_dosen'),
			'nim' => $this->input->post('nama_mahasiswa'),
			));
			$this->session->set_flashdata('success', 'Berhasil di tambahkan');
			redirect(base_url('Kordinator/dospem'));
		}else{
			$this->session->set_flashdata('error', 'Error di tambahkan');
			redirect(base_url('Kordinator/dospem'));
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
	public function daftardpm()
	{
		$data = array(
			'uniqid' => 'cobatampilanlistdospem',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_dpm(),
		);
		$this->load->view('kordinator/content',$data);
	}

	function daftardospem(){
		$this->load->model('Pengajuan_Model');
		$x['inner'] = $this->Pengajuan_Model->tampil_dpm();
		$this->load->view('kordinator/datadospem',$x);
	}


	function deletekuota(){
		if(isset($_GET['nip'])){
		$id=$_GET['nip'];
		//echo"$id";
		$this->Kuotadosen_model->delete_kuota($id);
		$this->session->set_flashdata('success', 'Berhasil di hapus');
		redirect(base_url('Kordinator/kuota'));
		}
	}
	function editkuota(){
		if(isset($_GET['nip'])){
		$id=$_GET['nip'];
		//echo"$id";
		
		$data = array(
			'uniqid' => 'edit_kuota',
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
			redirect(base_url('Kordinator/kuota'));
		}
		else{
			echo"gagal";
		}
	  }


	public function edit(){
		$this->load->view("kordinator/header");
		$this->load->model("Pengajuan_Model");
		$nip=$this->session->userdata('$nip');
		$data['inner1'] = $this->Pengajuan_Model->tampil_dsn($nip);
		$this->load->view('kordinator/kordinator_edit',$data);
		$this->load->view("kordinator/footer");			
	}
	/*public function edit_simpan(){
	$nip=$this->input->post('nip');
	$data['nama_dosen'] = $this->input->post('nama_dosen');
    $data['hak_akses'] = $this->input->post('hak_akses');
	$this->Pengajuan_Model->edit_simpan($nip, $data);
	redirect(site_url('kordinator/daftardsn'));
}*/
	public function edit_simpan(){
		if(isset($_POST['submit'])){
			$nip = $this->input->post('nip');
			$data = $this->Pengajuan_Model->edit_simpan(array(
				'hak_akses' => $this->input->post('hak')
            ), $nip);
			//echo  $this->input->post('hak');
			//echo  $this->input->post('nip');
			$this->session->set_flashdata('success', 'Berhasil di update');
			redirect(base_url('Kordinator/daftardsn'));
		}
		else{
			echo"gagal";
	}
}

	    public function listJadwal(){
	    $this->load->model('usulanmahasiswa_model');	
        $list = $this ->usulanmahasiswa_model ->get_jadwal()->result();
        $data = array(
                "menu" => "MenuAdmin",
                "panelbody" => "apps/koordinator/listJadwal",
                "list" => $list
        );
        $this->load->view('kordinator/header');
		$this->load->view('kordinator/listjadwal',$data);
		$this->load->view('kordinator/footer');
    }
    public function tglInput(){
        $this->load->view('kordinator/header');
		$this->load->view('kordinator/cobatglinput');
		$this->load->view('kordinator/footer');
		
    }
    public function save_tglInput(){
        $data = array(
            'tgl_awal' => $this ->input ->post('tanggal_awal'),
            'tgl_akhir' => $this ->input ->post('tanggal_akhir'),
            'keterangan' => $this ->input ->post('ket')
        );
        $this ->db ->insert('tanggal',$data);
        redirect('kordinator/listJadwal');
    }
    public function delJadwal(){
        $id = $this ->uri ->segment(3);
        $this ->db ->where_in('id',$id);
        $this ->db ->delete('tanggal');
        redirect('kordinator/listJadwal');
    }

    	function usulanmhs1(){
		/*$data = array(
			'uniqid' => 'usulantamhs',
			// $this->load->model('usulanmahasiswa_model'),
			// 'inner' => $this->usulanmahasiswa_model->tampil_usulan($this->session->userdata('nip')),
			// $this->load->view('dosen/usulantamhs'),
		);*/
		$this->load->model('Pengajuan_Model');
		$nip=$this->session->userdata('nip');
		$data = array(
			'uniqid' => 'usulantamhs',
			$this->load->model('Pengajuan_Model'),
			'inner' => $this->Pengajuan_Model->tampil_usulan($nip),
		);
			/*$this->load->view('dosen/header');
			$this->load->model('usulanmahasiswa_model');
			$nip=$this->session->userdata('nip');
			$data['inner']= $this->usulanmahasiswa_model->tampil_usulan($nip);
			$this->load->view('dosen/usulantamhs',$data);
			$this->load->view('dosen/footer');*/
			$this->load->view('kordinator/content',$data);
	}

	function usulan(){
		$x['inner'] = $this->Pengajuan_Model->tampil_usulan();
		$this->load->view('kordinator/usulantamhs',$x);
	}

	function pdfusulan(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(270,7,'DAFTAR USULAN JUDUL TUGAS AKHIR MAHASISWA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        //$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIM',1,0);
        $pdf->Cell(20,6,'PRODI',1,0);
        $pdf->Cell(27,6,'GOLONGAN',1,0);
        $pdf->Cell(70,6,'JUDUL',1,0);
          $pdf->Cell(50,6,'PENGERJAAN',1,0);
        $pdf->Cell(70,6,'DESKRIPSI',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->db->get('usulan_ta_mhs')->result();
        foreach ($mahasiswa as $row){
            $pdf->Cell(20,6,$row->nim,1,0);
            $pdf->Cell(20,6,$row->prodi,1,0);
            $pdf->Cell(27,6,$row->golongan,1,0);
            $pdf->Cell(70,6,$row->judul,1,0); 
            $pdf->Cell(50,6,$row->pengerjaan,1,0); 
            $pdf->Cell(70,6,$row->deskripsi,1,1); 
        }
        $pdf->Output();
    }

    function pdfdosbim(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(270,7,'DAFTAR MAHASISWA BIMBINGAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        //$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(45,6,'NIP',1,0);
        $pdf->Cell(60,6,'NAMA DOSEN',1,0);
        $pdf->Cell(27,6,'PRODI',1,0);
        $pdf->Cell(40,6,'NIM',1,0);
          $pdf->Cell(50,6,'NAMA MAHASISWA',1,0);
        $pdf->Cell(27,6,'PRODI',1,0);
        $pdf->Cell(27,6,'GOLONGAN',1,1);
        $pdf->SetFont('Arial','',10);
        $data_dosen=$this->Pengajuan_Model->datadosen();
				$data_mahasiswa=$this->Pengajuan_Model->data_mahasiswa();
				$lihat=$this->Pengajuan_Model->lihatdospem();	
        $mahasiswa = $this->db->get('usulan_ta_mhs')->result();
        foreach ($lihat as $row){
            $pdf->Cell(45,6,$row->nip,1,0);
            $pdf->Cell(60,6,$row->nama_dosen,1,0);
            $pdf->Cell(27,6,$row->prodi,1,0);
            $pdf->Cell(40,6,$row->nim,1,0); 
            $pdf->Cell(50,6,$row->nama,1,0); 
            $pdf->Cell(27,6,$row->prodi,1,0);
            $pdf->Cell(27,6,$row->golongan,1,1); 
        }
        $pdf->Output();
    }

}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */