<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 06/10/2018
 * Time: 10:58
 */
?>
	<div class="row">
		<div class="col-md-12">
			<?php
			if ($notif=='add_booking_gagal') {?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
					<?=validation_errors()?> 
				</div>
			<?php } elseif($notif=='add_booking_sukses') {?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Pesanan <?=$kode_pesanan?> Berhasil Ditambahkan.
				</div>
			<?php }elseif($notif=='hapus_armada_berhasil') {?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Armada Berhasil Dihapus.
				</div>
			<?php }elseif($notif=='edit_armada_sukses') {?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-check"></i> Sukses!</h4>
					Armada Berhasil Diperbarui.
				</div>
			<?php }elseif($notif=='edit_armada_lebih_dari_1') {?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-ban"></i> Gagal!</h4>
					Kota Tidak Ditemukan.
				</div>
			<?php } else {?>

			<?php } ?>

		</div>
		<!-- /.col -->
	</div>
