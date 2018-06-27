
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
          <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                <div class="card-header">
                <h2>Form Daftar Usulan Judul Dosen
              </div>

            

              <table class="table ">
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->