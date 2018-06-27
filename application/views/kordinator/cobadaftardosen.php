
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
            <form action="<?php echo base_url('kordinator/formdaftarusulanjuduldosen') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Daftar Data Dosen
              </div>

              <div class="card-body p-4" align="center">

              <table class="table table-bordered "  style="background-color:white; width: 100%;">
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama Dosen</th>
                  <th>Hak Akses</th>
                  <th>Password</th>
                  <th>Prodi</th>
                  <th>No Hp</th>
                  <th>Opsi</th>
                 
                </tr>
                <?php 
                $no = 1;
                foreach($inner as $u){ 
                echo"
                <tr>
                  <td>".$no++." </td>
                  <td>$u->nip </td>
                  <td>$u->nama_dosen </td>
                  <td>$u->hak_akses </td> 
                  <td>$u->password </td>
                  <td>$u->prodi </td>
                  <td>$u->no_hp </td>
                  <td>".anchor('kordinator/edit/'.$u->nip,'EDIT')."</td>         
                </tr>" ;
              }?>
              </table>
    
        


              </div>

              
            </div>
          </form>
          </div>
        </div>
      </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->