<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('loginmhs/masuk') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Pengajuan Judul TA</h2>
              </div>

              <div class="card-body p-4">
                <div class="form-group">


                  <label for="tanggal">Tanggal Input</label>
                  <input type="date" name="tglinput" class="form-control" required="">
                </div>


                 <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" class="form-control" required="">
                </div>
              
                <div class="form-group">
                  <label for="judul">Usulan Judul Tugas Akhir</label>
                  <input type="text" name="judul" class="form-control" required="">
                </div>

               <div class="form-group">
                  <label for="pengerjaan">Individu/Kelompok</label>
                  <input type="text" name="pengerjaan" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea name="judul" class="form-control" required=""></textarea> 
                </div>

                <div class="form-group">
                  <label for="dospem">Usulan Dosen Pembimbing</label>
                  <select name="dospem" class="form-control" required="">
                    <option value="">Ratih Ayuninghemi</option>
                  </select>
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