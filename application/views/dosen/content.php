<?php 
$this->load->view('dosen/header'); 
if (isset($uniqid)){ 
  $this->load->view('dosen/'.$uniqid); 
} else { 
  show_404(); 
} 
$this->load->view('dosen/footer'); 
?>