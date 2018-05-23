<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihan extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('pilihan');
		$this->load->view('footer');
	}

}
