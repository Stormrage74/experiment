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
		if (isset($_SESSION['username']))
		{
			$this->load->view('front/logon');
		}
		else
		{
			$this->header("login");
			$this->login();
			$this->footer();
		}
		
	}
	
	
	public function login()
	{
		$this->load->view('front/login');
	}
	
	public function upload()
	{
		$this->load->view('front/uploads');
	}
	
	public function verify()
	{
		
		//var_dump($_POST);
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('front/login');
		}
		else
		{
			//$_SESSION['username'] = $_POST['username'];
			$this->session->set_tempdata('username', $this->input->post('username'));
			$this->load->view('front/logon');
		}
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
	public function do_upload($username = NULL)
	{
		$prefixe = '__dir__';
		if (isset($username))
		{
			$prefixe .= $username;
		}
// 		else
// 		{
// 			foreach (range(0, 10) as $number) {
// 				$prefixe .= $number;
// 			}
// 		}
		
		echo $prefixe;
		
		
		$config['upload_path']          = 'application/uploads/'+$prefixe;
		$config['allowed_types']        = 'gif|jpg|png|txt';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		
// 		if (!is_dir($config['upload_path']))
// 		{
// 			print_r('im here');
// 			mkdir($config['upload_path'], 0777, TRUE);
// 		}
		
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
	
			$this->load->view('front/uploads', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
	
			$this->load->view('front/uploads', $data);
		}
	}
	// static functions
	
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
	
	
	
	
}
