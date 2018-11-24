  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    
        <h2 style="margin-top:0px">Form <?php echo $button ?> Data Dosen</h2>
        <form action="<?php echo $action; ?>" method="post">
        <div class="row">
        <div class="col-md-6 form-group">
            <label for="int">Prodi <?php echo form_error('id_prodi') ?></label>
            <!-- <input type="text" class="form-control" name="id_prodi" id="id_prodi" placeholder="Id Prodi" value="<?php echo $id_prodi; ?>" /> -->
            <select class="form-control" name="id_prodi" id="id_prodi">
                <option value="">Pilih Prodi</option>
                <?php
                foreach ($dataProdi as $prodi){
                    $selected = '';
                    if ($prodi->id_prodi == $id_prodi){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $prodi->id_prodi;?>" <?php echo $selected;?>><?php echo $prodi->nama_prodi;?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <!-- <div class="col-md-6 form-group">
            <label for="int">Id User <?php echo form_error('id_user') ?></label>
            <input type="text" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
        </div> -->
        <div class="col-md-6 form-group">
            <label for="varchar">NIDN <?php echo form_error('nidn') ?></label>
            <input type="text" class="form-control" name="nidn" id="nidn" placeholder="NIDN" value="<?php echo $nidn; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">NIK <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" value="<?php echo $nik; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Nama Dosen <?php echo form_error('nama_dosen') ?></label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Nama Dosen" value="<?php echo $nama_dosen; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Gelar Depan <?php echo form_error('gelar_depan') ?></label>
            <input type="text" class="form-control" name="gelar_depan" id="gelar_depan" placeholder="Gelar Depan" value="<?php echo $gelar_depan; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Gelar Belakang <?php echo form_error('gelar_belakang') ?></label>
            <input type="text" class="form-control" name="gelar_belakang" id="gelar_belakang" placeholder="Gelar Belakang" value="<?php echo $gelar_belakang; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Jabatan Akademik <?php echo form_error('jabatan_akademik') ?></label>
            <!-- <input type="text" class="form-control" name="jabatan_akademik" id="jabatan_akademik" placeholder="Jabatan Akademik" value="<?php echo $jabatan_akademik; ?>" /> -->
            <select class="form-control" name="jabatan_akademik" id="jabatan_akademik">
                <option value="">Pilih Jabatan Akademik</option>
                <option value="Asisten Ahli" <?php echo ($jabatan_akademik == 'Asisten Ahli' ? 'selected' : '');?> >Asisten Ahli</option>
                <option value="Lektor" <?php echo ($jabatan_akademik == 'Lektor' ? 'selected' : '');?> >Lektor</option>
                <option value="Lektor Kepala" <?php echo ($jabatan_akademik == 'Lektor Kepala' ? 'selected' : '');?> >Lektor Kepala</option>
                <option value="Profesor" <?php echo ($jabatan_akademik == 'Profesor' ? 'selected' : '');?> >Profesor</option>
                <option value="Tenaga Pengajar" <?php echo ($jabatan_akademik == 'Tenaga Pengajar' ? 'selected' : '');?> >Tenaga Pengajar</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Golongan Kepangkatan <?php echo form_error('golongan_kepangkatan') ?></label>
            <!-- <input type="text" class="form-control" name="golongan_kepangkatan" id="golongan_kepangkatan" placeholder="Golongan Kepangkatan" value="<?php echo $golongan_kepangkatan; ?>" /> -->
            <select class="form-control" name="golongan_kepangkatan" id="golongan_kepangkatan">
                <option value="">Pilih Golongan</option>
                <option value="III A" <?php echo ($golongan_kepangkatan == 'III A' ? 'selected' : '');?> >III A</option>
                <option value="III B" <?php echo ($golongan_kepangkatan == 'III B' ? 'selected' : '');?> >III B</option>
                <option value="III C" <?php echo ($golongan_kepangkatan == 'III C' ? 'selected' : '');?> >III C</option>
                <option value="III D" <?php echo ($golongan_kepangkatan == 'III D' ? 'selected' : '');?> >III D</option>
                <option value="IV A" <?php echo ($golongan_kepangkatan == 'IV A' ? 'selected' : '');?> >IV A</option>
                <option value="IV B" <?php echo ($golongan_kepangkatan == 'IV B' ? 'selected' : '');?> >IV B</option>
                <option value="IV C" <?php echo ($golongan_kepangkatan == 'IV C' ? 'selected' : '');?> >IV C</option>
                <option value="IV D" <?php echo ($golongan_kepangkatan == 'IV D' ? 'selected' : '');?> >IV D</option>
                <option value="IV E" <?php echo ($golongan_kepangkatan == 'IV E' ? 'selected' : '');?> >IV E</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="int">Agama <?php echo form_error('agama') ?></label>
            <!-- <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" /> -->
            <select class="form-control" name="agama" id="agama">
                <option value="">Pilih Agama</option>
                <option value="1" <?php echo ($agama == '1' ? 'selected' : '');?> >Islam</option>
                <option value="2" <?php echo ($agama == '2' ? 'selected' : '');?> >Kristen</option>
                <option value="3" <?php echo ($agama == '3' ? 'selected' : '');?> >Katholik</option>
                <option value="4" <?php echo ($agama == '4' ? 'selected' : '');?> >Hindu</option>
                <option value="5" <?php echo ($agama == '5' ? 'selected' : '');?> >Budha</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Tempat Lahir <?php echo form_error('tempat_lahir') ?></label>
            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
        </div>
        <div class="col-md-6 form-group">
            <label for="date">Tanggal Lahir <?php echo form_error('tgl_lahir') ?></label>
            <!-- <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /> -->
            <input class="form-control" id="tgl_lahir" name="tgl_lahir" type="date" data-format="yyyy-mm-dd" value="<?php echo $tgl_lahir; ?>">
            <!-- <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="tgl_lahir" data-format="yyyy-mm-dd" name="tgl_lahir" class="tgl_lahir"> 
            </div> -->
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Jenis Kelamin <?php echo form_error('jk') ?></label>
            <!-- <input type="text" class="form-control" name="jk" id="jk" placeholder="Jk" value="<?php echo $jk; ?>" /> -->
            <select class="form-control" name="jk" id="jk">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" <?php echo ($jk == 'L' ? 'selected' : '');?> >Laki-laki</option>
                <option value="P" <?php echo ($jk == 'P' ? 'selected' : '');?> >Perempuan</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Ikatan Kerja <?php echo form_error('ikatan_kerja') ?></label>
            <!-- <input type="text" class="form-control" name="ikatan_kerja" id="ikatan_kerja" placeholder="Ikatan Kerja" value="<?php echo $ikatan_kerja; ?>" /> -->
            <select class="form-control" name="ikatan_kerja" id="ikatan_kerja">
                <option value="">Pilih Ikatan</option>
                <option value="Dosen Tetap" <?php echo ($ikatan_kerja == 'Dosen Tetap' ? 'selected' : '');?> >Dosen Tetap</option>
                <option value="Dosen Tidak Tetap" <?php echo ($ikatan_kerja == 'Dosen Tidak Tetap' ? 'selected' : '');?> >Dosen Tidak Tetap</option>
                <option value="Dosen Dengan Perjanjian Kerja" <?php echo ($ikatan_kerja == 'Dosen Dengan Perjanjian Kerja' ? 'selected' : '');?> >Dosen Dengan Perjanjian Kerja</option>
                <option value="Dosen PNS DPK" <?php echo ($ikatan_kerja == 'Dosen PNS DPK' ? 'selected' : '');?> >Dosen PNS DPK</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Status Aktif <?php echo form_error('status_aktif') ?></label>
            <!-- <input type="text" class="form-control" name="status_aktif" id="status_aktif" placeholder="Status Aktif" value="<?php echo $status_aktif; ?>" /> -->
            <select class="form-control" name="status_aktif" id="status_aktif">
                <option value="">Pilih Status</option>
                <option value="Aktif" <?php echo ($status_aktif == 'Aktif' ? 'selected' : '');?> >Aktif</option>
                <option value="Tidak Aktif" <?php echo ($status_aktif == 'Tidak Aktif' ? 'selected' : '');?> >Tidak Aktif</option>
                <option value="Ijin Belajar" <?php echo ($status_aktif == 'Ijin Belajar' ? 'selected' : '');?> >Ijin Belajar</option>
                <option value="Tugas Belajar" <?php echo ($status_aktif == 'Tugas Belajar' ? 'selected' : '');?> >Tugas Belajar</option>
                <option value="Tugas di Instansi Lain" <?php echo ($status_aktif == 'Tugas di Instansi Lain' ? 'selected' : '');?> >Tugas di Instansi Lain</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="enum">Pendidikan Terakhir <?php echo form_error('pendidikan_terakhir') ?></label>
            <!-- <input type="text" class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="<?php echo $pendidikan_terakhir; ?>" /> -->
            <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
                <option value="">Pilih Jenjang Pendidikan Terakhir</option>
                <option value="D3" <?php echo ($pendidikan_terakhir == 'D3' ? 'selected' : '');?> >D3</option>
                <option value="S1" <?php echo ($pendidikan_terakhir == 'S1' ? 'selected' : '');?> >S1</option>
                <option value="S2" <?php echo ($pendidikan_terakhir == 'S2' ? 'selected' : '');?> >S2</option>
                <option value="S3" <?php echo ($pendidikan_terakhir == 'S3' ? 'selected' : '');?> >S3</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="varchar">Bidang Ilmu <?php echo form_error('bidang_ilmu') ?></label>
            <input type="text" class="form-control" name="bidang_ilmu" id="bidang_ilmu" placeholder="Bidang Ilmu" value="<?php echo $bidang_ilmu; ?>" />
        </div>
        <div class="col-md-12" style="text-align: right;">
            <input type="hidden" name="id_dosen" value="<?php echo $id_dosen; ?>" /> 
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
            <a href="<?php echo site_url('dosen') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
    </form>
  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->