 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Data User</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-12 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-12" style="text-align: right;">
                <!-- <?php echo anchor(site_url('users/create'),'Tambah Data User', 'class="btn btn-primary"'); ?> -->
                <a href="<?php echo base_url();?>users/create"><button class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah Data User</button></a>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <!-- <div class="col-md-3 text-right">
                <form action="<?php echo site_url('users/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('users'); ?>" class="btn btn-default">Reset</a>
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
        <table class="table table-bordered datatable" style="margin-bottom: 10px">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Level</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($users_data as $users)
            {
                ?>
                <tr>
        			<td width="80px"><?php echo ++$start ?></td>
        			<td><?php echo $users->username ?></td>
        			<td><?php echo $users->level ?></td>
        			<td>
               
                    <div id="spoiler">
                        <div>
                            <input style="font-size: 11px; margin: 5px; padding: 0px;" onclick="if (this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display != '') { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = ''; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = 'none'; this.innerText = ''; this.value = 'Sembunyikan'; } else { this.parentNode.parentNode.getElementsByTagName('div')['show'].style.display = 'none'; this.parentNode.parentNode.getElementsByTagName('div')['hide'].style.display = ''; this.innerText = ''; this.value = 'Show Password'; }" name="button" type="button" value="Show Password" />
                        </div>
                        <div id="show" style="border: 1px solid white; display: none; margin: 5px; padding: 2px; width: 98%;">
                            <?php echo $users->password ?>
                        </div>
                        <div id="hide"></div>
                    </div>                            

                    </td>
                    <td><?php echo $users->gelar_depan?> <?php echo $users->nama_dosen?> <?php echo $users->gelar_belakang?></td>
        			<td><?php echo $users->email ?></td>
        			<td><?php echo $users->no_telp ?></td>
        			<td style="text-align:center" width="200px">
                        <a href="<?php echo base_url();?>users/update/<?php echo $users->id_user;?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="<?php echo base_url();?>users/delete/<?php echo $users->id_user;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i></a>
        				<?php 
        				// echo anchor(site_url('users/read/'.$users->id_user),'Read'); 
        				// echo ' | '; 
        				// echo anchor(site_url('users/update/'.$users->id_user),'Edit'); 
        				// echo ' | '; 
        				// echo anchor(site_url('users/delete/'.$users->id_user),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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