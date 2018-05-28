<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('loginmhs/masuk') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Pengajuan Ujian Proposal Tugas Akhir</h2>
              </div>

              <div class="card-body p-4">
                 <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" disabled="" name="nim" class="form-control" required="" value="<?php echo ucfirst($this->session->userdata('nim'))?>">
                </div>
              
                <div class="form-group">
                  <label for="judul">Judul Tugas Akhir</label>
                  <input type="text" name="judul" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="dosen_pembimbing">Dosen Pembimbing</label>
                  <select name="dosen_pembimbing" class="form-control" required="">
                    <option>--Pilih Usulan Dosen Pembimbing--</option>
                    <?php foreach ($data_dosen as $row){ ?>
                    <option value="<?php echo $row->nip;?>"><?php echo $row->nama_dosen;?></option>
                    <?php }?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="upload_file">Upload Proposal Tugas Akhir</label>
                  <br>
                  <input type="file" name="file">
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