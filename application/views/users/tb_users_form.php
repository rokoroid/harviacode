 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

        <h2 style="margin-top:0px">Form <?php echo $button ?> Data User</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="row">
        <div class="col-md-6 form-group">
            <label for="int">Nama Dosen<?php echo form_error('id_dosen') ?></label>
            <!-- <input type="text" class="form-control" name="id_dosen" id="id_dosen" placeholder="Id Dosen" value="<?php echo $id_dosen; ?>" /> -->
            <select class="form-control" name="id_dosen" id="id_dosen">
                <option value="NULL">Semua Dosen</option>
                <?php
                foreach ($dataDosen as $dosen){
                    $selected = '';
                    if ($dosen->id_dosen == $id_dosen){
                        $selected = 'selected';
                    }
                ?>
                    <option value="<?php echo $dosen->id_dosen;?>" <?php echo $selected;?>><?php echo $dosen->gelar_depan?> <?php echo $dosen->nama_dosen;?> <?php echo $dosen->gelar_belakang?></option>
                <?php
                }
                ?>
            </select>
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <!-- <div class="col-md-6 form-group">
            <label for="enum">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div> -->
	    <div class="col-md-6 form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="col-md-6 form-group">
            <label for="varchar">No Telp <?php echo form_error('no_telp') ?></label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $no_telp; ?>" />
        </div>
        <div class="col-md-12" style="text-align: right;">
    	    <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a>
        </div>
        </div>
	</form>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->