<?php 
/**
* 
*/
class Testimonials extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('TestimoniModel');



	}

	function index()
	{

		$data['semuatesti'] = $this->TestimoniModel->tampil_testimoni_semua1();
		

		$this->load->view('Testimoni',$data);
		}



	function tambah_aksi()
	{

	$testimoni=array(
				'isi_testimoni'=>$this->input->post('isi_testimoni'),
				'username'=>$this->input->post('username'),
				'id_barang'=>$this->input->post('id_barang')

			);
$this->TestimoniModel->tambah_data($testimoni);
redirect("Testimonials");
	}

	function beritestimoni($id_barang,$username){
		$data['testi']=$this->TestimoniModel->testimoni($id_barang,$username);
		$data['id_barang']=$id_barang;

		print_r($data);
		$this->load->view('Beritestimoni',$data);
	}


	function DeleteTestimoni($id){
		$test=$this->TestimoniModel->hapus_data($id);

		if ($test==1) {
			redirect(site_url('Home'));
		}

	}

	
	}?>