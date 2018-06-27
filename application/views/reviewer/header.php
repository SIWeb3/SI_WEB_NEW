<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Pengajuan Judul Tugas Akhir</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI Pengajuan Judul</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#"><?php echo ucfirst($this->session->userdata('nip'))?>
            </a>
          </li>

          <li class="dropdown user user-menu">
            <a href="<?php echo base_url('logindosen/logout')?>">Logout
            </a>
          </li>

        </ul>          
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENU UTAMA</li>
        <li class="treeview">
          <a href="<?php echo base_url('reviewer/inputjuduldosen')?>">
            <i class="fa fa-dashboard"></i> <span>Input Judul Penelitian</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('reviewer/daftarusulanjudul')?>">
            <i class="fa fa-dashboard"></i> <span>Daftar Judul Penelitian</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('reviewer/usulanmhs1')?>">
            <i class="fa fa-dashboard"></i> <span>Usulan Mahasiswa Bimbingan</span>   
          </a>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url('reviewer/dosbim')?>">
            <i class="fa fa-dashboard"></i> <span>Daftar Mahasiswa Bimbingan</span>   
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url('reviewer/reviewjudul')?>">
            <i class="fa fa-dashboard"></i> <span>Review Judul Mahasiswa</span>   
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->