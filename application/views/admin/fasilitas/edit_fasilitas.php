
<!-- notif -->
<?=$this->session->flashdata('edit_fasilitas');?>
<!-- notif -->

<!--------------------------
      | Your Page Content Here |
      -------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Fasilitas
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit <?= $menu ?></h3>
                    <a href="<?=site_url('admin/list_fasilitas.html')?>" type="button" class="btn btn-sm btn-success pull-right" >Tambah</a>

                </div>

                <form class="form-horizontal" method="post" action="<?=site_url('admin/edit_fasilitas.do/'.$kode_fasilitas)?>">

                    <div class="box-body with-border">
                        <div class="box-body pad">

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Kode Fasilitas</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input readonly="readonly" type="text" name="kode_fasilitas" value="<?=$kode_fasilitas?>" class="form-control pull-right">
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Nama Fasilitas </label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input readonly="readonly" type="text" name="nama_fasilitas" class="form-control pull-right"
                                            <?php if (isset($nama_fasilitas)!=null) echo 'value="'.$nama_fasilitas.'"';?>>
                                    </div>
                                </div>
                                <!-- /.input group -->
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label z-control-label">Keterangan Fasilitas
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
                    <h3 class="box-title">List Fasilitas</h3>
                </div>

                <div class="box-body with-border">
                    <div class="box-body table-responsive">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="20%">Kode Fasilitas</th>
                                <th width="">Nama Fasilitas</th>
                                <th width="">Keterangan</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($list_fasilitas as $list) {?>
                                <tr>
                                    <td><?=$list->kode_fasilitas?></td>
                                    <td><?=$list->nama_fasilitas?></td>
                                    <td><?=$list->keterangan?></td>
                                    <td><a href="<?=site_url('admin/edit_fasilitas.html/'.$list->kode_fasilitas)?>" type="button" class="btn btn-sm btn-warning" >Edit</a>
                                        <a href="<?=site_url('admin/delete_fasilitas.do/'.$list->kode_fasilitas)?>" type="button" class="btn btn-sm btn-danger" >Delete</a></td>
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