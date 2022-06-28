<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */