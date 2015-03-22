<?php 

class Mforum extends CI_Model {
	protected $table;
	public function __construct(){
		parent::__construct();
		$this->table='thread';
	}
	public function all()
	{
		$this->db->select($this->table.'.*,user.iduser,user.username');
		$this->db->from($this->table);
		$this->db->join('user', $this->table.'.iduser = user.iduser');
		$this->db->order_by($this->table.'.pinned','desc');
		$this->db->order_by($this->table.'.waktuthread','desc');
		$data= $this->db->get()->result();
		return $data;
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return true;
	}
	public function find($id)
	{
		$this->db->where($this->table.'.idthread',$id);
		$this->db->select($this->table.'.*,user.username');
		$this->db->from($this->table);
		$this->db->join('user', $this->table.'.iduser = user.iduser');

		$data= $this->db->get()->row();
		return $data;
	}
	public function findWithComment($id)
	{
		$this->table = 'komen'.$this->table;
		$this->db->where($this->table.'.idthread',$id);
		$this->db->select($this->table.'.*,user.username');
		$this->db->from($this->table);
		$this->db->join('user', $this->table.'.iduser = user.iduser');

		$data= $this->db->get()->result();
		return $data;
	}
	function insertComment($data)
	{
		$this->table = 'komen'.$this->table;
		$this->db->insert($this->table, $data);
	}
}