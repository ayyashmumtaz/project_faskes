<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $status = $this->session->userdata('role');
  //   	if(!isset($status)){
  //     redirect(base_url("Login"));
  //   }
	}

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('beranda');
		$this->load->view('_partials/footer');
	}

	

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */