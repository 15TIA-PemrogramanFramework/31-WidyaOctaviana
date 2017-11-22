<table>
	<tr>
		<th>No</th>
		<th>Nama Barang</th>
<th>Harga Barang</th>
<th>Gambar Barang</th>
		<th>Detail Barang</th>
		<th>Stok barang</th>
		<th>Aksi</th>
		<th> beli</th>
	</tr>
	
	<?php 
	$banyak=count($semuabarang);

	if ($banyak>3) {
		$banyak=3;
	}
?>
<?php for($i=0;$i<$banyak;$i++){ 
	$barang=$semuabarang[$i];
	?>

	

	<tr><td><?php echo $i+1; ?></td>
<td><?php echo $barang->nama_barang; ?></td>
<td><?php echo $barang->harga_barang; ?></td>
<!--<td><?php echo base_url()."application/assets/image/" ?>barang_BeautyWater.jpg" </td>-->

<!--<td><img src="http://localhost/kangenwater/barang_BeautyWater.jpg"></td>   <td><img src="<?php echo base_url() ?>/barang_BeautyWater.jpg"></td>
-->
<td> <img src="<?php echo base_url()."assets/"; ?>image/<?php echo $barang->gambar_barang ?>" width="100px" heigh="100px" /> </td>

<td><?php echo $barang->detail_barang; ?></td>
<td><?php echo $barang->stok_barang; ?></td>
<td><?php echo anchor (site_url("Barang/edit/".$barang->id_barang),"edit")?></td><td><?php echo anchor (site_url("Barang/delete/".$barang->id_barang),"hapus")?></td>
<td><a href="<?php echo site_url("Cart/addCart/".$barang->id_barang."/1") ?>" ><button > tekan saya</button> </a> </td></tr>
<?php }  ?>
</table>


<a href="<?php echo site_url('Login/logout'); ?>"> Logut</a>
