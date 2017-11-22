
<?php 
/**
* 
*/
class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('MemberModel');
		$this->load->model('TransaksiModel');
		$this->load->model('KomentarModel');
		$this->load->model('TestimoniModel');
		$this->load->model('AdminModel');
		$this->load->model('OrderModel');
		$this->load->model('BarangModel');



	}

	function index()
	{

		$data['semuamember'] = $this->MemberModel->ambil_data();
		$data['semuatransaksi'] = $this->TransaksiModel->ambil_data();
		$data['semuakomentar'] = $this->KomentarModel->tampil_komentar_semua();
		$data['semuatesti'] = $this->TestimoniModel->tampil_testimoni_semua();
		$data['semuakaryawan'] = $this->AdminModel->ambil_data();
		
		$this->load->view('Admin/Dashboard',$data);
	}
	function member(){
		$data['semuamember'] = $this->MemberModel->ambil_data();
		$this->load->view('Admin/Member',$data);
	}


	function Barang(){
		$data['semuabarang'] = $this->BarangModel->ambil_data();
		
		$this->load->view('Admin/Barang',$data);
	}
	function DetailBarang($id_barang){
		$data['barang']= $this->BarangModel->ambil_data_id($id_barang);
		$data['jumlahjual']=$this->BarangModel->JumlahBeli($id_barang);
		$this->load->view('Admin/Detailbarang',$data);

	}


	function DeleteBarang($id_barang){
$test=$this->BarangModel->hapus_data($id_barang);

		if ($test==1) {
			redirect(site_url('Dashboard/Barang'));
		}
	}



function EditBarang($id_barang){
$data['barang']=$this->BarangModel->ambil_data_id($id_barang);
	$this->load->view('Admin/EditBarang',$data);
}

function EditBarang_aksi(){

	$nmfile = "barang_".time(); 
	
	$config['upload_path'] = './assets/image/';

	$config['allowed_types'] = 'gif|jpg|png';
	$config['file_name'] = $nmfile;

  



	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('gambar')) {
		$error = $this->upload->display_errors();

		$barang=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'stok_barang'=>$this->input->post('stok_barang'),
			'gambar_barang'=>$this->input->post('gambardulu'),
			'harga_barang'=>$this->input->post('harga_barang'),
			'detail_barang'=>$this->input->post('detail_barang')
		);
	

	} else {
		$result = $this->upload->data();


			$barang=array(
			'nama_barang'=>$this->input->post('nama_barang'),
			'stok_barang'=>$this->input->post('stok_barang'),
			'gambar_barang'=>$result['file_name'],
			'harga_barang'=>$this->input->post('harga_barang'),
			'detail_barang'=>$this->input->post('detail_barang')
		);}


		$id_barang=$this->input->post('id_barang'); 
		$test= $this->BarangModel->edit_data($id_barang,$barang);

		if ($test==1) {
			
			redirect(site_url('Dashboard/DetailBarang/'.$id_barang));
		}


}

function tambahBarang(){
	$this->load->view('Admin/TambahBarang');
}

function tambahBarang_Aksi(){
	//$config['upload_path'] = './dataupload/';
		$nmfile = "Barangfile_".time(); //nama file + fungsi time
		
		$config['upload_path'] = './assets/image/';

		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;

        // load library upload
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar')) {
			$error = $this->upload->display_errors();
			print_r($error);
		} else {
			$result = $this->upload->data();
			echo "<pre>";
			print_r($result);
			echo "</pre>";




			$barangbaru=array(
				'nama_barang'=>$this->input->post('nama_barang'),
				'harga_barang'=>$this->input->post('harga_barang'),
				'gambar_barang'=>$result['file_name'],
				'detail_barang'=>$this->input->post('detail_barang'),
				'stok_barang'=>$this->input->post('stok_barang')

			);
			$test= $this->BarangModel->tambah_data($barangbaru);
			if ($test==1) {
				redirect(site_url('Dashboard/Barang'));
	# code...
			}}
}





	function admin(){
		$data['semuakaryawan'] = $this->AdminModel->ambil_data();
		$this->load->view('Admin/Admin',$data);
	}

	function Komentar(){
		$data['semuakomentar'] = $this->KomentarModel->tampil_komentar_semua();
		$this->load->view('Admin/Komentar',$data);
	}

	function DeleteKomentar($id)
	{
		$test=$this->KomentarModel->hapus_data($id);

		if ($test==1) {
			redirect(site_url('Dashboard/Komentar'));
		}

	}


	function Testimoni(){
		$data['semuatesti'] = $this->TestimoniModel->tampil_testimoni_semua();
		$this->load->view('Admin/Testimoni',$data);
	}

	function DeleteTestimoni($id){
		$test=$this->TestimoniModel->hapus_data($id);

		if ($test==1) {
			redirect(site_url('Dashboard/Testimoni'));
		}

	}

	
	function Transaksi(){
		$data['semuatransaksi'] = $this->TransaksiModel->ambil_data();
		$this->load->view('Admin/Transaksi',$data);
	}
	function DetailTransaksi($id){
		$data['transaksi'] = $this->TransaksiModel->ambil_data_id($id);
		$data['order']= $this->OrderModel->order_transaksi_id($id);
		$this->load->view('Admin/DetailTransaksi',$data);

	}

	function TambahAdmin(){
		//$data['kata']="";
		//$data['action']=site_url('Dashboard/EditProfilAdmin_aksi');

		$data=array(
			'username'=>set_value('username'),
			'nama'=>set_value('nama'),
			'email'=>set_value('email'),
			'tanggal_lahir'=>set_value('tanggal_lahir'),
			'status'=>set_value('status'),


			'password'=>set_value('password'),
			'repassword'=>set_value('repassword'),
			'action'=>site_url('Dashboard/TambahAdmin_aksi')
			


		);
		$this->load->view('Admin/TambahAdmin',$data);
	}



	function TambahAdmin_aksi(){

		if($this->form_validation->run("registeradmin")){


		//$config['upload_path'] = './dataupload/';
	$nmfile = "admin_".time(); //nama file + fungsi time
	
	$config['upload_path'] = './assets/image/';

	$config['allowed_types'] = 'gif|jpg|png';
	$config['file_name'] = $nmfile;

	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('gambar')) {
		$error = $this->upload->display_errors();
		print_r($error);
		$adminbaru=array(
			'username'=>$this->input->post('username'),
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'status'=>$this->input->post('status'),
			'password'=>$this->input->post('password'),
			'foto'=>$this->input->post('gambardulu')

		);
		$test= $this->AdminModel->tambah_data($adminbaru);

		if ($test==1) {
			redirect(site_url('Dashboard/ProfilAdmin/'.$adminbaru['username']));
		}

	} else {
		$result = $this->upload->data();
		$adminbaru=array(
			'username'=>$this->input->post('username'),
			'nama'=>$this->input->post('nama'),
			'email'=>$this->input->post('email'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'status'=>$this->input->post('status'),
			'password'=>$this->input->post('password'),
			'foto'=>$result['file_name']


		);
		$test= $this->AdminModel->tambah_data($adminbaru);

		if ($test==1) {
			redirect(site_url('Dashboard/ProfilAdmin/'.$adminbaru['username']));
		}

	}}else{

		$data=array(
			'username'=>set_value('username'),
			'nama'=>set_value('nama'),
			'email'=>set_value('email'),
			'tanggal_lahir'=>set_value('tanggal_lahir'),
			'status'=>set_value('status'),


			'password'=>set_value('password'),
			'repassword'=>set_value('repassword'),
			'action'=>site_url('Dashboard/TambahAdmin_aksi')
			


		);
		$this->load->view('Admin/TambahAdmin',$data);

	}


}





function ProfilAdmin($username){
	$data['admin'] = $this->AdminModel->ambil_data_id($username);
	$this->load->view('Admin/ProfilAdmin',$data);
}


function DeleteAdmin($username){
	$test=$this->AdminModel->hapus_data($username);

	if ($test==1) {
		redirect(site_url('Dashboard/admin'));
	}
	
}
function EditProfilAdmin($username){
	

	$admin=$this->AdminModel->ambil_data_id($username);
		//$data['kata']="";
		//$data['action']=site_url('Dashboard/EditProfilAdmin_aksi');

	$data=array(
		'nama'=>set_value('nama',$admin->nama),
		'email'=>set_value('email',$admin->email),
		'kata'=>set_value('kata'),
		'foto'=>set_value('foto',$admin->foto),
		'tanggal_lahir'=>set_value('tanggal_lahir',$admin->tanggal_lahir),
		'action1'=>site_url('Dashboard/EditProfilAdmin_aksi'),
		'action2'=>site_url('Dashboard/editProfilAdmin_aksi2'),
		'password'=>set_value('password'),
		'repassword'=>set_value('repassword'),
		'editpass'=>set_value('editpass'),
		'editdata'=>set_value('editdata','in active')


	);

	$this->load->view('Admin/EditProfilAdmin',$data);
}

function EditProfilAdmin_aksi(){
	$username=$this->input->post('username'); 
	$passwordlama=$this->input->post('passworddulu');
	$emaillama=$this->input->post('emaildulu');
	$emaila=$this->input->post('email');

	if ($emaila!=$emaillama) {
		$email=$this->form_validation->run("emailcek");	
	}else{
		$email=true;
	}

	if($email){


		//$config['upload_path'] = './dataupload/';
	$nmfile = "admin_".time(); //nama file + fungsi time
	
	$config['upload_path'] = './assets/image/';

	$config['allowed_types'] = 'gif|jpg|png';
	$config['file_name'] = $nmfile;

    // load library upload



	$this->load->library('upload', $config);
	if (!$this->upload->do_upload('gambar')) {
		$error = $this->upload->display_errors();
		print_r($error);
		$adminbaru=array(
			'nama'=>$this->input->post('nama'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'foto'=>$this->input->post('gambardulu'),
			'email'=>$this->input->post('email')

		);
		$username=$this->input->post('username'); 
		$test= $this->AdminModel->edit_data($username,$adminbaru);

		if ($test==1) {
			$cek_login_admin= $this->AdminModel->ambil_data_id($username);
			$this->session->set_userdata('admin',$cek_login_admin);
			redirect(site_url('Dashboard/ProfilAdmin/'.$username));
		}

	} else {
		$result = $this->upload->data();

		$adminbaru=array(
			'nama'=>$this->input->post('nama'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'foto'=>$result['file_name'],
			'email'=>$this->input->post('email')


		);
		$username=$this->input->post('username'); 
		$test= $this->AdminModel->edit_data($username,$adminbaru);

		if ($test==1) {
			$cek_login_admin= $this->AdminModel->ambil_data_id($username);
			$this->session->set_userdata('admin',$cek_login_admin);
			redirect(site_url('Dashboard/ProfilAdmin/'.$username));
		}

	}}else{
		$data=array(
			'nama'=>set_value('nama'),
			'email'=>set_value('email'),
			'kata'=>set_value('kata'),
			'foto'=>set_value('gambardulu'),
			'tanggal_lahir'=>set_value('tanggal_lahir'),
			'action1'=>site_url('Dashboard/EditProfilAdmin_aksi'),
			'action2'=>site_url('Dashboard/editProfilAdmin_aksi2'),
			'password'=>set_value('password'),
			'repassword'=>set_value('repassword'),
			'editpass'=>set_value('editpass'),
			'editdata'=>set_value('editdata','in active')




		);

		$this->load->view('Admin/EditProfilAdmin',$data);
	}


}






function editProfilAdmin_aksi2(){
	$passwordlama=$this->input->post('passworddulu');
	$password=$this->form_validation->run("edit_data_password");
	$passwordlamacek=true;
	$kata="";
	$username=$this->input->post('username');
	if($this->input->post('passwordlama')!=$passwordlama){
		$passwordlamacek=false;
		$kata="maaf password lama tidak valid ";
	}

	if(($password)&&($passwordlamacek)){
		$adminbaru=array(
			'password'=>$this->input->post('password'),
		);

		$test= $this->AdminModel->edit_data($username,$adminbaru);

		if ($test==1) {
			$cek_login_admin= $this->AdminModel->ambil_data_id($username);
			$this->session->set_userdata('admin',$cek_login_admin);
			redirect(site_url('Dashboard/ProfilAdmin/'.$username));
		}
	}else{
		$admin=$this->AdminModel->ambil_data_id($username);
		//$data['kata']="";
		//$data['action']=site_url('Dashboard/EditProfilAdmin_aksi');

		$data=array(
			'nama'=>set_value('nama',$admin->nama),
			'email'=>set_value('email',$admin->email),
			'kata'=>set_value('kata',$kata),
			'foto'=>set_value('foto',$admin->foto),
			'tanggal_lahir'=>set_value('tanggal_lahir',$admin->tanggal_lahir),
			'action1'=>site_url('Dashboard/EditProfilAdmin_aksi'),
			'action2'=>site_url('Dashboard/editProfilAdmin_aksi2'),
			'password'=>set_value('password'),
			'repassword'=>set_value('repassword'),
			'editpass'=>set_value('editpass','in active'),
			'editdata'=>set_value('editdata')







		);

		$this->load->view('Admin/EditProfilAdmin',$data);
	}

}


function EditStatusAdmin_aksi(){
	$adminbaru=array(
			'status'=>$this->input->post('status'),
		);
	$username=$this->input->post('username');

		$test= $this->AdminModel->edit_data($username,$adminbaru);

		if ($test==1) {
			redirect(site_url('Dashboard/ProfilAdmin/'.$username));
		}
}

function ProfilMember($username){
	//$member=$this->MemberModel->ambil_data_id($username);
	$data['bTransaksi'] = $this->TransaksiModel->banyak_transaksi_id($username);
	$data['member']=$this->MemberModel->ambil_data_id($username);
	$data['bKomentar']=$this->KomentarModel->banyak_komentar_member($username);
	$data['bTestimoni']=$this->TestimoniModel->banyak_testimoni_id($username);
	$this->load->view('Admin/ProfilMember',$data);
}

function DeleteMember($username){
	$test=$this->MemberModel->hapus_data($username);

	if ($test==1) {
		redirect(site_url('Dashboard/Member'));
	}
}




function TestCount(){
	$data['count'] = $this->TransaksiModel->banyak_transaksi_id('ani');
	$this->load->view('Admin/testcount',$data);
}

function TransaksiMember($username){
	$data['semuatransaksi'] = $this->TransaksiModel->Transaksi_Member($username);
	$this->load->view('Admin/Transaksi',$data);
}

function KomentarMember($username){
	$data['semuakomentar'] = $this->KomentarModel->Komentar_member($username);
	$this->load->view('Admin/Komentar',$data);
}

function TestimoniMember($username){
	$data['semuatesti'] = $this->TestimoniModel->Testimoni_member($username);
	$this->load->view('Admin/Testimoni',$data);
}









function KurangStockBarang($id){
		$data['transaksi'] = $this->TransaksiModel->ambil_data_id($id);
		$data['order']= $this->OrderModel->order_transaksi_id($id);

	foreach ($data['order'] as $key => $value) {

	$barang= $this->BarangModel->ambil_data_id($value->id_barang);
	$barang->stok_barang=$barang->stok_barang-$value->jumlah;
		$test= $this->BarangModel->edit_data($value->id_barang,$barang);
	}
		//$this->load->view('Admin/DetailTransaksi',$data);
//			redirect(site_url('Dashboard/DetailBarang/'.$id_barang));

redirect("Dashboard/Transaksi");	
}


function downloadBuktiTransaksi($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
			$transaksi = $this->TransaksiModel->ambil_data_id($id);
			$bukti=$transaksi->bukti_transaksi;
            //file path./assets/image/
            $file = './assets/image/'.$bukti;            
            //download file from directory
            force_download($file, NULL);
        }



}
}


?>

