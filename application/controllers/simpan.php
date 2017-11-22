<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('Login');
		}
       
    }

    function tambahcart($id_barang,$jumlah){
//print_r($id_barang);
//print_r($jumlah);
$statusada="tidak ada";
$cart=$this->session->userdata('cart');

	foreach ($cart as $key) {
		if($statusada=="tidak ada"){
		if($key['id_barang']==$id_barang){
			$key['jumlah']=$key['jumlah']+$jumlah;

			$statusada="ada";
			echo "sudh ada";

		}
		}
		else{
		break;
	}
	}




if($statusada=="tidak ada"){

	$databarangbaru=array(
			'id_barang'=>$id_barang,
			'jumlah'=>$jumlah);
	$cart[]=$databarangbaru;
	$this->session->set_userdata('cart',$cart);


		}

$cart[0]['jumlah']=2;

		foreach ($cart as $key) {
			//echo "1";
//echo $key;
			echo "idbarang = ".$key['id_barang'];
			echo "jumlah barang ".$key['jumlah'];

		}
		echo "<br> baba";
		print_r(array_values($cart));

}
    

}


?>


//////////////////////////////cart view///////////////////////
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


		$barang=$this->BarangModel->ambil_data_id($key); 
		$totalbayar=$totalbayar+( $value * $barang->harga_barang);
		?>
<tr>
	<td>
		<?php echo $barang->nama_barang; ?>
	</td>
<td id="harga<?php echo $barang->id_barang ?>"><?php echo $barang->harga_barang; ?></td>
<td><input type="number" id="banyakbarang<?php echo $barang->id_barang ?>" value="<?php echo $value; ?>" onclick="tambahbarang('<?php echo $barang->id_barang ?>')"></td>
<td id="totalbarang<?php echo $barang->id_barang ?>" class="totalsendiri"><?php echo $value * $barang->harga_barang; ?></td>
<td>batal</td>
</tr>
<?php }  ?>

<tr>
	<td colspan="3">Total Bayar</td>
	<td id="totalsemua"><?php echo $totalbayar; ?></td>
</tr>
</table>

<a href="<?php echo site_url('Login/logout'); ?>"> Logut</a>
<a href="<?php echo site_url('Barang'); ?>"> Add barang</a>
<script type="text/javascript">
	function tambahbarang(zz){
		//var x=document.getElementById("totalsendiri").value;

document.getElementById("totalbarang"+zz).innerHTML=parseInt(document.getElementById("harga"+zz).innerHTML)*parseInt(document.getElementById("banyakbarang"+zz).value);
var brg=document.getElementsByClassName("totalsendiri");
var tot=0;
for (var i = brg.length - 1; i >= 0; i--) {
	tot=parseInt(tot)+parseInt(brg[i].innerHTML);
	alert(brg[i].innerHTML);
}
		document.getElementById("totalsemua").innerHTML=tot;
		
	}
</script>