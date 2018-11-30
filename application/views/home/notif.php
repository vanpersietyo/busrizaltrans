<?php
/**
 * Created by PhpStorm.
 * User: tipk
 * Date: 01/11/2018
 * Time: 10:36
 */
?>
<?php
if ($notif=='newsletter_sukses') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Berhasil',
                'Email Anda Berhasil Terdaftar',
                'success');
        });
    </script>
    <?php
}
elseif ($notif=='newsletter_gagail_kirim') { ?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Maaf',
                'Pengiriman email gagal, silahkan coba lagi!',
                'info');
        });
    </script>
    <?php
}
elseif ($notif=='verifikasi_newsletter_gagal') { ?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal({
                title   : 'GAGAL',
                type    : 'error',
                html    : <?php echo validation_errors("'","'")?>,
                showCloseButton: false,
                showCancelButton: false,
                showConfirmButton: true,
            });
        });
    </script>
    <?php
} elseif ($notif=='register_1') {?>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-red">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Error</h4>
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

    </div>

    <script>
        $(document).ready(function(){
            $("#myModal").modal();
        });
    </script>
    <?php
} ?>


