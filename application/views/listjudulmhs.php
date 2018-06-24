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
            <a href="<?php echo base_url ('welcomemhs/formusulanjudul')?>">
                <button type="submit" class="btn btn-primary">Input Usulan Judul Tugas Akhir</button></a>
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
                <h2>Daftar Usulan Judul Tugas Akhir</h2>
              </div>

              <div class="card-body p-6">

                <table class="table">
              <thead align="center">
              <tr>
                <th scope="col">Tgl_Input</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Gol</th>
                <th scope="col">Judul</th>
                <th scope="col">Pengerjaan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Usulan Dosen Pembimbing</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($cek as $data) { ?>
<tr>
  <td><?php echo $data->tgl_input; ?></td>
  <td><?php echo $data->nim; ?></td>
  <td><?php echo $data->prodi; ?></td>
  <td><?php echo $data->golongan; ?></td>
  <td><?php echo $data->judul; ?></td>
  <td><?php echo $data->pengerjaan; ?></td>
  <td><?php echo $data->deskripsi; ?></td>
  <td width="50px"><?php echo $data->dosen_pembimbing; ?></td>
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