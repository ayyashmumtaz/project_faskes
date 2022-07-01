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

	// CREATE SAVE
	public function faskes_save()
	{
		
		// $id = uniqid();
		$nama_faskes = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kecamatan = $this->input->post('kecamatan_id');
		$latlong = $this->input->post('latlong');
		$deskripsi = $this->input->post('deskripsi');
		$rating = $this->input->post('skor_rating');
		$website = $this->input->post('website');
		$jumlah_dokter = $this->input->post('jumlah_dokter');
		$jumlah_pegagwai = $this->input->post('jumlah_pegawai');
		$jenis_faskes = $this->input->post('jenis_faskes_id');

		$data = array(
			// 'id'					=> $id,
			'nama'				=> $nama_faskes,
			'alamat'				=> $alamat,
			'kecamatan_id'		=> $kecamatan,
			'latlong'			=> $latlong,
			'deskripsi'			=> $deskripsi,
			'skor_rating'		=> $rating,
			'website'			=> $website,
			'jumlah_dokter'	=> $jumlah_dokter,
			'jumlah_pegawai'	=> $jumlah_pegagwai,
			'jenis_id'			=> $jenis_faskes
		);

		$this->Faskes_model->input_data($data, 'faskes');
		$this->session->set_flashdata('input-data', ' ');
		redirect(base_url() . 'master/faskes');
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

	// DELETE
	public function faskes_delete()
	{
		$id = $this->input->get('id');
		$this->Faskes_model->deleteFaskes($id);
		redirect(base_url() . 'master/faskes', 'refresh');
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

	// CREATE
	public function jenis_faskes_create()
	{
		$data['title'] = 'Tambah Jenis Faskes';
		
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master/jenis_faskes_create', $data);
		$this->load->view('_partials/footer');
	}

	// CREATE SAVE
	public function jenis_faskes_save()
	{
		$nama_faskes = $this->input->post('nama_faskes');
		$data = array (
			'nama_faskes' => $nama_faskes
		);

		$this->Jenis_faskes_model->input_data($data, 'jenis_faskes');
		redirect(base_url() . 'master/jenis_faskes?id=' . $nama_faskes, 'refresh');
	}

	// DELETE
	public function jenis_faskes_delete()
	{
		$id_faskes = $this->input->get('id_faskes');
		$this->Jenis_faskes_model->deleteJenisFaskes($id_faskes);
		redirect(base_url() . 'master/jenis_faskes', 'refresh');
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