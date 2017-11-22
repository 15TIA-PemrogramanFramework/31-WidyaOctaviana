<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JumlahBeli {

	public function __construct()
	{

		$CI =& get_instance();
	
		$CI->load->model('BarangModel');
		$CI->load->model('BarangModel','',TRUE);

	}
	public function JumlahBeli($id)
	{
		$CI =& get_instance();
		$CI->load->model('BarangModel','',TRUE);
		//$CI->OrderModel->tambah_data($data);
		$CI->OrderModel->JumlahBeli($id);
		print_r($CI);
	}
	
}
?>