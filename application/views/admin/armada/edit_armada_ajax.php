<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 10/11/2018
 * Time: 11:45
 */
?>


<div class="col-md-4">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Armada</h3>
            <a href="javascript:void(0)" onclick="list_armada()" type="button" class="btn btn-sm btn-success pull-right" >Tambah</a>

        </div>

        <form class="form-horizontal" method="post" id="form_edit_armada" action="javascript:void(0)" onsubmit="proses_edit_armada('<?=$row->id_armada?>')" enctype="multipart/form-data" accept-charset="utf-8">

            <div class="box-body with-border">
                <div class="box-body pad">

                    <div class="form-group">
                        <label class="control-label z-control-label">Kode Armada</label>
                        <input readonly="readonly" type="text" name="kode_armada" value="<?=$row->kode_armada?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="control-label z-control-label">Nama Armada </label>
                        <input type="text" name="nama_armada" class="form-control" value="<?=$row->nama_armada?>">
                    </div>

                    <div class="form-group">
                        <label for="namaPemesan">Jenis Armada</label>
                        <select class="form-control" id="jenis_armada" name="jenis_armada">
                            <?php if (isset($row->jenis_armada)!=null) echo '<option value="'.$row->id_jenis_armada.'">'.$row->jenis_armada.'</option>';?>
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
                        <input type="number" min="0" max="58" name="kapasitas_armada" class="form-control" value="<?=$row->kapasitas_armada?>">
                    </div>


                    <div class="form-group">
                        <label>Fasilitas</label>
                        <select class="form-control select2" multiple="multiple" type="text" data-placeholder="Pilih Fasilitas" name="fasilitas[]"
                                style="width: 100%;">
                            <?php
                            $state=0;
                            foreach ($list_fasilitas as $list){
                                foreach ($list_fasilitas_armada as $list2){

                                    if ($list2->id_fasilitas==$list->id_fasilitas){?>
                                        <option selected="selected" value="<?=$list->id_fasilitas?>" ><?=$list->nama_fasilitas?></option>
                                        <?php
                                        $state=1;
                                    } ?>
                                    <?php
                                }
                                if ($state==0){?>
                                    <option value="<?=$list->id_fasilitas?>" ><?=$list->nama_fasilitas?></option>
                                <?php } else {
                                    $state=0;
                                }
                            }
                            ?>
                        </select>
                    </div>

					<div class="form-group">
						<label>Foto Thumbnail Armada</label>
						<input type="file" class="form-control btn-btn-info" name="foto" value="Pilih File">
						<input type="hidden" value="ya" name="upload" >
					</div>


                    <div class="form-group">
                        <label>Keterangan Armada</label>
                        <input type="text" name="keterangan_armada" class="form-control" value="<?=$row->keterangan_armada?>" >
                    </div>


                </div>
                <!-- /.form group -->
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
    </div>
    </form>

    <!-- /.box -->
</div>

<script>
    function proses_edit_armada($id){
        loading();
        $.ajax({
            type: "POST",
            url : "<?=site_url('admin/edit_armada.do/')?>" + $id,
            data: $('#form_edit_armada').serialize(),
            success: function(result){
                swal.close();
                list_armada();
                tabel_list_armada();
                $('.result_content').html(result)
            },
        });
    };

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    })
</script>
