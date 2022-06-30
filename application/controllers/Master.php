<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Faskes_model');
		$this->load->model('Kecamatan_model');
		$this->load->model('Jenis_faskes_model');
		$this->load->model('Komentar_model');
		$this->load->model('Users_model');
	}

	public function index()
	{
	}

	public function faskes()
	{
		$data['title'] = 'Data Faskes';


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
		$data['kecamatan'] = $this->Faskes_model->getKecamatan();
		$data['jenis_faskes'] = $this->Faskes_model->getJenisFaskes();
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_create');
		$this->load->view('_partials/footer');
	}

	// READ
	public function faskes_detail()
	{
		$data['title'] = 'Faskes Detail';

		$id = $this->input->get('id');
		$data['faskes'] = $this->Faskes_model->findFaskesById($id);

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/faskes_detail', $data);
		$this->load->view('_partials/footer');
	}
		
	public function kecamatan()
	{
		$data['title'] = 'Data Kecamatan';


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

	public function kecamatan_delete()
	{

		$id = $this->input->get('id');
		$this->Kecamatan_model->deleteKecamatan($id);
		redirect(base_url() . 'master/kecamatan', 'refresh');
	}

	public function jenis_faskes()
	{
		$data['title'] = 'Data Jenis Faskes';


		$data['dataJenisFaskes'] = $this->Jenis_faskes_model->getAllDataJenisFaskes();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/jenis_faskes', $data);
		$this->load->view('_partials/footer');
	}

	public function users()
	{
		$data['title'] = 'Data Users';


		$data['dataUsers'] = $this->Users_model->getAllDataUsers();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/users', $data);
		$this->load->view('_partials/footer');
	}

	public function komentar()
	{
		$data['title'] = 'Data Komentar';


		$data['dataKomentar'] = $this->Komentar_model->getAllDataKomentar();

		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/komentar', $data);
		$this->load->view('_partials/footer');
	}
}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */