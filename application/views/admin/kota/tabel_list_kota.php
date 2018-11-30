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
            <h3 class="box-title">List Kota <?=$jenis_kota?></h3>
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
                            <td><?=$list->kode_kota?></td>
                            <td><?=$list->nama_kota?></td>
                            <td><?=$list->keterangan_kota?></td>
                            <td><a href="javascript:void(0)" type="button" onclick="edit_kota('<?=$list->id_kota?>')" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>
                                <a href="javascript:void(0)" type="button" onclick="delete_kota('<?=$list->id_kota?>')" class="btn btn-sm btn-danger"><i class="fa fa-times"></a></td>
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

    function delete_kota($id_kota) {
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
                    url : "<?php echo site_url('admin/delete_kota/');?>" + $id_kota,
                    success: function(result){
                        swal.close();
                        $('.result_content').html(result);
                        list_kota();
                        tabel_list_kota();
                    },
                });
        }
    })
    }

    function edit_kota($id_kota) {
        $.ajax({
            url : "<?php echo site_url('admin/edit_kota/');?>" + $id_kota,
            success: function(result){
				window.scrollTo(0,0);
                $('.list_kota').html(result)
            },
        });
    }


</script>

