<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_Model extends CI_Model {
	
	public $username;
	public $password;
	public $name;
	public $id;
	
	
	public function __construct() {
		parent::__construct();
	}
	
	public function getCredential() {
		
		$utilisateur = new Utilisateur_Model();
		$path = base_url() . "assets/etc/private/words.xml";
		$this->getContentFromXML($path);
		
		

		
	}
	
	private function getContentFromXML($path) {
		
		$xml = simplexml_load_file($path);
		echo $xml->user[0]->username;
	}

}