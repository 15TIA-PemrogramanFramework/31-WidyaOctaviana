<?php 
/**
 * 
 */
class TransaksiModel extends CI_model
{
	public $nama_table = 'transaksi';
	public $id='id_transaksi';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		$this->db->order_by($this->id,"DESC");
		$datasemua= $this->db->get($this->nama_table)->result();
		return $datasemua;
	}

	function tambah_data($data){
		 $this->db->insert($this->nama_table, $data);
		return $last_insert_id = $this->db->insert_id(); // letakkan tepat dibawah query insert
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

	function banyak_transaksi_id($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get();
            $responce = $query->num_rows();
            	return $responce;
	}	


		function Transaksi_Member($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get()->result();
            	return $query;
	}	
}