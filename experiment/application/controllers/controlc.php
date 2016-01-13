<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class controlc extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('front/subscribe');
	}
	
	
	public function verify()
	{
		//user identifiants
		$user_login = "";
		$user_psw = "";
		
		//user info
		$user_name = "";
		$user_name2 = "";
		$user_mail = "";
		
		
		if(isset($_POST))
		{
			
			$user_login = $_POST['iuser_login'];
			$user_psw = $_POST['iuser_psw'];
			
			$user_name = $_POST['iuser_name'];
			$user_name2 = $_POST['iuser_name2'];
			$user_mail = $_POST['iuser_mail'];
			
			
// 			foreach ($_POST as $key => $value)
// 			{
// 				echo "POST parameter are '$key' has '$value'";
// 			}	
		}
		else 
		{
			$this->load->view('front/subscribe');	
		}
		
		
		
		
		
		
		
		
	}
	
	

}








