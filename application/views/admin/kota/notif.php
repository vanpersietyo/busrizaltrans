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

        <?php if ($notif=='nama_kota_sudah_ada'){?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
                Kota <?=$nama?> Sudah Ada.
            </div>
        <?php } elseif($notif=='tambah_kota_sukses') {?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Kota <?=$kode?> - <?=$nama?> Berhasil Ditambahkan.
            </div>
        <?php }elseif($notif=='hapus_kota_berhasil') {?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Kota Berhasil Dihapus.
            </div>
        <?php }elseif($notif=='update_kota_berhasil') {?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4>
                Kota Berhasil Diperbarui.
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
