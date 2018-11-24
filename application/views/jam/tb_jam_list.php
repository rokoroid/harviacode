 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data Jam</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <?php echo anchor(site_url('jam/create'),'Tambah Data Jam', 'class="btn btn-primary"'); ?>
            </div>
            
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('jam/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('jam'); ?>" class="btn btn-default">Reset</a>
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
        		<th>Kode Jam</th>
        		<th>Nama Jam</th>
        		<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($jam_data as $jam)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
        			<td><?php echo $jam->kode_jam ?></td>
        			<td><?php echo $jam->nama_jam ?></td>
        			<td style="text-align:center" width="200px">
        				<?php 
        				// echo anchor(site_url('jam/read/'.$jam->id_jam),'Read'); 
        				// echo ' | '; 
        				echo anchor(site_url('jam/update/'.$jam->id_jam),'Edit'); 
        				echo ' | '; 
        				echo anchor(site_url('jam/delete/'.$jam->id_jam),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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