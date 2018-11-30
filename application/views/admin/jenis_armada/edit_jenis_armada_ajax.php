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
            <h3 class="box-title">Ubah Data Jenis Armada</h3>
            <button type="button" class="btn btn-success pull-right" onclick="list_jenis_armada()">Tambah Jenis Armada</button>
        </div>
        <form class="form-horizontal" method="post" id="form_edit_jenis_armada" action="javascript:void(0)" onsubmit="proses_edit_jenis_armada()" >

            <div class="box-body with-border">

                <div class="box-body pad">

                    <div class="form-group">
                        <label for="AlamatPemesan">Kode Jenis Armada</label>
                        <input readonly="readonly" type="text" name="kode_jenis_armada" value="<?=$jenis_armada->kode_jenis_armada?>" class="form-control pull-right" autofocus="autofocus">
                        <input type="hidden" name="id_jenis_armada" value="<?=$jenis_armada->id_jenis_armada?>" >
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Nama Jenis Armada</label>
                        <input autofocus="autofocus" type="text" name="nama_jenis_armada" class="form-control pull-right"
                            value="<?=$jenis_armada->nama_jenis_armada?>" required="required">
                    </div>

                    <div class="form-group">
                        <label for="AlamatPemesan">Keterangan</label>
                        <input type="text" name="keterangan_jenis_armada" class="form-control" value="<?=$jenis_armada->keterangan_jenis_armada?>" >
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

