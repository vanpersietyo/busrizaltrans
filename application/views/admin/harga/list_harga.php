<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 17:50
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 12/08/2018
 * Time: 21:51
 */
?>

<!-- notif -->
<?=$this->session->flashdata('list_harga');?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?= $menu.' '.$submenu ?>
	</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

	<div class="result_content"></div>

	<div class="row">

		<div class="form_add_harga"></div>
		<div class="tabel_list_harga"></div>

	</div>

</section>
<!-- /.content -->

<script>
	//load halaman login
	$(document).ready(function() {
		form_add_harga();
		tabel_list_harga();
	});
</script>

<script type="text/javascript">
	function tabel_list_harga() {
		$.ajax({
			url: '<?=site_url($link_tabel)?>',
			success: function (result) {
				$('.tabel_list_harga').html(result);
			}
		})
	}
	function form_add_harga() {
		$.ajax({
			url: '<?=site_url($link_add)?>',
			success: function (result) {
				$('.form_add_harga').html(result);
				$("#nama_harga").focus();
			}
		})
	}

	//format uang rupiah
	$(document).ready(function(){
		$('select').selectpicker();
		$('.money').mask('0,000,000,000,000', {reverse: true});
		$('.money1').mask('0,000,000,000,000', {reverse: true});
		$('.money2').mask('0,000,000,000,000', {reverse: true});
	});

</script>


