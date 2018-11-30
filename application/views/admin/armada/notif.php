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

        <?php if ($notif=='kode_armada_tidak_unique'){?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                Armada Kode <?=$kode_armada?> Sudah Ada.
            </div>
        <?php } elseif($notif=='add_armada_sukses') {?>
			<script>
				//load halaman login
				$(document).ready(function() {
					list_armada();
					tabel_list_armada();
				});
			</script>

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Armada <?=$kode_armada?> Berhasil Ditambahkan.
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
        <?php }elseif($notif=='upload_error') {?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                <?=$messages?>
            </div>
        <?php } else {?>

        <?php } ?>

    </div>
    <!-- /.col -->
</div>

