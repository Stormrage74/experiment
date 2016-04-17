<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends MY_Controller {
	
	
	function __construct() {
		parent::__construct(false);
		$this->menu = false;
	}
	
	public function login ($msg = null) {
		$this->sousTitre = lang('identification');
		$this->_render();
	}
	
	
	public function forgot() {
		$this->_render();
	}
	
	public function verify() {
		
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));
		
		$data = $_POST;
		print_r("hello w ! ");
		var_dump($data);
// 		var_dump($this->input->post('login'));
// 		$utilisateur = new Utilisateur_Model();
// 		$utilisateur->username = $this->post('login');
// 		$utilisateur->password = $this->post('password');
// 		var_dump($utilisateur);

// 		$chars = "test22";
// 		var_dump(sha1($chars));
		
		
// 		$this->form_validation->set_rules('login', 'Identifiant', 'trim|required|xss_clean');
// 		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|xss_clean|callback_check_database');
		
// 		if ($this->form_validation->run()) {
// 			$utilisateur = new Utilisateur_Model();
		
// 			$result = $utilisateur->login($this->input->post('login'), $this->input->post('password'));
// 			if ($result) {
// 				$sess_array = array(
// 						'id' => $utilisateur->id,
// 						'login' => $utilisateur->login,
// 						'expiration' => $utilisateur->expiration
// 				);
// 				$this->session->set_userdata('logged_in', $sess_array);
// 				redirect('bordereau/index', 'refresh');
// 			}
// 		}
// 		$this->logout("Login ou mot de passe incorrect");
	}
}