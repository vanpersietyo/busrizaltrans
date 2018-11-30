<script type="text/javascript">

	window.setInterval(function(){
		$.ajax({
			url : "<?php echo site_url('admin/notify');?>",
			success: function (result) {
				$('.notify').html(result);
			}
		})
	}, 4000);

	window.setInterval(function(){
		$.ajax({
			url : "<?php echo site_url('admin/notifikasi');?>",
			success: function (result) {
				$('.notifikasi').html(result);
			}
		})
	}, 5000);

	function notif() {
		$.notify({
			message: "Check out my twitter account by clicking on this notification!",
			url: "https://twitter.com/Mouse0270"
		}, {
			url_target: "_self"
		});
	}

</script>

  <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
  <script>

    var pusher = new Pusher('e7fe137d5d2778191c0c', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        $.notify({
			message: JSON.stringify(data),
			url: "https://twitter.com/Mouse0270"
		}, {
			url_target: "_self"
		});
    });
  </script>
  

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

<!-- iCheck 1.0.1 -->
<script src="<?=base_url('assets/third_party/iCheck/icheck.min.js')?>"></script>
<!-- DataTables -->
<script src="<?=base_url('assets/third_party/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/third_party/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<!-- date-range-picker -->
<script src="<?=base_url('assets/third_party/moment/min/moment.min.js')?>"></script>
<script src="<?=base_url('assets/third_party/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
<!-- bootstrap datepicker -->
<script src="<?=base_url('assets/third_party/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
<!-- bootstrap time picker -->
<script src="<?=base_url('assets/third_party/timepicker/bootstrap-timepicker.min.js')?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets/third_party/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>

<!-- AdminLTE App -->
<script src="<?=base_url('assets/js/adminlte.min.js')?>"></script>

<!-- sweetalert -->
<script src="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.all.min.js'?>"></script>
<script src="<?=base_url('assets/third_party/').'sweetalert/dist/sweetalert2.min.js'?>"></script>
<!-- .sweetalert -->


<!-- select picker-->

<!-- Latest compiled and minified JavaScript -->
<script src="<?=base_url('assets/third_party/').'bootstrap-selectpicker/dist/js/bootstrap-select.min.js'?>"></script>

<!--mask-->
<script src="<?=base_url('assets/third_party/jquery-mask/').'src/jquery.mask.js'?>"></script>

<!--select 2 -->
<script src="<?=base_url('assets/third_party/').'select2/dist/js/select2.full.min.js'?>"></script>

<!--notify-->
<script src="<?=base_url('assets/third_party/').'notifyjs/bootstrap-notify.min.js'?>"></script>

</body>

</html>
