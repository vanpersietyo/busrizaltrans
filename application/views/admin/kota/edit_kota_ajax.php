<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 03/11/2018
 * Time: 19:52
 */
?>

<div class="col-md-4">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Ubah Data Kota</h3>
            <button type="button" class="btn btn-success pull-right" onclick="list_kota()">Tambah Kota</button>
        </div>
        <form class="form-horizontal" method="post" id="form_edit_kota" action="javascript:void(0)" onsubmit="proses_edit_kota()" >

            <div class="box-body with-border">

                <div class="box-body pad">

                    <div class="form-group">
                        <label for="AlamatPemesan">Kode Kota</label>
                        <input readonly="readonly" type="text" name="kode_kota" value="<?=$kota->kode_kota?>" class="form-control pull-right" autofocus="autofocus">
                        <input type="hidden" name="id_kota" value="<?=$kota->id_kota?>" >
                        <input type="hidden" name="jenis_kota" value="<?=$kota->jenis_kota?>">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Nama Kota</label>
                        <input autofocus="autofocus" type="text" name="nama_kota" class="form-control pull-right"
                            value="<?=$kota->nama_kota?>" required="required">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Keterangan</label>
                        <input type="text" name="keterangan_kota" class="form-control" value="<?=$kota->keterangan_kota?>" >
                    </div>

                </div>
                <!-- /.form group -->
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
    </div>
    </form>

    <!-- /.box -->
</div>

