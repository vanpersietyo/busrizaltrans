<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 17:53
 */
?>
<div class="col-md-8">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">List Harga <?=$tipe_harga?></h3>
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
                                    <td><?=$list->kode_harga?></td>
                                    <td><?=$list->nama_harga?></td>
                                    <td><?=$list->nama_kota_awal?></td>
                                    <td><?=$list->nama_kota_tujuan?></td>
                                    <td>Rp. <?= number_format($list->harga)?></td>
									<td><a href="javascript:void(0)" type="button" onclick="edit_harga('<?=$list->kode_harga?>')" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" type="button" onclick="delete_harga('<?=$list->kode_harga?>')"  class="btn btn-sm btn-danger" ><i class="fa fa-times"></i></a></td>
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


<script type="text/javascript">
	//Data Table
	$(function() {
		$('#example3').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	});


	function delete_harga($kode_harga) {
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
				url : "<?php echo site_url('admin/delete_harga/');?>" + $kode_harga,
				success: function(result){
					swal.close();
					$('.result_content').html(result);
					form_add_harga();
					tabel_list_harga();
				},
			});
		}
	})
	}

	function edit_harga($kode_harga) {
		$.ajax({
			url : "<?php echo site_url("admin/edit_harga/");?>" + $kode_harga,
			success: function(result){
				window.scrollTo(0,0);
				$('.form_add_harga').html(result)
			},
		});
	}

</script>
