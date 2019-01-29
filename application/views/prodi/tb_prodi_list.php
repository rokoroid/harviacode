<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data Program Studi</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('prodi/create'),'Tambah Data Prodi', 'class="btn btn-primary"'); ?> -->
                <a href="<?php echo base_url();?>prodi/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data Prodi</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('prodi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('prodi'); ?>" class="btn btn-default">Reset</a>
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
                <th>Fakultas</th>        
        		<th>Kode ProdiDIKTI</th>
        		<th>Nama Prodi</th>
        		<!-- <th>Nama Prodi Eng</th> -->
        		<!-- <th>Id Fakultas</th> -->
        		<th>Jenjang</th>
        		<th>Keterangan</th>
        		<th>Aktif</th>
        		<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($prodi_data as $prodi)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $prodi->nama_fakultas ?> (<?php echo $prodi->singkatan ?>)</td>
        			<td><?php echo $prodi->kode_prodiDIKTI ?></td>
        			<td><?php echo $prodi->nama_prodi ?></td>
        			<!-- <td><?php echo $prodi->nama_prodi_Eng ?></td> -->
        			<!-- <td><?php echo $prodi->id_fakultas ?></td> -->
        			<td><?php echo $prodi->jenjang ?></td>
        			<td><?php echo $prodi->keterangan ?></td>
        			<td><?php echo $prodi->aktif ?></td>
        			<td style="text-align:center" width="200px">
                        <a href="<?php echo base_url();?>prodi/update/<?php echo $prodi->id_prodi;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>prodi/delete/<?php echo $prodi->id_prodi;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
        				<?php 
        				// echo anchor(site_url('prodi/read/'.$prodi->id_prodi),'Read'); 
        				// echo ' | '; 
        				// echo anchor(site_url('prodi/update/'.$prodi->id_prodi),'Edit'); 
        				// echo ' | '; 
        				// echo anchor(site_url('prodi/delete/'.$prodi->id_prodi),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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