<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

    <div class="row">
       <!--  <div class="col-md-3 form-group">
          <label>Nama Dosen</label>
          <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" >
          <select class="form-control" name="id_dosen" id="id_dosen">
                <option value="">Pilih Dosen</option>
                <?php
                foreach ($dataDosen as $dosen){
                ?>
                    <option value="<?php echo $dosen->id_dosen;?>"><?php echo $dosen->gelar_depan;?> <?php echo $dosen->nama_dosen;?> <?php echo $dosen->gelar_belakang;?></option>
                <?php
                }
                ?>
          </select>
        </div> -->
        <!-- <div class="col-md-3 form-group">
          <label>Prodi</label>
          <input type="text" name="prodi" class="form-control" placeholder="Program Studi" >
          <select class="form-control" name="id_prodi" id="id_prodi">
                <option value="">Pilih Prodi</option>
                <?php
                foreach ($dataProdi as $prodi){
                ?>
                    <option value="<?php echo $prodi->id_prodi;?>"><?php echo $prodi->nama_prodi;?></option>
                <?php
                }
                ?>
            </select>
        </div> -->
        <div class="col-md-3 form-group">
          <label>Semester</label>
          <!-- <input type="text" name="semester" class="form-control" placeholder="Semester" > -->
          <select class="form-control" name="id_semester" id="id_semester">
                <option value="">Pilih Semester</option>
                <?php
                foreach ($dataSemester as $semester){
                ?>
                    <option value="<?php echo $semester->id_semester;?>"><?php echo $semester->nama_semester;?> <?php echo $semester->tahun_ajaran;?></option>
                <?php
                }
                ?>
          </select>
        </div>

        <div class="col-sm-12">
          <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>Jam</th>
                <th>Senin</th>
                <th>Selasa</th>
                <th>Rabu</th>
                <th>Kamis</th>
                <th>Jumat</th>
                <th>Sabtu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>07.10</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_tujuh" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_tujuh" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_tujuh" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_tujuh" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_tujuh" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_tujuh" value="1">
                </td>
              </tr>
              <tr>
                <td>09.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_sembilan" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_sembilan" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_sembilan" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_sembilan" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_sembilan" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_sembilan" value="1">
                </td>
              </tr>
              <tr>
                <td>11.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_sebelas" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_sebelas" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_sebelas" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_sebelas" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_sebelas" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_sebelas" value="1">
                </td>
              </tr>
              <tr>
                <td>13.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_satu" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_satu" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_satu" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_satu" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_satu" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_satu" value="1">
                </td>
              </tr>
              <tr>
                <td>15.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_tiga" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_tiga" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_tiga" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_tiga" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_tiga" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_tiga" value="1">
                </td>
              </tr>
              <tr>
                <td>17.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_lima" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_lima" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_lima" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_lima" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_lima" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_lima" value="1">
                </td>
              </tr>
              <tr>
                <td>19.00</td>
                <td>
                  <input type="checkbox" class="radio" name="senin_tujuh_mlm" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="selasa_tujuh_mlm" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="rabu_tujuh_mlm" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="kamis_tujuh_mlm" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="jumat_tujuh_mlm" value="1">
                </td>
                <td>
                  <input type="checkbox" class="radio" name="sabtu_tujuh_mlm" value="1">
                </td>
              </tr>
            </tbody>
          </table>
          
          </div>
        </div>        

        <div class="col-md-12 form-group" style="text-align:right">
            <br><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url('Dosen/');?>"><button type="button" class="btn btn-default" data-dismiss="modal"> Close</button></a>
        </div>
    </div>
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->    