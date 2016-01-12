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
	
	public function __construct()
	{
		parent::__construct();
		// load used Model
		$this->load->model('m_utilisateur');
		
	}
	
	
	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('front/login');
		
	}
	
	
	public function verify()
	{
		if ($this->input->post('login') && $this->input->post('password'))
		{
			//instantiate user
			$utilisateur = new m_utilisateur();
			
			//check login
			$result = $utilisateur->login($this->input->post('login'), $this->input->post('password'));
			
			if ($result)
			{
				print_r('bienvenu '.$utilisateur->firstname);
				print_r($utilisateur->lastname);
				print_r($utilisateur->email);
			}
			else
			{
				$html = "<script> alert('wrong login/password try again') </script>";
				echo $html;
				//redirect('front/login', 'refresh');  <-- actually needed but dont work properly
				$this->load->view('front/login');
			}
			
		}
		else 
		{
			//Field validation failed.  User redirected to login page
			//$message = "Login ou mot de passe incorrect";
			
			$html = "<script> alert('hang on ! please enter login/password') </script>";
			echo $html;
			//redirect('front/login', 'refresh');  <-- actually needed but dont work properly
			$this->load->view('front/login');
		}
	}
	
	public function do_upload()
	{
		$config['upload_path']          = 'application/uploads/';
		$config['allowed_types']        = 'gif|jpg|png|txt';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('userfile'))
		{
			$error = array('error' => $this->upload->display_errors());
	
			$this->load->view('front/upload', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
	
			$this->load->view('front/uploads', $data);
		}
	}
	
	
}
