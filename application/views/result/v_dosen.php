<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

    	<div class="col-sm-12"  style="margin-top:20px; margin-bottom:10px;">
            <form id="filter" method="post">
            <div class="form-group col-md-3">
                <!-- <label>Dosen</label> -->
                <select class="form-control" name="dosen" id="dosen">
                    <option value="">Semua Dosen</option>
                    <?php
                    foreach ($dataDosen as $dosen){
                    ?>
                        <option value="<?php echo $dosen->id_dosen;?>"><?php echo $dosen->gelar_depan;?> <?php echo $dosen->nama_dosen;?> <?php echo $dosen->gelar_belakang;?></option>
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
	foreach ($dataDosen as $dosen) 
	{

		$dosen_senin_tujuh = $model_obj->dosen_senin_tujuh($dosen->id_dosen);
		$dosen_senin_sembilan = $model_obj->dosen_senin_sembilan($dosen->id_dosen);
		$dosen_senin_sebelas = $model_obj->dosen_senin_sebelas($dosen->id_dosen);
		$dosen_senin_tigabelas = $model_obj->dosen_senin_tigabelas($dosen->id_dosen);
		$dosen_senin_limabelas = $model_obj->dosen_senin_limabelas($dosen->id_dosen);
		$dosen_senin_tujuhbelas = $model_obj->dosen_senin_tujuhbelas($dosen->id_dosen);
		$dosen_senin_sembilanbelas = $model_obj->dosen_senin_sembilanbelas($dosen->id_dosen);

		$dosen_selasa_tujuh = $model_obj->dosen_selasa_tujuh($dosen->id_dosen);
		$dosen_selasa_sembilan = $model_obj->dosen_selasa_sembilan($dosen->id_dosen);
		$dosen_selasa_sebelas = $model_obj->dosen_selasa_sebelas($dosen->id_dosen);
		$dosen_selasa_tigabelas = $model_obj->dosen_selasa_tigabelas($dosen->id_dosen);
		$dosen_selasa_limabelas = $model_obj->dosen_selasa_limabelas($dosen->id_dosen);
		$dosen_selasa_tujuhbelas = $model_obj->dosen_selasa_tujuhbelas($dosen->id_dosen);
		$dosen_selasa_sembilanbelas = $model_obj->dosen_selasa_sembilanbelas($dosen->id_dosen);

		$dosen_rabu_tujuh = $model_obj->dosen_rabu_tujuh($dosen->id_dosen);
		$dosen_rabu_sembilan = $model_obj->dosen_rabu_sembilan($dosen->id_dosen);
		$dosen_rabu_sebelas = $model_obj->dosen_rabu_sebelas($dosen->id_dosen);
		$dosen_rabu_tigabelas = $model_obj->dosen_rabu_tigabelas($dosen->id_dosen);
		$dosen_rabu_limabelas = $model_obj->dosen_rabu_limabelas($dosen->id_dosen);
		$dosen_rabu_tujuhbelas = $model_obj->dosen_rabu_tujuhbelas($dosen->id_dosen);
		$dosen_rabu_sembilanbelas = $model_obj->dosen_rabu_sembilanbelas($dosen->id_dosen);

		$dosen_kamis_tujuh = $model_obj->dosen_kamis_tujuh($dosen->id_dosen);
		$dosen_kamis_sembilan = $model_obj->dosen_kamis_sembilan($dosen->id_dosen);
		$dosen_kamis_sebelas = $model_obj->dosen_kamis_sebelas($dosen->id_dosen);
		$dosen_kamis_tigabelas = $model_obj->dosen_kamis_tigabelas($dosen->id_dosen);
		$dosen_kamis_limabelas = $model_obj->dosen_kamis_limabelas($dosen->id_dosen);
		$dosen_kamis_tujuhbelas = $model_obj->dosen_kamis_tujuhbelas($dosen->id_dosen);
		$dosen_kamis_sembilanbelas = $model_obj->dosen_kamis_sembilanbelas($dosen->id_dosen);

		$dosen_jumat_tujuh = $model_obj->dosen_jumat_tujuh($dosen->id_dosen);
		$dosen_jumat_sembilan = $model_obj->dosen_jumat_sembilan($dosen->id_dosen);
		$dosen_jumat_sebelas = $model_obj->dosen_jumat_sebelas($dosen->id_dosen);
		$dosen_jumat_tigabelas = $model_obj->dosen_jumat_tigabelas($dosen->id_dosen);
		$dosen_jumat_limabelas = $model_obj->dosen_jumat_limabelas($dosen->id_dosen);
		$dosen_jumat_tujuhbelas = $model_obj->dosen_jumat_tujuhbelas($dosen->id_dosen);
		$dosen_jumat_sembilanbelas = $model_obj->dosen_jumat_sembilanbelas($dosen->id_dosen);

		$dosen_sabtu_tujuh = $model_obj->dosen_sabtu_tujuh($dosen->id_dosen);
		$dosen_sabtu_sembilan = $model_obj->dosen_sabtu_sembilan($dosen->id_dosen);
		$dosen_sabtu_sebelas = $model_obj->dosen_sabtu_sebelas($dosen->id_dosen);
		$dosen_sabtu_tigabelas = $model_obj->dosen_sabtu_tigabelas($dosen->id_dosen);
		$dosen_sabtu_limabelas = $model_obj->dosen_sabtu_limabelas($dosen->id_dosen);
		$dosen_sabtu_tujuhbelas = $model_obj->dosen_sabtu_tujuhbelas($dosen->id_dosen);
		$dosen_sabtu_sembilanbelas = $model_obj->dosen_sabtu_sembilanbelas($dosen->id_dosen);

?>
    <div class="row">
	<!-- /.col -->
	<div class="col-md-12">
	          <div class="box box-success box-solid">
	            <div class="box-header with-border">
	            <i class="fa fa-hdd-o fa-fw"></i>
	              <h3 class="box-title"><?php echo $dosen->gelar_depan ?> <?php echo $dosen->nama_dosen ?> <?php echo $dosen->gelar_belakang ?></h3>
	              <div class="box-tools pull-right">
	              	<!-- <button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button> -->
	              	<a href="<?php echo base_url();?>result/cetak_dosen/<?php echo $dosen->id_dosen;?>"><button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button></a>
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
	                  <?php foreach ($dosen_senin_tujuh as $dosen_senin_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_tujuh as $dosen_selasa_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_tujuh as $dosen_rabu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_tujuh as $dosen_kamis_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_tujuh as $dosen_jumat_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_tujuh as $dosen_sabtu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tujuh->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tujuh->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>09.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_sembilan as $dosen_senin_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_sembilan as $dosen_selasa_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_sembilan as $dosen_rabu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_sembilan as $dosen_kamis_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_sembilan as $dosen_jumat_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_sembilan as $dosen_sabtu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sembilan->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sembilan->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>11.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_sebelas as $dosen_senin_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_sebelas as $dosen_selasa_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_sebelas as $dosen_rabu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_sebelas as $dosen_kamis_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_sebelas as $dosen_jumat_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_sebelas as $dosen_sabtu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sebelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sebelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>13.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_tigabelas as $dosen_senin_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_tigabelas as $dosen_selasa_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_tigabelas as $dosen_rabu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_tigabelas as $dosen_kamis_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_tigabelas as $dosen_jumat_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_tigabelas as $dosen_sabtu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tigabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tigabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>15.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_limabelas as $dosen_senin_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_limabelas as $dosen_selasa_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_limabelas as $dosen_rabu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_limabelas as $dosen_kamis_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_limabelas as $dosen_jumat_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_limabelas as $dosen_sabtu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_limabelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_limabelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>17.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_tujuhbelas as $dosen_senin_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_tujuhbelas as $dosen_selasa_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_tujuhbelas as $dosen_rabu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_tujuhbelas as $dosen_kamis_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_tujuhbelas as $dosen_jumat_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_tujuhbelas as $dosen_sabtu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tujuhbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_tujuhbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>19.00</td>
	                <td>
	                  <?php foreach ($dosen_senin_sembilanbelas as $dosen_senin_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_senin_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_senin_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_senin_sembilanbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_selasa_sembilanbelas as $dosen_selasa_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_selasa_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_selasa_sembilanbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_rabu_sembilanbelas as $dosen_rabu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_rabu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_rabu_sembilanbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_kamis_sembilanbelas as $dosen_kamis_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_kamis_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_kamis_sembilanbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_jumat_sembilanbelas as $dosen_jumat_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_jumat_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_jumat_sembilanbelas->nama_kelas?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($dosen_sabtu_sembilanbelas as $dosen_sabtu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $dosen_sabtu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sembilanbelas->nama_ruang?>
	                  	<br>
	                  	<?php echo $dosen_sabtu_sembilanbelas->nama_kelas?>
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