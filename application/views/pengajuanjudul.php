<section id="about">

  <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
           <div class="card-footer text-right">
            <a href="<?php echo base_url ('welcomemhs/judulmhs')?>">
                <button type="submit" class="btn btn-primary">Daftar Usulan Judul Tugas Akhir</button></a>
              </div>
              </div>
        </div>
      </div>



      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('welcomemhs/inputjudul') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Pengajuan Judul TA</h2>
              </div>

              <div class="card-body p-4">

                <div class="form-group">
                  <label for="tgl_input">Tanggal</label>
                  <input type="date" name="tgl_input" class="form-control" required="">
                </div>
    
                 <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" name="nim" class="form-control" required="" value="<?php echo $this->session->userdata('nim')?>">
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
                  <label for="judul">Usulan Judul Tugas Akhir</label>
                  <input type="text" name="judul" class="form-control" required="">
                </div>

               <div class="form-group">
                  <label for="pengerjaan">Individu/Kelompok</label>
                  <select name="pengerjaan" class="form-control" required="">
                    <option value="individu">Individu</option>
                    <option value="kelompok">Kelompok</option>
                  </select>
                </div>

                <div class="form-group">
                    <label for="judul_dosen">Judul dari Dosen</label>
                  <select name="judul_dosen" class="form-control" required="">
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                  </select>
              </div>

                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" required=""></textarea> 
                </div>

                <div class="form-group">
                  <label for="dosen_pembimbing">Usulan Dosen Pembimbing</label>
                  <select name="dosen_pembimbing" class="form-control" required="">
                    <option>--Pilih Usulan Dosen Pembimbing--</option>
                    <?php foreach ($data_dosen as $row){ ?>
                    <option value="<?php echo $row->nip;?>"><?php echo $row->nama_dosen;?></option>
                    <?php }?>
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