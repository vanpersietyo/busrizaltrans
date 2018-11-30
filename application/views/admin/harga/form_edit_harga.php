<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 18:40
 */
?>

<div class="col-md-4">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Detail <?= $menu ?></h3>
			<button type="button" class="btn btn-success pull-right" onclick="form_add_harga()">Tambah Harga</button>
		</div>

		<form class="form-horizontal" id="form_edit_harga" method="post" action="javascript:void(0)" onsubmit="proses_edit_harga()">

			<div class="box-body with-border">
				<div class="box-body pad">

					<div class="form-group">
						<label for="AlamatPemesan">Kode Harga</label>
						<input readonly="readonly" type="text" name="kode_harga" value="<?=$daftar_harga->kode_harga?>" class="form-control pull-right">
						<input type="hidden" name="tipe_harga" value="<?php if ($menu=='request'){ echo 1 ;} else { echo 0;}?>">
					</div>

					<div class="form-group">
						<label for="AlamatPemesan">Nama Harga</label>
						<input required="required" type="text" name="nama_harga" class="form-control pull-right" value="<?=$daftar_harga->nama_harga?>">
					</div>

					<div class="form-group">
						<label for="namaPemesan">Pilih Armada</label>
						<select required="required" class="selectpicker form-control" id="KodeArmada" name="kode_armada" data-show-subtext="true" data-live-search="true">
							<?php if (isset($daftar_harga->id_armada)!=null) echo '<option value="'.$daftar_harga->id_armada.'" > '.$daftar_harga->kode_armada.' - '.$daftar_harga->nama_armada.' ('.$daftar_harga->kapasitas_armada.' Penumpang)'.'</option>' ;?>
							<?php $i = 1;
							foreach ($armada->result() as $key){ ?>
								<option value="<?=$key->id_armada?>" ><?=$key->kode_armada.' - '.$key->nama_armada.' ('.$key->kapasitas_armada.' Penumpang)'?></option>
								<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">

						<div class="row">
							<div class="col-lg-6">

								<label>Kota Awal:</label>
								<select required="required" class="selectpicker form-control" name="kota_awal" data-show-subtext="true" data-live-search="true">
									<?php if (isset($daftar_harga->id_kota_awal)!=null) echo '<option value="'.$daftar_harga->id_kota_awal.'" > '.$daftar_harga->nama_kota_awal.'  </option>  ' ;?>
									<?php
									$i = 1;
									foreach ($list_kota_awal->result() as $key){ ?>
										<option value="<?=$key->id_kota?>"><?=$key->nama_kota?></option>
										<?php

									}
									?>
								</select>
							</div>
							<div class="col-lg-6">

								<label>Kota Tujuan:</label>
								<select required="required" class="selectpicker form-control" name="kota_tujuan" data-show-subtext="true" data-live-search="true">
									<?php if (isset($daftar_harga->id_kota_tujuan)!=null) echo '<option value="'.$daftar_harga->id_kota_tujuan.'" > '.$daftar_harga->nama_kota_tujuan.'  </option>  ' ;?>
									<?php
									$i = 1;
									foreach ($list_kota_tujuan->result() as $key){ ?>
										<option value="<?=$key->id_kota?>"><?=$key->nama_kota?></option>
									<?php } ?>
								</select>

							</div>
						</div>
						<!-- /.input group -->
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="AlamatPemesan"><?php if ($menu=='request' || ($menu==1)){ echo "Harga Per Hari"; } elseif ($menu=='paket' || ($menu==0)){ echo 'Harga Paket (Rp.)';}?></label>
								<input required="required" type="text" name="harga" class="form-control pull-right money" id="money" onfocus="$(this).select()" value="<?=number_format($daftar_harga->harga)?>">
							</div>
							<div class="col-lg-6">
								<label for="AlamatPemesan"><?php if ($menu=='request' || ($menu==1)){ echo "Min. Hari"; } elseif ($menu=='request' || ($menu==0)){ echo 'Durasi(hari)';}?></label>
								<input required="required" type="number" name="durasi" value="<?=$daftar_harga->durasi?>" min="0" class="form-control pull-right" onfocus="$(this).select()">
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="AlamatPemesan">Biaya Tambahan</label>
								<input type="text" name="tambahan" class="form-control pull-right money1" id="money1" onfocus="$(this).select()" min="0" value="<?=$daftar_harga->tambahan_harga?>">
							</div><!--col-lg-6-->
							<div class="col-lg-6">
								<label for="AlamatPemesan">Potongan / Diskon</label>
								<input type="text" name="potongan" class="form-control pull-right money2" id="money2" onfocus="$(this).select()" value="<?=$daftar_harga->potongan_harga?>">
							</div><!--col-lg-6-->
						</div><!--row-->
					</div><!--form-group-->



					<div class="form-group">
						<label for="AlamatPemesan">Keterangan</label>
						<input type="text" name="keterangan_harga" class="form-control pull-right" value="<?=$daftar_harga->keterangan_harga?>">
					</div>

				</div>
				<!-- /.form group -->
			</div>

			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Perbarui</button>
				<button type="button" class="btn btn-danger pull-right" onclick="form_add_harga()">Batal</button>
			</div>
	</div>
	</form>

</div>



<script>
	function proses_edit_harga(){
		loading();
		$.ajax({
			type: "POST",
			url : "<?php echo site_url('admin/proses_edit_harga');?>",
			data: $('#form_edit_harga').serialize(),
			success: function(result){
				swal.close();
				form_add_harga();
				tabel_list_harga();
				$('.result_content').html(result)
			},
		});
	};

	$(document).ready(function() {
		$('select').selectpicker();
	});

</script>
