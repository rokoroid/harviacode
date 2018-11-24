 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Kelas</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Kelas <?php echo form_error('nama_kelas') ?></label>
            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" value="<?php echo $nama_kelas; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Angkatan</label>
            <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Angkatan"/>
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('kelas') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->