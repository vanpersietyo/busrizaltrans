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
            <h3 class="box-title">Tambah Jenis Armada</h3>
        </div>
        <form class="form-horizontal" method="post" id="form_add_jenis_armada" action="javascript:void(0)" onsubmit="add_jenis_armada()" >

            <div class="box-body with-border">

                <div class="box-body pad">

                    <div class="form-group">
                        <label for="AlamatPemesan">Kode Jenis Armada</label>
                        <input readonly="readonly" type="text" name="kode_jenis_armada" value="<?=$kode_jenis_armada?>" class="form-control pull-right">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Nama Jenis Armada</label>
                        <input type="text" name="nama_jenis_armada" class="form-control pull-right" id="nama_jenis_armada" required="required">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Keterangan</label>
                        <input type="text" name="keterangan_jenis_armada" class="form-control">
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
