<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data Gedung</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('gedung/create'),'Tambah Data Gedung', 'class="btn btn-primary"'); ?> -->
                <a href="<?php echo base_url();?>gedung/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data Gedung</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('gedung/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('gedung'); ?>" class="btn btn-default">Reset</a>
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
        		<th>Kode Gedung</th>
        		<th>Nama Gedung</th>
        		<th>Keterangan</th>
        		<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($gedung_data as $gedung)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
        			<td><?php echo $gedung->kode_gedung ?></td>
        			<td><?php echo $gedung->nama_gedung ?></td>
        			<td><?php echo $gedung->keterangan ?></td>
        			<td style="text-align:center" width="200px">
                        <a href="<?php echo base_url();?>gedung/update/<?php echo $gedung->id_gedung;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>gedung/delete/<?php echo $gedung->id_gedung;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
        				<?php 
        				// echo anchor(site_url('gedung/read/'.$gedung->id_gedung),'Read'); 
        				// echo ' | '; 
        				// echo anchor(site_url('gedung/update/'.$gedung->id_gedung),'Edit'); 
        				// echo ' | '; 
        				// echo anchor(site_url('gedung/delete/'.$gedung->id_gedung),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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