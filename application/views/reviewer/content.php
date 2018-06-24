<?php 
$this->load->view('reviewer/header'); 
if (isset($uniqid)){ 
  $this->load->view('reviewer/'.$uniqid); 
} else { 
  show_404(); 
} 
$this->load->view('reviewer/footer'); 
?>