 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Matakuliah</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
        <div class="col-md-6 form-group">
            <label for="int">Semester <?php echo form_error('semester') ?></label>
            <!-- <input type="text" class="form-control" name="semester" id="semester" placeholder="Semester" value="<?php echo $semester; ?>" /> -->
            <select class="form-control" name="semester" id="semester">
                <option value="">Pilih Semester</option>
                <option value="Semester 1" <?php echo ($semester == 'Semester 1' ? 'selected' : '');?> >Semester 1</option>
                <option value="Semester 2" <?php echo ($semester == 'Semester 2' ? 'selected' : '');?> >Semester 2</option>
                <option value="Semester 3" <?php echo ($semester == 'Semester 3' ? 'selected' : '');?> >Semester 3</option>
                <option value="Semester 4" <?php echo ($semester == 'Semester 4' ? 'selected' : '');?> >Semester 4</option>
                <option value="Semester 5" <?php echo ($semester == 'Semester 5' ? 'selected' : '');?> >Semester 5</option>
                <option value="Semester 6" <?php echo ($semester == 'Semester 6' ? 'selected' : '');?> >Semester 6</option>
                <option value="Semester 7" <?php echo ($semester == 'Semester 7' ? 'selected' : '');?> >Semester 7</option>
                <option value="Semester 8" <?php echo ($semester == 'Semester 8' ? 'selected' : '');?> >Semester 8</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Prodi <?php echo form_error('id_prodi') ?></label>
            <!-- <input type="text" class="form-control" name="id_prodi" id="id_prodi" placeholder="Prodi" value="<?php echo $id_prodi; ?>" /> -->
            <select class="form-control" name="id_prodi" id="id_prodi">
                <option value="">Pilih Prodi</option>
                <?php
                foreach ($dataProdi as $prodi){
                    $selected = '';
                    if ($prodi->id_prodi == $id_prodi){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $prodi->id_prodi;?>" <?php echo $selected;?>><?php echo $prodi->nama_prodi;?> (<?php echo $prodi->jenjang ?>)</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Kode Makul <?php echo form_error('kode_makul') ?></label>
            <input type="text" class="form-control" name="kode_makul" id="kode_makul" placeholder="Kode Makul" value="<?php echo $kode_makul; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Nama Makul <?php echo form_error('nama_makul') ?></label>
            <input type="text" class="form-control" name="nama_makul" id="nama_makul" placeholder="Nama Makul" value="<?php echo $nama_makul; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="int">SKS <?php echo form_error('sks') ?></label>
            <input type="text" class="form-control" name="sks" id="sks" placeholder="SKS" value="<?php echo $sks; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Jenis Matakuliah <?php echo form_error('jenis_makul') ?></label>
            <!-- <input type="text" class="form-control" name="jenis_makul" id="jenis_makul" placeholder="Jenis Makul" value="<?php echo $jenis_makul; ?>" /> -->
            <select class="form-control" name="jenis_makul" id="jenis_makul">
                <option value="">Pilih Jenis</option>
                <option value="Teori" <?php echo ($jenis_makul == 'Teori' ? 'selected' : '');?> >Teori</option>
                <option value="Praktikum" <?php echo ($jenis_makul == 'Praktikum' ? 'selected' : '');?> >Praktikum</option>
                <option value="Teori/Praktikum" <?php echo ($jenis_makul == 'Teori/Praktikum' ? 'selected' : '');?> >Teori/Praktikum</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Angkatan <?php echo form_error('angkatan') ?></label>
            <!-- <input type="text" class="form-control" name="jenis_makul" id="jenis_makul" placeholder="Jenis Makul" value="<?php echo $jenis_makul; ?>" /> -->
            <select class="form-control" name="angkatan" id="angkatan">
                <option value="">Pilih Tahun Angkatan</option>
                <option value="2013" <?php echo ($angkatan == '2013' ? 'selected' : '');?> >2013</option>
                <option value="2014" <?php echo ($angkatan == '2014' ? 'selected' : '');?> >2014</option>
                <option value="2015" <?php echo ($angkatan == '2015' ? 'selected' : '');?> >2015</option>
                <option value="2016" <?php echo ($angkatan == '2015' ? 'selected' : '');?> >2016</option>
                <option value="2017" <?php echo ($angkatan == '2015' ? 'selected' : '');?> >2017</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Status <?php echo form_error('status') ?></label>
            <!-- <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /> -->
            <select class="form-control" name="status" id="status">
                <option value="">Pilih Status</option>
                <option value="0" <?php echo ($angkatan == '0' ? 'selected' : '');?> >Belum di Validasi</option>
                <option value="1" <?php echo ($angkatan == '1' ? 'selected' : '');?> >Sudah di Validasi</option>
            </select>
        </div>

        <div class="col-md-12" style="text-align: right;">
            <input type="hidden" name="id_makul" value="<?php echo $id_makul; ?>" /> 
            <button type="submit" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> <?php echo $button ?></button> 
            <a href="<?php echo site_url('matakuliah') ?>" class="btn btn-danger"><i class="fa fa-close fa-fw"></i> Cancel</a>
        </div>
        </div>
    </form>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 

