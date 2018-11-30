
<br>
<br>
<form method="post" id="dataform" class="form" action="javascript:void(0)">
	<input type="text" name="nama" id="nama"  class="form-control">
</form>

<br>
<br>
<br>
<br>
<br>
<div id="result_ajax">
	
</div>

<script type="text/javascript">
	
	$(document).ready(function() {

	    $("#nama").keyup(function(){//keyup,change
		    $.ajax({
	            type: "POST",
	            url : "<?php echo site_url('admin/output_ajax');?>",
            	data: $('#dataform').serialize(),
	            success: function(data){
                	$('#result_ajax').html(data);
	            },
	            error: function(data){
                	alert('error');
	            },
	        });	
		});

	});

</script>
