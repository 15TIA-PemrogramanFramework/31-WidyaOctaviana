
<?php 
/**
 * 
 */
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModel');
		$this->load->model('TestimoniModel');
		$this->load->model('MemberModel');
		$this->load->model('AdminModel');
		



		
	}

	function index()
	{
		$data['semuabarang'] = $this->BarangModel->ambil_data();
		$data['semuatesti'] = $this->TestimoniModel->tampil_testimoni_semua1();
		$data['semuamember'] = $this->MemberModel->ambil_data();
		$data['semuakaryawan'] = $this->AdminModel->ambil_data();

		//$this->load->view('Barang/BarangList',$data);

		$this->load->view('Index',$data);
		//print_r($data);
	}

	}



?>

