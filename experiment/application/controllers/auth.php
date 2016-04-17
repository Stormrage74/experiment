<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Auth extends MY_Controller {
	
	
	function __construct() {
		parent::__construct(false);
		$this->menu = false;
		$this->css[] = 'main.css';
	}
	
	public function login ($msg = null) {
		$this->sousTitre = lang('identification');
		$this->_render();
	}
	
	
	public function forgot() {
		$this->_render();
	}
	
	public function verify() {
		
	
		if ($this->post('input_login') && $this->post('input_password')) {
			$d_pass = $this->post('input_password');
			$d_login = $this->post('input_login');
			
// 			$utilisateur->checkUser($d_login, $d_pass)
			
			$sha1 = sha1($d_pass);
			$utilisateur = new Utilisateur_Model();
			$sess_array = array(
					'id' => $utilisateur->id,
					'login' => $utilisateur->username,
					'log_in' => $utilisateur->log_in
			);
			$this->session->set_userdata($sess_array);
 			redirect('front/index', 'refresh');
	}
			
// 			$this->data['logout'] = "Login ou mot de passe incorrect";
			//$this->_render('auth/login');
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
		
// // 			$result = $utilisateur->login($this->input->post('login'), $this->input->post('password'));
// // 			if ($result) {
// 				$sess_array = array(
// 						'id' => $utilisateur->id,
// 						'login' => $utilisateur->login,
// 						'expiration' => $utilisateur->expiration
// 				);
// 				$this->session->set_userdata('logged_in', $sess_array);
// 				redirect('bordereau/index', 'refresh');
// // 			}
// 		}
// 		$this->logout("Login ou mot de passe incorrect");
	}
}