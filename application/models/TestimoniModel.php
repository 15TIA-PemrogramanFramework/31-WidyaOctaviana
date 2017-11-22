<?php 
/**
 * 
 */
class TestimoniModel extends CI_model
{
	public $nama_table = 'testimoni';
	public $nama_table2 = 'member';

	public $id='id_testimoni';

	function __construct()
	{
		parent::__construct();
	}

//ambil data digunakan untuk mengambi seluruh data dari table mahasiswa dari anidb
	function ambil_data(){
		$this->db->order_by($this->id,'DESC');
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


	function tampil_testimoni_semua(){
		

 $query = $this->db->select('testimoni.*,member.username,member.foto');
        $query =     $this->db->from($this->nama_table);
           $query =  $this->db->join($this->nama_table2, 'member.username = testimoni.username');
          
		 $query =$this->db->order_by($this->id, "desc");

            $query = $this->db->get();
            return $query->result();


	}	





	function tampil_testimoni_semua1(){
		

 $query = $this->db->select('*');

        $query =     $this->db->from($this->nama_table);
        $query =     $this->db->from('barang');
        $query =     $this->db->from('member');
		$query=$this->db->where('barang.id_barang=testimoni.id_barang');
		$query=$this->db->where('member.username=testimoni.username');
		 $query =$this->db->order_by($this->id, "desc");
          $query = $this->db->get();
            return $query->result();


	}	





		function banyak_testimoni_id($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get();
            $responce = $query->num_rows();
            	return $responce;
	}	

/*
	function tampil_testimoni_semua(){
		  $this->db->select("*");
            $this->db->from($this->nama_table);
            $this->db->join($this->nama_table2, 'member.username = testimoni.username');
            //$this->db->join('tbl_checkout', 'tbl_checkout.sale_id = tbl_sales_detail.sale_id');
            //$this->db->where('tbl_sales_detail.sale_id',$id);
		$this->db->order_by($this->id, "desc");

            $query = $this->db->get();
//           print_r($this->db->last_query()); 
//           die;
            return $query->result();
	}	

		function banyak_testimoni_id($username){
			$query = $this->db->select('testimoni.*,member.*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('member.username', $username);

			$query= $this->db->join('member','member.username = testimoni.username');
			 $query = $this->db->get();
            $responce = $query->num_rows();
            	return $responce;
	}	
*/

	function Testimoni_member($username){
			$query = $this->db->select('*');
			$query = $this->db->from($this->nama_table);
			$query=$this->db->where('username', $username);
			 $query = $this->db->get()->result();
           
            	return $query;
	}
function testimoni($id_barang,$username){
	$query = $this->db->select('*');
	$query = $this->db->from($this->nama_table);
	$query=$this->db->where('username', $username);
	$query=$this->db->where('id_barang', $id_barang);

	$query = $this->db->get()->row();
	return $query;
}



}