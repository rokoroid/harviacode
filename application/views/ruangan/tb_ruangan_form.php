<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Ruangan</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="int">Gedung <?php echo form_error('id_gedung') ?></label>
            <!-- <input type="text" class="form-control" name="id_gedung" id="id_gedung" placeholder="Id Gedung" value="<?php echo $id_gedung; ?>" /> -->
            <select class="form-control" name="id_gedung" id="id_gedung">
                <option value="">Pilih Gedung</option>
                    <?php
                    foreach ($dataGedung as $gedung) {
                        $selected = '';
                        if ($gedung->id_gedung == $id_gedung){
                        $selected = 'selected';
                        }
                    ?>
                        <option value="<?php echo $gedung->id_gedung; ?>" <?php echo $selected;?>><?php echo $gedung->nama_gedung; ?></option>
                    <?php } ?>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Ruang <?php echo form_error('nama_ruang') ?></label>
            <input type="text" class="form-control" name="nama_ruang" id="nama_ruang" placeholder="Nama Ruang" value="<?php echo $nama_ruang; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="int">Kapasitas <?php echo form_error('kapasitas') ?></label>
            <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="<?php echo $kapasitas; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="enum">Jenis <?php echo form_error('jenis') ?></label>
            <!-- <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis; ?>" /> -->
            <select class="form-control" name="jenis" id="jenis">
                <option value="">Pilih Jenis Ruangan</option>
                <option value="Kelas" <?php echo ($jenis == 'Kelas' ? 'selected' : '');?> >Kelas</option>
                <option value="Lab" <?php echo ($jenis == 'Lab' ? 'selected' : '');?> >Lab</option>
                <option value="BAAK" <?php echo ($jenis == 'BAAK' ? 'selected' : '');?> >BAAK</option>
                <option value="Rapat" <?php echo ($jenis == 'Rapat' ? 'selected' : '');?> >Rapat</option>
                <option value="Auditorium" <?php echo ($jenis == 'Auditorium' ? 'selected' : '');?> >Auditorium</option>
                <option value="Presentasi" <?php echo ($jenis == 'Presentasi' ? 'selected' : '');?> >Presentasi</option>
                <option value="Ruang Dosen" <?php echo ($jenis == 'Ruang Dosen' ? 'selected' : '');?> >Ruang Dosen</option>
                <option value="Ruang Pimpinan" <?php echo ($jenis == 'Ruang Pimpinan' ? 'selected' : '');?> >Ruang Pimpinan</option>
                <option value="Lainnya" <?php echo ($jenis == 'Lainnya' ? 'selected' : '');?> >Lainnya</option>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_ruang" value="<?php echo $id_ruang; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('ruangan') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 