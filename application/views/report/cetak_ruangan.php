<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cetak Jadwal Ruangan</title>

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
				Jadwal Pemakaian Ruangan Semester <!-- <?php echo $dataKelas->nama_semester ?> -->
				<br>
				T.A. <!-- <?php echo $kelas->tahun_ajaran ?> -->
			</strong>
			</font>
		</p>
	
		<p style="text-align: left;"><strong>Ruangan: <!-- <?php echo $kelas->nama_kelas ?> --></strong></p>       
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

</body>
</html>