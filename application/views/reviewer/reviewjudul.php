<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Usulan Judul Dosen</h3>

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
            <form action="<?php echo base_url('reviewer/reviewjudul') ?>" method="post">
              <div class="card">
              <div class="card-header">
                <h2>Form Daftar Usulan Judul Dosen
              </div>

              <div class="card-body p-4" align="center">

              <table class="table table-bordered "  style="background-color:white; width: 100%;">
                <tr>
                  <th>ID REVIEW MAHASISWA</th>
        <th>ID USULAN</th>
        <th>JUDUL</th>
        <th>DESKRIPSI</th>
        <th>DOSEN PEMBIMBING</th>
        <th>TGL INPUT</th>
        <th>STATUS</th>
        <th>DESKRIPSI REVIEW</th>
        <th>OPSI</th>
                </tr>
                 <?php
    foreach ($review as $b){
        echo "<tr>
            <td>$b->id_review_mhs</td>
            <td>$b->id_usulan</td>
            <td>$b->judul</td>
            <td>$b->deskripsi</td>
            <td>$b->dosen_pembimbing</td>
            <td>$b->tgl_input</td>
            <td>$b->status</td>
            <td>$b->deskripsi_review</td>
            <td>".anchor('reviewer/edit/'.$b->id_review_mhs,'EDIT')."</td>
            </tr>";
    }
    
    
    ?>
              </table>
    
        


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
