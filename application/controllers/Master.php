<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function faskes()
	{
		$data['title'] = 'Data Faskes';

		$this->load->model('Faskes_model');
		$data['dataFaskes'] = $this->Faskes_model->getAllDataFaskes();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes', $data);
		$this->load->view('_partials/footer');
	}

	public function kecamatan()
	{
		$data['title'] = 'Data Kecamatan';

		$this->load->model('Kecamatan_model');
		$data['dataKecamatan'] = $this->Kecamatan_model->getAllDataKecamatan();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/kecamatan', $data);
		$this->load->view('_partials/footer');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */