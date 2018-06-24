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
              <div class="card">
              <div class="card-header">
                <h2>Daftar Usulan Judul Dosen</h2>
              </div>

              <div class="card-body p-6">

                <table class="table">
              <thead align="center">
              <tr>
                <th scope="col">NIP</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kuota</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($cek as $data) { ?>
<tr>
  <td><?php echo $data->nip; ?></td>
  <td><?php echo $data->nama_dosen; ?></td>
  <td><?php echo $data->judul_dosen; ?></td>
  <td><?php echo $data->deskripsi; ?></td>
  <td><?php echo $data->kuota; ?></td>
</tr>
                
              <?php }
              ?>
            </tbody>
          </table>




        </div>
      </div>
    </section>

