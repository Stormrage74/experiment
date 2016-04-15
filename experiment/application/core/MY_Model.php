<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
	
	protected function chargeXml($path) {
		return simplexml_load_file($path);
	}
	
	
}