<?php
if ($notif=='add_list_fasilitas_sukses') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Berhasil',
                'Tambah Data Fasilitas Berhasil.',
                'success');
        });
    </script>
    <?php
} elseif ($notif=='add_list_fasilitas_gagal') {?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-red">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Gagal</h4>
                </div>
                <div class="modal-body">
                    <?=validation_errors()?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#myModal").modal();
        });
    </script>
    <?php
} elseif ($notif=='delete_fasilitas_sukses') {?>
<script type='text/javascript'>
    $( document ).ready(function() {
        swal('Berhasil',
            'Delete Data Fasilitas Berhasil.',
            'success');
    });
</script>
<?php } elseif ($notif=='edit_list_fasilitas_gagal') {?>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-red">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Gagal</h4>
                </div>
                <div class="modal-body">
                    <?=validation_errors()?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#myModal").modal();
        });
    </script>
<?php } elseif ($notif=='add_harga_request_salah') {?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-red">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Gagal</h4>
                </div>
                <div class="modal-body">
                    <?=validation_errors()?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#myModal").modal();
        });
    </script>
<?php } elseif ($notif=='add_harga_request_sukses') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Berhasil',
                'Add Master Harga Request Berhasil.',
                'success');
        });
    </script>
<?php } elseif ($notif=='delete_harga_request_sukses') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Berhasil',
                'Delete Data Harga Request Berhasil.',
                'success');
        });
    </script>
<?php } elseif ($notif=='edit_harga_request_sukses') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Berhasil',
                'Edit Data Harga Request Berhasil.',
                'success');
        });
    </script>
<?php } ?>


