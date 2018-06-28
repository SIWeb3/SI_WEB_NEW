   <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Selamat Datang </h1>
        <p class="lead">Di Sistem Informasi Pengajuan Judul Tugas Akhir</p>
      </div>
    </header>

    <section id="home">
<div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <form action="" method="post">
            <?php if(isset($success)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $success; ?>
                    </div>
                     <?php } ?>




        </div>
      </div>
    </section>

