
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Input Judul Penelitian Dosen</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">



<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('dosen/forminputjuduldosen') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Usulan Judul Dosen</h2>
              </div>

              <div class="card-body p-4">

              
    
                 <div class="form-group">
                  <label for="nim">NIP</label>
                  <input type="text" name="nip" class="form-control" required="" value="<?php echo $this->session->userdata('nip')?>">
                </div>
              
                <div class="form-group">
                  <label for="juduldosen">Usulan Judul Tugas Akhir</label>
                  <input type="text" name="juduldosen" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" required=""></textarea> 
                </div>

                <div class="form-group">
                  <label for="kuota">Kuota</label>
                  <textarea name="kuota" class="form-control" required=""></textarea> 
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



     </div>
        <!-- /.box-body 
        <div class="box-footer">
          Footer
        </div>
        /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->