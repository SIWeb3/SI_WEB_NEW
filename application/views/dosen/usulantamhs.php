
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     
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
          <h2>Daftar Usulan Mahasiswa</h2>
              </div>

              <section class="content">
      <div class="row">
        <div class="col-lg-20 ">
          <div class="panel panel-default">
            <div class="panel-body">
              <!-- <form action="<?php //echo base_url('dosen/pilihmhs') ?>" method="post"> -->
                <input type="hidden"  name="nim" value="<?php $this->session->set_userdata('nim')?>">
               <table class="table table-bordered "  style="background-color:white; width: 100%;">
               <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Prodi</th>
                  <th>Golongan</th>
                  <th>Judul</th>
                  <th>Pengerjaan</th>
                  <th>Deskripsi</th>
                  <th>Tgl Input</th>
                  <th>Judul Dosen</th>
                  <th>Status</th>
                </tr>
                <?php 
                $no = 1;
                foreach($inner as $u){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->nim ?></td>
                  <td><?php echo $u->nama ?></td>
                  <td><?php echo $u->prodi ?></td>
                  <td><?php echo $u->golongan ?></td> 
                  <td><?php echo $u->judul ?></td>    
                  <td><?php echo $u->pengerjaan ?></td>    
                  <td><?php echo $u->deskripsi ?></td>
                  <td><?php echo $u->tgl_input ?></td>
                  <td><?php echo $u->judul_dosen ?></td>
                  <td align="center">
                    <!-- <a href="<?php //echo site_url('Dosen/pilihmhs/'.$u->nim);?>"><button type="submit" class="btn btn-primary">Pilih</button></a> -->
                    <?php
                          if($u->status_pilih==""){
                             echo '<a href='.site_url('Dosen/pilihmhs/'.$u->nim).'><button type="button" class="btn btn-primary">Pilih</button></a>';
                          }else{
                                              
                          }
                  ?>
                  </td>
                   <?php
                   }?></tr>
                </thead>
              </table>
            <!-- </form> -->
            </div>
            
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