  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    
        <h2 style="margin-top:0px">Data Dosen</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('dosen/create'),'Tambah Data Dosen', 'class="btn btn-primary"'); ?>  -->
                <a href="<?php echo base_url();?>dosen/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data Dosen</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('dosen/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('dosen'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form> 
            </div> -->
        </div>
        <div class="row">
        <div class="col-sm-12">
        <div class="table-responsive">
        <table class="table table-bordered datatable" style="margin-bottom: 10px">
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>NIK</th>
                <th>Nama Dosen</th>
                <th>Jabatan Akademik</th>
                <th>Golongan Kepangkatan</th>
                <th>Tempat Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Ikatan Kerja</th>
                <th>Status Aktif</th>
                <th>Pendidikan Terakhir</th>
                <th>Bidang Ilmu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($dosen_data as $dosen)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $dosen->nidn ?></td>
                    <td><?php echo $dosen->nik ?></td>
                    <td><?php echo $dosen->gelar_depan ?> <?php echo $dosen->nama_dosen ?> <?php echo $dosen->gelar_belakang ?></td>
                    <td><?php echo $dosen->jabatan_akademik ?></td>
                    <td><?php echo $dosen->golongan_kepangkatan ?></td>
                    <td><?php echo $dosen->tempat_lahir ?>, <?php echo $dosen->tgl_lahir ?></td>
                    <td><?php echo $dosen->jk ?></td>
                    <td><?php echo $dosen->ikatan_kerja ?></td>
                    <td><?php echo $dosen->status_aktif ?></td>
                    <td><?php echo $dosen->pendidikan_terakhir ?></td>
                    <td><?php echo $dosen->bidang_ilmu ?></td>
                    <td style="text-align:center" width="200px">
                        <a href="<?php echo base_url();?>dosen/update/<?php echo $dosen->id_dosen;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>dosen/delete/<?php echo $dosen->id_dosen;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>

                        <?php 
                        // echo anchor(site_url('dosen/read/'.$dosen->id_dosen),'Read'); 
                        // echo ' | '; 
                        // echo anchor(site_url('dosen/update/'.$dosen->id_dosen),'Edit'); 
                        // echo ' | '; 
                        // echo anchor(site_url('dosen/delete/'.$dosen->id_dosen),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div> -->
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->