<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

    	<div class="col-sm-12"  style="margin-top:20px; margin-bottom:10px;">
            <form id="filter" method="post">
            <div class="form-group col-md-3">
                <!-- <label>Gedung</label> -->
                <select class="form-control" name="gedung" id="gedung">
                    <option value="">Semua Gedung</option>
                    <?php
                    foreach ($dataGedung as $gedung){
                    ?>
                        <option value="<?php echo $gedung->id_gedung;?>"><?php echo $gedung->nama_gedung;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <!-- <label>Ruangan</label> -->
                <select class="form-control" name="ruang" id="ruang">
                    <option value="">Semua Ruangan</option>
                    <?php
                    foreach ($dataRuangan as $ruang){
                    ?>
                        <option value="<?php echo $ruang->id_ruang;?>"><?php echo $ruang->nama_ruang;?></option>
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
	foreach ($dataRuangan as $ruang) 
	{

		$ruang_senin_tujuh = $model_obj->ruang_senin_tujuh($ruang->id_ruang);
        $ruang_senin_sembilan = $model_obj->ruang_senin_sembilan($ruang->id_ruang);
        $ruang_senin_sebelas = $model_obj->ruang_senin_sebelas($ruang->id_ruang);
        $ruang_senin_tigabelas = $model_obj->ruang_senin_tigabelas($ruang->id_ruang);
        $ruang_senin_limabelas = $model_obj->ruang_senin_limabelas($ruang->id_ruang);
        $ruang_senin_tujuhbelas = $model_obj->ruang_senin_tujuhbelas($ruang->id_ruang);
        $ruang_senin_sembilanbelas = $model_obj->ruang_senin_sembilanbelas($ruang->id_ruang);

        $ruang_selasa_tujuh = $model_obj->ruang_selasa_tujuh($ruang->id_ruang);
        $ruang_selasa_sembilan = $model_obj->ruang_selasa_sembilan($ruang->id_ruang);
        $ruang_selasa_sebelas = $model_obj->ruang_selasa_sebelas($ruang->id_ruang);
        $ruang_selasa_tigabelas = $model_obj->ruang_selasa_tigabelas($ruang->id_ruang);
        $ruang_selasa_limabelas = $model_obj->ruang_selasa_limabelas($ruang->id_ruang);
        $ruang_selasa_tujuhbelas = $model_obj->ruang_selasa_tujuhbelas($ruang->id_ruang);
        $ruang_selasa_sembilanbelas = $model_obj->ruang_selasa_sembilanbelas($ruang->id_ruang);

        $ruang_rabu_tujuh = $model_obj->ruang_rabu_tujuh($ruang->id_ruang);
        $ruang_rabu_sembilan = $model_obj->ruang_rabu_sembilan($ruang->id_ruang);
        $ruang_rabu_sebelas = $model_obj->ruang_rabu_sebelas($ruang->id_ruang);
        $ruang_rabu_tigabelas = $model_obj->ruang_rabu_tigabelas($ruang->id_ruang);
        $ruang_rabu_limabelas = $model_obj->ruang_rabu_limabelas($ruang->id_ruang);
        $ruang_rabu_tujuhbelas = $model_obj->ruang_rabu_tujuhbelas($ruang->id_ruang);
        $ruang_rabu_sembilanbelas = $model_obj->ruang_rabu_sembilanbelas($ruang->id_ruang);

        $ruang_kamis_tujuh = $model_obj->ruang_kamis_tujuh($ruang->id_ruang);
        $ruang_kamis_sembilan = $model_obj->ruang_kamis_sembilan($ruang->id_ruang);
        $ruang_kamis_sebelas = $model_obj->ruang_kamis_sebelas($ruang->id_ruang);
        $ruang_kamis_tigabelas = $model_obj->ruang_kamis_tigabelas($ruang->id_ruang);
        $ruang_kamis_limabelas = $model_obj->ruang_kamis_limabelas($ruang->id_ruang);
        $ruang_kamis_tujuhbelas = $model_obj->ruang_kamis_tujuhbelas($ruang->id_ruang);
        $ruang_kamis_sembilanbelas = $model_obj->ruang_kamis_sembilanbelas($ruang->id_ruang);

        $ruang_jumat_tujuh = $model_obj->ruang_jumat_tujuh($ruang->id_ruang);
        $ruang_jumat_sembilan = $model_obj->ruang_jumat_sembilan($ruang->id_ruang);
        $ruang_jumat_sebelas = $model_obj->ruang_jumat_sebelas($ruang->id_ruang);
        $ruang_jumat_tigabelas = $model_obj->ruang_jumat_tigabelas($ruang->id_ruang);
        $ruang_jumat_limabelas = $model_obj->ruang_jumat_limabelas($ruang->id_ruang);
        $ruang_jumat_tujuhbelas = $model_obj->ruang_jumat_tujuhbelas($ruang->id_ruang);
        $ruang_jumat_sembilanbelas = $model_obj->ruang_jumat_sembilanbelas($ruang->id_ruang);

        $ruang_sabtu_tujuh = $model_obj->ruang_sabtu_tujuh($ruang->id_ruang);
        $ruang_sabtu_sembilan = $model_obj->ruang_sabtu_sembilan($ruang->id_ruang);
        $ruang_sabtu_sebelas = $model_obj->ruang_sabtu_sebelas($ruang->id_ruang);
        $ruang_sabtu_tigabelas = $model_obj->ruang_sabtu_tigabelas($ruang->id_ruang);
        $ruang_sabtu_limabelas = $model_obj->ruang_sabtu_limabelas($ruang->id_ruang);
        $ruang_sabtu_tujuhbelas = $model_obj->ruang_sabtu_tujuhbelas($ruang->id_ruang);
        $ruang_sabtu_sembilanbelas = $model_obj->ruang_sabtu_sembilanbelas($ruang->id_ruang);

?>
    <div class="row">
	<!-- /.col -->
	<div class="col-md-12">
	          <div class="box box-success box-solid">
	            <div class="box-header with-border">
	            <i class="fa fa-hdd-o fa-fw"></i>
	              <h3 class="box-title"><?php echo $ruang->nama_ruang ?></h3>
	              <div class="box-tools pull-right">
	                <!-- <button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button> -->
	                <a href="<?php echo base_url();?>result/cetak_ruangan/<?php echo $ruang->id_ruang;?>"><button class="btn btn-box-tool" type="submit"><i class="fa fa-print"></i></button></a>
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
	                  <?php foreach ($ruang_senin_tujuh as $ruang_senin_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_tujuh->gelar_depan?> <?php echo $ruang_senin_tujuh->nama_dosen?> <?php echo $ruang_senin_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_tujuh as $ruang_selasa_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tujuh->gelar_depan?> <?php echo $ruang_selasa_tujuh->nama_dosen?> <?php echo $ruang_selasa_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_tujuh as $ruang_rabu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tujuh->gelar_depan?> <?php echo $ruang_rabu_tujuh->nama_dosen?> <?php echo $ruang_rabu_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_tujuh as $ruang_kamis_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tujuh->gelar_depan?> <?php echo $ruang_kamis_tujuh->nama_dosen?> <?php echo $ruang_kamis_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_tujuh as $ruang_jumat_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tujuh->gelar_depan?> <?php echo $ruang_jumat_tujuh->nama_dosen?> <?php echo $ruang_jumat_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_tujuh as $ruang_sabtu_tujuh) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_tujuh->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tujuh->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tujuh->gelar_depan?> <?php echo $ruang_sabtu_tujuh->nama_dosen?> <?php echo $ruang_sabtu_tujuh->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>09.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_sembilan as $ruang_senin_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_sembilan->gelar_depan?> <?php echo $ruang_senin_sembilan->nama_dosen?> <?php echo $ruang_senin_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_sembilan as $ruang_selasa_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sembilan->gelar_depan?> <?php echo $ruang_selasa_sembilan->nama_dosen?> <?php echo $ruang_selasa_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_sembilan as $ruang_rabu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sembilan->gelar_depan?> <?php echo $ruang_rabu_sembilan->nama_dosen?> <?php echo $ruang_rabu_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_sembilan as $ruang_kamis_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sembilan->gelar_depan?> <?php echo $ruang_kamis_sembilan->nama_dosen?> <?php echo $ruang_kamis_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_sembilan as $ruang_jumat_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sembilan->gelar_depan?> <?php echo $ruang_jumat_sembilan->nama_dosen?> <?php echo $ruang_jumat_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_sembilan as $ruang_sabtu_sembilan) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_sembilan->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sembilan->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sembilan->gelar_depan?> <?php echo $ruang_sabtu_sembilan->nama_dosen?> <?php echo $ruang_sabtu_sembilan->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>11.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_sebelas as $ruang_senin_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_sebelas->gelar_depan?> <?php echo $ruang_senin_sebelas->nama_dosen?> <?php echo $ruang_senin_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_sebelas as $ruang_selasa_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sebelas->gelar_depan?> <?php echo $ruang_selasa_sebelas->nama_dosen?> <?php echo $ruang_selasa_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_sebelas as $ruang_rabu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sebelas->gelar_depan?> <?php echo $ruang_rabu_sebelas->nama_dosen?> <?php echo $ruang_rabu_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_sebelas as $ruang_kamis_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sebelas->gelar_depan?> <?php echo $ruang_kamis_sebelas->nama_dosen?> <?php echo $ruang_kamis_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_sebelas as $ruang_jumat_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sebelas->gelar_depan?> <?php echo $ruang_jumat_sebelas->nama_dosen?> <?php echo $ruang_jumat_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_sebelas as $ruang_sabtu_sebelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_sebelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sebelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sebelas->gelar_depan?> <?php echo $ruang_sabtu_sebelas->nama_dosen?> <?php echo $ruang_sabtu_sebelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>13.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_tigabelas as $ruang_senin_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_tigabelas->gelar_depan?> <?php echo $ruang_senin_tigabelas->nama_dosen?> <?php echo $ruang_senin_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_tigabelas as $ruang_selasa_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tigabelas->gelar_depan?> <?php echo $ruang_selasa_tigabelas->nama_dosen?> <?php echo $ruang_selasa_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_tigabelas as $ruang_rabu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tigabelas->gelar_depan?> <?php echo $ruang_rabu_tigabelas->nama_dosen?> <?php echo $ruang_rabu_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_tigabelas as $ruang_kamis_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tigabelas->gelar_depan?> <?php echo $ruang_kamis_tigabelas->nama_dosen?> <?php echo $ruang_kamis_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_tigabelas as $ruang_jumat_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tigabelas->gelar_depan?> <?php echo $ruang_jumat_tigabelas->nama_dosen?> <?php echo $ruang_jumat_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_tigabelas as $ruang_sabtu_tigabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_tigabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tigabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tigabelas->gelar_depan?> <?php echo $ruang_sabtu_tigabelas->nama_dosen?> <?php echo $ruang_sabtu_tigabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>15.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_limabelas as $ruang_senin_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_limabelas->gelar_depan?> <?php echo $ruang_senin_limabelas->nama_dosen?> <?php echo $ruang_senin_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_limabelas as $ruang_selasa_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_limabelas->gelar_depan?> <?php echo $ruang_selasa_limabelas->nama_dosen?> <?php echo $ruang_selasa_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_limabelas as $ruang_rabu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_limabelas->gelar_depan?> <?php echo $ruang_rabu_limabelas->nama_dosen?> <?php echo $ruang_rabu_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_limabelas as $ruang_kamis_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_limabelas->gelar_depan?> <?php echo $ruang_kamis_limabelas->nama_dosen?> <?php echo $ruang_kamis_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_limabelas as $ruang_jumat_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_limabelas->gelar_depan?> <?php echo $ruang_jumat_limabelas->nama_dosen?> <?php echo $ruang_jumat_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_limabelas as $ruang_sabtu_limabelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_limabelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_limabelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_limabelas->gelar_depan?> <?php echo $ruang_sabtu_limabelas->nama_dosen?> <?php echo $ruang_sabtu_limabelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>17.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_tujuhbelas as $ruang_senin_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_tujuhbelas->gelar_depan?> <?php echo $ruang_senin_tujuhbelas->nama_dosen?> <?php echo $ruang_senin_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_tujuhbelas as $ruang_selasa_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_tujuhbelas->gelar_depan?> <?php echo $ruang_selasa_tujuhbelas->nama_dosen?> <?php echo $ruang_selasa_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_tujuhbelas as $ruang_rabu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_tujuhbelas->gelar_depan?> <?php echo $ruang_rabu_tujuhbelas->nama_dosen?> <?php echo $ruang_rabu_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_tujuhbelas as $ruang_kamis_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_tujuhbelas->gelar_depan?> <?php echo $ruang_kamis_tujuhbelas->nama_dosen?> <?php echo $ruang_kamis_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_tujuhbelas as $ruang_jumat_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_tujuhbelas->gelar_depan?> <?php echo $ruang_jumat_tujuhbelas->nama_dosen?> <?php echo $ruang_jumat_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_tujuhbelas as $ruang_sabtu_tujuhbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_tujuhbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tujuhbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_tujuhbelas->gelar_depan?> <?php echo $ruang_sabtu_tujuhbelas->nama_dosen?> <?php echo $ruang_sabtu_tujuhbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	              </tr>
	              <tr>
	                <td>19.00</td>
	                <td>
	                  <?php foreach ($ruang_senin_sembilanbelas as $ruang_senin_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_senin_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_senin_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_senin_sembilanbelas->gelar_depan?> <?php echo $ruang_senin_sembilanbelas->nama_dosen?> <?php echo $ruang_senin_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_selasa_sembilanbelas as $ruang_selasa_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_selasa_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_selasa_sembilanbelas->gelar_depan?> <?php echo $ruang_selasa_sembilanbelas->nama_dosen?> <?php echo $ruang_selasa_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_rabu_sembilanbelas as $ruang_rabu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_rabu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_rabu_sembilanbelas->gelar_depan?> <?php echo $ruang_rabu_sembilanbelas->nama_dosen?> <?php echo $ruang_rabu_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_kamis_sembilanbelas as $ruang_kamis_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_kamis_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_kamis_sembilanbelas->gelar_depan?> <?php echo $ruang_kamis_sembilanbelas->nama_dosen?> <?php echo $ruang_kamis_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_jumat_sembilanbelas as $ruang_jumat_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_jumat_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_jumat_sembilanbelas->gelar_depan?> <?php echo $ruang_jumat_sembilanbelas->nama_dosen?> <?php echo $ruang_jumat_sembilanbelas->gelar_belakang?>
	                  <?php
	                  }
	                  ?>
	                </td>
	                <td>
	                  <?php foreach ($ruang_sabtu_sembilanbelas as $ruang_sabtu_sembilanbelas) 
	                  {
	                  	?> 
	                  	<?php echo $ruang_sabtu_sembilanbelas->nama_makul?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sembilanbelas->nama_kelas?>
	                  	<br>
	                  	<?php echo $ruang_sabtu_sembilanbelas->gelar_depan?> <?php echo $ruang_sabtu_sembilanbelas->nama_dosen?> <?php echo $ruang_sabtu_sembilanbelas->gelar_belakang?>
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