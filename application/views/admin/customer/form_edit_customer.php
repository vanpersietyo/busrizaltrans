<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 18/11/2018
 * Time: 21:36
 */
?>

<div class="col-md-4">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Detail Customer</h3>
		</div>

		<form class="form-horizontal" method="post" id="form_edit_customer" action="javascript:void(0)" onsubmit="edit_customer_go()" >

			<div class="box-body with-border">
				<div class="box-body pad">
					<div class="form-group">
						<label for="namaPemesan">Kode Customer</label>
						<input readonly="readonly" type="text" class="form-control" name="kode_customer" value="<?=$customer->kode_customer?>">
						<input type="hidden" name="id_customer" value="<?=$customer->id_customer?>">
					</div>
					<div class="form-group">
						<label for="namaPemesan">Nama Customer</label>
						<input required="required" type="text" class="form-control" value="<?=$customer->nama_customer?>" name="nama_customer" id="namaPemesan">
					</div>
					<div class="form-group">
						<label for="AlamatPemesan">Alamat Customer</label>
						<input required="required" type="text" class="form-control" name="alamat_customer" value="<?=$customer->alamat_customer?>" >
					</div>
					<div class="form-group">
						<label for="telppemesan">No Telp Customer</label>
						<input required="required" type="text" maxlength="13" class="form-control" name="telepon_customer" value="<?=$customer->telepon_customer?>">
					</div>
					<div class="form-group">
						<label for="CatatanPemesan">Keterangan Customer</label>
						<input required="required" name="keterangan_customer" type="text" class="form-control" value="<?=$customer->keterangan_customer?>">
					</div>
				</div>
				<!-- /.form group -->
			</div>

			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Perbarui</button>
				<a type="button" href="javascript:void(0)" onclick="form_add_customer()" class="btn btn-danger pull-right">Batal</a>
			</div>
	</div>
	</form>

	<!-- /.box -->
</div>

<script>
	function edit_customer_go(){
		loading();
		$.ajax({
			type: "POST",
			url : "<?=site_url('admin/edit_customer_go')?>",
			data: $('#form_edit_customer').serialize(),
			success: function(result){
				swal.close();
				$('.result_content').html(result);
			},
		});
	};
</script>

