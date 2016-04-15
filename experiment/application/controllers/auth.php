<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends MY_Controller {
	
	
	function __construct() {
		parent::__construct(false);
	}
	
	public function login ($msg = null) {
		$this->menu = false;
		$this->sousTitre = lang('identification');
		$this->_render();
	}
}