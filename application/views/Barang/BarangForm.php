	
	

	<?php
	echo form_open_multipart("$action");
	?>
<body onload=tampilgambar()> 
		Nama Barang
		<input type="text" placeholder="Nama barang" value="<?php echo $nama_barang ?>" class="form-control" name="nama_barang">
	<br>
	
		Harga Barang
		<input type="text" placeholder="Harga Barang" value="<?php echo $harga_barang ?>" class="form-control" name="harga_barang">
	<br>
			Gambar Barang
		<img id="output" alt="your image" src="<?php echo base_url()."assets/"; ?>image/<?php echo $gambar_barang ?>" width=100px heigh=100px/>
		<input type="file" name="gambar_barang" id="gambarvalue" onchange="loadFile(event)" value="<?php echo $gambar_barang ?>" />
	<br>

	stok barang
	<input type="text" name="stok_barang" value="<?php echo $stok_barang ?>">
	<br>
	detail barang
	<input type="text" name="detail_barang" value="<?php echo $detail_barang ?>">
		<br><input type="hidden" name="id_barang" value="<?php echo $id_barang ?>">



	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>

	<a href="<?php echo site_url('Barang') ?>" class="btn btn-default"> Cancel </a> 
	</form>
	<?php echo form_close(); ?>




<input type="file" accept="image/*" onchange="loadFile(event)">
<img id="output"/>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');

    output.src = URL.createObjectURL(event.target.files[0]);
     output.style.width="100px";
    output.tyle.height="100px";

  };
</script>

