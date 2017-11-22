<table>
	<tr>
<td>username</td>		
<td>aksi</td>
	</tr>
</table>

<?php 
	$banyak=count($semuamember);

	for($i=0;$i<$banyak;$i++){ 
	$member=$semuamember[$i];
	?>
	<tr><td><?php echo $member->username ?></td>
<td><?php echo anchor (site_url("Member/edit/".$barang->id_barang),"edit")?></td><td><?php echo anchor (site_url("Barang/delete/".$barang->id_barang),"hapus")?></td>