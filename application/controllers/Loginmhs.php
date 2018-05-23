<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmhs extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('loginmhs');
		$this->load->view('footer');
	}

}