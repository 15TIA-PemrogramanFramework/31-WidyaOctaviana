
<?php 
/**
 * 
 */
class About extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('KomentarModel');
		
	}

	function index()
	{
$this->load->view('About');
		
	}

	function tambah_aksi()
	{
		$username=$this->session->userdata('username');
		if (empty($username)) {
			$this->session->set_flashdata('gagal','<div class="alert alert-danger"> <Strong>Anda Belum Login</strong> Anda harus login terlebih dahulu </div>');
			redirect("About");
		}else {

	$komentar=array(
				'isi_komentar'=>$this->input->post('isi_komentar'),
				'username'=>$username
			);
$this->KomentarModel->tambah_data($komentar);
redirect("About");
	}}
	


		

		function delete($id){



			$test= $this->BarangModel->hapus_data($id);

			if ($test==1) {
				redirect(site_url('komentar'));
	# code...
			}
		
		


	}


}

?>

