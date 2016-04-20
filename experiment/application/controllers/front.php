<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class front extends MY_Controller {
	
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
// 		print_r('hello');
// 		var_dump($this->session->userdata('logged'));
		$this->_render();
	}
	
}