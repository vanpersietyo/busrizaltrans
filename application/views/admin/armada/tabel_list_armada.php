<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 10/11/2018
 * Time: 8:20
 */
?>
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
                        <th width="20%">Kode Armada</th>
                        <th width="">Nama Armada</th>
                        <th width="">Jenis Armada</th>
                        <th wi[dth="">Kapasitas Armada</th>
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
                            <td><a href="javascript:void(0)" type="button" onclick="edit_armada('<?=$list->id_armada?>')" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" type="button" onclick="delete_armada('<?=$list->id_armada?>')" class="btn btn-sm btn-danger" ><i class="fa fa-times"></a></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.box -->
</div>

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
    });

    function delete_armada($id) {
        swal({
            title: 'Yakin?',
            text: "Akan Menghapus Data Ini?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.value) {
            loading();
            $.ajax({
                url : "<?php echo site_url('admin/delete_armada/');?>" + $id,
                success: function(result){
                    swal.close();
                    $('.result_content').html(result);
                    list_armada();
                    tabel_list_armada();
                },
            });
        }
    })
    }

    function edit_armada($id) {
        $.ajax({
            url : "<?php echo site_url('admin/edit_armada/');?>" + $id,
            success: function(result){
				window.scrollTo(0,0);
                $('.list_armada').html(result)
            },
        });
    }
</script>
