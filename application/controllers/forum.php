<?php

class Forum extends CI_Controller {
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
		}else{
			redirect('forum/login');
			return false;
		}
	}
	public function index()	
	{
		if($this->cekSessionUser())
		{

		}
	}
	public function login()
	{
		$data = array();
		$content = $this->load->view('homepage/forum/login',$data,true);
		$this->render($content);
	}
}