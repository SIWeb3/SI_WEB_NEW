<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <form action="<?php echo base_url('loginmhs/masuk') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Login Mahasiswa</h2>
              </div>

              <div class="card-body p-4">
                <div class="form-group">

                  <?php if(isset($error)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $error; ?>
                    </div>
                  <?php } ?>

                  <label for="username">Username (NIM)</label>
                  <input type="text" name="nim" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" required="">
                </div>
              </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>