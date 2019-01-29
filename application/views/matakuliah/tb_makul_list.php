<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data Matakuliah</h2>

        <!-- <form action="" method="POST" accept-charset="utf-8">
            <div class="col-md-12">
                <div class="col-md-2 form-group">
                    <label>Fakultas </label>
                    <select class="form-control" name="fakultas" id="id_fakultas">
                        <option value="All" >Semua Fakultas</option>
                        <?php
                           foreach ($dataFakultas as $fakultas) {
                               $id_fakultas =$fakultas->id_fakultas;
                                echo "<option value='".$id_fakultas."'  >".$fakultas->nama_fakultas. " ( " .$fakultas->singkatan." )</option>";
                           }
                        ?>
                    </select>
                </div>
            </div>
        </form> -->

        <div class="col-sm-12"  style="margin-top:20px; margin-bottom:10px;">
            <form id="filter" method="post">
            <div class="form-group col-md-3">
                <label>Fakultas</label>
                <select class="form-control" name="fakultas" id="fakultas">
                    <option value="">Semua Fakultas</option>
                    <?php
                    foreach ($dataFakultas as $fakultas){
                    ?>
                        <option value="<?php echo $fakultas->id_fakultas;?>"><?php echo $fakultas->nama_fakultas;?> (<?php echo $fakultas->singkatan;?>)</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Program Studi</label>
                <select class="form-control" name="prodi" id="prodi">
                    <option value="NULL">Semua Program Studi</option>
                    <?php
                    foreach ($dataProdi as $prodi){
                    ?>
                        <option value="<?php echo $prodi->id_prodi;?>"><?php echo $prodi->nama_prodi;?> (<?php echo $prodi->jenjang;?>)</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label>Angkatan</label>
                <select class="form-control" name="angkatan" id="angkatan">
                    <option value="NULL">Semua Angkatan</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <!-- <button type="submit" name="button" class="btn btn-info">Tampilkan</button> -->
            </div>
            </form>
        </div>

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('matakuliah/create'),'Tambah Data Matakuliah', 'class="btn btn-primary"'); ?> -->
                <a href="<?php echo base_url();?>matakuliah/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data Matakuliah</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('matakuliah/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('matakuliah'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div> -->
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="table-responsive">
        <table class="table table-bordered tablemakul" style="margin-bottom: 10px">
        <thead>
            <tr>
                <th>No</th>
                <th>Program Studi</th>
        		<th>Kode Mata Kuliah</th>
        		<th>Nama Mata Kuliah</th>
        		<th>SKS</th>
                <th>Semester</th>
                <th>Jenis Mata Kuliah</th>
                <th>Angkatan</th>
        		<th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($matakuliah_data as $matakuliah)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $matakuliah->nama_prodi ?></td>
        			<td><?php echo $matakuliah->kode_makul ?></td>
        			<td><?php echo $matakuliah->nama_makul ?></td>
        			<td><?php echo $matakuliah->sks ?></td>
                    <td><?php echo $matakuliah->semester ?></td>
                    <td><?php echo $matakuliah->jenis_makul ?></td>
                    <td><?php echo $matakuliah->angkatan ?></td>
        			<td style="text-align:center" width="200px">
        				<a href="<?php echo base_url();?>matakuliah/update/<?php echo $matakuliah->id_makul;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>matakuliah/delete/<?php echo $matakuliah->id_makul;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
                        <?php 
        				// echo anchor(site_url('matakuliah/read/'.$matakuliah->id_makul),'Read'); 
        				// echo ' | '; 
        				// echo anchor(site_url('matakuliah/update/'.$matakuliah->id_makul),'Edit'); 
        				// echo ' | '; 
        				// echo anchor(site_url('matakuliah/delete/'.$matakuliah->id_makul),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
        				?>
        			</td>
        		</tr>
                <?php
            }
            ?>
        </tbody>
        </table>
        </div>
        </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div> -->
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 