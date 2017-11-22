<?php 
/**
 * 
 */
class MemberModel extends CI_model
{
	public $nama_table = 'member';
	public $id='username';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		$this->db->order_by('waktu_regis', "DESC");

		$datasemua= $this->db->get($this->nama_table)->result();
		//return $this->db->get($this->nama_table)->result();
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
	
	function cek_login($username,$password){
		 $this ->db-> select(' * ');
            $this->db-> from($this->nama_table);
            $this ->db-> where('username', $username);
            $this ->db-> where('password', $password);
            $query = $this->db-> get()->row();
            return $query;
	}
}