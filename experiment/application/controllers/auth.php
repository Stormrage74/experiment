<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends MY_Controller {
	
	
	function __construct() {
		parent::__construct(false);
		$this->menu = false;
	}
	
	public function login ($msg = null) {
		$this->sousTitre = lang('identification');
		$this->_render();
	}
	
	
	public function forgot() {
		$this->_render();
	}
	
	public function verify() {
		$utilisateur = new Utilisateur_Model();
		$utilisateur->getCredential();
	}
}