<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 12/08/2018
 * Time: 22:35
 */?>

<!-- notif -->
<?=$this->session->flashdata('edit_waktu');?>
<!-- notif -->

<!--------------------------
      | Your Page Content Here |
      -------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Waktu
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit <?= $menu ?></h3>
                    <a href="<?=site_url('admin/list_waktu.html')?>" type="button" class="btn btn-sm btn-success pull-right" >Tambah</a>

                </div>

                <form class="form-horizontal" method="post" action="<?=site_url('admin/edit_waktu.do/'.$kode_waktu)?>">

                    <div class="box-body with-border">
                        <div class="box-body pad">

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Kode Waktu</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input readonly="readonly" type="text" name="kode_waktu" value="<?=$kode_waktu?>" class="form-control pull-right">
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Deskripsi Waktu </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" name="deskripsi_waktu" class="form-control pull-right"
                                            <?php if (isset($deskripsi_waktu)!=null) echo 'value="'.$deskripsi_waktu.'"';?>>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Durasi Waktu
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input autofocus="autofocus" type="text" name="durasi_waktu" class="form-control pull-right"
                                            <?php if (isset($durasi_waktu)!=null) echo 'value="'.$durasi_waktu.'"';?>>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Keterangan Waktu
                                </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input autofocus="autofocus" type="text" name="keterangan" class="form-control pull-right"
                                            <?php if (isset($keterangan)!=null) echo 'value="'.$keterangan.'"';?>>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>


                        </div>
                        <!-- /.form group -->
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
            </div>
            </form>

            <!-- /.box -->
        </div>

        <div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List waktu</h3>
                </div>

                <div class="box-body with-border">
                    <div class="box-body table-responsive">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="20%">Kode waktu</th>
                                <th width="">Deskripsi waktu</th>
                                <th width="">Durasi Waktu</th>
                                <th width="">Keterangan Waktu</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($list_waktu as $list) {?>
                                <tr>
                                    <td><?=$list->kode_waktu?></td>
                                    <td><?=$list->deskripsi_waktu?></td>
                                    <td><?=$list->durasi_waktu?></td>
                                    <td><?=$list->keterangan?></td>
                                    <td><a href="<?=site_url('admin/edit_waktu.html/'.$list->kode_waktu)?>" type="button" class="btn btn-sm btn-warning" >Edit</a>
                                        <a href="<?=site_url('admin/delete_waktu.do/'.$list->kode_waktu)?>" type="button" class="btn btn-sm btn-danger" >Delete</a></td>
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
