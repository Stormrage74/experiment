<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	
	var $data = array();
	
	//TODO: Meilleur appel du controller parent a chercher
	protected function openConnection() {
		if (MY_Config::connect()) {
			log_message('debug', 'connection OK');
			$data = MY_Config::base;
		}
		else
		{
			log_message('error', 'connection KO');
		}
	}
	
	protected function getTables() {
		
		if (isDataNull()){
			var_dump($data->userList);
		}
	
	}
	
	protected function isDataNull(){
		if (!$data) {
			return false;
		}
		else {
			return true;
		}
	}
	
	
}