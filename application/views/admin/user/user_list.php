
<!-- notif -->
<?=$this->session->flashdata('list_user');?>
<!-- notif -->

<!--------------------------
      | Your Page Content Here |
      -------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        User List
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List User</h3>
                </div>

                <div class="box-body with-border">
                    <div class="box-body table-responsive">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th >No.</th>
                                <th width="">Nama</th>
                                <th>Telpon</th>
                                <th>Tanggal Register</th>
                                <th width="">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1;
                            foreach ($list_user as $list) {?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$list->nama_lengkap?></td>
                                    <td><?=$list->telp?></td>
                                    <td><?=$list->entry_time?></td>
                                    <td><a href="<?=site_url('admin/edit_armada.html/'.$list->kode_user)?>" type="button" class="btn btn-sm btn-warning" >Edit</a>
                                        <a href="<?=site_url('admin/delete_armada.do/'.$list->kode_user)?>" type="button" class="btn btn-sm btn-danger" >Delete</a></td>
                                </tr>
                            <?php $i++;
                            }?>
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

