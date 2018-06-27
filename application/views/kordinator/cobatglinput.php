
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
          <h4 class="m-t-0 header-title"><b>Input Batasan Tanggal</b></h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-20">

                        <?php echo form_open('Kordinator/save_tglInput','class="form-horizontal" role="form"');?>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Awal </label>
                            <div class="col-md-10">
                                <input type="date" name="tanggal_awal" class="form-control" id="exampleInputEmail1">
                            </div>
                         </div>
                        <div class="form-group">
                             <label class="col-md-2 control-label" for="exampleInputEmail1">Tanggal Akhir </label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_akhir" class="form-control" id="exampleInputEmail1">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="exampleInputEmail1">Keterangan</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="ket">
                                        <option value="Awal">Input Judul Tugas Akhir Awal</option>
                                        <option value="Final">Input Judul Tugas Akhir Final</option>
                                        <option value="ujian">Input proposal</option>
                                    </select>
                            <button style="margin-top: 20px;" type="submit" name="btn-update" class="btn btn-custom waves-light waves-effect w-md">Submit</button>
                            <button style="margin-top: 20px;" type="submit" onclick="history-1" class="btn btn-warning waves-effect waves-light">Back</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- end card-box -->
    </div><!-- end col -->
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