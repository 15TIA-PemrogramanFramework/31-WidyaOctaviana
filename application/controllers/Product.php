
<?php 
/**
 * 
 */
class Product extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModel');
	}

	function index()
	{

		$data['semuabarang'] = $this->BarangModel->ambil_data();
		
		$this->load->view('Barang/ProductList',$data);
		//print_r($data);
	}
	function tambah(){
		$data=array(
			'nama_barang'=>set_value('nama_barang'),
			'harga_barang'=>set_value('harga_barang'),
			'gambar_barang'=>set_value('gambar_barang'),
			'id_barang'=>set_value('id_barang'),
			'detail_barang'=>set_value('detail_barang'),
			'stok_barang'=>set_value('stok_barang'),

			'button'=>"tambah",
			'action'=>site_url('Product/tambah_aksi')

		);
		$this->load->view('Barang/BarangForm',$data);
	}
	function tambah_aksi()
	{

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
				redirect(site_url('Product'));
	# code...
			}}


		}

		function delete($id){



			$test= $this->BarangModel->hapus_data($id);

			if ($test==1) {
				redirect(site_url('Product'));
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
				'action'=>site_url('Product/edit_aksi')

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
			redirect(site_url('Product'));
	# code...
		}

	}


}
}
?>

