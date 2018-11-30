<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 10/11/2018
 * Time: 8:44
 */
?>

<div class="col-md-4">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tambah <?= $menu ?></h3>
        </div>

        <form class="form-horizontal" method="post" id="form_add_armada" action="javascript:void(0)" onsubmit="add_armada()" enctype="multipart/form-data" accept-charset="utf-8" >

            <div class="box-body with-border">
                <div class="box-body pad">

                    <div class="form-group">
                        <label>Kode Armada</label>
                        <input readonly="readonly" type="text" name="kode_armada" value="<?=$kode_armada?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Armada</label>
                        <input id="nama_armada" type="text" name="nama_armada" class="form-control"
                            <?php if (isset($nama_armada)!=null) echo 'value="'.$nama_armada.'"';?> required="required">
                    </div>

                    <div class="form-group">
                        <label for="namaPemesan">Jenis Armada</label>
                        <select  required="required" class="form-control" id="jenis_armada" name="jenis_armada">
                            <?php $i = 1;
                            foreach ($list_jenis_armada as $list){ ?>
                                <option value="<?=$list->id_jenis_armada?>" ><?=$list->nama_jenis_armada?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kapasitas Armada</label>
                        <input  required="required" type="number" min="0" max="58" name="kapasitas_armada" class="form-control"
                            <?php if (isset($kapasitas_armada)!=null) echo 'value="'.$kapasitas_armada.'"';?>>
                    </div>


                    <div class="form-group">
                        <label>Fasilitas</label>
                        <select required="required" class="form-control select2" multiple="multiple" type="text" data-placeholder="Pilih Fasilitas" name="fasilitas[]"
                                style="width: 100%;">
                            <?php foreach ($list_fasilitas as $list){ ?>
                                <option value="<?=$list->id_fasilitas?>" ><?=$list->nama_fasilitas?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Armada</label>
                        <input type="text" name="keterangan_armada" class="form-control"
                            <?php if (isset($keterangan_armada)!=null) echo 'value="'.$keterangan_armada.'"';?>>
                    </div>



                </div>
                <!-- /.form group -->
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary"  value="upload">Save</button>
            </div>
    </div>
    </form>

    <!-- /.box -->
</div>


<div id="modal_add_armada" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header text-center" >
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Upload Foto Armada</h4>
			</div>
			<form class="form-horizontal" method="post" action="<?= site_url('admin/upload')?>" enctype="multipart/form-data" accept-charset="utf-8" >
				<div class="modal-body">
					<input type="file" name="userfile" size="20" value="Pilih Foto" />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
					<input type="submit" class="btn btn-primary pull-right" value="Upload" />
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    });

function add_armada(){
        loading();
        $.ajax({
            type: "POST",
            url : "<?=site_url('admin/add_armada.do')?>",
            data: $('#form_add_armada').serialize(),
            success: function(result){
                swal.close();
				// $('#modal_add_armada').modal('show');
                $('.result_content').html(result);
            },
        });
    };
</script>
