<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Jadwal</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
        <div class="col-md-6 form-group">
            <label for="int">Periode Semester <?php echo form_error('id_semester') ?></label>
            <!-- <input type="text" class="form-control" name="id_semester" id="id_semester" placeholder="Id Semester" value="<?php echo $id_semester; ?>" /> -->
            <select class="form-control" name="id_semester" id="id_semester">
                <option value="">Pilih Semester</option>
                <?php
                foreach ($dataSemester as $semester){
                    $selected = '';
                    if ($semester->id_semester == $semester){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $semester->id_semester;?>" <?php echo $selected;?>><?php echo $semester->nama_semester;?> <?php echo $semester->tahun_ajaran;?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Mata Kuliah <?php echo form_error('id_makul') ?></label>
            <!-- <input type="text" class="form-control" name="id_makul" id="id_makul" placeholder="Id Makul" value="<?php echo $id_makul; ?>" /> -->
            <select class="form-control" name="id_makul" id="id_makul">
                <option value="">Pilih Matakuliah</option>
                <?php
                foreach ($dataMakul as $makul){
                    $selected = '';
                    if ($makul->id_makul == $id_makul){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $makul->id_makul;?>" <?php echo $selected;?>><?php echo $makul->nama_makul;?> (<?php echo $makul->kode_makul;?>)</option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Nama Kelas <?php echo form_error('id_kelas') ?></label>
            <!-- <input type="text" class="form-control" name="id_makul" id="id_makul" placeholder="Id Makul" value="<?php echo $id_makul; ?>" /> -->
            <select class="form-control" name="id_makul" id="id_makul">
                <option value="">Pilih Kelas</option>
                <?php
                foreach ($dataKelas as $kelas){
                    $selected = '';
                    if ($kelas->id_kelas == $id_kelas){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $kelas->id_kelas;?>" <?php echo $selected;?>><?php echo $kelas->nama_kelas;?></option>
                <?php
                }
                ?>
            </select>
        </div>
	    <!-- <div class="form-group">
            <label for="int">Id Semester <?php echo form_error('id_semester') ?></label>
            <input type="text" class="form-control" name="id_semester" id="id_semester" placeholder="Id Semester" value="<?php echo $id_semester; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="int">Id Makul <?php echo form_error('id_makul') ?></label>
            <input type="text" class="form-control" name="id_makul" id="id_makul" placeholder="Id Makul" value="<?php echo $id_makul; ?>" />
        </div> -->
	    <!-- <div class="col-md-6 form-group">
            <label for="varchar">Nama Kelas <?php echo form_error('id_kelas') ?></label>
            <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Nama Kelas" value="<?php echo $id_kelas; ?>" />
        </div> -->
	    <!-- <div class="form-group">
            <label for="int">Id Dosen <?php echo form_error('id_dosen') ?></label>
            <input type="text" class="form-control" name="id_dosen" id="id_dosen" placeholder="Id Dosen" value="<?php echo $id_dosen; ?>" />
        </div> -->
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_jadwal" value="<?php echo $id_jadwal; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('jadwal') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
	</form>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 