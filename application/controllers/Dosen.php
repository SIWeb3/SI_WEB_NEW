<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
		$data = array(
			'uniqid'=>'home',
		);

		$this->load->view('dosen/content', $data);
	}

}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */