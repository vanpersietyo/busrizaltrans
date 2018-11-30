<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 17:52
 */
?>
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
							<td><?=$list->kode?></td>
							<td><?=$list->nama?></td>
							<td><?=$list->kota_awal?></td>
							<td><?=$list->kota_tujuan?></td>
							<td>Rp. <?= number_format($list->harga)?></td>
							<td><a href="<?=site_url('admin/edit_harga_request/'.$list->kode)?>" type="button" class="btn btn-sm btn-warning" >E</a>
								<a href="<?=site_url('admin/harga_request.do/'.$list->kode)?>" type="button" class="btn btn-sm btn-danger" >X</a></td>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
	<!-- /.box -->
</div>
