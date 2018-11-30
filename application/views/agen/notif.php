<?php
if ($notif=='login_1') {?>				
	<script type='text/javascript'>
	    $( document ).ready(function() {
	    	swal('Gagal',
	    		'Username atau Password Salah',
	    		'error'); 
		});
	</script>
<?php 
} 
elseif ($notif=='login_2') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Gagal',
				'Akun Anda Belum Aktif! <a href="<?=site_url('activate/'.$username)?>">Kirim Link Aktivasi</a>',
				'error'); 
			});
	</script>
<?php 
} 
elseif ($notif=='login_berhasil') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Selamat Datang',
  			"<?=$username?>",
  			'success'); 
		});
	</script>
<?php 
} elseif ($notif=='forgot_password_1') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Gagal',
  			'Email Yang Anda Masukkan Tidak Terdaftar!',
  			'error'); 
		});
	</script>
<?php 
}elseif ($notif=='forgot_password_2') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Berhasil',
  			'Silahkan Cek Email Anda!',
  			'success'); 
		});
	</script>
<?php 
} elseif ($notif=='forgot_password_3') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Gagal',
  			'Maaf Link Tidak Valid!',
  			'error'); 
		});
	</script>
<?php 
} elseif ($notif=='forgot_password_4') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Gagal',
  			'Confirm Password Tidak Cocok',
  			'error'); 
		});
	</script>
<?php 
} elseif ($notif=='forgot_password_5') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Berhasil',
  			'Password Berhasil Diubah',
  			'success'); 
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
} elseif ($notif=='register_email_gagal') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Gagal',
  			'Registrasi Akun Gagal, Silahkan Coba Kembali',
  			'error'); 
		});
	</script>
<?php 
} elseif ($notif=='register_sukses') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Berhasil',
  			'Registrasi Akun Berhasil, Silahkan Cek Email Untuk Aktifasi',
  			'success'); 
		});
	</script>
<?php 
} elseif ($notif=='activate_register_sukses') { ?>
	<script type='text/javascript'>
		$( document ).ready(function() {
			swal('Berhasil',
  			'Anda Berhasil Aktifasi, Silahkan Login',
  			'success'); 
		});
	</script>
<?php 
} elseif ($notif=='not_authorize') {?>
    <script type='text/javascript'>
        $( document ).ready(function() {
            swal('Gagal',
                'Anda Tidak Punya Akses ke Menu ini',
                'error');
        });
    </script>
    <?php } ?>


