 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Waktu</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="int">Id Hari <?php echo form_error('id_hari') ?></label>
            <!-- <input type="text" class="form-control" name="id_hari" id="id_hari" placeholder="Id Hari" value="<?php echo $id_hari; ?>" /> -->
            <select class="form-control" name="id_hari" id="id_hari">
                <option value="">Pilih Hari</option>
                    <?php
                    foreach ($dataHari as $hari) {
                        $selected = '';
                        if ($hari->id_hari == $id_hari){
                        $selected = 'selected';
                        }
                    ?>
                        <option value="<?php echo $hari->id_hari; ?>" <?php echo $selected;?>><?php echo $hari->nama_hari; ?></option>
                    <?php } ?>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="int">Id Jam <?php echo form_error('id_jam') ?></label>
            <!-- <input type="text" class="form-control" name="id_jam" id="id_jam" placeholder="Id Jam" value="<?php echo $id_jam; ?>" /> -->
            <select class="form-control" name="id_jam" id="id_jam">
                <option value="">Pilih Jam</option>
                    <?php
                    foreach ($dataJam as $jam) {
                        $selected = '';
                        if ($jam->id_jam == $id_jam){
                        $selected = 'selected';
                        }
                    ?>
                        <option value="<?php echo $jam->id_jam; ?>" <?php echo $selected;?>><?php echo $jam->nama_jam; ?></option>
                    <?php } ?>
            </select>
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_waktu" value="<?php echo $id_waktu; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('waktu') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
	</form>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->