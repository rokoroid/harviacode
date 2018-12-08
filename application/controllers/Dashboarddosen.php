<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboarddosen extends CI_Controller {

	var $id_dosen;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_result');

		$userSession = $this->session->userdata('dosen');
        if ($userSession['bagian'] != "dosen"){
            redirect('Login');
        }

        $this->id_dosen = $userSession['id'];
	}

	public function index()
	{
		$id_dosen = $this->id_dosen;

		$dosen_senin_tujuh = $this->M_result->dosen_senin_tujuh($id_dosen);
		$dosen_senin_sembilan = $this->M_result->dosen_senin_sembilan($id_dosen);
		$dosen_senin_sebelas = $this->M_result->dosen_senin_sebelas($id_dosen);
		$dosen_senin_tigabelas = $this->M_result->dosen_senin_tigabelas($id_dosen);
		$dosen_senin_limabelas = $this->M_result->dosen_senin_limabelas($id_dosen);
		$dosen_senin_tujuhbelas = $this->M_result->dosen_senin_tujuhbelas($id_dosen);
		$dosen_senin_sembilanbelas = $this->M_result->dosen_senin_sembilanbelas($id_dosen);

		$dosen_selasa_tujuh = $this->M_result->dosen_selasa_tujuh($id_dosen);
		$dosen_selasa_sembilan = $this->M_result->dosen_selasa_sembilan($id_dosen);
		$dosen_selasa_sebelas = $this->M_result->dosen_selasa_sebelas($id_dosen);
		$dosen_selasa_tigabelas = $this->M_result->dosen_selasa_tigabelas($id_dosen);
		$dosen_selasa_limabelas = $this->M_result->dosen_selasa_limabelas($id_dosen);
		$dosen_selasa_tujuhbelas = $this->M_result->dosen_selasa_tujuhbelas($id_dosen);
		$dosen_selasa_sembilanbelas = $this->M_result->dosen_selasa_sembilanbelas($id_dosen);

		$dosen_rabu_tujuh = $this->M_result->dosen_rabu_tujuh($id_dosen);
		$dosen_rabu_sembilan = $this->M_result->dosen_rabu_sembilan($id_dosen);
		$dosen_rabu_sebelas = $this->M_result->dosen_rabu_sebelas($id_dosen);
		$dosen_rabu_tigabelas = $this->M_result->dosen_rabu_tigabelas($id_dosen);
		$dosen_rabu_limabelas = $this->M_result->dosen_rabu_limabelas($id_dosen);
		$dosen_rabu_tujuhbelas = $this->M_result->dosen_rabu_tujuhbelas($id_dosen);
		$dosen_rabu_sembilanbelas = $this->M_result->dosen_rabu_sembilanbelas($id_dosen);

		$dosen_kamis_tujuh = $this->M_result->dosen_kamis_tujuh($id_dosen);
		$dosen_kamis_sembilan = $this->M_result->dosen_kamis_sembilan($id_dosen);
		$dosen_kamis_sebelas = $this->M_result->dosen_kamis_sebelas($id_dosen);
		$dosen_kamis_tigabelas = $this->M_result->dosen_kamis_tigabelas($id_dosen);
		$dosen_kamis_limabelas = $this->M_result->dosen_kamis_limabelas($id_dosen);
		$dosen_kamis_tujuhbelas = $this->M_result->dosen_kamis_tujuhbelas($id_dosen);
		$dosen_kamis_sembilanbelas = $this->M_result->dosen_kamis_sembilanbelas($id_dosen);

		$dosen_jumat_tujuh = $this->M_result->dosen_jumat_tujuh($id_dosen);
		$dosen_jumat_sembilan = $this->M_result->dosen_jumat_sembilan($id_dosen);
		$dosen_jumat_sebelas = $this->M_result->dosen_jumat_sebelas($id_dosen);
		$dosen_jumat_tigabelas = $this->M_result->dosen_jumat_tigabelas($id_dosen);
		$dosen_jumat_limabelas = $this->M_result->dosen_jumat_limabelas($id_dosen);
		$dosen_jumat_tujuhbelas = $this->M_result->dosen_jumat_tujuhbelas($id_dosen);
		$dosen_jumat_sembilanbelas = $this->M_result->dosen_jumat_sembilanbelas($id_dosen);

		$dosen_sabtu_tujuh = $this->M_result->dosen_sabtu_tujuh($id_dosen);
		$dosen_sabtu_sembilan = $this->M_result->dosen_sabtu_sembilan($id_dosen);
		$dosen_sabtu_sebelas = $this->M_result->dosen_sabtu_sebelas($id_dosen);
		$dosen_sabtu_tigabelas = $this->M_result->dosen_sabtu_tigabelas($id_dosen);
		$dosen_sabtu_limabelas = $this->M_result->dosen_sabtu_limabelas($id_dosen);
		$dosen_sabtu_tujuhbelas = $this->M_result->dosen_sabtu_tujuhbelas($id_dosen);
		$dosen_sabtu_sembilanbelas = $this->M_result->dosen_sabtu_sembilanbelas($id_dosen);

		$data = array(
			'model_obj' => $this->M_result, 
			'dosen_senin_tujuh' => $dosen_senin_tujuh,
			'dosen_senin_sembilan' => $dosen_senin_sembilan,
			'dosen_senin_sebelas' => $dosen_senin_sebelas,
			'dosen_senin_tigabelas' => $dosen_senin_tigabelas,
			'dosen_senin_limabelas' => $dosen_senin_limabelas,
			'dosen_senin_tujuhbelas' => $dosen_senin_tujuhbelas,
			'dosen_senin_sembilanbelas' => $dosen_senin_sembilanbelas,
			'dosen_selasa_tujuh' => $dosen_selasa_tujuh,
			'dosen_selasa_sembilan' => $dosen_selasa_sembilan,
			'dosen_selasa_sebelas' => $dosen_selasa_sebelas,
			'dosen_selasa_tigabelas' => $dosen_selasa_tigabelas,
			'dosen_selasa_limabelas' => $dosen_selasa_limabelas,
			'dosen_selasa_tujuhbelas' => $dosen_selasa_tujuhbelas,
			'dosen_selasa_sembilanbelas' => $dosen_selasa_sembilanbelas,
			'dosen_rabu_tujuh' => $dosen_rabu_tujuh,
			'dosen_rabu_sembilan' => $dosen_rabu_sembilan,
			'dosen_rabu_sebelas' => $dosen_rabu_sebelas,
			'dosen_rabu_tigabelas' => $dosen_rabu_tigabelas,
			'dosen_rabu_limabelas' => $dosen_rabu_limabelas,
			'dosen_rabu_tujuhbelas' => $dosen_rabu_tujuhbelas,
			'dosen_rabu_sembilanbelas' => $dosen_rabu_sembilanbelas,
			'dosen_kamis_tujuh' => $dosen_kamis_tujuh,
			'dosen_kamis_sembilan' => $dosen_kamis_sembilan,
			'dosen_kamis_sebelas' => $dosen_kamis_sebelas,
			'dosen_kamis_tigabelas' => $dosen_kamis_tigabelas,
			'dosen_kamis_limabelas' => $dosen_kamis_limabelas,
			'dosen_kamis_tujuhbelas' => $dosen_kamis_tujuhbelas,
			'dosen_kamis_sembilanbelas' => $dosen_kamis_sembilanbelas,
			'dosen_jumat_tujuh' => $dosen_jumat_tujuh,
			'dosen_jumat_sembilan' => $dosen_jumat_sembilan,
			'dosen_jumat_sebelas' => $dosen_jumat_sebelas,
			'dosen_jumat_tigabelas' => $dosen_jumat_tigabelas,
			'dosen_jumat_limabelas' => $dosen_jumat_limabelas,
			'dosen_jumat_tujuhbelas' => $dosen_jumat_tujuhbelas,
			'dosen_jumat_sembilanbelas' => $dosen_jumat_sembilanbelas,
			'dosen_sabtu_tujuh' => $dosen_sabtu_tujuh,
			'dosen_sabtu_sembilan' => $dosen_sabtu_sembilan,
			'dosen_sabtu_sebelas' => $dosen_sabtu_sebelas,
			'dosen_sabtu_tigabelas' => $dosen_sabtu_tigabelas,
			'dosen_sabtu_limabelas' => $dosen_sabtu_limabelas,
			'dosen_sabtu_tujuhbelas' => $dosen_sabtu_tujuhbelas,
			'dosen_sabtu_sembilanbelas' => $dosen_sabtu_sembilanbelas,
			);

		$this->load->view('template/header2');
		$this->load->view('template/sidebar2');
		$this->load->view('dashboarddosen', $data);
		$this->load->view('template/footer');
	}
}

/* End of file Dashboarddosen.php */
/* Location: ./application/controllers/Dashboarddosen.php */