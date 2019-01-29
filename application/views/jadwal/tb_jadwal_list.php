<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data Jadwal</h2>

        <div class="col-sm-12"  style="margin-top:20px; margin-bottom:10px;">
            <form id="filter" method="post">
            <div class="form-group col-md-3">
                <label>Fakultas</label>
                <select class="form-control" name="fakultas" id="fakultas_jadwal">
                    <option value="">Semua Fakultas</option>
                    <?php
                    foreach ($dataFakultas as $fakultas){
                    ?>
                        <option value="<?php echo $fakultas->id_fakultas;?>"><?php echo $fakultas->nama_fakultas;?> (<?php echo $fakultas->singkatan;?>)</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Program Studi</label>
                <select class="form-control" name="prodi" id="prodi_jadwal">
                    <option value="NULL">Semua Program Studi</option>
                    <?php
                    foreach ($dataProdi as $prodi){
                    ?>
                        <option value="<?php echo $prodi->id_prodi;?>"><?php echo $prodi->nama_prodi;?> (<?php echo $prodi->jenjang;?>)</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Semester</label>
                <select class="form-control" name="semester" id="semester">
                    <option value="NULL">Semua Semester</option>
                    <?php
                    foreach ($dataSemester as $semester){
                    ?>
                        <option value="<?php echo $semester->id_semester;?>"><?php echo $semester->nama_semester;?> <?php echo $semester->tahun_ajaran;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <!-- <button type="submit" name="button" class="btn btn-info">Tampilkan</button> -->
            </div>
            </form>
        </div>

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('jadwal/create'),'Tambah Data Jadwal', 'class="btn btn-primary"'); ?> -->
                <a href="<?php echo base_url();?>jadwal/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data Jadwal</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('jadwal/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('jadwal'); ?>" class="btn btn-default">Reset</a>
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
        <table class="table table-bordered tablejadwal" style="margin-bottom: 10px">
           <thead>
            <tr>
                <th>No</th>
                <th>Periode Semester</th>
                <th>Mata Kuliah</th>
                <th>Nama Kelas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($jadwal_data as $jadwal)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
        			<td>Semester <?php echo $jadwal->nama_semester ?> <?php echo $jadwal->tahun_ajaran ?></td>
                    <td><?php echo $jadwal->nama_makul ?></td>
                    <td><?php echo $jadwal->nama_kelas ?></td>
        			<td style="text-align:center" width="200px">
                        <a href="<?php echo base_url();?>jadwal/update/<?php echo $jadwal->id_jadwal;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>jadwal/delete/<?php echo $jadwal->id_jadwal;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
        				<?php 
        				// echo anchor(site_url('jadwal/read/'.$jadwal->id_jadwal),'Read'); 
        				// echo ' | '; 
        				// echo anchor(site_url('jadwal/update/'.$jadwal->id_jadwal),'Edit'); 
        				// echo ' | '; 
        				// echo anchor(site_url('jadwal/delete/'.$jadwal->id_jadwal),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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