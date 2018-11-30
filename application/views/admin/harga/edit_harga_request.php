<?php
/**
 * Created by PhpStorm.
 * User: tipk
 * Date: 19/10/2018
 * Time: 14:47
 */
?>

<!-- notif -->
<?=$this->session->flashdata('harga_request');?>

<!------------------------
| Your Page Content Here |
-------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $menu ?>
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit <?= $menu ?></h3>
                </div>

                <form class="form-horizontal" method="post" action="<?=site_url('admin/edit_harga_request.do')?>">

                    <div class="box-body with-border">
                        <div class="box-body pad">

                            <div class="form-group">
                                <label for="AlamatPemesan">Kode Harga</label>
                                <input readonly="readonly" type="text" name="kode" value="<?=$kode_harga?>" class="form-control pull-right">
                            </div>

                            <div class="form-group">
                                <label for="AlamatPemesan">Deskripsi Harga</label>
                                <input autofocus="autofocus" type="text" name="nama" class="form-control pull-right"
                                    <?php if (isset($nama)!=null) echo 'value="'.$nama.'"';?>>
                            </div>

                            <div class="form-group">
                                <label for="namaPemesan">Pilih Armada</label>
                                <select class="selectpicker form-control" id="KodeArmada" name="kode_armada" data-show-subtext="true" data-live-search="true">
                                    <?php if (isset($kode_armada)!=null) echo '<option value="'.$kode_armada.'" > '.$kode_armada.' - '.$detail_armada->nama_armada.' ('.$detail_armada->kapasitas_armada.' Penumpang)'?>  </option>  ' ;?>
                                    <?php $i = 1;
                                    foreach ($armada->result() as $tujuan){ ?>
                                        <option value="<?=$tujuan->kode_armada?>" ><?=$tujuan->kode_armada.' - '.$tujuan->nama_armada.' ('.$tujuan->kapasitas_armada.' Penumpang)'?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">

                                <div class="row">
                                    <div class="col-lg-6">

                                        <label>Kota Awal:</label>
                                        <select class="selectpicker form-control" name="kota_awal" data-show-subtext="true" data-live-search="true">
                                            <?php if (isset($kota_awal)!=null) echo '<option value="'.$kota_awal.'" > '.$kota_awal.'  </option>  ' ;?>
                                            <?php
                                            $i = 1;
                                            foreach ($list_kota_awal->result() as $tujuan){ ?>
                                                <option value="<?=$tujuan->nama_kota_awal?>"><?=$tujuan->nama_kota_awal?></option>
                                                <?php

                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">

                                        <label>Kota Tujuan:</label>
                                        <select class="selectpicker form-control" name="kota_tujuan" data-show-subtext="true" data-live-search="true">
                                            <?php if (isset($kota_tujuan)!=null) echo '<option value="'.$kota_tujuan.'" > '.$kota_tujuan.'  </option>  ' ;?>
                                            <?php
                                            $i = 1;
                                            foreach ($list_kota_tujuan->result() as $tujuan){ ?>
                                                <option value="<?=$tujuan->nama_kota_tujuan?>"><?=$tujuan->nama_kota_tujuan?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label for="AlamatPemesan">Harga / Hari</label>
                                <input type="text" name="harga" class="form-control pull-right money" id="money" onfocus="$(this).select()"
                                    <?php if (isset($harga)!=null or isset($harga) !=0 ){echo 'value="'.$harga.'"';} else { echo 'value="0"';}?>>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="AlamatPemesan">Biaya Tambahan</label>
                                        <input type="text" name="tambahan" class="form-control pull-right money1" id="money1" onfocus="$(this).select()" min="0"
                                            <?php if (isset($tambahan)!=null or isset($harga) !=0 ){echo 'value="'.$tambahan.'"';} else { echo 'value="0"';}?>>
                                    </div><!--col-lg-6-->
                                    <div class="col-lg-6">
                                        <label for="AlamatPemesan">Potongan / Diskon</label>
                                        <input type="text" name="potongan" class="form-control pull-right money2" id="money2" onfocus="$(this).select()"
                                            <?php if (isset($potongan)!=null or isset($potongan) !=0 ){echo 'value="'.$potongan.'"';} else { echo 'value="0"';}?>>
                                    </div><!--col-lg-6-->
                                </div><!--row-->
                            </div><!--form-group-->



                            <div class="form-group">
                                <label for="AlamatPemesan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control pull-right"
                                    <?php if (isset($keterangan)!=null) echo 'value="'.$kode_harga.'"';?>>
                            </div>

                        </div>
                        <!-- /.form group -->
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </div>
            </form>

            <!-- /.box -->
        </div>

        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Harga Request</h3>
                </div>

                <div class="box-body with-border">
                    <div class="box-body table-responsive">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="20%">Kode Harga</th>
                                <th width="">Deskripsi Harga</th>
                                <th width="">Kota Awal</th>
                                <th width="">Kota Tujuan</th>
                                <th width="">Harga</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($list_harga as $list) {?>
                                <tr>
                                    <td><?=$list->kode?></td>
                                    <td><?=$list->nama?></td>
                                    <td><?=$list->kota_awal?></td>
                                    <td><?=$list->kota_tujuan?></td>
                                    <td>Rp. <?= number_format($list->harga)?></td>
                                    <td><a href="<?=site_url('admin/edit_harga_request/'.$list->kode)?>" type="button" class="btn btn-sm btn-warning" >E</a>
                                        <a href="<?=site_url('admin/harga_request.do/'.$list->kode)?>" type="button" class="btn btn-sm btn-danger" >X</a></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.box -->
        </div>

    </div>

</section>
<!-- /.content -->

<!--------------------------
| End Your Page Content Here |
-------------------------->


<script>
    //Data Table
    $(function() {
        $('#example3').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false,
        })
    })

    //format uang rupiah
    $(document).ready(function(){
        $('.money').mask('0,000,000,000,000', {reverse: true});
        $('.money1').mask('0,000,000,000,000', {reverse: true});
        $('.money2').mask('0,000,000,000,000', {reverse: true});
    });

</script>
