
<?php 
/**
 * 
 */
class Transaksi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('TransaksiModel');
		$this->load->model('OrderModel');

		$this->load->helper(array('form','url'));
		$this->load->driver('session');
		$this->load->library('order');
		//$this->load->library(‘session’);
	}

	function index()
	{

		$data['semuatransaksi'] = $this->TransaksiModel->ambil_data();
		
		$this->load->view('Transaksi/TransaksiList',$data);
		//print_r($data);
	}

	function tambah_aksi()
	{

		$transaksi=array(
			'total_transaksi'=>$this->input->post('total_transaksi'),
			'bukti_transaksi'=>"belum",
			'alamat_tujuan'=>$this->input->post('alamat_tujuan'),

			'validasi_bukti'=>"belum",
			'nohp'=>$this->input->post('nohp'),
			'kode_pembayaran'=>$this->input->post('kode_pembayaran'),
			'username'=>$this->input->post('username')
		);

		$cart=$this->session->userdata('cart');
		$id_transaksi= $this->TransaksiModel->tambah_data($transaksi);
//echo $id_transaksi;
		foreach ($cart as $key => $value) {

			$dataorder=array(
				'id_transaksi'=>$id_transaksi,
				'id_barang'=>$cart[$key]['id_barang'],
				'jumlah'=>$cart[$key]['jumlah']
			);
			$this->order->tambah_order($dataorder);

		}

	}



	function delete($id){



		$test= $this->BarangModel->hapus_data($id);

		if ($test==1) {
			redirect(site_url('Barang'));
	# code...
		}
	}


	function edit($id){

		$barang=$this->BarangModel->ambil_data_id($id);

		//redirect(site_url('mahasiswa'));

		$data=array(
			'nama_barang'=>set_value('nama_barang',$barang->nama_barang),
			'harga_barang'=>set_value('harga_barang',$barang->harga_barang),
			'gambar_barang'=>set_value('gambar_barang',$barang->gambar_barang),
			'id_barang'=>set_value('id_barang',$barang->id_barang),
			'detail_barang'=>set_value('detail_barang',$barang->detail_barang),
			'stok_barang'=>set_value('stok_barang',$barang->stok_barang),

			'button'=>"edit",
			'action'=>site_url('Barang/edit_aksi')

		);

		$this->load->view('Barang/BarangForm',$data);
	}
	function edit_aksi(){
		//$config['upload_path'] = './dataupload/';
		$nmfile = "Barangfile_".time(); //nama file + fungsi time
		
		$config['upload_path'] = './assets/image/';

		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $nmfile;

        // load library upload
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('gambar_barang')) {
			$error = $this->upload->display_errors();
			print_r($error);
		} else {
			$result = $this->upload->data();

			$barangbaru=array(
				'nama_barang'=>$this->input->post('nama_barang'),
				'harga_barang'=>$this->input->post('harga_barang'),
				'gambar_barang'=>$result['file_name'],
				'detail_barang'=>$this->input->post('detail_barang'),
				'stok_barang'=>$this->input->post('stok_barang')

			);
		$id=$this->input->post('id_barang'); // meskipun tidak ada di form, namun sudah ada karena kita men
		//menggunakan tipe data hidden
		//$this->Mahasiswa_model->edit_data($id,$datamahasiswabaru);
		$test= $this->BarangModel->edit_data($id,$barangbaru);

		if ($test==1) {
			redirect(site_url('Barang'));
	# code...
		}

	}


}

function updateStatus(){

	$transaksibaru=array(
		'validasi_bukti'=>$this->input->post('validasi_bukti')
	);
	$id=$this->input->post('id_transaksi'); 
	$halaman=$this->input->post('halaman');
	$test= $this->TransaksiModel->edit_data($id,$transaksibaru);

	if ($test==1) {
		if($transaksibaru['validasi_bukti']=="valid"){
	redirect("Dashboard/KurangStockBarang/".$id);
		}else{
		redirect($halaman);
}
	}

}

function TransaksiMember($username){
	$data['semuatransaksi'] = $this->TransaksiModel->Transaksi_Member($username);
	$this->load->view('TransaksiMember',$data);
}

function DetailTransaksi($id){
		$data['transaksi'] = $this->TransaksiModel->ambil_data_id($id);
		$data['order']= $this->OrderModel->order_transaksi_id($id);
		$this->load->view('DetailTransaksi',$data);

	}

function UploadBuktiTransaksi_aksi(){
		
//$config['upload_path'] = './dataupload/';
		$nmfile = "TransaksiFile_".time(); //nama file + fungsi time
		
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


	$transaksibaru=array(
		'validasi_bukti'=>$this->input->post('validasi_bukti'),
		'bukti_transaksi'=>$result['file_name']

	);
	$id=$this->input->post('id_transaksi'); 
	$test= $this->TransaksiModel->edit_data($id,$transaksibaru);

	if ($test==1) {
		redirect("Transaksi/DetailTransaksi/".$id);

	}

	}




}
}
?>

