<!-- build:js <?php echo base_url(); ?>assets/js/core.min.js -->
<script src="<?php echo base_url(); ?>libs/bower/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/PACE/pace.min.js"></script>
<!-- endbuild -->

<!-- build:js <?php echo base_url(); ?>assets/js/app.min.js -->
<!-- <script src="<?php echo base_url(); ?>assets/js/library.js"></script> -->
<?php $this->load->view("includes/library"); ?>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<!-- endbuild -->
<script src="<?php echo base_url(); ?>libs/bower/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>

<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/iziToast.min.js"></script>

<?php $this->load->view("includes/alert"); ?>