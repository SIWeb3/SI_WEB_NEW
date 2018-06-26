
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
<section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form action="<?php echo base_url('reviewer/edit_simpan') ?>" method="post"> 
              <div class="card">
              <div class="card-header">
                <h2>Form Usulan Judul Dosen</h2>
              </div>

              <div class="card-body p-4">

        <table class="table table-bordered "  style="background-color:white; width: 100%;">       

<?php 
foreach ($review1 as $b)
{
        ?>

           <div class="form-group">
            <label for="ID REVIEW MAHASISWA">ID REVIEW MAHASISWA</label>
              <input type="text" name="id_review_mhs"  class="form-control" value="
             <?php echo $b->id_review_mhs ?>" >
            </div>

           
           <div class="form-group">
            <label for="ID USULAN">ID USULAN</label>
            <input type="text" name="id_usulan"  class="form-control" value="<?php echo
            $b->id_usulan?>">
          </div>
      
          <!-- <div class="form-group">
            <label for="ID NIP">NIP</label>
            <input type="text" name="nip" class="form-control" value="<?php echo 
            $b->nip?>" >
          </div>
        --> 
        <?php foreach ($review2 as $c) { ?>
         <div class="form-group">
            <label for="STATUS">JUDUL</label>
              
              <input type="text" name="status" class="form-control" value="<?php echo $c->judul ?>">
              <?php }
              ?>
          </div>
   <?php foreach ($review3 as $d) { ?>
         <div class="form-group">
            <label for="STATUS">DESKRIPSI</label>
              
              <input type="text" name="status" class="form-control" value="<?php echo $d->deskripsi ?>">
              <?php }
              ?>
          </div>

           <div class="form-group">
            <label for="STATUS">STATUS</label>
               <select name="status" class="form-control" required="">
                    <option value="Tidak">Tidak</option>
                    <option value="Ya">Ya</option>
               </select>
              <!--<input type="text" name="status" class="form-control" value="<?php echo
            $b->status?>">-->
          </div>
    
           <div class="form-group">
            <label for="DESKRIPSI REVIEW">DESKRIPSI REVIEW</label>
            <input type="text-are8a" name="deskripsi_review" class="form-control" value="<?php  echo $b->deskripsi_review ?>"></td>        
</div>










              </div>

              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>

                    <?php
    }
?>
</div>
</table>
              </div>
            </div>
          </form>
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