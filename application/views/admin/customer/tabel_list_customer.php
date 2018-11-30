<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 18/11/2018
 * Time: 15:08
 */
?>
<div class="col-md-8">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">List customer</h3>
		</div>

		<div class="box-body with-border">
			<div class="box-body table-responsive">
				<table id="example3" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th width="20%">Kode customer</th>
						<th width="">Nama</th>
						<th width="">Telepon</th>
						<th width="">Keterangan</th>
						<th width="">Aksi</th>
					</tr>
					</thead>
					<tbody>
					<?php
					foreach ($list_customer as $list) {?>
						<tr>
							<td><?=$list->kode_customer?></td>
							<td><?=$list->nama_customer?></td>
							<td><?=$list->telepon_customer?></td>
							<td><?=$list->keterangan_customer?></td>
							<td><a href="javascript:void(0)" type="button" onclick="edit_customer('<?=$list->id_customer?>')" class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></a>
								<a href="javascript:void(0)" type="button" onclick="delete_customer('<?=$list->id_customer?>')" class="btn btn-sm btn-danger"><i class="fa fa-times"></a></td>
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

	$(function() {
		$('#example3').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})

	function delete_customer($id_customer) {
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
				url : "<?php echo site_url('admin/delete_customer/');?>" + $id_customer,
				success: function(result){
					swal.close();
					$('.result_content').html(result);
					tabel_list_customer();
					form_add_customer();
				}
			});
		}
	})
	}

	function edit_customer($id_customer) {
		window.scrollTo(0,0);
		$.ajax({
			url : "<?php echo site_url('admin/edit_customer/');?>" + $id_customer,
			success: function(result){
				$('.form_add_customer').html(result)
			}
		});
	}

</script>

