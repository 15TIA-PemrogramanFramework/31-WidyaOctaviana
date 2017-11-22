	
	

	<?php
	echo form_open_multipart("$action");
	?>
<body onload=tampilgambar()> 
		Nama Lengkap
		<input type="text" placeholder="Nama Lengkap" value="<?php echo $nama ?>" class="form-control" name="nama">
	<br>
	
		alamat
		<input type="text" placeholder="alamat" value="<?php echo $alamat ?>" class="form-control" name="alamat">
	<br>
			foto
		<img id="output" alt="your image" src="<?php echo base_url()."assets/"; ?>image/<?php echo $foto ?>" width=100px heigh=100px/>
		<input type="file" name="foto" id="gambarvalue" onchange="loadFile(event)" value="<?php echo $foto ?>" />
	<br>

	tanggal_lahir
	<input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir?>">
	<br>
	no_hp
	<input type="text" name="no_hp" value="<?php echo $no_hp?>">


		<br>

	username
		<input type="text" placeholder="username" value="<?php echo $username ?>" class="form-control" name="username">
	<br>
	
		email
		<input type="text" placeholder="email" value="<?php echo $email ?>" class="form-control" name="email">
	<br>
	password
		<input type="password" placeholder="password" value="<?php echo $password ?>" class="form-control" name="password">
	<br>

	repassword
		<input type="password" placeholder="password" value="<?php echo $password ?>" class="form-control" name="password">
	<br>




	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>

	<a href="<?php echo site_url('Barang') ?>" class="btn btn-default"> Cancel </a> 
	</form>
	<?php echo form_close(); ?>




<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);
     output.style.width="100px";
    output.tyle.height="100px";

  };
</script>

