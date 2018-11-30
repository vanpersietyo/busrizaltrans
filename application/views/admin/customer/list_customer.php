<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 18/11/2018
 * Time: 14:40
 */
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Daftar Customer
	</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

	<div class="result_content"></div>

	<div class="row">

		<div class="form_add_customer"></div>
		<div class="tabel_list_customer"></div>

	</div>

</section>
<!-- /.content -->

<script type="text/javascript">
	$(document).ready(function() {
		form_add_customer();
		tabel_list_customer();
	});
	function tabel_list_customer() {
		$.ajax({
			url: '<?=site_url('admin/tabel_list_customer')?>',
			success: function (result) {
				$('.tabel_list_customer').html(result);
			}
		})
	}
	function form_add_customer() {
		$.ajax({
			url: '<?=site_url("admin/form_add_customer")?>',
			success: function (result) {
				$('.form_add_customer').html(result);
				$("#nama_customer").focus();
			}
		})
	}

	function add_customer(){
		alert('tes');
	};

</script>
