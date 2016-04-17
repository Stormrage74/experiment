<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	
	var $base;
	
	//TODO: Meilleur appel du controller parent a chercher
	protected function _openConnection() {
		if ($this->_connect()) {
			log_message('debug', 'connection OK');
			return true;
		}
		else
		{
			log_message('error', 'connection KO');
			return false;
		}
	}
	
	protected function _getTablesUser() {
		$master = array();
		$table = array();
		if ($this->_isDataNull()){
			
			$i = 0;
			while($this->base->user[$i] != null) {
				$table['username']= (string)$this->base->user[$i]->username;
				$table['password']= (string)$this->base->user[$i]->password;
				$table['name']= (string)$this->base->user[$i]->name;
				$table['status']= (string)$this->base->user[$i]->status;
				$table['id'] = (string)$this->base->user[$i]->id;
				array_push($master, $table);
				$i++;
			}
		
			return $master;
			
			
	}
		
	}
	
	protected function _isDataNull(){
		if (!$this->base) {
			return false;
		}
		else {
			return true;
		}
	}
	
	protected function _chargeXml($path) {
		return simplexml_load_file($path);
	}
	
	protected function _configBaseXml() {
		$path = base_arb() . PRIVATE_DIR . "words.xml";
		$result = array( "path" => $path );
		return $result;
	}
	
	protected function _connect($config = null) {
		$status = false;
		try {
			if (!$config){
				$config = $this->_configBaseXml();
			}
			$path = $config['path'];
			$xml = $this->_chargeXml($path);
			
			$this->base = $xml;
			$status = true;
		}
		catch (Exception $e)
		{
			log_message('error', 'error with '.$e);
		}
		return $status;
	}
	
}