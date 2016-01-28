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
			$this->logon();
		}
		else
		{
			$this->login();
		}
		
	}
	
	
	public function login()
	{
		$this->header("LOGIN PAGE");
		$this->load->view('vfront/login');
		$this->footer();
		
	}
	
	public function upload($data = NULL)
	{
		$this->header("UPLOAD PAGE");
		$this->load->view('vfront/uploads', $data);
		$this->footer();
	}
	
	public function successUpload($data = NULL)
	{
		$this->header("UPLOAD PAGE 2");
		$this->load->view('vfront/success_upload', $data);
		$this->footer();
	}
	
	public function files($data = '')
	{
		$this->header("FILES PAGE");
		$this->load->view('vfront/listFiles', $data);
		$this->footer();
	}
	
	public function logon()
	{
		$this->header("LOGON PAGE");
		$this->load->view('vfront/logon');
		$this->footer();
	}
	
	public function verify()
	{
		if (isset($_SESSION['username']))
		{
			$this->logon();
		}
		else 
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->login();
			}
			else
			{
				$this->session->set_tempdata('username', $this->input->post('username'));
				$this->logon();
			}
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
	public function do_upload()
	{
		if (!$this->upload->do_upload('files')) // files is the name of the input area take care if you changed it
		{
			$data['error'] = $this->upload->display_errors();
			$this->upload($data);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->successUpload($data);
		}
	}
	
	
	public function listFiles()
	{
		$data['upload_file']= get_filenames(APPPATH.'uploads/');
		$this->files($data);
	}
	
	public function makeDir()
	{
		
		$this->form_validation->set_rules('path', 'Path', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$pathname = APPPATH.'uploads/';
			$pathname .= $this->input->post('path');
			$data['result'] = 1;
			if (!is_dir($pathname))
			{
				if(!mkdir($pathname, 0777, TRUE))
				{
					$this->files($data);
				}
				else
				{
					$data['result'] = 2;
					$this->files($data);
				}
			}
			else
			{
				$data['result'] = 3;
				$this->files($data);
			}
		}
		else 
		{
			$this->files();
		}
		//TODO: depend on user connect, create a dir for upload datas
	}
	
	
	public function delDir()
	{
		
		$this->form_validation->set_rules('delpath', 'Delpath', 'required');
		
		if ($this->form_validation->run() == TRUE)
		{
			$pathname = APPPATH.'uploads/';
			$pathname .= $this->input->post('delpath');
			var_dump($pathname);
			if(is_dir($pathname))
			{
				rmdir($pathname) ? $data['deletion'] = TRUE : NULL;
				$this->files($data);
			}
			else 
			{
				die('not a directory...');
			}
		}
		else
		{
			print_r('inter here');
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	// static functions
	
	private function header($title = NULL, $localjs = "event.js")
	{
		$data['title'] = $title;
		$data['localjs'] = $localjs;
		$this->load->view('vfront/header', $data);
	}
	
	private function footer($data = NULL)
	{
		$this->load->view('vfront/footer',$data);
	}
	
	
	
	
}
