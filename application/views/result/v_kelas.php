<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

    	<div class="col-sm-12"  style="margin-top:20px; margin-bottom:10px;">
            <form id="filter" method="post">
            <div class="form-group col-md-3">
                <!-- <label>Angkatan</label> -->
                <select class="form-control" name="angkatan" id="angkatan">
                    <option value="">Semua Angkatan</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2015">2016</option>
                    <option value="2015">2017</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <!-- <label>Kelas</label> -->
                <select class="form-control" name="kelas" id="kelas">
                    <option value="">Semua Kelas</option>
                    <?php
                    foreach ($dataKelas as $kelas){
                    ?>
                        <option value="<?php echo $kelas->id_kelas;?>"><?php echo $kelas->nama_kelas;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <button type="submit" name="button" class="btn btn-info">Filter</button>
            </div>
        	</form>
        </div>

<?php
	foreach ($dataKelas as $kelas) 
	{

		$kelas_senin_tujuh = $model_obj->kelas_senin_tujuh($kelas->id_kelas);
		$kelas_senin_sembilan = $model_obj->kelas_senin_sembilan($kelas->id_kelas);
		$kelas_senin_sebelas = $model_obj->kelas_senin_sebelas($kelas->id_kelas);
		$kelas_senin_tigabelas = $model_obj->kelas_senin_tigabelas($kelas->id_kelas);
		$kelas_senin_limabelas = $model_obj->kelas_senin_limabelas($kelas->id_kelas);
		$kelas_senin_tujuhbelas = $model_obj->kelas_senin_tujuhbelas($kelas->id_kelas);
		$kelas_senin_sembilanbelas = $model_obj->kelas_senin_sembilanbelas($kelas->id_kelas);

		$kelas_selasa_tujuh = $model_obj->kelas_selasa_tujuh($kelas->id_kelas);
		$kelas_selasa_sembilan = $model_obj->kelas_selasa_sembilan($kelas->id_kelas);
		$kelas_selasa_sebelas = $model_obj->kelas_selasa_sebelas($kelas->id_kelas);
		$kelas_selasa_tigabelas = $model_obj->kelas_selasa_tigabelas($kelas->id_kelas);
		$kelas_selasa_limabelas = $model_obj->kelas_selasa_limabelas($kelas->id_kelas);
		$kelas_selasa_tujuhbelas = $model_obj->kelas_selasa_tujuhbelas($kelas->id_kelas);
		$kelas_selasa_sembilanbelas = $model_obj->kelas_selasa_sembilanbelas($kelas->id_kelas);

		$kelas_rabu_tujuh = $model_obj->kelas_rabu_tujuh($kelas->id_kelas);
		$kelas_rabu_sembilan = $model_obj->kelas_rabu_sembilan($kelas->id_kelas);
		$kelas_rabu_sebelas = $model_obj->kelas_rabu_sebelas($kelas->id_kelas);
		$kelas_rabu_tigabelas = $model_obj->kelas_rabu_tigabelas($kelas->id_kelas);
		$kelas_rabu_limabelas = $model_obj->kelas_rabu_limabelas($kelas->id_kelas);
		$kelas_rabu_tujuhbelas = $model_obj->kelas_rabu_tujuhbelas($kelas->id_kelas);
		$kelas_rabu_sembilanbelas = $model_obj->kelas_rabu_sembilanbelas($kelas->id_kelas);

		$kelas_kamis_tujuh = $model_obj->kelas_kamis_tujuh($kelas->id_kelas);
		$kelas_kamis_sembilan = $model_obj->kelas_kamis_sembilan($kelas->id_kelas);
		$kelas_kamis_sebelas = $model_obj->kelas_kamis_sebelas($kelas->id_kelas);
		$kelas_kamis_tigabelas = $model_obj->kelas_kamis_tigabelas($kelas->id_kelas);
		$kelas_kamis_limabelas = $model_obj->kelas_kamis_limabelas($kelas->id_kelas);
		$kelas_kamis_tujuhbelas = $model_obj->kelas_kamis_tujuhbelas($kelas->id_kelas);
		$kelas_kamis_sembilanbelas = $model_obj->kelas_kamis_sembilanbelas($kelas->id_kelas);

		$kelas_jumat_tujuh = $model_obj->kelas_jumat_tujuh($kelas->id_kelas);
		$kelas_jumat_sembilan = $model_obj->kelas_jumat_sembilan($kelas->id_kelas);
		$kelas_jumat_sebelas = $model_obj->kelas_jumat_sebelas($kelas->id_kelas);
		$kelas_jumat_tigabelas = $model_obj->kelas_jumat_tigabelas($kelas->id_kelas);
		$kelas_jumat_limabelas = $model_obj->kelas_jumat_limabelas($kelas->id_kelas);
		$kelas_jumat_tujuhbelas = $model_obj->kelas_jumat_tujuhbelas($kelas->id_kelas);
		$kelas_jumat_sembilanbelas = $model_obj->kelas_jumat_sembilanbelas($kelas->id_kelas);

		$kelas_sabtu_tujuh = $model_obj->kelas_sabtu_tujuh($kelas->id_kelas);
		$kelas_sabtu_sembilan = $model_obj->kelas_sabtu_sembilan($kelas->id_kelas);
		$kelas_sabtu_sebelas = $model_obj->kelas_sabtu_sebelas($kelas->id_kelas);
		$kelas_sabtu_tigabelas = $model_obj->kelas_sabtu_tigabelas($kelas->id_kelas);
		$kelas_sabtu_limabelas = $model_obj->kelas_sabtu_limabelas($kelas->id_kelas);
		$kelas_sabtu_tujuhbelas = $model_obj->kelas_sabtu_tujuhbelas($kelas->id_kelas);
		$kelas_sabtu_sembilanbelas = $model_obj->kelas_sabtu_sembilanbelas($kelas->id_kelas);

?>
    <div class="row">
	<!-- /.col -->
	<div class="col-md-12">
	          <div class="box box-success box-solid">
	            <div class="box-header with-border">
	            <i class="fa fa-hdd-o fa-fw"></i>
	              <h3 class="box-title"><?php echo $kelas->nama_kelas ?></h3>
	              <div class="box-tools pull-right">
	                <!-- <button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button> -->
	                <a href="<?php echo base_url();?>result/cetak_kelas/<?php echo $kelas->id_kelas;?>"><button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button></a>
	                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	              </div>
	              <!-- /.box-tools -->
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	               
	        <div class="col-sm-12" >       
	            <table id="list-data" class="table table-bordered table-striped">
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
	            <tbody align="center">
	              <tr>
	                <td>07.10</td>
	                <td>
	                  <?php foreach ($kelas_senin_tujuh as $kelas_senin_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_tujuh->gelar_depan?> <?php echo $kelas_senin_tujuh->nama_dosen?> <?php echo $kelas_senin_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_tujuh as $kelas_selasa_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tujuh->gelar_depan?> <?php echo $kelas_selasa_tujuh->nama_dosen?> <?php echo $kelas_selasa_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_tujuh as $kelas_rabu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tujuh->gelar_depan?> <?php echo $kelas_rabu_tujuh->nama_dosen?> <?php echo $kelas_rabu_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_tujuh as $kelas_kamis_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tujuh->gelar_depan?> <?php echo $kelas_kamis_tujuh->nama_dosen?> <?php echo $kelas_kamis_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_tujuh as $kelas_jumat_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tujuh->gelar_depan?> <?php echo $kelas_jumat_tujuh->nama_dosen?> <?php echo $kelas_jumat_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_tujuh as $kelas_sabtu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tujuh->gelar_depan?> <?php echo $kelas_sabtu_tujuh->nama_dosen?> <?php echo $kelas_sabtu_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>09.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_sembilan as $kelas_senin_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_sembilan->gelar_depan?> <?php echo $kelas_senin_sembilan->nama_dosen?> <?php echo $kelas_senin_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_sembilan as $kelas_selasa_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sembilan->gelar_depan?> <?php echo $kelas_selasa_sembilan->nama_dosen?> <?php echo $kelas_selasa_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_sembilan as $kelas_rabu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sembilan->gelar_depan?> <?php echo $kelas_rabu_sembilan->nama_dosen?> <?php echo $kelas_rabu_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_sembilan as $kelas_kamis_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sembilan->gelar_depan?> <?php echo $kelas_kamis_sembilan->nama_dosen?> <?php echo $kelas_kamis_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_sembilan as $kelas_jumat_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sembilan->gelar_depan?> <?php echo $kelas_jumat_sembilan->nama_dosen?> <?php echo $kelas_jumat_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_sembilan as $kelas_sabtu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sembilan->gelar_depan?> <?php echo $kelas_sabtu_sembilan->nama_dosen?> <?php echo $kelas_sabtu_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>11.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_sebelas as $kelas_senin_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_sebelas->gelar_depan?> <?php echo $kelas_senin_sebelas->nama_dosen?> <?php echo $kelas_senin_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_sebelas as $kelas_selasa_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sebelas->gelar_depan?> <?php echo $kelas_selasa_sebelas->nama_dosen?> <?php echo $kelas_selasa_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_sebelas as $kelas_rabu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sebelas->gelar_depan?> <?php echo $kelas_rabu_sebelas->nama_dosen?> <?php echo $kelas_rabu_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_sebelas as $kelas_kamis_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sebelas->gelar_depan?> <?php echo $kelas_kamis_sebelas->nama_dosen?> <?php echo $kelas_kamis_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_sebelas as $kelas_jumat_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sebelas->gelar_depan?> <?php echo $kelas_jumat_sebelas->nama_dosen?> <?php echo $kelas_jumat_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_sebelas as $kelas_sabtu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sebelas->gelar_depan?> <?php echo $kelas_sabtu_sebelas->nama_dosen?> <?php echo $kelas_sabtu_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>13.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_tigabelas as $kelas_senin_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_tigabelas->gelar_depan?> <?php echo $kelas_senin_tigabelas->nama_dosen?> <?php echo $kelas_senin_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_tigabelas as $kelas_selasa_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tigabelas->gelar_depan?> <?php echo $kelas_selasa_tigabelas->nama_dosen?> <?php echo $kelas_selasa_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_tigabelas as $kelas_rabu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tigabelas->gelar_depan?> <?php echo $kelas_rabu_tigabelas->nama_dosen?> <?php echo $kelas_rabu_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_tigabelas as $kelas_kamis_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tigabelas->gelar_depan?> <?php echo $kelas_kamis_tigabelas->nama_dosen?> <?php echo $kelas_kamis_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_tigabelas as $kelas_jumat_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tigabelas->gelar_depan?> <?php echo $kelas_jumat_tigabelas->nama_dosen?> <?php echo $kelas_jumat_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_tigabelas as $kelas_sabtu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tigabelas->gelar_depan?> <?php echo $kelas_sabtu_tigabelas->nama_dosen?> <?php echo $kelas_sabtu_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>15.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_limabelas as $kelas_senin_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_limabelas->gelar_depan?> <?php echo $kelas_senin_limabelas->nama_dosen?> <?php echo $kelas_senin_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_limabelas as $kelas_selasa_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_limabelas->gelar_depan?> <?php echo $kelas_selasa_limabelas->nama_dosen?> <?php echo $kelas_selasa_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_limabelas as $kelas_rabu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_limabelas->gelar_depan?> <?php echo $kelas_rabu_limabelas->nama_dosen?> <?php echo $kelas_rabu_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_limabelas as $kelas_kamis_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_limabelas->gelar_depan?> <?php echo $kelas_kamis_limabelas->nama_dosen?> <?php echo $kelas_kamis_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_limabelas as $kelas_jumat_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_limabelas->gelar_depan?> <?php echo $kelas_jumat_limabelas->nama_dosen?> <?php echo $kelas_jumat_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_limabelas as $kelas_sabtu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_limabelas->gelar_depan?> <?php echo $kelas_sabtu_limabelas->nama_dosen?> <?php echo $kelas_sabtu_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>17.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_tujuhbelas as $kelas_senin_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_tujuhbelas->gelar_depan?> <?php echo $kelas_senin_tujuhbelas->nama_dosen?> <?php echo $kelas_senin_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_tujuhbelas as $kelas_selasa_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_tujuhbelas->gelar_depan?> <?php echo $kelas_selasa_tujuhbelas->nama_dosen?> <?php echo $kelas_selasa_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_tujuhbelas as $kelas_rabu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_tujuhbelas->gelar_depan?> <?php echo $kelas_rabu_tujuhbelas->nama_dosen?> <?php echo $kelas_rabu_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_tujuhbelas as $kelas_kamis_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_tujuhbelas->gelar_depan?> <?php echo $kelas_kamis_tujuhbelas->nama_dosen?> <?php echo $kelas_kamis_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_tujuhbelas as $kelas_jumat_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_tujuhbelas->gelar_depan?> <?php echo $kelas_jumat_tujuhbelas->nama_dosen?> <?php echo $kelas_jumat_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_tujuhbelas as $kelas_sabtu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_tujuhbelas->gelar_depan?> <?php echo $kelas_sabtu_tujuhbelas->nama_dosen?> <?php echo $kelas_sabtu_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>19.00</td>
	                <td>
	                  <?php foreach ($kelas_senin_sembilanbelas as $kelas_senin_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_senin_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_senin_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_senin_sembilanbelas->gelar_depan?> <?php echo $kelas_senin_sembilanbelas->nama_dosen?> <?php echo $kelas_senin_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_selasa_sembilanbelas as $kelas_selasa_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_selasa_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_selasa_sembilanbelas->gelar_depan?> <?php echo $kelas_selasa_sembilanbelas->nama_dosen?> <?php echo $kelas_selasa_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_rabu_sembilanbelas as $kelas_rabu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_rabu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_rabu_sembilanbelas->gelar_depan?> <?php echo $kelas_rabu_sembilanbelas->nama_dosen?> <?php echo $kelas_rabu_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_kamis_sembilanbelas as $kelas_kamis_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_kamis_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_kamis_sembilanbelas->gelar_depan?> <?php echo $kelas_kamis_sembilanbelas->nama_dosen?> <?php echo $kelas_kamis_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_jumat_sembilanbelas as $kelas_jumat_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_jumat_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_jumat_sembilanbelas->gelar_depan?> <?php echo $kelas_jumat_sembilanbelas->nama_dosen?> <?php echo $kelas_jumat_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($kelas_sabtu_sembilanbelas as $kelas_sabtu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $kelas_sabtu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $kelas_sabtu_sembilanbelas->gelar_depan?> <?php echo $kelas_sabtu_sembilanbelas->nama_dosen?> <?php echo $kelas_sabtu_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	            </tbody>
	          </table>
	        </div> 
	        
	    </div>
	    <!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
	</div>
<?php
	}
?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 