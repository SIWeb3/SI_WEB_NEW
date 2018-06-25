
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
                        <h2>List Data dospem</h2>
                </div>          
<hr>
 
<table class="table">
    <thead align="center">
    <tr><th>ID USULAN</th>
        <th>NIM</th>
        <th>PRODI</th>
        <th>GOLONGAN</th>
        <th>JUDUL</th>
        <th>PENGERJAAN</th>
        <th>DESKRIPSI</th>
        <th>DOSEN PEMBIMBING
        <th>TGL INPUT</th></th>
        <th colspan="2"></th></tr>
    </thead>
    <tbody>
    <?php
    foreach ($review as $b){
        echo "<tr>
            <td>$b->id_usulan</td>
            <td>$b->nim</td>
            <td>$b->prodi</td>
            <td>$b->golongan</td>
            <td>$b->judul</td>
            <td>$b->pengerjaan</td>
            <td>$b->deskripsi</td>
            <td>$b->dosen_pembimbing</td>
            <td>$b->tgl_input</td>
            <td>".anchor('list_dospem/'.$b->nim,'EDIT')."</td>
            </tr>";
    }
    
    
    ?>
    </tbody>
    <!-- <?php
    echo $review['usulan_ta_mhs'];
    ?> -->
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