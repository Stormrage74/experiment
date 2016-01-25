<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	
	public function index()
	{
		
		$this->header("login");
		$this->login();
 		$this->footer();
	}
	
	private function header($title = NULL, $localjs = "event.js")
	{
		$data['title'] = $title;
		$data['localjs'] = $localjs;
		$this->load->view('front/header', $data);
	}
	
	private function footer()
	{ 
		$data = NULL;
		$this->load->view('front/footer',$data);
	}
	
	public function login()
	{
		$this->load->view('front/login');
	}
	
	public function verify(){
		
		//var_dump($_POST);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('front/login');
		}
		else
		{
			$this->load->view('front/logon');
		}
		
	}
	
	
	
}
