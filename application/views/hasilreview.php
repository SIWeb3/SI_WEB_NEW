<section id="about">

<div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <?php if(isset($success)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $success; ?>
                    </div>
                     <?php } ?>
           <div class="card-footer text-right">
              </div>
              </div>
        </div>
      </div>



 <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <form action="" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Hasil Review Usulan Judul Tugas Akhir</h2>
              </div>

              <div class="card-body p-6">

                <table class="table">
              <thead align="center">
              <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Gol</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengerjaan</th>
                <th scope="col">Status</th>
                <th scope="col">Hasil Review</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($cek as $data) { ?>
<tr>
  <td><?php echo $data->nim; ?></td>
  <td><?php echo $data->nama; ?></td>
  <td><?php echo $data->prodi; ?></td>
  <td><?php echo $data->golongan; ?></td>
  <td><?php echo $data->judul; ?></td>
  <td><?php echo $data->pengerjaan; ?></td>
  <td><?php echo $data->status; ?></td>
  <td><?php echo $data->deskripsi_review; ?></td>
</tr>
                
              <?php }
              ?>
            </tbody>
          </table>

            </div>
          </form>
          </div>
        </div>
      </div>
    </section>