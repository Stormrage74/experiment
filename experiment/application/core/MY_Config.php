<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Config extends CI_Config {

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

}