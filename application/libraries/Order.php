<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order {

	public function __construct()
	{

		$CI =& get_instance();
	
		$CI->load->model('OrderModel');
		$CI->load->model('OrderModel','',TRUE);

	}
	public function tambah_order($data)
	{
		$CI =& get_instance();
		$CI->load->model('OrderModel','',TRUE);
		//$CI->OrderModel->tambah_data($data);
		$CI->OrderModel->tambah_data($data);
	}
	
}
?>