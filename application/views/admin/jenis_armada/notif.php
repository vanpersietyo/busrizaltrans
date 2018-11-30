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

        <?php if ($notif=='nama_jenis_armada_sudah_ada'){?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                Jenis Armada <?=$nama?> Sudah Ada.
            </div>
        <?php } elseif($notif=='tambah_jenis_armada_sukses') {?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Jenis Armada <?=$kode_jenis_armada?> - <?=$nama_jenis_armada?> Berhasil Ditambahkan.
            </div>
        <?php }elseif($notif=='hapus_jenis_armada_berhasil') {?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Jenis Armada Berhasil Dihapus.
            </div>
        <?php }elseif($notif=='update_jenis_armada_berhasil') {?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Jenis Armada Berhasil Diperbarui.
            </div>
        <?php }elseif($notif=='update_jenis_armada_gagal') {?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Sukses!</h4>
                Pembaruan Data Jenis Armada Gagal. Jenis Armada Sudah Ada.
            </div>
        <?php } else {?>

        <?php } ?>

    </div>
    <!-- /.col -->
</div>
