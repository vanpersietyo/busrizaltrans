
<!-- notif -->
<?=$this->session->flashdata('list_armada');?>
<!-- notif -->

<!--------------------------
      | Your Page Content Here |
      -------------------------->

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        armada
    </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="result_content"></div>
    <div class="row">

        <div class="list_armada"></div>
        <div class="tabel_list_armada"></div>

    </div>

</section>
<!-- /.content -->

<script>
    //load halaman login
    $(document).ready(function() {
        tabel_list_armada();
        list_armada();
    });
</script>

<script type="text/javascript">
    function tabel_list_armada() {
        $.ajax({
            url: '<?=site_url("admin/tabel_list_armada")?>',
            success: function (result) {
                $('.tabel_list_armada').html(result);
            }
        })
    }
    function list_armada() {
        $.ajax({
            url: '<?=site_url("admin/list_armada_ajax")?>',
            success: function (result) {
                $('.list_armada').html(result);
                $("#nama_armada").focus();
            }
        })
    }
</script>

