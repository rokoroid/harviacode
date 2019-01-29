    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Semester</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="enum">Nama Semester <?php echo form_error('nama_semester') ?></label>
            <!-- <input type="text" class="form-control" name="nama_semester" id="nama_semester" placeholder="Nama Semester" value="<?php echo $nama_semester; ?>" /> -->
            <select class="form-control" name="nama_semester">
                <option value="">Pilih Semester</option>
                <option value="Ganjil" <?php echo ($nama_semester == 'Ganjil' ? 'selected' : '');?> >Ganjil</option>
                <option value="SP Ganjil" <?php echo ($nama_semester == 'SP Ganjil' ? 'selected' : '');?> >SP Ganjil</option>
                <option value="Genap" <?php echo ($nama_semester == 'Genap' ? 'selected' : '');?> >Genap</option>
                <option value="SP Genap" <?php echo ($nama_semester == 'SP Genap' ? 'selected' : '');?> >SP Genap</option>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Tahun Ajaran <?php echo form_error('tahun_ajaran') ?></label>
            <input type="text" class="form-control" name="tahun_ajaran" id="tahun_ajaran" placeholder="Tahun Ajaran" value="<?php echo $tahun_ajaran; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="enum">Waktu Kuliah <?php echo form_error('waktu_kuliah') ?></label>
            <!-- <input type="text" class="form-control" name="waktu_kuliah" id="waktu_kuliah" placeholder="Waktu Kuliah" value="<?php echo $waktu_kuliah; ?>" /> -->
            <select class="form-control" name="waktu_kuliah" >
                <option value="">Pilih Waktu Kuliah</option>
                <option value="Reguler" <?php echo ($waktu_kuliah == 'Reguler' ? 'selected' : '');?> >Reguler</option>
                <option value="Extensi" <?php echo ($waktu_kuliah == 'Extensi' ? 'selected' : '');?> >Extensi</option>
                <option value="Sabtu-Minggu" <?php echo ($waktu_kuliah == 'Sabtu-Minggu' ? 'selected' : '');?> >Sabtu-Minggu</option>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="date">Tanggal Mulai <?php echo form_error('tgl_mulai') ?></label>
            <!-- <input type="text" class="form-control" name="tgl_mulai" id="tgl_mulai" placeholder="Tanggal Mulai" value="<?php echo $tgl_mulai; ?>" /> -->
            <input class="form-control" id="tgl_mulai" name="tgl_mulai" type="date" data-format="yyyy-mm-dd" value="<?php echo $tgl_mulai; ?>">
        </div>
	    <div class="col-md-6 form-group">
            <label for="date">Tanggal Selesai <?php echo form_error('tgl_selesai') ?></label>
            <!-- <input type="text" class="form-control" name="tgl_selesai" id="tgl_selesai" placeholder="Tanggal Selesai" value="<?php echo $tgl_selesai; ?>" /> -->
            <input class="form-control" id="tgl_selesai" name="tgl_selesai" type="date" data-format="yyyy-mm-dd" value="<?php echo $tgl_selesai; ?>">
        </div>
	    <div class="col-md-6 form-group">
            <label for="date">Tanggal Akhir Bayar <?php echo form_error('tgl_akhirbayar') ?></label>
            <!-- <input type="text" class="form-control" name="tgl_akhirbayar" id="tgl_akhirbayar" placeholder="Tanggal Akhir Bayar" value="<?php echo $tgl_akhirbayar; ?>" /> -->
            <input class="form-control" id="tgl_akhirbayar" name="tgl_akhirbayar" type="date" data-format="yyyy-mm-dd" value="<?php echo $tgl_akhirbayar; ?>">
        </div>
	    <div class="col-md-6 form-group">
            <label for="enum">Aktif <?php echo form_error('aktif') ?></label>
            <!-- <input type="text" class="form-control" name="aktif" id="aktif" placeholder="Aktif" value="<?php echo $aktif; ?>" /> -->
            <select class="form-control" name="aktif" >
                <option value="">Pilih Status</option>
                <option value="Aktif" <?php echo ($aktif == 'Aktif' ? 'selected' : '');?> >Aktif</option>
                <option value="Proses" <?php echo ($aktif == 'Proses' ? 'selected' : '');?> >Proses</option>
                <option value="Tidak" <?php echo ($aktif == 'Tidak' ? 'selected' : '');?> >Tidak</option>
            </select>
        </div>
	    <!-- <div class="col-md-6 form-group">
            <label for="tinyint">Lock <?php echo form_error('lock') ?></label>
            <input type="text" class="form-control" name="lock" id="lock" placeholder="Lock" value="<?php echo $lock; ?>" />
        </div> -->
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_semester" value="<?php echo $id_semester; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
    	    <a href="<?php echo site_url('semester') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
	</form>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->