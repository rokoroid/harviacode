 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Jam</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="int">Kode Jam <?php echo form_error('kode_jam') ?></label>
            <input type="text" class="form-control" name="kode_jam" id="kode_jam" placeholder="Kode Jam" value="<?php echo $kode_jam; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Jam <?php echo form_error('nama_jam') ?></label>
            <input type="text" class="form-control" name="nama_jam" id="nama_jam" placeholder="Nama Jam" value="<?php echo $nama_jam; ?>" />
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_jam" value="<?php echo $id_jam; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('jam') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->