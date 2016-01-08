<?php  // if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_utilisateur extends CI_Model
{
	
	var $login = "";
	var $password = "";
	var $firstname = "";
	var $lastname = "";
	var $email = "";
	var $id = "";
	
	
	function __construct( $mLogin = "", $mPswd = "")
	{
		parent::__construct();
		$this->login = $mLogin;
		$this->password = $mPswd;
	}
	
	
	
	
	function login($login, $pswd)
	{
		$requete = " Select";
				$requete .= " user_id, user_firstname, user_lastname, user_email";
		$requete .= " from  f_user";
		$requete .= " where";
		$requete .= " user_login = ".$this->db->escape($login)." and user_pswd = ".$this->db->escape($pswd)." ; ";
		$requete .= " ;";
		
		$result = TRUE;
		
		try 
		{
			$query = $this->db->query($requete);
			if (!$query) 
			{
				throw new Exception();
			}
			else
			{
			
				
				if ($query->num_rows() == 1) 
				{
					$result = TRUE;
					
					$row = $query->row();
					$this->firstname = $row->user_firstname;
					$this->lastname = $row->user_lastname;
					$this->email = $row->user_email;
					$this->id = $row->user_id;
				}
				else 
				{
					$result = FALSE;
				}
			}
		} 
		catch (Exception $e) 
		{
			log_message('error', 'show user info' . $e->getMessage());
			$result = FALSE;
		}
		
		return $result;
				
	}
	
	
	
	
	
	
	
	
	
	
	
}






?>