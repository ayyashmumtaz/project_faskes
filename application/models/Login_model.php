<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

		function cek_login($data){		
		$query = $this->db->get_where('users', $data);
	return $query;
	}	
	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */