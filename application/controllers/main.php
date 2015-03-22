<?php 

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('madmin');	
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

	function index(){
		$data['berita']=$this->madmin->getLatestNews('5');
		$data['gallery']=$this->madmin->getLatestGallery('10');
		$data['front']=$this->madmin->getDataFront()->row();
		
		$content = $this->load->view('homepage/index',$data,true);
		$this->render($content);
	}
	function kontakkami()
	{
		$data['berita']=$this->madmin->getLatestNews('5');
		
		
		$content = $this->load->view('homepage/kontak-kami',$data,true);
		$this->render($content);
	}
	function addmessage()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required|xss_clean');
		$this->form_validation->set_rules('email','Email','required|valid_email|xss_clean');
		$this->form_validation->set_rules('web','Website','xss_clean|prep_url');
		$this->form_validation->set_rules('pesan','pesan','required|xss_clean');
		$this->form_validation->set_message('required', 'Kolom %s tidak boleh kosong.');
		$this->form_validation->set_message('valid_email', 'Email tidak valid.');
		if($this->form_validation->run())
		{

			$this->madmin->addmessage(mysql_real_escape_string($this->input->post('nama')),$this->input->post('email'),mysql_real_escape_string($this->input->post('web')),mysql_real_escape_string($this->input->post('pesan')));
			$this->session->set_flashdata('suksespesan', "Pesan Berhasil Terkirim");
			redirect('main/kontakkami');
		}else{
			$this->session->set_flashdata('gagalpesan', validation_errors());
			redirect('main/kontakkami');
		}
	}

	function gallery()
	{

		$this->load->library('pagination');
		$config['base_url'] = base_url().'main/gallery/';
		$config['total_rows'] = $this->madmin->getAllGallery()->num_rows();
		$config['per_page'] = 9;
		$config['prev_link'] = '<button class="button" style="margin-right:5px;"><i class="icons icon-left-dir"></i></button>';
		$config['next_link'] = '<button class="button"><i class="icons icon-right-dir"></i></button>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['num_tag_open'] = '<button class="button">';
		$config['num_tag_close'] = '</button>';
		$config['cur_tag_open'] = '<button class="button active-button">';
		$config['cur_tag_close'] = '</button>';
		$this->pagination->initialize($config);

		if($this->uri->segment(3) === false)
		{
			//awal

			$data['gallery']=$this->madmin->getGallery(0,9);
		}else{
			//akhir
			$data['gallery']=$this->madmin->getGallery($this->uri->segment(3),9);
		}
		
		/*$this->load->view('homepage/gallery2',$data);

		*/
		
		$content = $this->load->view('homepage/gallery',$data,true);
		$this->render($content);
	}
	function berita()
	{
		if(!empty($_POST['cari']))
		{
			$data['berita']=$this->madmin->getNewsCari($_POST['cari']);
			$data['hasil'] = "Hasil Pencarian ".ucwords($_POST['cari'])."";
			$this->session->set_userdata('cari',$_POST['cari']);
		}else{
			$data['berita']=$this->madmin->getNews(0,10);	
			$data['hasil'] = "Daftar Berita";
		}
		$this->load->library('pagination');
		$config['base_url'] = base_url().'main/berita/';
		$config['total_rows'] = $this->madmin->getAllNews()->num_rows();
		$config['per_page'] = 10;
		$config['prev_link'] = '<button class="button" style="margin-right:5px;"><i class="icons icon-left-dir"></i></button>';
		$config['next_link'] = '<button class="button"><i class="icons icon-right-dir"></i></button>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['num_tag_open'] = '<button class="button">';
		$config['num_tag_close'] = '</button>';
		$config['cur_tag_open'] = '<button class="button active-button">';
		$config['cur_tag_close'] = '</button>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3) === false && empty($_POST['cari']))
		{
			//awal
			$data['berita']=$this->madmin->getNews(0,10);
		}elseif($this->uri->segment(3) === true && empty($_POST['cari'])) {
			//akhir
			$data['berita']=$this->madmin->getNews($this->uri->segment(3),10);
		}
		
		$content = $this->load->view('homepage/berita',$data,true);
		$this->render($content);
		
	}
	function blog($num=0)
	{
		if($num==0)
			redirect('main/index');
		$data['berita']=$this->madmin->getBerita($num);
		$data['curr_idberita'] = $this->uri->segment(3);
		$data['berita_terakhir']=$this->madmin->getLatestNews('5');
		$content=$this->load->view('homepage/blog',$data,true);
		$this->render($content);
			
	}
}
