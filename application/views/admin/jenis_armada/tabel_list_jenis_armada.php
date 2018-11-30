<?php
/**
 * Created by PhpStorm.
 * User: tipk
 * Date: 02/11/2018
 * Time: 13:29
 */
?>

<div class="col-md-8">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Jenis Armada</h3>
        </div>

        <div class="box-body with-border">
            <div class="box-body table-responsive">
                <table id="example3" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="20%">Kode Jenis Armada</th>
                        <th width="">Nama Jenis Jenis Armada</th>
                        <th width="">Keterangan Jenis Armada</th>
                        <th width="">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($list_jenis_armada as $list) {?>
                        <tr>
                            <td><?=$list->kode_jenis_armada?></td>
                            <td><?=$list->nama_jenis_armada?></td>
                            <td><?=$list->keterangan_jenis_armada?></td>
                            <td><a href="javascript:void(0)" type="button" onclick="edit_jenis_armada('<?=$list->id_jenis_armada?>')" class="btn btn-sm btn-warning" >E</a>
                                <a href="javascript:void(0)" type="button" onclick="delete_jenis_armada('<?=$list->id_jenis_armada?>')" class="btn btn-sm btn-danger" >X</a></td>
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
    })

    function delete_jenis_armada($id) {
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
                    url : "<?php echo site_url('admin/delete_jenis_armada/');?>" + $id,
                    success: function(result){
                        swal.close();
                        $('.result_content').html(result);
                        list_jenis_armada();
                        tabel_list_jenis_armada();
                    },
                });
        }
    })

    }

    function edit_jenis_armada($id) {
        $.ajax({
            url : "<?php echo site_url('admin/edit_jenis_armada/');?>" + $id,
            success: function(result){
				window.scrollTo(0,0);
                $('.list_jenis_armada').html(result)
            },
        });
    }


</script>

