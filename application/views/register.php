<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <form action="<?php echo base_url('loginmhs/daftar') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Pendaftaran User</h2>
              </div>

              <div class="card-body p-4">
                <div class="form-group">
                  <?php if(isset($error)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $error; ?>
                    </div>
                  <?php } ?>
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" required="">
                </div>
                <div class="form-group">
                  <label for="prodi">Program Studi</label>
                  <select name="prodi" class="form-control" required="">
                    <option value="mif">Manajemen Informatika</option>
                    <option value="tkk">Teknik Komputer</option>
                    <option value="tif">Teknik Informatika</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="golongan">Golongan</label>
                  <select name="golongan" class="form-control" required="">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                     <option value="d">D</option>
                  </select>
              </div>

               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" required="">
                </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Daftar</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>