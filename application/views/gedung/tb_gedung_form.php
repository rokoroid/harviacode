<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Gedung</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="varchar">Kode Gedung <?php echo form_error('kode_gedung') ?></label>
            <input type="text" class="form-control" name="kode_gedung" id="kode_gedung" placeholder="Kode Gedung" value="<?php echo $kode_gedung; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Gedung <?php echo form_error('nama_gedung') ?></label>
            <input type="text" class="form-control" name="nama_gedung" id="nama_gedung" placeholder="Nama Gedung" value="<?php echo $nama_gedung; ?>" />
        </div>
<!-- 	    <div class="col-md-6 form-group">
            <label for="varchar">Foto Gedung <?php echo form_error('foto_gedung') ?></label>
            <input type="text" class="form-control" name="foto_gedung" id="foto_gedung" placeholder="Foto Gedung" value="<?php echo $foto_gedung; ?>" />
        </div> -->
	    <div class="col-md-6 form-group">
            <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_gedung" value="<?php echo $id_gedung; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('gedung') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->