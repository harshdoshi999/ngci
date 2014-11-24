<?php

class user_model extends CI_Model {

	/** Defining parent constructor */
	function __consruct() {
		parent::__consruct();
	}

	function validateLogin($dataArray) {
		
		/** Check if user exists or not */
		$email = $dataArray['email']; 
		$query = $this->db->get_where('users',array("email" => $email));
		if($query->num_rows() == 0) {
			return array("code"=>404);
		} else {
			$query = $this->db->get_where('users',$dataArray);
			if($query->num_rows()==1) {
				$row = $query->first_row();

//				/** Update the token */
//				$token=crypt(round(microtime(true) * 1000)."","agile");
//				$this->db->where('email', $username);
//				$this->db->update('auth_user', array("token"=>$token));
				
				/** Return new token */
				return array("code"=>200);
			} else {
				return array("code"=>401);
			}
		}
			
	}
}