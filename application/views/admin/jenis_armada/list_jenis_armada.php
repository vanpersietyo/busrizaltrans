<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 12/08/2018
 * Time: 21:51
 */
?>

<!-- notif -->
<?=$this->session->flashdata('list_jenis_armada');?>

<!------------------------
| Your Page Content Here |
-------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $menu  ?>
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="result_content"></div>

    <div class="row">

        <div class="list_jenis_armada"></div>
        <div class="tabel_list_jenis_armada"></div>

    </div>

</section>
<!-- /.content -->

<!--------------------------
| End Your Page Content Here |
-------------------------->


<script>
    //load halaman login
    $(document).ready(function() {
        list_jenis_armada();
        tabel_list_jenis_armada();
    });
</script>

<script type="text/javascript">
    function tabel_list_jenis_armada() {
        $.ajax({
            url: '<?=site_url("admin/tabel_list_jenis_armada")?>',
            success: function (result) {
                $('.tabel_list_jenis_armada').html(result)
            }
        })
    }
    function list_jenis_armada() {
        $.ajax({
            url: '<?=site_url("admin/list_jenis_armada_ajax")?>',
            success: function (result) {
                $('.list_jenis_armada').html(result)
                $("#nama_jenis_armada").focus();
            }
        })
    }

    function add_jenis_armada(){
        loading();
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/add_jenis_armada');?>",
            data: $('#form_add_jenis_armada').serialize(),
            success: function(result){
                swal.close();
                list_jenis_armada();
                tabel_list_jenis_armada();
                $('.result_content').html(result)
            },
        });
    };

    function proses_edit_jenis_armada(){
        loading();
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/proses_edit_jenis_armada');?>",
            data: $('#form_edit_jenis_armada').serialize(),
            success: function(result){
                swal.close();
                list_jenis_armada();
                tabel_list_jenis_armada();
                $('.result_content').html(result)
            },
        });
    };
</script>

