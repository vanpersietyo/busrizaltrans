<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 25/11/2018
 * Time: 15:44
 */
?>
<button onclick="notif()">tes</button>
<script>
	function notif() {
		$.notify({
			message: "Check out my twitter account by clicking on this notification!",
			url: "https://twitter.com/Mouse0270"
		}, {
			url_target: "_self"
		});
	}
</script>
