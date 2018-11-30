<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 21:23
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 03/11/2018
 * Time: 11:19
 */
?>

<div class="row">
	<div class="col-md-12">

		<?php if ($notif=='tambah_harga_gagal'){?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
				<?=validation_errors()?>
			</div>
		<?php } elseif($notif=='tambah_harga_sukses') {?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				<?=$kode_harga?> - <?=$nama_harga?> Berhasil Ditambahkan.
			</div>
		<?php }elseif($notif=='hapus_harga_berhasil') {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				Harga <?=$kode_harga?> Berhasil Dihapus.
			</div>
		<?php }elseif($notif=='edit_harga_sukses') {?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-check"></i> Sukses!</h4>
				Harga <?=$kode_harga?> Berhasil Diperbarui.
			</div>
		<?php }elseif($notif=='update_kota_gagal') {?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Sukses!</h4>
				Pembaruan Data Kota Gagal. Nama Kota Sudah Ada.
			</div>
		<?php } else {?>

		<?php } ?>

	</div>
	<!-- /.col -->
</div>

