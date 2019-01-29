 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Hari</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="int">Kode Hari <?php echo form_error('kode_hari') ?></label>
            <input type="text" class="form-control" name="kode_hari" id="kode_hari" placeholder="Kode Hari" value="<?php echo $kode_hari; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Hari <?php echo form_error('nama_hari') ?></label>
            <input type="text" class="form-control" name="nama_hari" id="nama_hari" placeholder="Nama Hari" value="<?php echo $nama_hari; ?>" />
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_hari" value="<?php echo $id_hari; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('hari') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->