 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Fakultas</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="char">Kode Fakultas <?php echo form_error('kode_fakultas') ?></label>
            <input type="text" class="form-control" name="kode_fakultas" id="kode_fakultas" placeholder="Kode Fakultas" value="<?php echo $kode_fakultas; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Fakultas <?php echo form_error('nama_fakultas') ?></label>
            <input type="text" class="form-control" name="nama_fakultas" id="nama_fakultas" placeholder="Nama Fakultas" value="<?php echo $nama_fakultas; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Fakultas (English) <?php echo form_error('namafak_English') ?></label>
            <input type="text" class="form-control" name="namafak_English" id="namafak_English" placeholder="Nama Fakultas (English)" value="<?php echo $namafak_English; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Singkatan <?php echo form_error('singkatan') ?></label>
            <input type="text" class="form-control" name="singkatan" id="singkatan" placeholder="Singkatan" value="<?php echo $singkatan; ?>" />
        </div>
	    <!-- <div class="col-md-6 form-group">
            <label for="varchar">Logo <?php echo form_error('logo') ?></label>
            <input type="text" class="form-control" name="logo" id="logo" placeholder="Logo" value="<?php echo $logo; ?>" />
        </div> -->
	    <div class="col-md-6 form-group">
            <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_fakultas" value="<?php echo $id_fakultas; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('fakultas') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->