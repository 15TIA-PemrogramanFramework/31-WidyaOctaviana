
<!--<form method="POST" action="<?php //echo site_url('test/do_upload') ?>">-->


	<?php
	echo form_open_multipart('test/do_upload');
	?>

	<table>

		<td>Nama</td>		
		<td>:</td>
		<td><input type="text" name="name"></td>
	</table>
	<input type="file" name="gambar" />
	<input type="submit" name="upload">
	<?php echo form_close(); ?>
