
<?php 
/**
* 
*/
class Member extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberModel');
	}

	function index()
	{

		$data['semuamember'] = $this->MemberModel->ambil_data();

		$this->load->view('Member/MemberList',$data);
	}
	function registrasi(){
		$data=array(
			'nama'=>set_value('nama'),
			'alamat'=>set_value('alamat'),
			'no_hp'=>set_value('no_hp'),
			'tanggal_lahir'=>set_value('tanggal_lahir'),
			'foto'=>set_value('foto'),
			'username'=>set_value('username'),

			'password'=>set_value('password'),
			'email'=>set_value('email'),


			'button'=>"Registrasi",
			'action'=>site_url('Member/tambah_aksi')

		);
		$this->load->view('Member/Register',$data);
	}

	function delete($id){



		$test= $this->BarangModel->hapus_data($id);

		if ($test==1) {
			redirect(site_url('Barang'));
# code...
		}
	}












	function EditDataDiri($id){


		$member=$this->MemberModel->ambil_data_id($id);

	

		$data=array(
			'nama'=>set_value('nama',$member->nama),
			'alamat'=>set_value('alamat',$member->alamat),
			'no_hp'=>set_value('no_hp',$member->no_hp),
			'tanggal_lahir'=>set_value('tanggal_lahir',$member->tanggal_lahir),
			'foto'=>set_value('foto',$member->foto),
			'username'=>set_value('username',$member->username),
			'email'=>set_value('email',$member->email),

			'password'=>set_value('password',$member->password),




			'button'=>"finish",
			'action'=>site_url('Member/edit_aksi_profil')

		);

		$this->load->view('Member/EditProfil',$data);
	}


	function EditAkun($id){


		$member=$this->MemberModel->ambil_data_id($id);

		$data=array(
			'password'=>set_value('password',$member->password),
			'username'=>set_value('username',$member->username),
			'katakata'=>set_value(''),
			'email'=>set_value('email',$member->email),

			'edit'=>set_value('edit','akun'),


			'button'=>"Ganti password",
			'action'=>site_url('Member/edit_aksi_akun')

		);

		$this->load->view('Member/EditAkun',$data);
	}




	function edit_aksi_profil(){
	//$config['upload_path'] = './dataupload/';
	$nmfile = "memberfile_".time(); //nama file + fungsi time
	
	$config['upload_path'] = './assets/image/';

	$config['allowed_types'] = 'gif|jpg|png';
	$config['file_name'] = $nmfile;

    // load library upload



	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('gambar_barang')) {
		$error = $this->upload->display_errors();
		print_r($error);
		$memberbaru=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$this->input->post('gambar_barang2'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'no_hp'=>$this->input->post('no_hp'),
			




		);
		$id=$this->input->post('usernamelama'); 
		$test= $this->MemberModel->edit_data($id,$memberbaru);

		if ($test==1) {
			$cek_login= $this->MemberModel->ambil_data_id($id);
			$this->session->set_userdata('member',$cek_login);
			redirect(site_url('Home'));
		}

	} else {
		$result = $this->upload->data();

		$memberbaru=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$result['file_name'],
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'no_hp'=>$this->input->post('no_hp'),
			




		);
		$id=$this->input->post('usernamelama'); 
		$test= $this->MemberModel->edit_data($id,$memberbaru);

		if ($test==1) {
			$cek_login= $this->MemberModel->ambil_data_id($id);
			$this->session->set_userdata('member',$cek_login);
			redirect(site_url('Home'));
		}

	}


}

function edit_aksi_profil1(){
	if($this->form_validation->run("register") != false){


	$nmfile = "member_".time(); //nama file + fungsi time
	
	$config['upload_path'] = './assets/image/';

	$config['allowed_types'] = 'gif|jpg|png';
	$config['file_name'] = $nmfile;

    // load library upload



	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('gambar_barang')) {
		$error = $this->upload->display_errors();
		print_r($error);
		$memberbaru=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$this->input->post('gambar_barang2'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'no_hp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username')




		);
		$id=$this->input->post('usernamelama'); 
		$test= $this->MemberModel->edit_data($id,$memberbaru);

		if ($test==1) {
			redirect(site_url('Home'));
		}

	} else {
		$result = $this->upload->data();

		$memberbaru=array(
			'nama'=>$this->input->post('nama'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$result['file_name'],
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'no_hp'=>$this->input->post('no_hp'),
			'email'=>$this->input->post('email'),
			'username'=>$this->input->post('username')




		);
		$id=$this->input->post('usernamelama'); 
		$test= $this->MemberModel->edit_data($id,$memberbaru);

		if ($test==1) {
			redirect(site_url('Home'));
		}

	}
}else{
	$data=array(
		'nama'=>set_value('nama'),
		'alamat'=>set_value('alamat'),
		'no_hp'=>set_value('no_hp'),
		'tanggal_lahir'=>set_value('tanggal_lahir'),
		'foto'=>set_value('foto'),
		'username'=>set_value('username'),
		'email'=>set_value('email'),

		'password'=>set_value('password'),




		'button'=>"finish",
		'action'=>site_url('Member/edit_aksi_profil')

	);

	$this->load->view('Member/EditProfil',$data);




}


}


function edit_aksi_akun(){

$passwordlama=$this->input->post('passworddulu');
$emaillama=$this->input->post('emaildulu');
$emaila=$this->input->post('email');

if ($emaila!=$emaillama) {
		$email=$this->form_validation->run("emailcek");	
	}else{
		$email=true;
	}


	
	$password=$this->form_validation->run("edit_data_password");
	$passwordlamacek=true;
	$katakata="";


	$memberbaru=array(
		'username'=>$this->input->post('username'),
		'email'=>$this->input->post('email'),
		'password'=>$this->input->post('password')
	);


	if($this->input->post('passwordlama')!=$passwordlama){
		$passwordlamacek=false;
		$katakata="maaf password lama tidak valid ";
	}


	if (($password)&&($email)&&($passwordlamacek)) { 
		$test=$this->MemberModel->edit_data($usernamelama,$memberbaru);

		if ($test==1) {
			$cek_login= $this->MemberModel->ambil_data_id($memberbaru['username']);
			$this->session->set_userdata('member',$cek_login);
			redirect(site_url('Home'));
		}

	}else{
		$data=array(
			'password'=>set_value('password'),
			'username'=>set_value('username'),
			'email'=>set_value('email'),
			'katakata'=>set_value('katakata',$katakata),

			'edit'=>set_value('edit','akun'),


			'button'=>"Ganti password",
			'action'=>site_url('Member/edit_aksi_akun')

		);

		$this->load->view('Member/EditAkun',$data);

	}




}


	function tambah_aksi()
	{

		//$config['upload_path'] = './dataupload/';
		$nmfile = "MemberFile".time(); //nama file + fungsi time
		
		$config['upload_path'] = './assets/image/';

		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;

        // load library upload
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
			$error = $this->upload->display_errors();
			print_r($error);
		} else {
			$result = $this->upload->data();
			echo "<pre>";
			print_r($result);
			echo "</pre>";
			
			


			$memberbaru=array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'no_hp'=>$this->input->post('no_hp'),
				'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'foto'=>$result['file_name'],
				//'usernamedulu'=>$this->input->post('usernamedulu'),
				'email'=>$this->input->post('email')

			);
			$test= $this->MemberModel->tambah_data($memberbaru);
			if ($test==1) {
				redirect(site_url('Login'));
				//print_r("berhasil");
			
	# code...
			}}
				print_r($memberbaru);


		}
}


?>

