
<?php 
/**
 * 
 */
class Order extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
		 $this->load->helper('url');
 $this->load->helper('form');
	}

	/*function index()
	{

		$data['semuabarang'] = $this->OrderModel->ambil_data();
		
		$this->load->view('Barang/BarangList',$data);
		
	}*/
	function index(){

	}
	
	function barangbeli($username){
$data['barangbeli']=$this->OrderModel->barang_sudah_beli($username);
	//print_r($data);	
	$this->load->view('Barangbeli',$data);
	}


	function tambah_order()
	{
		$databarangbaru=array(
			'id_barang'=>"1",
			'id_transaksi'=>'1',
			'jumlah'=>'1');
		$this->OrderModel->tambah_data($databarangbaru);
	}


	function delete($id){
	$this->OrderModel->hapus_data($id);
		}
		


}
?>

