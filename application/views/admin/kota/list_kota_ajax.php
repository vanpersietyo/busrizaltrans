<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 03/11/2018
 * Time: 17:37
 */
?>

<div class="col-md-4">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah <?= $menu ?></h3>
        </div>
        <form class="form-horizontal" method="post" id="form_add_kota" action="javascript:void(0)" onsubmit="add_kota()" >

            <div class="box-body with-border">

                <div class="box-body pad">

                    <div class="form-group">
                        <label for="AlamatPemesan">Kode Kota</label>
                        <input readonly="readonly" type="text" name="kode" value="<?=$kode_kota?>" class="form-control pull-right">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Nama Kota</label>
                        <input type="text" name="nama" class="form-control pull-right" id="nama_kota"
                            <?php if (isset($nama_kota)!=null) echo 'value="'.$nama_kota.'"';?> autofocus required="required">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control"
                            <?php if (isset($keterangan_kota)!=null or isset($keterangan_kota) !=0 ){echo 'value="'.$keterangan_kota.'"';}?>>
                    </div>

                </div>
                <!-- /.form group -->
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambahkan Data</button>
            </div>
    </div>
    </form>

    <!-- /.box -->
</div>
