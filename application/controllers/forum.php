<?php

class Forum extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('mforum','malumni'));	
		if($this->cekSessionUser())
		{
			$this->nav = '/include/nav-forum';
		}
	}
	protected $layout = '/layout/home';
	protected $nav = '/include/nav-forum';
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
			$data['thread'] = $this->mforum->all();
			$data['user']=$this->malumni->find($this->session->userdata('id'));
			$content = $this->load->view('homepage/forum/thread',$data,true);
			$this->render($content);
		}
	}
	public function create()
	{
		if($this->cekSessionUser())
		{
			$data['user']=$this->malumni->find($this->session->userdata('id'));
			$content = $this->load->view('homepage/forum/threadform',$data,true);
			$this->render($content);
		}	
	}
	public function store()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul','Judul','required|xss_clean');
		$this->form_validation->set_rules('description','Deskripsi','required|xss_clean');
		if($this->form_validation->run())
		{
			
			$filename='';
			if(is_uploaded_file($_FILES['file']['tmp_name']))
			{

				$config['upload_path'] = './content/thread/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file')) {
					$gambar=$_FILES['file']['name'];
					$filename=$gambar;
				}
			}
			$data = array(
				'judulthread' => $this->input->post('judul'),
				'isithread' => $this->input->post('description'),
				'gambarthread' => $filename,
				'waktuthread' => date('Y-m-d H:i:s'),
				'iduser' => $this->session->userdata('id'),
			);
			$this->mforum->insert($data);
			$this->session->set_flashdata('suksesthread', "Thread berhasil ditambahkan.");
		}else{
			$this->session->set_flashdata('gagalthread', validation_errors());
			
		}
		redirect('index.php/forum/create');
	}
	public function detail($id)
	{
		if($this->cekSessionUser())
		{
			$data['forum']=$this->mforum->find($id);
			$data['dforum']=$this->mforum->findWithComment($id);
			$content = $this->load->view('homepage/forum/threaddetail',$data,true);
			$this->render($content);
		}	
	}
	public function comment($id)
	{
		$kom = $this->input->post('description');
		if(!empty($kom))
		{
			$data = 
			array(
				'iduser' => $this->session->userdata('id'),
				'idthread' => $id,
				'waktuthread' => date('Y-m-d H:i:s'),
				'isikomen' => $kom
			);
			$this->mforum->insertComment($data);
			$this->session->set_flashdata('suksesthread', "Komentar berhasil ditambahkan.");
			
		}
		return redirect('index.php/forum/detail/'.$id);
	}

}