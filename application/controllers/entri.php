<?php
class Entri extends CI_controller{
	public function index(){
		$this->load->model('Mahasiswa_model');
		$model = $this->Mahasiswa_model;
		
		if(isset($_POST['btnSubmit'])){
		$model = array(
		"nim" => $this->input->post('nim'),
		"nama" => $this->input->post('nama'),
		"prodi" => $this->input->post('prodi'));
		$this->db->insert('mahasiswa',$model);

		}else{
			$this->load->view('entri_from_view',['model'=>$model]);
		}
	}
}
?>