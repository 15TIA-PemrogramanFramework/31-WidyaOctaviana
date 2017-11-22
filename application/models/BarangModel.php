<?php 
/**
 * 
 */
class BarangModel extends CI_model
{
	public $nama_table = 'barang';
	public $id='id_barang';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		//$this->db->order_by($this->id, $this->order);
$this->db->order_by($this->id,"DESC");
		//$this->db->get($this->nama_table)->result();
		//
		//return $this->db->get($this->nama_table)->result();
		return $this->db->get($this->nama_table)->result();
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


	function ambil_data_semua(){
		
        $query = $this->db->query("select * from (SELECT sum(jumlah) jumlahjual , id_barang FROM `order` GROUP BY id_barang) o , barang b where b.id_barang = o.id_barang order by b.id_barang DESC ");
            return $query->result();
	}


function ambil_data_semua_id($id_barang){
		
        $query = $this->db->query("select * from (SELECT sum(jumlah) jumlahjual , id_barang FROM `order` GROUP BY id_barang) o , (select * from barang where id_barang=".$id_barang.") b where b.id_barang = o.id_barang ");
            return $query->row();
	}

	function JumlahBeli($id_barang){
		
        $query = $this->db->query("select sum(jumlah) jumlahjual , id_barang FROM `order` where id_barang=".$id_barang );
            return $query->row();
	}

	
}
/*
select * from (SELECT sum(jumlah) , id_barang FROM `order` GROUP BY id_barang) o , barang b where b.id_barang = o.id_barang*/