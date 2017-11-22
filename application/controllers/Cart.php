<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('BarangModel');
       	$this->load->model('MemberModel');
       
       
    }

function index(){
	$this->load->view('Showcart');
}

function addCart($id_barang,$jumlah){
	$cart=$this->session->userdata('cart');
	$status="tidak";

	foreach ($cart as $key => $value) {
		if($status="tidak"){
		if ($cart[$key]['id_barang']==$id_barang) {
			echo "sudah ada";
			$status="ada";
			$cart[$key]['jumlah']=$cart[$key]['jumlah']+1;
	}	}else{
break;
		}}

if($status=="tidak"){

	$databarangbaru=array(
			'id_barang'=>$id_barang,
			'jumlah'=>$jumlah);
	$cart[]=$databarangbaru;
		}

$this->session->set_userdata('cart',$cart);
redirect("Cart/showCart");


}

function setCart($id_barang,$jumlah){
	$cart=$this->session->userdata('cart');
	
	foreach ($cart as $key => $value) {
		if ($cart[$key]['id_barang']==$id_barang) {			
			$cart[$key]['jumlah']=$jumlah;

	}	}
$this->session->set_userdata('cart',$cart);
}

function showCart(){
	$cart=$this->session->userdata('cart');
	$data['semuabeli'] =$cart;
	$this->load->view('Showcart',$data);
}


function Checkout(){
	$cart=$this->session->userdata('cart');
	
	
 $totalbayar=0;

	
foreach ($cart as $key => $value) {

	$barang=$this->BarangModel->ambil_data_id($cart[$key]['id_barang']); 
	$totalbayar=$totalbayar+($cart[$key]['jumlah'] * $barang->harga_barang);
	
}

$panjang=10;
$pstring = "0123456789"; 
$unik="";
   $plen = strlen($pstring); 
      for ($i = 1; $i <= $panjang; $i++) { 
          $start = rand(0,$plen); 
          $unik.= substr($pstring, $start, 1);
      } 



    $memberlogin=$this->session->userdata('member');
	//$memberlogin=$this->MemberModel->ambil_data_id($username);
	$data=array(
			'alamat_tujuan'=>set_value('alamat_tujuan',$memberlogin->alamat),
			'nohp'=>set_value('nohp',$memberlogin->no_hp),
			'total_transaksi'=>set_value('total_transaksi',$totalbayar),
			'kode_pembayaran'=>set_value('kode_pembayaran',$unik),
			'username'=>set_value('username',$memberlogin->username),

			'button'=>"Bayar",
			'action'=>site_url('Transaksi/tambah_aksi')

		);
	
		$this->load->view('Checkout',$data);
}

function deleteCart($id_barang){
	$cart=$this->session->userdata('cart');
	
	foreach ($cart as $key => $value) {
		if ($cart[$key]['id_barang']==$id_barang) {			
			//delete($cart[$key]);
			 unset($cart[$key]);
			break;

	}	}
$this->session->set_userdata('cart',$cart);
redirect("Cart/Showcart");
}

}
?>

