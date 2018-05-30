   <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Selamat Datang </h1>
        <p class="lead">Di Sistem Informasi Pengajuan Judul Tugas Akhir</p>
      </div>
    </header>

    <section id="home">
      <div class="container" height="20%">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <?php if(isset($success)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $success; ?>
                    </div>
                     <?php } ?>
                     <h2>Tentang Sistem</h2>
            <p class="lead">Sistem Ini merupakan sistem pengajuan judul tugas akhir bagi mahasiswa Jurusan Teknologi Informasi</p>
          </div>
        </div>
      </div>
    </section>

