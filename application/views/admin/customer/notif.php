<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 18/11/2018
 * Time: 17:13
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 10/11/2018
 * Time: 8:58
 */
?>

<div class="row">
	<div class="col-md-12">

		<?php if ($notif=='add_customer_gagal'){?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
				<?=validation_errors();?>
			</div>
		<?php } elseif($notif=='add_customer_sukses') {?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				Customer <?=$kode_customer?> Berhasil Ditambahkan.
			</div>
			<script type='text/javascript'>
				$( document ).ready(function() {
					form_add_customer();
					tabel_list_customer();
				});
			</script>
		<?php } elseif($notif=='hapus_customer_berhasil') {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				Data Customer <?=$kode_customer?> Berhasil Dihapus.
			</div>
		<?php } elseif($notif=='data_tidak_ditemukan') {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Gagal!</h4>
				Data Customer Tidak Ditemukan!
			</div>
		<?php } elseif($notif=='edit_customer_sukses') {?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				Data Customer <?=$kode_customer?> Berhasil Diperbarui.
			</div>
			<script type='text/javascript'>
				$( document ).ready(function() {
					form_add_customer();
					tabel_list_customer();
				});
			</script>
		<?php }elseif($notif=='edit_customer_gagal') {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
				Update Data Customer Gagal.
			</div>
		<?php } else {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
				Kota Tidak Ditemukan.
			</div>
		<?php } ?>

	</div>
	<!-- /.col -->
</div>


