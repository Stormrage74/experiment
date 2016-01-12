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
		foreach ($_POST as $key => $value)
		{
			echo "POST parameter are '$key' has '$value'";
		}
	}
	
	

}








