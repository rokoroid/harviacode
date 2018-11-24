<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    
        <h2 style="margin-top:0px">Data Fakultas</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <?php echo anchor(site_url('fakultas/create'),'Tambah Data Fakultas', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('fakultas/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('fakultas'); ?>" class="btn btn-default">Reset</a>
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
        		<th>Kode Fakultas</th>
        		<th>Nama Fakultas</th>
        		<th>Keterangan</th>
        		<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($fakultas_data as $fakultas)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
        			<td><?php echo $fakultas->kode_fakultas ?></td>
        			<td><?php echo $fakultas->nama_fakultas ?> (<?php echo $fakultas->singkatan ?>)</td>
        			<td><?php echo $fakultas->keterangan ?></td>
        			<td style="text-align:center" width="200px">
        				<?php 
        				// echo anchor(site_url('fakultas/read/'.$fakultas->id_fakultas),'Read'); 
        				// echo ' | '; 
        				echo anchor(site_url('fakultas/update/'.$fakultas->id_fakultas),'Edit'); 
        				echo ' | '; 
        				echo anchor(site_url('fakultas/delete/'.$fakultas->id_fakultas),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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