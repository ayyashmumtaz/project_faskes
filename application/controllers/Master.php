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

	// CREATE 
	public function faskes_create()
	{
		$data['title'] = 'Form Faskes';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_create');
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

	public function kecamatan_create()
	{
		$data['title'] = 'Form Kecamatan';

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/kecamatan_create');
		$this->load->view('_partials/footer');
	}

	public function jenis_faskes()
	{
		$data['title'] = 'Data Jenis Faskes';

		$this->load->model('Jenis_faskes_model');
		$data['dataJenisFaskes'] = $this->Jenis_faskes_model->getAllDataJenisFaskes();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/jenis_faskes', $data);
		$this->load->view('_partials/footer');
	}

	public function users()
	{
		$data['title'] = 'Data Users';

		$this->load->model('Users_model');
		$data['dataUsers'] = $this->Users_model->getAllDataUsers();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/users', $data);
		$this->load->view('_partials/footer');
	}

	public function komentar()
	{
		$data['title'] = 'Data Komentar';

		$this->load->model('Komentar_model');
		$data['dataKomentar'] = $this->Komentar_model->getAllDataKomentar();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/komentar', $data);
		$this->load->view('_partials/footer');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */