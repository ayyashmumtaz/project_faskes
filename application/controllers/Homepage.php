<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller {
  public function index() {
    $data['title'] = 'SIFASKES';
    $this->load->view('frontend/layout/header', $data);
    $this->load->view('frontend/homepage/index', $data);
    $this->load->view('frontend/layout/footer');
  }
}