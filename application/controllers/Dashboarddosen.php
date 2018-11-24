<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboarddosen extends CI_Controller {

	var $id_dosen;

	public function __construct()
	{
		parent::__construct();
		$userSession = $this->session->userdata('dosen');
        if ($userSession['bagian'] != "dosen"){
            redirect('Login');
        }

        $this->id_dosen = $userSession['id'];
	}

	public function index()
	{
		$id_dosen = $this->id_dosen;

		$this->load->view('template/header2');
		$this->load->view('template/sidebar2');
		$this->load->view('dashboarddosen');
		$this->load->view('template/footer');
	}
}

/* End of file Dashboarddosen.php */
/* Location: ./application/controllers/Dashboarddosen.php */