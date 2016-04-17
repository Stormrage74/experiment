<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Config extends CI_Config {

	var $base = array();
	
	function site_url($uri = '', $protocol = NULL)
	{
		if (is_array($uri))
		{
			$uri = implode('/', $uri);
		}

		if (function_exists('get_instance'))
		{
			$CI =& get_instance();
			$uri = $CI->lang->localized($uri);
		}

		return parent::site_url($uri);
	}
	
	protected function chargeXml($path) {
		return simplexml_load_file($path);
	}
	
	protected function configBaseXml() {
		$path = base_url() . PRIVATE_DIR . "words.xml";
		$result = array( "path" => $path );
		return $result;
	}
	
	protected function connect($config = null) {
		$status = false;
		try {
			if (!$config){
				$config = $this->configBaseXml();
			}
			$path = $config->path;
			$xml = $this->chargeXml($path);
				
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