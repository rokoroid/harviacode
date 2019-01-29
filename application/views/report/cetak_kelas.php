<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Jadwal Kelas</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/adminlte/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  	<style>
        table{
            border-collapse: collapse;
            width: 100%;
            'margin: 0 auto;
        }
        table th{
            border:1px solid #000;
            padding: 3px;
            font-weight: bold;
        }
        table td{
            border:1px solid #000;
            padding: 3px;
            vertical-align: top;
        }

        img{
        	height: 80px;
        	width: 80px;
        }

        #judul{
            font-size: 20px;
            font-weight: bold;
        }

        #tebal2{
            font-weight: bold;
        }

        #tebal{
            border:1px solid #000;
            padding: 3px;
            font-weight: normal;
            text-align: center;
        }

        #garis{
            width: 40%;
            border: 1px solid #000000;
        }
    </style>

    <style type="text/css">
        .under { text-decoration: underline;
            color: #000000;
        }
        .over  { text-decoration: overline; }
        .line  { text-decoration: line-through; }
        .blink { text-decoration: blink; }
        .all   { text-decoration: underline overline line-through; }
        a      { text-decoration: none; }
    </style>
</head>
<body>
	
	<div class="col-sm-12" >
		<p style="text-align: left;">
			<img src="./assets/img/logo.png">
				<font face="arial" size="5" color="red"><strong>UNIVERSITAS TEKNOKRAT INDONESIA</strong></font>
		</p>
		<br>
		<br>
		<p style="text-align: center;">
			<font face="arial" size="5" color="black">
			<strong>
				Jadwal Perkuliahan Semester <!-- <?php echo $dataKelas->nama_semester ?> -->
				<br>
				Program Studi 
				<br>
				T.A. <!-- <?php echo $kelas->tahun_ajaran ?> -->
			</strong>
			</font>
		</p>
	
		<p style="text-align: left;"><strong>Kelas: <!-- <?php echo $kelas->nama_kelas ?> --></strong></p>       
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

</body>
</html>