<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 16/11/2018
 * Time: 18:08
 */
?>
<div class="col-md-4">
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Tambah <?= $menu ?></h3>
		</div>

		<form class="form-horizontal" id="form_add_harga" method="post" action="javascript:void(0)" onsubmit="add_harga()">

			<div class="box-body with-border">
				<div class="box-body pad">

					<div class="form-group">
						<label for="AlamatPemesan">Kode Harga</label>
						<input readonly="readonly" type="text" name="kode_harga" value="<?=$kode_harga?>" class="form-control pull-right">
						<input type="hidden" name="tipe_harga" value="<?php if ($menu=='request'){ echo 1 ;} else { echo 0;}?>">
					</div>

					<div class="form-group">
						<label for="AlamatPemesan">Deskripsi Harga</label>
						<input required="required" type="text" name="nama_harga" class="form-control pull-right">
					</div>

					<div class="form-group">
						<label for="namaPemesan">Pilih Armada</label>
						<select required="required" class="selectpicker form-control" id="KodeArmada" name="kode_armada" data-show-subtext="true" data-live-search="true">
							<?php if (isset($kode_armada)!=null) echo '<option value="'.$kode_armada.'" > '.$kode_armada.'  </option>  ' ;?>
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
									<?php if (isset($kota_awal)!=null) echo '<option value="'.$kota_awal.'" > '.$kota_awal.'  </option>  ' ;?>
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
									<?php if (isset($kota_tujuan)!=null) echo '<option value="'.$kota_tujuan.'" > '.$kota_tujuan.'  </option>  ' ;?>
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
								<input required="required" type="text" name="harga" class="form-control pull-right money" id="money" onfocus="$(this).select()" value="0">
							</div>
							<div class="col-lg-6">
								<label for="AlamatPemesan"><?php if ($menu=='request' || ($menu==1)){ echo "Min. Hari"; } elseif ($menu=='request' || ($menu==0)){ echo 'Durasi(hari)';}?></label>
								<input required="required" type="number" name="durasi" value="1" min="0" class="form-control pull-right" onfocus="$(this).select()">
							</div>
						</div>
					</div>



					<div class="form-group">
						<div class="row">
							<div class="col-lg-6">
								<label for="AlamatPemesan">Biaya Tambahan (Rp.)</label>
								<input type="text" name="tambahan" class="form-control pull-right money1" id="money1" onfocus="$(this).select()" min="0" value="0">
							</div><!--col-lg-6-->
							<div class="col-lg-6">
								<label for="AlamatPemesan">Potongan / Diskon (Rp.)</label>
								<input type="text" name="potongan" class="form-control pull-right money2" id="money2" onfocus="$(this).select()" value="0">
							</div><!--col-lg-6-->
						</div><!--row-->
					</div><!--form-group-->



					<div class="form-group">
						<label for="AlamatPemesan">Keterangan</label>
						<input type="text" name="keterangan_harga" class="form-control pull-right">
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

</div>

<script type="text/javascript">
	function add_harga(){
		loading();
		$.ajax({
			type: "POST",
			url : "<?php echo site_url('admin/add_harga');?>",
			data: $('#form_add_harga').serialize(),
			success: function(result){
				swal.close();
				form_add_harga();
				tabel_list_harga();
				$('.result_content').html(result)
			}
		});
	};

	$(document).ready(function() {
		$('select').selectpicker();
	});
</script>
