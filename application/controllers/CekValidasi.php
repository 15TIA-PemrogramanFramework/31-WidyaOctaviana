
<?php 
/**
 * 
 */
class CekValidasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberModel');
		$this->load->model('AdminModel');

	}

	function index()
	{
		$this->load->view('v_form');
	}




	function validasi()
	{
	$this->form_validation->set_rules('nama','nama','required');
	$this->form_validation->set_rules('email','email','required|number');
	$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required|matches[email]');
	$this->form_validation->set_rules(
			'username', 'username',
			'is_unique[member.username]|is_unique[admin.username]',
			array(
				'required'      => 'kolom harus diisi',
				'is_unique'     => 'username sudah pernah mendaftar'
			)
		);
	if($this->form_validation->run() != false){
		echo "Form validation oke";
	}else{
		$this->load->view('v_form');
	}
		}

function validasi1(){
	$gambar=$this->input->post('gambar_barang');

	if(empty($gambar)){
			$memberbaru=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'foto'=>$this->input->post('gambar_barang2'),
				'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
				'no_hp'=>$this->input->post('no_hp'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username')

			);
		}else{
			$memberbaru=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'foto'=>$result['file_name'],
				'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
				'no_hp'=>$this->input->post('no_hp'),
				'email'=>$this->input->post('email'),
				'username'=>$this->input->post('username')
			);
		}

		

}

}
?>

