<?php 

class Madmin extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	var $details;
	function loginAdmin($username, $password){
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$hasil=$this->db->get()->result();
		if(is_array($hasil) && count($hasil) == 1)
		{
			$this->details=$hasil[0];
			$this->setsession();
			return true;
		}
		return false;
	}
	function setsession()
	{
			$this->session->set_userdata(array(
				'username' => $this->details->username,
				'level' => $this->details->level,
				'isLoggedIn' => true
			));
		
	}
	function getAllKategori(){
		return $this->db->query("select * from kategori");
	}
	function insertNews($judul,$isi,$kategori){
		$this->db->query("insert into berita values('','$judul','$isi','$kategori','',NOW())");
	}
	function insertNewsPhoto($judul,$isi,$kategori,$gambar){
		$this->db->query("insert into berita values('','$judul','$isi','$kategori','$gambar',NOW())");
	}
	
	function getAllNews()
	{
		return $this->db->query("select a.*, b.namakategori from berita a, kategori b where b.idkategori=a.kategoriberita order by waktuberita desc");
	}
	function getNewsCari($cari)
	{
		return $this->db->query("select a.*, b.namakategori from berita a, kategori b where b.idkategori=a.kategoriberita and (a.judulberita like '%$cari%' or a.isiberita like '%$cari%') ");
	}
	function getLatestNews($count)
	{
		return $this->db->query("select a.*, b.namakategori from berita a, kategori b where b.idkategori=a.kategoriberita order by waktuberita desc limit $count")->result();
	}
	function getLatestGallery($count)
	{
		return $this->db->query("select * from gallery  order by idgallery desc limit $count")->result();
	}
	function getNewsById($id)
	{
		return $this->db->query("select a.*, b.namakategori from berita a, kategori b where b.idkategori=a.kategoriberita and a.idberita='$id'")->row();	
	}
	function deletenews($id)
	{
		$this->db->query("delete from berita where idberita = $id");
	}
	function addcategory($data)
	{
		$this->db->query("insert into kategori values('','$data')");
	}
	function deletecategory($id)
	{	
		$this->db->query("delete from kategori where idkategori='$id'");
	}
	function getAllPesan()
	{
		return $this->db->query("select * from pesanmasuk order by waktu desc");
	}
	function deletepesan($id)
	{
		$this->db->query("delete from pesanmasuk where id='$id'");
	}
	function addgallery($jenis,$judul,$nama,$link="")
	{
		$this->db->query("insert into gallery values ('','$jenis','$judul','$link','$nama',NOW())");
	}
	function getAllGallery()
	{
		return $this->db->query("select * from gallery order by waktu desc");	
	}
	function deletegallery($id)
	{
		$this->db->query("delete from gallery where idgallery='$id'");
	}
	function getGallery($offset, $limit)
	{
		return $this->db->query("select * from gallery limit $offset,$limit");	
	}
	function addmessage($nama, $email, $web, $pesan)
	{
		$this->db->query("insert pesanmasuk values('','$nama','$email','$web','$pesan',NOW())");
	}

	function getBerita($num)
	{
		return $this->db->query("select a.*,b.namakategori from berita a, kategori b where idberita=$num and a.kategoriberita=b.idkategori")->row();
	}
	function getPassword($nama)
	{
		return $this->db->query("select password from admin where username='$nama'")->row()->password;
	}
	function changepassword($nama,$password)
	{
		$this->db->query("update admin set password='$password' where username='$nama'");
	}
	function getDataFront()
	{
		return $this->db->query("select * from personalisasi");
	}
	function getNews($offset,$limit)
	{
		return $this->db->query("select a.*, b.namakategori from berita a, kategori b where b.idkategori=a.kategoriberita order by waktuberita desc limit $offset,$limit");
	}
	function changefront($kt,$rata,$deskripsi)
	{
		$data=array('katadepan' => $kt ,
					'rata' => $rata,
					'deskripsi' => $deskripsi);
		$this->db->where('id','1');
		$this->db->update('personalisasi',$data);
	}
	function getAllThread()
	{
		return $this->db->query("select * from thread order by waktuthread desc");
	}
	function getDataThread()
	{

	}
	function addThread($judul, $isi, $gambar, $pinned)
	{
		$this->db->query("insert into thread values('','-1','$judul','$isi','$gambar',NOW(),$pinned)");
	}
	function getAllComment()
	{
		return $this->db->query("select * from komenthread order by idkomen asc");
	}
	function deleteThread()
	{

	}
	function addUser($nama, $angkatan, $username, $password, $gambar)
	{
		$this->db->query("insert into user values('', '$nama', '$angkatan', '$username', '$password', '$gambar', '1')");
	}
	function getAllUser()
	{
		return $this->db->query("select * from user order by iduser asc");
	}
	function getDataUser()
	{

	}
	function changeUserStatus($status, $iduser)
	{
		$this->db->query("update user set enabled = '$status' where iduser = '$iduser'");
	}
}