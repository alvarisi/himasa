<?php

class Alumni extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('malumni');
		if($this->cekSessionUser())
		{
			$this->nav = '/include/nav-forum';
		}
	}
	protected $layout = '/layout/home';
	protected $nav = '/include/nav';
	protected $stylesheets = array(
	    'colorbox.css',
	    'bootstrap.min.css',
	    'fontello.css',
	    'flexslider.css',
	    'settings.css',
	    'owl.carousel.css',
	    'responsive-calendar.css',
	    'chosen.css',
	    'jackbox.min.css',
	    'cloud-zoom.css',
	    'colorpicker.css',
	    'style.css',
	    'responsive-calendar.css',
  	);
  	protected $javascripts = array(
  		'jquery-1.11.0.min.js',
  		'jquery-ui-1.10.4.min.js',
  		'jquery.queryloader2.min.js',
  		'jquery.mask.js'
  	  	);
  	protected function get_stylesheets() {
	    return $this->stylesheets;
  	}

  	protected function get_javascripts() {
    	return $this->javascripts;
  	}


  	protected function render($content) {
  		$nav = $this->load->view($this->nav, null,true);
        $view_data = array(
        	'nav' => $nav,
    		'content' => $content,
      		'stylesheets' => $this->get_stylesheets(),
      		'javascripts' => $this->get_javascripts()
    	);
    	$this->load->view($this->layout,$view_data);
  	}

	private function cekSessionUser()
	{
		if($this->session->userdata('alumniIsLoggedIn'))
		{

			return true;
		}
	}
	public function index()	
	{
		if($this->cekSessionUser())
		{
			$data = array();
			$data['user']=$this->malumni->find($this->session->userdata('id'));			
			$content =$this->load->view('homepage/forum/dashboard',$data,true);
			$this->render($content);
		}else{
			redirect('alumni/login');
			return false;
		}
	}
	public function login()
	{
		$data = array();
		$content = $this->load->view('homepage/forum/login',$data,true);
		$this->render($content);
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('angkatan','Angkatan','required|xss_clean');
		$this->form_validation->set_rules('nama','Nama','required|xss_clean');
		$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean|is_unique[user.email]');
		$this->form_validation->set_rules('username','Username ','required|xss_clean|is_unique[user.username]');
		$this->form_validation->set_rules('password','Password','required|xss_clean');
		$this->form_validation->set_rules('cpassword','Konfirmasi Password','required|matches[password]|xss_clean');
		if($this->form_validation->run())
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'angkatan' => $this->input->post('angkatan'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'enabled' => '1'
			);
			$this->malumni->insert($data);
			$this->session->set_flashdata('suksesdaftar', "Pendaftaran berhasil");
			redirect('index.php/alumni/login');
		}else{
			$this->session->set_flashdata('gagaldaftar', validation_errors());
			redirect('index.php/alumni/login');
		}
		

	}
	public function submitLogin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		if($this->malumni->auth($data))
		{
			return redirect('index.php/alumni/index');
		}else{
			$this->session->set_flashdata('gagallogin', 'Kombinasi username dan password tidak sama');
			return redirect('index.php/alumni/login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('/');
	}
	public function edit()
	{
		$data = array();
		$data['user']=$this->malumni->find($this->session->userdata('id'));			
		$content =$this->load->view('homepage/forum/edit',$data,true);
		$this->render($content);
	}
	public function update()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('angkatan','Angkatan','required|xss_clean');
		$this->form_validation->set_rules('nama','Nama','required|xss_clean');
		$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
		if($this->form_validation->run())
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'angkatan' => $this->input->post('angkatan'),
			);
			$this->malumni->update($data);
			$this->session->set_flashdata('suksesedit', "Update berhasil");
			redirect('index.php/alumni/edit');
		}else{
			$this->session->set_flashdata('gagaledit', validation_errors());
			redirect('index.php/alumni/edit');
		}
	}
	public function changePassword()
	{
		$data = array();
		$content =$this->load->view('homepage/forum/changePassword',$data,true);
		$this->render($content);
	}
	public function submitPassword()
	{
		$a = $this->input->post('oldpassword');
		$b = $this->input->post('password');
		if(!empty($a) || !empty($b))
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('oldpassword',"Password Lama",'required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('password',"Password Baru",'required|min_length[6]|xss_clean');
			$this->form_validation->set_rules('cpassword',"Konfirmasi Password Baru",'required|xss_clean|matches[password]');
			if($this->form_validation->run())
			{
				$this->load->helper('security');
				$str = $this->input->post('oldpassword');
				// $str = do_hash($str, 'md5');
				if($str==$this->malumni->find($this->session->userdata('id'))->password)
				{
					$str = $this->input->post('password');
					// $str = do_hash($str, 'md5');
					$data = array(
						'password' => $str
					);
					$this->malumni->update($data);
					$this->session->set_flashdata('suksespassword',"Password anda telah diganti.");
				}else{
					$this->session->set_flashdata('gagalpassword',"Password lama anda tidak cocok.");
				}
			}else{
				$this->session->set_flashdata('gagalpassword',validation_errors());
			}
			redirect('/index.php/alumni/changePassword');
		}else{
			redirect('/index.php/alumni/changePassword');
		}
	}
}