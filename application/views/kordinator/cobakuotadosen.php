
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistem Informasi Pengajuan Judul Tugas Akhir
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            <?php if(isset($error)){ ?>
                    <div class="alert alert-danger alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $error; ?>
                    </div>
              <?php } ?>
        <?php if(isset($success)){ ?>
                    <div class="alert alert-info alert-dismissible">
                      <a herf="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?php echo $success; ?>
                    </div>
              <?php } ?>
          <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('kordinator/isikuota') ?>" method="post">
              <div class="card">
              

              <div class="card-body p-4">
    

                <div class="form-group">
                  <label for="dosen_pembimbing">Nama Dosen</label>
                  <select name="nama_dosen" class="form-control" required="">
                    <?php foreach ($data_dosen as $row){ ?>
                    <option value="<?php echo $row->nip;?>"><?php echo $row->nama_dosen;?></option>
                    <?php }?>
                  </select>
                </div>

                
              
                <div class="form-group">
                  <label for="kuota dosen">Kuota Dosen</label>
                  <input type="number" name="kuota" class="form-control" required="">
                </div>
        
              </div>

              <div class="card-footer text-right">
                <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </section>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <table class="table table-bordered " style="background-color:white;">
      <tr>
      <th>NIP</th>
      <th>Nama</th>
      <th>Kuota</th>
      <th>Status</th>
      </tr>
      <?php foreach ($lihatkuota as $row){ ?>
        <tr>
        <td><?php echo $row->nip; ?></td>
        <td><?php echo $row->nama_dosen; ?></td>
        <td><?php echo $row->kuota; ?></td>
        <td><a href="<?php echo base_url(); ?>Kordinator/editkuota/?nip=<?php echo $row->nip;?>">Edit</a> | <a href="<?php echo base_url(); ?>Kordinator/deletekuota/?nip=<?php echo $row->nip;?>">Hapus</a></td>
        </tr>
            <?php }?>
    </table>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->