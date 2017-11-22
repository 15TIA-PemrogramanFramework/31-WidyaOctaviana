<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('test/formupload');
	}
	public function olah_upload(){

	}
	function do_upload() {
        // setting konfigurasi upload
		$config['upload_path'] = './dataupload/';
		$config['allowed_types'] = 'gif|jpg|png';
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
            	//$datamahasiswabaru=array(
			$nama = $this->input->post('name');
			print_r($nama);
		}
	}

	function coba(){
		$data=array(
			'nama_barang'=>"ani",
			'harga_barang'=>"2",
			'gambar_barang'=>"2" );
		$data2=array(
			'nama_barang'=>"kamu",
			'harga_barang'=>"1",
			'gambar_barang'=>"1" );

		$data3[0]=$data;
		$data3[]=$data2;

		print_r($data3);

		$this->session->set_userdata('belanja',$data3);

		foreach ($data3 as $key) {
			echo "1";
//echo $key;
			echo $key['nama_barang'];

		}


	}
	function coba2(){
		$data4=$this->session->userdata('belanja');
		//print_r($data4);

		$databary=array(
			'nama_barang'=>"dia",
			'harga_barang'=>"1",
			'gambar_barang'=>"1" );
		
		$data4[]=$databary;
		foreach ($data4 as $key) {
			echo "1";
//echo $key;
			echo $key['nama_barang'];

		}
	}
	function cobatampil(){
		print_r("ani");
	}

}
?>