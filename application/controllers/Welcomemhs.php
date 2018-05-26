<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcomemhs extends CI_Controller {

	public function index()
	{
		$this->load->view('headermhs');
		$this->load->view('home');
		$this->load->view('footer');
	}

}
