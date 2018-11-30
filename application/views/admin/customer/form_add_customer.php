
<div class="col-md-4">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Tambah Data Customer</h3>
		</div>

		<form class="form-horizontal" method="post" id="form_add_customer" action="javascript:void(0)" onsubmit="add_customer()" >

			<div class="box-body with-border">
				<div class="box-body pad">
					<div class="form-group">
						<label for="namaPemesan">Kode Customer</label>
						<input readonly="readonly" type="text" class="form-control" name="kode_customer" value="<?=$kode_customer?>">
					</div>
					<div class="form-group">
						<label for="namaPemesan">Nama Customer</label>
						<input required="required" type="text" class="form-control" placeholder="Masukkan Nama Pemesan" name="nama_customer" id="namaPemesan">
					</div>
					<div class="form-group">
						<label for="AlamatPemesan">Alamat Customer</label>
						<input required="required" type="text" class="form-control" name="alamat_customer" placeholder="Masukkan Alamat" >
					</div>
					<div class="form-group">
						<label for="telppemesan">No Telp Customer</label>
						<input required="required" type="text" maxlength="13" class="form-control" name="telepon_customer"  placeholder="No Telepon Pemesan" >
					</div>
					<div class="form-group">
						<label for="CatatanPemesan">Keterangan Customer</label>
						<input required="required" name="keterangan_customer" type="text" class="form-control"  placeholder="Masukkan Catatan Pemesan">
					</div>
				</div>
				<!-- /.form group -->
			</div>

			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
	</div>
	</form>

	<!-- /.box -->
</div>

<script>
	function add_customer(){
		loading();
		$.ajax({
			type: "POST",
			url : "<?=site_url('admin/add_customer')?>",
			data: $('#form_add_customer').serialize(),
			success: function(result){
				swal.close();
				$('.result_content').html(result);
			},
		});
	};
</script>
