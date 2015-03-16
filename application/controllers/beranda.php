<?php 

class Beranda extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function hello(){
		echo "hay";
	}
	function index(){
		$this->load->view('homepage/header');
		$this->load->view('homepage/index');
		$this->load->view('homepage/footer');
	}

}