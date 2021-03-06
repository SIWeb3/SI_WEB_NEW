<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Pengajuan Judul Tugas Akhir</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url ('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url ('assets/css/scrolling-nav.css') ?>" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('welcomemhs/index')?>">Sistem Informasi Pengajuan Judul Tugas Akhir</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><?php echo ucfirst($this->session->userdata('nim'))?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcomemhs/formusulanjudul')?>">Pengajuan Judul TA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcomemhs/formujianproposal')?>">Pendaftaran Ujian Proposal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('loginmhs/hasilreview')?>">Hasil Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" <a href="<?php echo base_url('loginmhs/logout')?>">Logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>