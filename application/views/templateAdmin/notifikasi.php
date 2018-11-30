<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 27/11/2018
 * Time: 23:23
 */
?>

<?php
if($notif=='notifyjs'){?>

	<script>
		$(document).ready(function(){
			$.notify({
				message: "<?=$pesan?>",
				url: "<?=$link?>"
			}, {
				url_target: "_self"
			});
		});
	</script>

<?php } elseif ($notif=='notifikasi_navbar'){?>

	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-bell"></i>
		<span class="label label-warning"><?=$count?></span>
	</a>
	<ul class="dropdown-menu">
		<li class="header">You have <?=$count?> notifications</li>
		<li>
			<!-- inner menu: contains the actual data -->
			<ul class="menu">
				<li>
					<a href="<?=$link?>">
						<i class="fa fa-users text-aqua"></i> <?=$pesan?>
					</a>
				</li>
			</ul>
		</li>
		<li class="footer"><a href="#">View all</a></li>
	</ul>

<?php } elseif ($notif=='tidak_ada_notifikasi_navbar'){?>

	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-bell"></i>
		<span class="label label-warning">0</span>
	</a>
	<ul class="dropdown-menu">
		<li class="header">You have 0 notifications</li>
		<li>
			<!-- inner menu: contains the actual data -->
			<ul class="menu">

			</ul>
		</li>
		<li class="footer"><a href="#">View all</a></li>
	</ul>

<?php } ?>
