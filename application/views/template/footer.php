  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 </strong><br> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>
  $.widget.bridge('uibutton', $.ui.button);
  window.base_url = "<?php echo base_url();?>";
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>/assets/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url(); ?>/assets/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>/assets/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/assets/adminlte/dist/js/demo.js"></script>

<!-- Datatable -->
<script>
	$(document).ready( function () {
    $('.datatable').DataTable();
} );
</script>
<!-- JS jadwal -->
<script src="<?php echo base_url(); ?>/assets/script/jadwal.js"></script>
<!-- JS pengajar -->
<script src="<?php echo base_url(); ?>/assets/script/dosen.js"></script>
<!-- JS makul -->
<script src="<?php echo base_url(); ?>/assets/script/makul.js"></script>

</body>
</html>
