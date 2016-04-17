<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_Model extends MY_Model {
	
	public $username;
	public $password;
	public $name;
	public $id;
	
	public function __construct() {
		parent::__construct();
	}
	
	private function t_user($username, $path, Utilisateur_Model $utilisateur) {
	
		
	}
	


}