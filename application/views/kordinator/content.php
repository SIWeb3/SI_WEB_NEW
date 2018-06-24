<?php 
$this->load->view('kordinator/header'); 
if (isset($uniqid)){ 
  $this->load->view('kordinator/'.$uniqid); 
} else { 
  show_404(); 
} 
$this->load->view('kordinator/footer'); 
?>