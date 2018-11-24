<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Program Studi</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
	    <div class="col-md-6 form-group">
            <label for="varchar">Kode Prodi DIKTI <?php echo form_error('kode_prodiDIKTI') ?></label>
            <input type="text" class="form-control" name="kode_prodiDIKTI" id="kode_prodiDIKTI" placeholder="Kode Prodi DIKTI" value="<?php echo $kode_prodiDIKTI; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Prodi <?php echo form_error('nama_prodi') ?></label>
            <input type="text" class="form-control" name="nama_prodi" id="nama_prodi" placeholder="Nama Prodi" value="<?php echo $nama_prodi; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Nama Prodi (English) <?php echo form_error('nama_prodi_Eng') ?></label>
            <input type="text" class="form-control" name="nama_prodi_Eng" id="nama_prodi_Eng" placeholder="Nama Prodi (English)" value="<?php echo $nama_prodi_Eng; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="int">Fakultas <?php echo form_error('id_fakultas') ?></label>
            <!-- <input type="text" class="form-control" name="id_fakultas" id="id_fakultas" placeholder="Id Fakultas" value="<?php echo $id_fakultas; ?>" /> -->
            <select class="form-control" name="id_fakultas" id="id_fakultas">
                <option value="">Pilih Fakultas</option>
                <?php
                foreach ($dataFakultas as $fakultas){
                    $selected = '';
                    if ($fakultas->id_fakultas == $id_fakultas){
                    $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $fakultas->id_fakultas;?>" <?php echo $selected;?>><?php echo $fakultas->nama_fakultas;?> (<?php echo $fakultas->singkatan;?>)</option>
                <?php
                }
                ?>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="enum">Jenjang <?php echo form_error('jenjang') ?></label>
            <!-- <input type="text" class="form-control" name="jenjang" id="jenjang" placeholder="Jenjang" value="<?php echo $jenjang; ?>" /> -->
            <select class="form-control" name="jenjang" id="jenjang">
                <option value="">Pilih Jenjang</option>
                <option value="D3" <?php echo ($jenjang == 'D3' ? 'selected' : '');?> >D3</option>
                <option value="S1" <?php echo ($jenjang == 'S1' ? 'selected' : '');?> >S1</option>
                <option value="S2" <?php echo ($jenjang == 'S2' ? 'selected' : '');?> >S2</option>
                <option value="S3" <?php echo ($jenjang == 'S3' ? 'selected' : '');?> >S3</option>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="enum">Aktif <?php echo form_error('aktif') ?></label>
            <!-- <input type="text" class="form-control" name="aktif" id="aktif" placeholder="Aktif" value="<?php echo $aktif; ?>" /> -->
            <select class="form-control" name="aktif" id="aktif">
                <option value="" >Pilih Status Aktif</option>
                <option value="Ya" <?php echo ($aktif == 'Ya' ? 'selected' : '');?> >Ya</option>
                <option value="Tidak" <?php echo ($aktif == 'Tidak' ? 'selected' : '');?> >Tidak</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="keterangan">Keterangan <?php echo form_error('keterangan') ?></label>
            <textarea class="form-control" rows="3" name="keterangan" id="keterangan" placeholder="Keterangan"><?php echo $keterangan; ?></textarea>
        </div>
        <div class="col-md-12" style="text-align: right;">
	       <input type="hidden" name="id_prodi" value="<?php echo $id_prodi; ?>" /> 
	       <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	       <a href="<?php echo site_url('prodi') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
	</form>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 