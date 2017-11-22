<?php 
/**
 * 
 */
class KomentarModel extends CI_model
{
	public $nama_table = 'komentar';
	public $nama_table2 = 'member';

	public $id='id_komentar';
	public $order='DESC';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		//$datasemua= $this->db->get($this->nama_table)->result();
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->nama_table)->result();
		//return $datasemua;
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

	function tampil_komentar_semua(){
		$query = $this->db->select('komentar.*,member.username,member.foto');
            $this->db->from($this->nama_table);
            $this->db->join($this->nama_table2, 'member.username = komentar.username');
      
		$this->db->order_by($this->id, $this->order);

            $query = $this->db->get();

            return $query->result();
	}

		function banyak_komentar_member($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get();
            $responce = $query->num_rows();
            	return $responce;
	}	

	function Komentar_member($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get()->result();
           
            	return $query;
	}
	
}