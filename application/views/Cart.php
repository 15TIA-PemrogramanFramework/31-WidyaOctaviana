<table>
	<tr>
		<th>Nama Barang</th>
		<th>Harga Barang</th>
		<th>Jumlah Barang</th>
		<th>Total </th>
		<th>Aksi</th>
	</tr>
	<?php $totalbayar=0; ?>
	<?php foreach ($semuabeli as $key => $value) { ?>
	<?php  


	$barang=$this->BarangModel->ambil_data_id($semuabeli[$key]['id_barang']); 
	$totalbayar=$totalbayar+($semuabeli[$key]['jumlah'] * $barang->harga_barang)
	?>
	<tr>
		<td>
			<?php echo $barang->nama_barang; ?>
		</td>
		<td id="harga<?php echo $barang->id_barang ?>"><?php echo $barang->harga_barang; ?></td>
		<td><input type="number" min="1" id="banyakbarang<?php echo $barang->id_barang ?>" 
			value="<?php echo$semuabeli[$key]['jumlah'] ?>" 
			onclick="tambahbarang('<?php echo $barang->id_barang ?>')"></td>
			<td id="totalbarang<?php echo $barang->id_barang ?>" class="totalsendiri"> 
				<?php echo $semuabeli[$key]['jumlah'] * $barang->harga_barang ?></td>
				<td><a href="<?php echo site_url("Cart/deleteCart/".$barang->id_barang) ?>" >batal</a></td>
	</tr>
			<?php }  ?>

	<tr>
			<td colspan="3">Total Bayar</td>
			<td id="totalsemua"><?php echo $totalbayar; ?></td>
		</tr>
</table>

		<a href="<?php echo site_url('Login/logout'); ?>"> Logut</a>
		<a href="<?php echo site_url('Barang'); ?>"> Add barang</a>
		<a href="<?php echo site_url('Cart/Checkout'); ?>"><button>Checkout</button></a>
		<div id="isi"></div>
		
		<script type="text/javascript">
			function tambahbarang(zz){
		//var x=document.getElementById("totalsendiri").value;

		document.getElementById("totalbarang"+zz).innerHTML=parseInt(document.getElementById("harga"+zz).innerHTML)*parseInt(document.getElementById("banyakbarang"+zz).value);
		var brg=document.getElementsByClassName("totalsendiri");
		var tot=0;
		for (var i = brg.length - 1; i >= 0; i--) {
			tot=parseInt(tot)+parseInt(brg[i].innerHTML);

		}
		document.getElementById("totalsemua").innerHTML=tot;

		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				//document.getElementById("isi").innerHTML = "aa";
			}
		};
		xmlhttp.open("POST","<?php echo site_url('Cart/setCart'); ?>"+"/"+zz+"/"+document.getElementById("banyakbarang"+zz).value, true);
		xmlhttp.send();
		
	}
</script>


<div class="copy-right">
			<p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>