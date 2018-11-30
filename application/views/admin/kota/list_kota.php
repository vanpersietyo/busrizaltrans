<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 12/08/2018
 * Time: 21:51
 */
?>

<!-- notif -->
<?=$this->session->flashdata('list_kota');?>

<!------------------------
| Your Page Content Here |
-------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?= $menu.' '.$submenu ?>
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="result_content"></div>

    <div class="row">

        <div id="list_kota" class="list_kota"></div>
        <div id="tabel_list_kota" class="tabel_list_kota"></div>

    </div>

</section>
<!-- /.content -->

<!--------------------------
| End Your Page Content Here |
-------------------------->


<script>
    //load halaman login
    $(document).ready(function() {
        list_kota();
        tabel_list_kota();
    });
</script>

<script type="text/javascript">
    function tabel_list_kota() {
        $.ajax({
            url: '<?=site_url("admin/tabel_list_kota/".$jenis_kota)?>',
            success: function (result) {
                $('.tabel_list_kota').html(result)
            }
        })
    }
    function list_kota() {
        $.ajax({
            url: '<?=site_url("admin/list_kota_ajax/".$jenis_kota)?>',
            success: function (result) {
                $('.list_kota').html(result)
                $("#nama_kota").focus();
            }
        })
    }

    function add_kota(){
        loading();
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/add_kota/'.$jenis_kota);?>",
            data: $('#form_add_kota').serialize(),
            success: function(result){
                swal.close();
                list_kota();
                tabel_list_kota();
                $('.result_content').html(result)
            },
        });
    };

    function proses_edit_kota(){
        loading();
        $.ajax({
            type: "POST",
            url : "<?php echo site_url('admin/proses_edit_kota');?>",
            data: $('#form_edit_kota').serialize(),
            success: function(result){
                swal.close();
                list_kota();
                tabel_list_kota();
                $('.result_content').html(result)
            },
        });
    };
</script>

