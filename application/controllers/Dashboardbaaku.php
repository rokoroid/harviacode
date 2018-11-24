<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardbaaku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$userSession = $this->session->userdata('baaku');
        if ($userSession['bagian'] != "staff"){
            redirect('Login');
        }
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboardbaaku');
		$this->load->view('template/footer');
	}

}

/* End of file Dashboardbaaku.php */
/* Location: ./application/controllers/Dashboardbaaku.php */