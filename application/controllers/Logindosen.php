<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logindosen extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('logindosen');
		$this->load->view('footer');
	}

}