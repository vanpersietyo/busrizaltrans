
<!-- notif -->
<?=$this->session->flashdata('edit_armada');?>
<!-- notif -->

<!--------------------------
      | Your Page Content Here |
      -------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Armada
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="row">

        <div class="col-md-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit <?= $menu ?></h3>
                    <a href="<?=site_url('admin/list_armada.html')?>" type="button" class="btn btn-sm btn-success pull-right" >Tambah</a>

                </div>

                <form class="form-horizontal" method="post" action="<?=site_url('admin/edit_armada.do/'.$kode_armada)?>">

                    <div class="box-body with-border">
                        <div class="box-body pad">

                            <div class="form-group">
                                <label class="control-label z-control-label">Kode Armada</label>
                                <input readonly="readonly" type="text" name="kode_armada" value="<?=$kode_armada?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="control-label z-control-label">Nama Armada </label>
                                <input type="text" name="nama_armada" class="form-control"
                                <?php if (isset($nama_armada)!=null) echo 'value="'.$nama_armada.'"';?>>
                            </div>

                            <div class="form-group">
                                <label for="namaPemesan">Jenis Armada</label>
                                <select class="selectpicker form-control" id="jenis_armada" name="jenis_armada" data-show-subtext="true" data-live-search="true">
                                    <?php if (isset($jenis_armada)!=null) echo '<option value="'.$jenis_armada.'">'.$jenis_armada.'</option>';?>
                                    <?php $i = 1;
                                    foreach ($list_jenis_armada as $list){ ?>
                                        <option value="<?=$list->id_jenis_armada?>" ><?=$list->nama_jenis_armada?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kapasitas Armada</label>
                                <input type="number" min="0" max="58" name="kapasitas_armada" class="form-control"
                                    <?php if (isset($kapasitas_armada)!=null) echo 'value="'.$kapasitas_armada.'"';?>>
                            </div>


                            <div class="form-group">
                                <label>Fasilitas</label>
                                <select class="form-control select2" multiple="multiple" type="text" data-placeholder="Pilih Fasilitas" name="fasilitas[]"
                                        style="width: 100%;">
                                    <?php
                                    $state=0;
                                    foreach ($list_fasilitas as $list){
                                        foreach ($list_fasilitas_armada as $list2){

                                            if ($list2->id_fasilitas==$list->id_fasilitas){?>
                                                <option selected="selected" value="<?=$list->id_fasilitas?>" ><?=$list->nama_fasilitas?></option>
                                                <?php
                                                $state=1;
                                            } ?>
                                                <?php
                                        }
                                        if ($state==0){?>
                                            <option value="<?=$list->id_fasilitas?>" ><?=$list->nama_fasilitas?></option>
                                        <?php } else {
                                            $state=0;
                                        }
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Keterangan Armada</label>
                                <input type="text" name="keterangan_armada" class="form-control"
                                    <?php if (isset($keterangan_armada)!=null) echo 'value="'.$keterangan_armada.'"';?>>
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
                    <h3 class="box-title">List armada</h3>
                </div>

                <div class="box-body with-border">
                    <div class="box-body table-responsive">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="20%">Kode armada</th>
                                <th width="">Nama armada</th>
                                <th width="">Jenis Armada</th>
                                <th width="">Kapasitas Armada</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($list_armada as $list) {?>
                                <tr>
                                    <td><?=$list->kode_armada?></td>
                                    <td><?=$list->nama_armada?></td>
                                    <td><?=$list->jenis_armada?></td>
                                    <td><?=$list->kapasitas_armada?></td>
                                    <td><a title="edit data armada" href="<?=site_url('admin/edit_armada.html/'.$list->kode_armada)?>" type="button" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>
                                        <a title="hapus data armada" href="<?=site_url('admin/delete_armada.do/'.$list->kode_armada)?>" type="button" class="btn btn-sm btn-danger" ><i class="fa fa-times"></a></td>
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
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>