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
	
	public function login($login, $pass) {
		$valid = false;
		$value = array();
			$data = $this->openStream();
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
	
	protected function sha1Control() {
		
	}
	
	
	protected function openStream() {
		if ($this->_openConnection()) {
		return $this->_getTablesUser();
		}
	}
	
	
	
	public function selectById($int)
	{
		$value = array();
		$data = $this->openStream();
		foreach ($data as $value)
		{
			if ($value['id'] == $int)
			{
				return true;
				break;
			}
			else
			{
				return false;
			}
		}
	}

}