<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function index()
	{
		
	}

	public function faskes()
	{
		$this->load->view('_partials/header');
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes');
		$this->load->view('_partials/footer');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */