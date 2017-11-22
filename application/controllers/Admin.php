
<?php 
/**
* 
*/
class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberModel');
		$this->load->model('TransaksiModel');
		$this->load->model('KomentarModel');
	}

	function index()
	{

		$data['semuamember'] = $this->MemberModel->ambil_data();
		$data['semuatransaksi'] = $this->TransaksiModel->ambil_data();
		$data['semuakomentar'] = $this->KomentarModel->ambil_data();



		
		$this->load->view('Admin/Dashboard',$data);
	}
	function daftarmember(){

	}
	
}


?>

