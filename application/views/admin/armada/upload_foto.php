<?php
/**
 * Created by PhpStorm.
 * User: Adhitya
 * Date: 25/11/2018
 * Time: 10:58
 */
?>


<section class="content-header">
	<h1>
		Tambah Foto
	</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

	<div class="result_content"></div>


	<div class="container">
		<div class="row">

			<div class="col-md-8">

					<div class="row">
						<div class="box">
							<form class="form-horizontal" method="post" action="<?= site_url('admin/upload')?>" enctype="multipart/form-data" accept-charset="utf-8" >
								<input type="file" name="userfile" size="20" />
								<br /><br />
								<input type="submit" value="upload" />
								<?=form_close()?>
						</div>
					</div>

			</div>
		</div>
	</div>

</section>
