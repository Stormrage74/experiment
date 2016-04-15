<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_Model extends MY_Model {
	
	public $username;
	public $password;
	public $name;
	public $id;
	private $file = "words.xml";
	
	public function __construct() {
		parent::__construct();
	}
	
	public function getCredential() {
		
		$utilisateur = new Utilisateur_Model();
		$path = base_url() . PRIVATE_DIR . $this->file;
		$this->getUserByUsername($this->username, $path, $utilisateur);
	}
	
	private function getUserByUsername($username, $path, Utilisateur_Model $utilisateur) {
		$xml = $this->chargeXml($path);
		
		$utilisateur->username = $xml->user[0]->username;
		$utilisateur->password = $xml->user[0]->password;
		$utilisateur->name = $xml->user[0]->name;
	}
	


}