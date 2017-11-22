<?php 
/**
 * 
 */
class OrderModel extends CI_model
{
	public $nama_table = 'order';
	public $id='id_order';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		$datasemua= $this->db->get($this->nama_table)->result();
		return $datasemua;
	}

	function tambah_data($data){
		return $this->db->insert($this->nama_table, $data);
	}
	function hapus_data($id){
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_table);
	}

	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		return $this->db->update($this->nama_table,$data);
	}

function ambil_data_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->nama_table)->row();
	}	
	function ambil_data_idtransaksi($id){
		$this->db->where("id_transaksi",$id);
		return $this->db->get($this->nama_table)->result();
	}

	function order_transaksi_id($id){
			$query = $this->db->select('order.*,barang.*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('order.id_transaksi', $id);

			$query= $this->db->join('barang','order.id_barang = barang.id_barang');
			 $query = $this->db->get()->result();
            	return $query;	

}

function barang_sudah_beli($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query = $this->db->from('barang');
			$query = $this->db->from('transaksi');


			$query= $this->db->where('order.id_barang = barang.id_barang');
			$query= $this->db->where('transaksi.id_transaksi = order.id_transaksi');
			$query=$this->db->where('transaksi.validasi_bukti', 'valid');
			$query=$this->db->where('transaksi.username', $username);


			 $query = $this->db->get()->result();
            	return $query;	

}

	/*function barang_sudah_beli($username){
			$query = $this->db->select('order.*,barang.*','transaksi.*');
			$query = $this->db->from($this->nama_table);
			$query= $this->db->join('barang','order.id_barang = barang.id_barang');
			$query= $this->db->join('transaksi','transaksi.id_transaksi = order.id_transaksi');
			$query=$this->db->where('transaksi.validasi_bukti', 'valid');
			$query=$this->db->where('transaksi.username', $username);


			 $query = $this->db->get()->result();
            	return $query;	

}*/


}