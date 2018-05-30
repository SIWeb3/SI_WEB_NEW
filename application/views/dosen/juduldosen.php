<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('dosen/forminputjuduldosen') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Usulan Judul Dosen/h2>
              </div>

              <div class="card-body p-4">

              
    
                 <div class="form-group">
                  <label for="nim">NIP</label>
                  <input type="text" name="nip" class="form-control" required="" value="<?php echo $this->session->userdata('nip')?>">
                </div>
              
                <div class="form-group">
                  <label for="judul">Usulan Judul Tugas Akhir</label>
                  <input type="text" name="judul" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" required=""></textarea> 
                </div>

                <div class="form-group">
                  <label for="deskripsi">Kuota</label>
                  <textarea name="deskripsi" class="form-control" required=""></textarea> 
                </div>
               



              </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>