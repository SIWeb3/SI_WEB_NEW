  
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
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
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
    <!-- Content Header (Page header) -->

    <!-- Main content -->
<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
             
              <div class="card">
              <div class="card-header">
                <h2>Form Edit Hak Akses Dosen</h2>
              </div>

              <div class="card-body p-4">

        <table class="table table-bordered "  style="background-color:white; width: 100%;">       

<?php 
foreach ($inner1 as $u)
{
        ?>
<form action="<?php echo base_url('kordinator/edit_simpan') ?>" method="post">
           <div class="form-group">
            <label for="NIP">NIP</label>
              <input type="text" name="nip"  class="form-control" value="
             <?php echo $u->nip ?>" >
            </div>

           
           <div class="form-group">
            <label for="NAMA DOSEN">NAMA DOSEN</label>
            <input type="text" name="nama_dosen"  class="form-control" value="<?php echo
            $u->nama_dosen?>">
          </div>
      
          <!-- <div class="form-group">
            <label for="ID NIP">NIP</label>
            <input type="text" name="nip" class="form-control" value="<?php echo 
            $b->nip?>" >
          </div>
        --> 
         <div class="form-group">
            <label for="HAK AKSES">HAK AKSES</label>
              
              <input type="text" name="hak" class="form-control" value="<?php echo $u->hak_akses ?>">
              
              
          </div>

              </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
                  <?php
    }
?>
</div>
</table>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->