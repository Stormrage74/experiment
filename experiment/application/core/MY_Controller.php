s<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data = array();
	protected $javascript = array();
	protected $css = array();
	protected $directory_name;
	protected $controller_name;
	protected $action_name;
	protected $title = "RREGO";
	protected $sousTitre = "";
	protected $template = "template";
	protected $header_view = "header";
	protected $footer_view = "footer";
	protected $menu_view = "menu";
	protected $menu = true;
	
	protected $baseUrl;
	protected $utilisateur;
	
	protected $currLang;
	
	
	public function __construct($auth = true, $lang = true) {
		parent::__construct();
		
		$this->directory_name = $this->router->fetch_directory();
        $this->controller_name = $this->router->fetch_class();
        $this->action_name = $this->router->fetch_method();
        $this->baseUrl = base_url() . $this->lang->lang() . '/';
        $this->load->helper(array('cms'));
        $this->lang->load('base');
        $this->lang->load('error');
        
        if ($lang) {
        	$this->lang->load($this->controller_name);
        }
        
        if ($auth) {
        	$this->utilisateur = $this->authentification();
        }
        
        $this->currLang = $this->lang->lang();
	}
	
	protected function authentification() {
		
		if (!$this->userIsSet()) {
			$this->error401();
		}
	}
	
	protected function userIsSet() {
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			return $session_data['id'];
		} else {
			
			redirect('auth/login', 'refresh');
		}
	}
	
	protected function error401() {
		$this->error('401', 'auth necessary');
	}
	
	//not in use
	private function error($code, $msg) {
		$this->output->set_status_header($code);
		echo $msg;
		exit;
	}
	
	protected function post($key, $id = NULL){
		return ($this->input->post($key) != '') ? $this->input->post($key) :null;
	}
	
	protected function _render($view = '') {
		$data = $this->data;
	
		$data['baseurl'] = $this->baseUrl;
		$data['page'] = $this->controller_name . '/' . $this->action_name;
		$data['title'] = $this->title;
		$data['soustitre'] = $this->sousTitre;
	
		$data['utilisateur'] = $this->utilisateur;
	
		$data["javascript"] = $this->javascript;
		$data["css"] = $this->css;
	
		$data["header"] = $this->load->view("layout/" . $this->header_view, $data, true);
		if ($this->menu) {
			$data["menu"] = $this->load->view("layout/" . $this->menu_view, $data, true);
		}
		$data["footer"] = $this->load->view("layout/" . $this->footer_view, $data, true);
		$data["content_body"] = $this->load->view($this->getViewName($view), $data, true);
		$this->load->view("layout/template", $data);
	}
	
	
	
	// for json call
	protected function _json($auth = false) {
		if (!$auth){
			unset($this->data['utilisateur']);
		}
		echo json_encode($this->data);
	}
	
	// for ajax call
	protected function _ajax($view = '') {
		$data["javascript"] = $this->javascript;
		$data["css"] = $this->css;
		$this->load->view($this->getViewName($view), $this->data);
	}
	
	//not in use -- display things
	protected function _file($binData, $mimeType, $fileName = null){
		$content = $this->fromBinary($binData);
		if ($fileName){
			Header('Content-Disposition: inline; filename="' . $fileName . '"');
		}
		Header( "Content-type: application/" . $mimeType);
		echo $content;
	}
	
	private function getViewName($view) {
		return $view ? $view : $this->controller_name . '/' . $this->action_name;
	}
	
	
}