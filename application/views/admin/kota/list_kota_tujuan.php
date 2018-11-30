<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 12/08/2018
 * Time: 21:51
 */
?>

<!-- notif -->
<?=$this->session->flashdata('list_kota');?>

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
                    <h3 class="box-title">Tambah <?= $menu ?></h3>
                </div>

                <form class="form-horizontal" method="post" action="<?=site_url('admin/add_harga_request.do')?>">

                    <div class="box-body with-border">
                        <div class="box-body pad">

                            <div class="form-group">
                                <label for="AlamatPemesan">Kode Harga</label>
                                <input readonly="readonly" type="text" name="kode" value="<?=$kode_kota?>" class="form-control pull-right">
                            </div>

                            <div class="form-group">
                                <label for="AlamatPemesan">Deskripsi Harga</label>
                                <input autofocus="autofocus" type="text" name="nama" class="form-control pull-right"
                                    <?php if (isset($nama_kota_tujuan)!=null) echo 'value="'.$nama_kota_tujuan.'"';?>>
                            </div>

                            <div class="form-group">
                                <label for="AlamatPemesan">Keterangan</label>
                                <input type="text" name="harga" class="form-control pull-right money" id="money" onfocus="$(this).select()"
                                    <?php if (isset($keterangan_kota_tujuan)!=null or isset($keterangan_kota_tujuan) !=0 ){echo 'value="'.$keterangan_kota_tujuan.'"';} else { echo 'value="0"';}?>>
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
                                <th width="20%">Kode Kota</th>
                                <th width="">Nama Kota</th>
                                <th width="">Keterangan Kota</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($list_kota as $list) {?>
                                <tr>
                                    <td><?=$list->kode_kota_tujuan?></td>
                                    <td><?=$list->nama_kota_tujuan?></td>
                                    <td><?=$list->keterangan_kota_tujuan?></td>
                                    <td><a href="<?=site_url('admin/edit_harga_request/'.$list->kode_kota_tujuan)?>" type="button" class="btn btn-sm btn-warning" >E</a>
                                        <a href="<?=site_url('admin/harga_request.do/'.$list->kode_kota_tujuan)?>" type="button" class="btn btn-sm btn-danger" >X</a></td>
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
</script>


