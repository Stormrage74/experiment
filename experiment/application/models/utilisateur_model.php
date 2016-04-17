<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_Model extends MY_Model {
	
	public $username;
	public $password;
	public $name;
	public $id;
	public $log_in = false;
	
	public function __construct() {
		parent::__construct();
		
		
	}
	
	public function checkUser($login, $pass) {
		$valid = false;
		$value = array();
		if ($this->_openConnection()) {
			$data = $this->_getTablesUser();
			foreach ($data as $value)
			{
				if ($value['username'] == $login && $value['password'] == $pass)
				{
					$valid = true;
					$this->log_in = ($value['status'] == 'on') ? true : false;
 					$this->username = $value['username'];
					$this->id = $value['id'];
					break;
				}
				else 
				{
					$valid = false;
				}
			}
			return $valid;
		}
		else {
		}
	}
	
	protected function sha1Control() {
		
	}

}