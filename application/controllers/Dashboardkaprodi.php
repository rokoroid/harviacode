<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardkaprodi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$userSession = $this->session->userdata('kaprodi');
        if ($userSession['bagian'] != "kaprodi"){
            redirect('Login');
        }
	}

	public function index()
	{
		$this->load->view('template/header3');
		$this->load->view('template/sidebar3');
		$this->load->view('dashboardkaprodi');
		$this->load->view('template/footer');
	}

}

/* End of file Dashboardkaprodi.php */
/* Location: ./application/controllers/Dashboardkaprodi.php */