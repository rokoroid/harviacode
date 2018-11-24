<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesanggupan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
		$this->load->model('M_prodi');
		$this->load->model('M_semester');

		$userSession = $this->session->userdata('dosen');
        if ($userSession['bagian'] != "dosen"){
            redirect('Login');
        }
	}

	public function index()
	{
		$dosen = $this->M_dosen->getalldosen();
		$prodi = $this->M_prodi->getallprodi();
		$semester = $this->M_semester->getallsemester();
		$data = array(
            'button' => 'Tambah',
            'action' => site_url('dosen/create_action'),
	    'id_dosen' => set_value('id_dosen'),
	    'id_prodi' => set_value('id_prodi'),
	    'id_semester' => set_value('id_semester'),
	    'dataDosen' => $dosen,
        'dataProdi' => $prodi,
        'dataSemester' => $semester,
	);
		$this->load->view('template/header2');
		$this->load->view('template/sidebar2');
		$this->load->view('kesanggupan/form_kesanggupan', $data);
		$this->load->view('template/footer');
	}

}

/* End of file Kesanggupan.php */
/* Location: ./application/controllers/Kesanggupan.php */