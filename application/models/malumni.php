<?php 

class Malumni extends CI_Model {
	protected $table;
	public function __construct(){
		parent::__construct();
		$this->table='user';
	}
	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return true;
	}
	protected $details;
	function auth($data){
		$this->db->from($this->table);
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		$hasil=$this->db->get()->row();
		if(!empty($hasil))
		{
			$this->details=$hasil;
			$this->setsession();
			return true;
		}
		return false;
	}
	function setsession()
	{
		$this->session->set_userdata(array(
			'username' => $this->details->username,
			'id' => $this->details->iduser,
			'alumniIsLoggedIn' => true
		));
	}
	function find($id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('iduser', $id);
		$data = $this->db->get()->row();
		return $data;
	}
	function update($data)
	{
		$this->db->where('iduser', $this->session->userdata('id'));
		$this->db->update($this->table, $data); 
	}

}