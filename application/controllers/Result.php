<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_result');
		$this->load->model('M_kelas');
		$this->load->model('M_dosen');
		$this->load->model('M_ruangan');
		$this->load->model('M_gedung');
		$this->load->library('dompdf_gen');

		// $userSession = $this->session->userdata('baaku');
  //       if ($userSession['bagian'] != "staff"){
  //           redirect('Login');
  //       }

	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('result/result');
		$this->load->view('template/footer');
	}

	public function hasil_kelas()
	{
		$kelas = $this->M_kelas->getallkelas();
		// $kelas_senin_tujuh = $this->M_result->kelas_senin_tujuh(1);
		// $kelas_senin_sembilan = $this->M_result->kelas_senin_sembilan(1);
		// $kelas_senin_sebelas = $this->M_result->kelas_senin_sebelas(1);
		// $kelas_senin_tigabelas = $this->M_result->kelas_senin_tigabelas(1);
		// $kelas_senin_limabelas = $this->M_result->kelas_senin_limabelas(1);
		// $kelas_senin_tujuhbelas = $this->M_result->kelas_senin_tujuhbelas(1);
		// $kelas_senin_sembilanbelas = $this->M_result->kelas_senin_sembilanbelas(1);

		// $kelas_selasa_tujuh = $this->M_result->kelas_selasa_tujuh(1);
		// $kelas_selasa_sembilan = $this->M_result->kelas_selasa_sembilan(1);
		// $kelas_selasa_sebelas = $this->M_result->kelas_selasa_sebelas(1);
		// $kelas_selasa_tigabelas = $this->M_result->kelas_selasa_tigabelas(1);
		// $kelas_selasa_limabelas = $this->M_result->kelas_selasa_limabelas(1);
		// $kelas_selasa_tujuhbelas = $this->M_result->kelas_selasa_tujuhbelas(1);
		// $kelas_selasa_sembilanbelas = $this->M_result->kelas_selasa_sembilanbelas(1);

		// $kelas_rabu_tujuh = $this->M_result->kelas_rabu_tujuh(1);
		// $kelas_rabu_sembilan = $this->M_result->kelas_rabu_sembilan(1);
		// $kelas_rabu_sebelas = $this->M_result->kelas_rabu_sebelas(1);
		// $kelas_rabu_tigabelas = $this->M_result->kelas_rabu_tigabelas(1);
		// $kelas_rabu_limabelas = $this->M_result->kelas_rabu_limabelas(1);
		// $kelas_rabu_tujuhbelas = $this->M_result->kelas_rabu_tujuhbelas(1);
		// $kelas_rabu_sembilanbelas = $this->M_result->kelas_rabu_sembilanbelas(1);

		// $kelas_kamis_tujuh = $this->M_result->kelas_kamis_tujuh(1);
		// $kelas_kamis_sembilan = $this->M_result->kelas_kamis_sembilan(1);
		// $kelas_kamis_sebelas = $this->M_result->kelas_kamis_sebelas(1);
		// $kelas_kamis_tigabelas = $this->M_result->kelas_kamis_tigabelas(1);
		// $kelas_kamis_limabelas = $this->M_result->kelas_kamis_limabelas(1);
		// $kelas_kamis_tujuhbelas = $this->M_result->kelas_kamis_tujuhbelas(1);
		// $kelas_kamis_sembilanbelas = $this->M_result->kelas_kamis_sembilanbelas(1);

		// $kelas_jumat_tujuh = $this->M_result->kelas_jumat_tujuh(1);
		// $kelas_jumat_sembilan = $this->M_result->kelas_jumat_sembilan(1);
		// $kelas_jumat_sebelas = $this->M_result->kelas_jumat_sebelas(1);
		// $kelas_jumat_tigabelas = $this->M_result->kelas_jumat_tigabelas(1);
		// $kelas_jumat_limabelas = $this->M_result->kelas_jumat_limabelas(1);
		// $kelas_jumat_tujuhbelas = $this->M_result->kelas_jumat_tujuhbelas(1);
		// $kelas_jumat_sembilanbelas = $this->M_result->kelas_jumat_sembilanbelas(1);

		// $kelas_sabtu_tujuh = $this->M_result->kelas_sabtu_tujuh(1);
		// $kelas_sabtu_sembilan = $this->M_result->kelas_sabtu_sembilan(1);
		// $kelas_sabtu_sebelas = $this->M_result->kelas_sabtu_sebelas(1);
		// $kelas_sabtu_tigabelas = $this->M_result->kelas_sabtu_tigabelas(1);
		// $kelas_sabtu_limabelas = $this->M_result->kelas_sabtu_limabelas(1);
		// $kelas_sabtu_tujuhbelas = $this->M_result->kelas_sabtu_tujuhbelas(1);
		// $kelas_sabtu_sembilanbelas = $this->M_result->kelas_sabtu_sembilanbelas(1);


		$data = array(
			'dataKelas' => $kelas, 
			'model_obj' => $this->M_result,
			// 'kelas_senin_tujuh' => $kelas_senin_tujuh,
			// 'kelas_senin_sembilan' => $kelas_senin_sembilan,
			// 'kelas_senin_sebelas' => $kelas_senin_sebelas,
			// 'kelas_senin_tigabelas' => $kelas_senin_tigabelas,
			// 'kelas_senin_limabelas' => $kelas_senin_limabelas,
			// 'kelas_senin_tujuhbelas' => $kelas_senin_tujuhbelas,
			// 'kelas_senin_sembilanbelas' => $kelas_senin_sembilanbelas,
			// 'kelas_selasa_tujuh' => $kelas_selasa_tujuh,
			// 'kelas_selasa_sembilan' => $kelas_selasa_sembilan,
			// 'kelas_selasa_sebelas' => $kelas_selasa_sebelas,
			// 'kelas_selasa_tigabelas' => $kelas_selasa_tigabelas,
			// 'kelas_selasa_limabelas' => $kelas_selasa_limabelas,
			// 'kelas_selasa_tujuhbelas' => $kelas_selasa_tujuhbelas,
			// 'kelas_selasa_sembilanbelas' => $kelas_selasa_sembilanbelas,
			// 'kelas_rabu_tujuh' => $kelas_rabu_tujuh,
			// 'kelas_rabu_sembilan' => $kelas_rabu_sembilan,
			// 'kelas_rabu_sebelas' => $kelas_rabu_sebelas,
			// 'kelas_rabu_tigabelas' => $kelas_rabu_tigabelas,
			// 'kelas_rabu_limabelas' => $kelas_rabu_limabelas,
			// 'kelas_rabu_tujuhbelas' => $kelas_rabu_tujuhbelas,
			// 'kelas_rabu_sembilanbelas' => $kelas_rabu_sembilanbelas,
			// 'kelas_kamis_tujuh' => $kelas_kamis_tujuh,
			// 'kelas_kamis_sembilan' => $kelas_kamis_sembilan,
			// 'kelas_kamis_sebelas' => $kelas_kamis_sebelas,
			// 'kelas_kamis_tigabelas' => $kelas_kamis_tigabelas,
			// 'kelas_kamis_limabelas' => $kelas_kamis_limabelas,
			// 'kelas_kamis_tujuhbelas' => $kelas_kamis_tujuhbelas,
			// 'kelas_kamis_sembilanbelas' => $kelas_kamis_sembilanbelas,
			// 'kelas_jumat_tujuh' => $kelas_jumat_tujuh,
			// 'kelas_jumat_sembilan' => $kelas_jumat_sembilan,
			// 'kelas_jumat_sebelas' => $kelas_jumat_sebelas,
			// 'kelas_jumat_tigabelas' => $kelas_jumat_tigabelas,
			// 'kelas_jumat_limabelas' => $kelas_jumat_limabelas,
			// 'kelas_jumat_tujuhbelas' => $kelas_jumat_tujuhbelas,
			// 'kelas_jumat_sembilanbelas' => $kelas_jumat_sembilanbelas,
			// 'kelas_sabtu_tujuh' => $kelas_sabtu_tujuh,
			// 'kelas_sabtu_sembilan' => $kelas_sabtu_sembilan,
			// 'kelas_sabtu_sebelas' => $kelas_sabtu_sebelas,
			// 'kelas_sabtu_tigabelas' => $kelas_sabtu_tigabelas,
			// 'kelas_sabtu_limabelas' => $kelas_sabtu_limabelas,
			// 'kelas_sabtu_tujuhbelas' => $kelas_sabtu_tujuhbelas,
			// 'kelas_sabtu_sembilanbelas' => $kelas_sabtu_sembilanbelas,
			);

		$this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('result/v_kelas', $data);
        $this->load->view('template/footer');
	}

	public function hasil_dosen()
	{
		$dosen = $this->M_dosen->getalldosen();
		// $dosen_senin_tujuh = $this->M_result->dosen_senin_tujuh(1);
		// $dosen_senin_sembilan = $this->M_result->dosen_senin_sembilan(1);
		// $dosen_senin_sebelas = $this->M_result->dosen_senin_sebelas(1);
		// $dosen_senin_tigabelas = $this->M_result->dosen_senin_tigabelas(1);
		// $dosen_senin_limabelas = $this->M_result->dosen_senin_limabelas(1);
		// $dosen_senin_tujuhbelas = $this->M_result->dosen_senin_tujuhbelas(1);
		// $dosen_senin_sembilanbelas = $this->M_result->dosen_senin_sembilanbelas(1);

		// $dosen_selasa_tujuh = $this->M_result->dosen_selasa_tujuh(1);
		// $dosen_selasa_sembilan = $this->M_result->dosen_selasa_sembilan(1);
		// $dosen_selasa_sebelas = $this->M_result->dosen_selasa_sebelas(1);
		// $dosen_selasa_tigabelas = $this->M_result->dosen_selasa_tigabelas(1);
		// $dosen_selasa_limabelas = $this->M_result->dosen_selasa_limabelas(1);
		// $dosen_selasa_tujuhbelas = $this->M_result->dosen_selasa_tujuhbelas(1);
		// $dosen_selasa_sembilanbelas = $this->M_result->dosen_selasa_sembilanbelas(1);

		// $dosen_rabu_tujuh = $this->M_result->dosen_rabu_tujuh(1);
		// $dosen_rabu_sembilan = $this->M_result->dosen_rabu_sembilan(1);
		// $dosen_rabu_sebelas = $this->M_result->dosen_rabu_sebelas(1);
		// $dosen_rabu_tigabelas = $this->M_result->dosen_rabu_tigabelas(1);
		// $dosen_rabu_limabelas = $this->M_result->dosen_rabu_limabelas(1);
		// $dosen_rabu_tujuhbelas = $this->M_result->dosen_rabu_tujuhbelas(1);
		// $dosen_rabu_sembilanbelas = $this->M_result->dosen_rabu_sembilanbelas(1);

		// $dosen_kamis_tujuh = $this->M_result->dosen_kamis_tujuh(1);
		// $dosen_kamis_sembilan = $this->M_result->dosen_kamis_sembilan(1);
		// $dosen_kamis_sebelas = $this->M_result->dosen_kamis_sebelas(1);
		// $dosen_kamis_tigabelas = $this->M_result->dosen_kamis_tigabelas(1);
		// $dosen_kamis_limabelas = $this->M_result->dosen_kamis_limabelas(1);
		// $dosen_kamis_tujuhbelas = $this->M_result->dosen_kamis_tujuhbelas(1);
		// $dosen_kamis_sembilanbelas = $this->M_result->dosen_kamis_sembilanbelas(1);

		// $dosen_jumat_tujuh = $this->M_result->dosen_jumat_tujuh(1);
		// $dosen_jumat_sembilan = $this->M_result->dosen_jumat_sembilan(1);
		// $dosen_jumat_sebelas = $this->M_result->dosen_jumat_sebelas(1);
		// $dosen_jumat_tigabelas = $this->M_result->dosen_jumat_tigabelas(1);
		// $dosen_jumat_limabelas = $this->M_result->dosen_jumat_limabelas(1);
		// $dosen_jumat_tujuhbelas = $this->M_result->dosen_jumat_tujuhbelas(1);
		// $dosen_jumat_sembilanbelas = $this->M_result->dosen_jumat_sembilanbelas(1);

		// $dosen_sabtu_tujuh = $this->M_result->dosen_sabtu_tujuh(1);
		// $dosen_sabtu_sembilan = $this->M_result->dosen_sabtu_sembilan(1);
		// $dosen_sabtu_sebelas = $this->M_result->dosen_sabtu_sebelas(1);
		// $dosen_sabtu_tigabelas = $this->M_result->dosen_sabtu_tigabelas(1);
		// $dosen_sabtu_limabelas = $this->M_result->dosen_sabtu_limabelas(1);
		// $dosen_sabtu_tujuhbelas = $this->M_result->dosen_sabtu_tujuhbelas(1);
		// $dosen_sabtu_sembilanbelas = $this->M_result->dosen_sabtu_sembilanbelas(1);


		$data = array(
			'dataDosen' => $dosen,
			'model_obj' => $this->M_result, 
			// 'dosen_senin_tujuh' => $dosen_senin_tujuh,
			// 'dosen_senin_sembilan' => $dosen_senin_sembilan,
			// 'dosen_senin_sebelas' => $dosen_senin_sebelas,
			// 'dosen_senin_tigabelas' => $dosen_senin_tigabelas,
			// 'dosen_senin_limabelas' => $dosen_senin_limabelas,
			// 'dosen_senin_tujuhbelas' => $dosen_senin_tujuhbelas,
			// 'dosen_senin_sembilanbelas' => $dosen_senin_sembilanbelas,
			// 'dosen_selasa_tujuh' => $dosen_selasa_tujuh,
			// 'dosen_selasa_sembilan' => $dosen_selasa_sembilan,
			// 'dosen_selasa_sebelas' => $dosen_selasa_sebelas,
			// 'dosen_selasa_tigabelas' => $dosen_selasa_tigabelas,
			// 'dosen_selasa_limabelas' => $dosen_selasa_limabelas,
			// 'dosen_selasa_tujuhbelas' => $dosen_selasa_tujuhbelas,
			// 'dosen_selasa_sembilanbelas' => $dosen_selasa_sembilanbelas,
			// 'dosen_rabu_tujuh' => $dosen_rabu_tujuh,
			// 'dosen_rabu_sembilan' => $dosen_rabu_sembilan,
			// 'dosen_rabu_sebelas' => $dosen_rabu_sebelas,
			// 'dosen_rabu_tigabelas' => $dosen_rabu_tigabelas,
			// 'dosen_rabu_limabelas' => $dosen_rabu_limabelas,
			// 'dosen_rabu_tujuhbelas' => $dosen_rabu_tujuhbelas,
			// 'dosen_rabu_sembilanbelas' => $dosen_rabu_sembilanbelas,
			// 'dosen_kamis_tujuh' => $dosen_kamis_tujuh,
			// 'dosen_kamis_sembilan' => $dosen_kamis_sembilan,
			// 'dosen_kamis_sebelas' => $dosen_kamis_sebelas,
			// 'dosen_kamis_tigabelas' => $dosen_kamis_tigabelas,
			// 'dosen_kamis_limabelas' => $dosen_kamis_limabelas,
			// 'dosen_kamis_tujuhbelas' => $dosen_kamis_tujuhbelas,
			// 'dosen_kamis_sembilanbelas' => $dosen_kamis_sembilanbelas,
			// 'dosen_jumat_tujuh' => $dosen_jumat_tujuh,
			// 'dosen_jumat_sembilan' => $dosen_jumat_sembilan,
			// 'dosen_jumat_sebelas' => $dosen_jumat_sebelas,
			// 'dosen_jumat_tigabelas' => $dosen_jumat_tigabelas,
			// 'dosen_jumat_limabelas' => $dosen_jumat_limabelas,
			// 'dosen_jumat_tujuhbelas' => $dosen_jumat_tujuhbelas,
			// 'dosen_jumat_sembilanbelas' => $dosen_jumat_sembilanbelas,
			// 'dosen_sabtu_tujuh' => $dosen_sabtu_tujuh,
			// 'dosen_sabtu_sembilan' => $dosen_sabtu_sembilan,
			// 'dosen_sabtu_sebelas' => $dosen_sabtu_sebelas,
			// 'dosen_sabtu_tigabelas' => $dosen_sabtu_tigabelas,
			// 'dosen_sabtu_limabelas' => $dosen_sabtu_limabelas,
			// 'dosen_sabtu_tujuhbelas' => $dosen_sabtu_tujuhbelas,
			// 'dosen_sabtu_sembilanbelas' => $dosen_sabtu_sembilanbelas,
			);

		$this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('result/v_dosen', $data);
        $this->load->view('template/footer');
	}

	public function hasil_ruangan()
    {
        $ruang = $this->M_ruangan->getallruangan();
        $gedung = $this->M_gedung->getallgedung();
        // $ruang_senin_tujuh = $this->M_result->ruang_senin_tujuh(8);
        // $ruang_senin_sembilan = $this->M_result->ruang_senin_sembilan(8);
        // $ruang_senin_sebelas = $this->M_result->ruang_senin_sebelas(8);
        // $ruang_senin_tigabelas = $this->M_result->ruang_senin_tigabelas(8);
        // $ruang_senin_limabelas = $this->M_result->ruang_senin_limabelas(8);
        // $ruang_senin_tujuhbelas = $this->M_result->ruang_senin_tujuhbelas(8);
        // $ruang_senin_sembilanbelas = $this->M_result->ruang_senin_sembilanbelas(8);

        // $ruang_selasa_tujuh = $this->M_result->ruang_selasa_tujuh(8);
        // $ruang_selasa_sembilan = $this->M_result->ruang_selasa_sembilan(8);
        // $ruang_selasa_sebelas = $this->M_result->ruang_selasa_sebelas(8);
        // $ruang_selasa_tigabelas = $this->M_result->ruang_selasa_tigabelas(8);
        // $ruang_selasa_limabelas = $this->M_result->ruang_selasa_limabelas(8);
        // $ruang_selasa_tujuhbelas = $this->M_result->ruang_selasa_tujuhbelas(8);
        // $ruang_selasa_sembilanbelas = $this->M_result->ruang_selasa_sembilanbelas(8);

        // $ruang_rabu_tujuh = $this->M_result->ruang_rabu_tujuh(8);
        // $ruang_rabu_sembilan = $this->M_result->ruang_rabu_sembilan(8);
        // $ruang_rabu_sebelas = $this->M_result->ruang_rabu_sebelas(8);
        // $ruang_rabu_tigabelas = $this->M_result->ruang_rabu_tigabelas(8);
        // $ruang_rabu_limabelas = $this->M_result->ruang_rabu_limabelas(8);
        // $ruang_rabu_tujuhbelas = $this->M_result->ruang_rabu_tujuhbelas(8);
        // $ruang_rabu_sembilanbelas = $this->M_result->ruang_rabu_sembilanbelas(8);

        // $ruang_kamis_tujuh = $this->M_result->ruang_kamis_tujuh(8);
        // $ruang_kamis_sembilan = $this->M_result->ruang_kamis_sembilan(8);
        // $ruang_kamis_sebelas = $this->M_result->ruang_kamis_sebelas(8);
        // $ruang_kamis_tigabelas = $this->M_result->ruang_kamis_tigabelas(8);
        // $ruang_kamis_limabelas = $this->M_result->ruang_kamis_limabelas(8);
        // $ruang_kamis_tujuhbelas = $this->M_result->ruang_kamis_tujuhbelas(8);
        // $ruang_kamis_sembilanbelas = $this->M_result->ruang_kamis_sembilanbelas(8);

        // $ruang_jumat_tujuh = $this->M_result->ruang_jumat_tujuh(8);
        // $ruang_jumat_sembilan = $this->M_result->ruang_jumat_sembilan(8);
        // $ruang_jumat_sebelas = $this->M_result->ruang_jumat_sebelas(8);
        // $ruang_jumat_tigabelas = $this->M_result->ruang_jumat_tigabelas(8);
        // $ruang_jumat_limabelas = $this->M_result->ruang_jumat_limabelas(8);
        // $ruang_jumat_tujuhbelas = $this->M_result->ruang_jumat_tujuhbelas(8);
        // $ruang_jumat_sembilanbelas = $this->M_result->ruang_jumat_sembilanbelas(8);

        // $ruang_sabtu_tujuh = $this->M_result->ruang_sabtu_tujuh(8);
        // $ruang_sabtu_sembilan = $this->M_result->ruang_sabtu_sembilan(8);
        // $ruang_sabtu_sebelas = $this->M_result->ruang_sabtu_sebelas(8);
        // $ruang_sabtu_tigabelas = $this->M_result->ruang_sabtu_tigabelas(8);
        // $ruang_sabtu_limabelas = $this->M_result->ruang_sabtu_limabelas(8);
        // $ruang_sabtu_tujuhbelas = $this->M_result->ruang_sabtu_tujuhbelas(8);
        // $ruang_sabtu_sembilanbelas = $this->M_result->ruang_sabtu_sembilanbelas(8);

        $data = array(
            'dataRuangan' => $ruang, 
            'dataGedung' => $gedung,
            'model_obj' => $this->M_result, 
            // 'ruang_senin_tujuh' => $ruang_senin_tujuh,
            // 'ruang_senin_sembilan' => $ruang_senin_sembilan,
            // 'ruang_senin_sebelas' => $ruang_senin_sebelas,
            // 'ruang_senin_tigabelas' => $ruang_senin_tigabelas,
            // 'ruang_senin_limabelas' => $ruang_senin_limabelas,
            // 'ruang_senin_tujuhbelas' => $ruang_senin_tujuhbelas,
            // 'ruang_senin_sembilanbelas' => $ruang_senin_sembilanbelas,
            // 'ruang_selasa_tujuh' => $ruang_selasa_tujuh,
            // 'ruang_selasa_sembilan' => $ruang_selasa_sembilan,
            // 'ruang_selasa_sebelas' => $ruang_selasa_sebelas,
            // 'ruang_selasa_tigabelas' => $ruang_selasa_tigabelas,
            // 'ruang_selasa_limabelas' => $ruang_selasa_limabelas,
            // 'ruang_selasa_tujuhbelas' => $ruang_selasa_tujuhbelas,
            // 'ruang_selasa_sembilanbelas' => $ruang_selasa_sembilanbelas,
            // 'ruang_rabu_tujuh' => $ruang_rabu_tujuh,
            // 'ruang_rabu_sembilan' => $ruang_rabu_sembilan,
            // 'ruang_rabu_sebelas' => $ruang_rabu_sebelas,
            // 'ruang_rabu_tigabelas' => $ruang_rabu_tigabelas,
            // 'ruang_rabu_limabelas' => $ruang_rabu_limabelas,
            // 'ruang_rabu_tujuhbelas' => $ruang_rabu_tujuhbelas,
            // 'ruang_rabu_sembilanbelas' => $ruang_rabu_sembilanbelas,
            // 'ruang_kamis_tujuh' => $ruang_kamis_tujuh,
            // 'ruang_kamis_sembilan' => $ruang_kamis_sembilan,
            // 'ruang_kamis_sebelas' => $ruang_kamis_sebelas,
            // 'ruang_kamis_tigabelas' => $ruang_kamis_tigabelas,
            // 'ruang_kamis_limabelas' => $ruang_kamis_limabelas,
            // 'ruang_kamis_tujuhbelas' => $ruang_kamis_tujuhbelas,
            // 'ruang_kamis_sembilanbelas' => $ruang_kamis_sembilanbelas,
            // 'ruang_jumat_tujuh' => $ruang_jumat_tujuh,
            // 'ruang_jumat_sembilan' => $ruang_jumat_sembilan,
            // 'ruang_jumat_sebelas' => $ruang_jumat_sebelas,
            // 'ruang_jumat_tigabelas' => $ruang_jumat_tigabelas,
            // 'ruang_jumat_limabelas' => $ruang_jumat_limabelas,
            // 'ruang_jumat_tujuhbelas' => $ruang_jumat_tujuhbelas,
            // 'ruang_jumat_sembilanbelas' => $ruang_jumat_sembilanbelas,
            // 'ruang_sabtu_tujuh' => $ruang_sabtu_tujuh,
            // 'ruang_sabtu_sembilan' => $ruang_sabtu_sembilan,
            // 'ruang_sabtu_sebelas' => $ruang_sabtu_sebelas,
            // 'ruang_sabtu_tigabelas' => $ruang_sabtu_tigabelas,
            // 'ruang_sabtu_limabelas' => $ruang_sabtu_limabelas,
            // 'ruang_sabtu_tujuhbelas' => $ruang_sabtu_tujuhbelas,
            // 'ruang_sabtu_sembilanbelas' => $ruang_sabtu_sembilanbelas,
            );

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('result/v_ruangan', $data);
        $this->load->view('template/footer');
    }

    public function cetak_kelas($id)
    {
    	$row = $this->M_result->get_all_by_kelas($id);

    	$kelas_senin_tujuh = $this->M_result->kelas_senin_tujuh($id);
		$kelas_senin_sembilan = $this->M_result->kelas_senin_sembilan($id);
		$kelas_senin_sebelas = $this->M_result->kelas_senin_sebelas($id);
		$kelas_senin_tigabelas = $this->M_result->kelas_senin_tigabelas($id);
		$kelas_senin_limabelas = $this->M_result->kelas_senin_limabelas($id);
		$kelas_senin_tujuhbelas = $this->M_result->kelas_senin_tujuhbelas($id);
		$kelas_senin_sembilanbelas = $this->M_result->kelas_senin_sembilanbelas($id);

		$kelas_selasa_tujuh = $this->M_result->kelas_selasa_tujuh($id);
		$kelas_selasa_sembilan = $this->M_result->kelas_selasa_sembilan($id);
		$kelas_selasa_sebelas = $this->M_result->kelas_selasa_sebelas($id);
		$kelas_selasa_tigabelas = $this->M_result->kelas_selasa_tigabelas($id);
		$kelas_selasa_limabelas = $this->M_result->kelas_selasa_limabelas($id);
		$kelas_selasa_tujuhbelas = $this->M_result->kelas_selasa_tujuhbelas($id);
		$kelas_selasa_sembilanbelas = $this->M_result->kelas_selasa_sembilanbelas($id);

		$kelas_rabu_tujuh = $this->M_result->kelas_rabu_tujuh($id);
		$kelas_rabu_sembilan = $this->M_result->kelas_rabu_sembilan($id);
		$kelas_rabu_sebelas = $this->M_result->kelas_rabu_sebelas($id);
		$kelas_rabu_tigabelas = $this->M_result->kelas_rabu_tigabelas($id);
		$kelas_rabu_limabelas = $this->M_result->kelas_rabu_limabelas($id);
		$kelas_rabu_tujuhbelas = $this->M_result->kelas_rabu_tujuhbelas($id);
		$kelas_rabu_sembilanbelas = $this->M_result->kelas_rabu_sembilanbelas($id);

		$kelas_kamis_tujuh = $this->M_result->kelas_kamis_tujuh($id);
		$kelas_kamis_sembilan = $this->M_result->kelas_kamis_sembilan($id);
		$kelas_kamis_sebelas = $this->M_result->kelas_kamis_sebelas($id);
		$kelas_kamis_tigabelas = $this->M_result->kelas_kamis_tigabelas($id);
		$kelas_kamis_limabelas = $this->M_result->kelas_kamis_limabelas($id);
		$kelas_kamis_tujuhbelas = $this->M_result->kelas_kamis_tujuhbelas($id);
		$kelas_kamis_sembilanbelas = $this->M_result->kelas_kamis_sembilanbelas($id);

		$kelas_jumat_tujuh = $this->M_result->kelas_jumat_tujuh($id);
		$kelas_jumat_sembilan = $this->M_result->kelas_jumat_sembilan($id);
		$kelas_jumat_sebelas = $this->M_result->kelas_jumat_sebelas($id);
		$kelas_jumat_tigabelas = $this->M_result->kelas_jumat_tigabelas($id);
		$kelas_jumat_limabelas = $this->M_result->kelas_jumat_limabelas($id);
		$kelas_jumat_tujuhbelas = $this->M_result->kelas_jumat_tujuhbelas($id);
		$kelas_jumat_sembilanbelas = $this->M_result->kelas_jumat_sembilanbelas($id);

		$kelas_sabtu_tujuh = $this->M_result->kelas_sabtu_tujuh($id);
		$kelas_sabtu_sembilan = $this->M_result->kelas_sabtu_sembilan($id);
		$kelas_sabtu_sebelas = $this->M_result->kelas_sabtu_sebelas($id);
		$kelas_sabtu_tigabelas = $this->M_result->kelas_sabtu_tigabelas($id);
		$kelas_sabtu_limabelas = $this->M_result->kelas_sabtu_limabelas($id);
		$kelas_sabtu_tujuhbelas = $this->M_result->kelas_sabtu_tujuhbelas($id);
		$kelas_sabtu_sembilanbelas = $this->M_result->kelas_sabtu_sembilanbelas($id);

    	$data = array(
			'dataKelas' => $row, 
			'model_obj' => $this->M_result,
			'kelas_senin_tujuh' => $kelas_senin_tujuh,
			'kelas_senin_sembilan' => $kelas_senin_sembilan,
			'kelas_senin_sebelas' => $kelas_senin_sebelas,
			'kelas_senin_tigabelas' => $kelas_senin_tigabelas,
			'kelas_senin_limabelas' => $kelas_senin_limabelas,
			'kelas_senin_tujuhbelas' => $kelas_senin_tujuhbelas,
			'kelas_senin_sembilanbelas' => $kelas_senin_sembilanbelas,
			'kelas_selasa_tujuh' => $kelas_selasa_tujuh,
			'kelas_selasa_sembilan' => $kelas_selasa_sembilan,
			'kelas_selasa_sebelas' => $kelas_selasa_sebelas,
			'kelas_selasa_tigabelas' => $kelas_selasa_tigabelas,
			'kelas_selasa_limabelas' => $kelas_selasa_limabelas,
			'kelas_selasa_tujuhbelas' => $kelas_selasa_tujuhbelas,
			'kelas_selasa_sembilanbelas' => $kelas_selasa_sembilanbelas,
			'kelas_rabu_tujuh' => $kelas_rabu_tujuh,
			'kelas_rabu_sembilan' => $kelas_rabu_sembilan,
			'kelas_rabu_sebelas' => $kelas_rabu_sebelas,
			'kelas_rabu_tigabelas' => $kelas_rabu_tigabelas,
			'kelas_rabu_limabelas' => $kelas_rabu_limabelas,
			'kelas_rabu_tujuhbelas' => $kelas_rabu_tujuhbelas,
			'kelas_rabu_sembilanbelas' => $kelas_rabu_sembilanbelas,
			'kelas_kamis_tujuh' => $kelas_kamis_tujuh,
			'kelas_kamis_sembilan' => $kelas_kamis_sembilan,
			'kelas_kamis_sebelas' => $kelas_kamis_sebelas,
			'kelas_kamis_tigabelas' => $kelas_kamis_tigabelas,
			'kelas_kamis_limabelas' => $kelas_kamis_limabelas,
			'kelas_kamis_tujuhbelas' => $kelas_kamis_tujuhbelas,
			'kelas_kamis_sembilanbelas' => $kelas_kamis_sembilanbelas,
			'kelas_jumat_tujuh' => $kelas_jumat_tujuh,
			'kelas_jumat_sembilan' => $kelas_jumat_sembilan,
			'kelas_jumat_sebelas' => $kelas_jumat_sebelas,
			'kelas_jumat_tigabelas' => $kelas_jumat_tigabelas,
			'kelas_jumat_limabelas' => $kelas_jumat_limabelas,
			'kelas_jumat_tujuhbelas' => $kelas_jumat_tujuhbelas,
			'kelas_jumat_sembilanbelas' => $kelas_jumat_sembilanbelas,
			'kelas_sabtu_tujuh' => $kelas_sabtu_tujuh,
			'kelas_sabtu_sembilan' => $kelas_sabtu_sembilan,
			'kelas_sabtu_sebelas' => $kelas_sabtu_sebelas,
			'kelas_sabtu_tigabelas' => $kelas_sabtu_tigabelas,
			'kelas_sabtu_limabelas' => $kelas_sabtu_limabelas,
			'kelas_sabtu_tujuhbelas' => $kelas_sabtu_tujuhbelas,
			'kelas_sabtu_sembilanbelas' => $kelas_sabtu_sembilanbelas,
			);

        $this->load->view('report/cetak_kelas', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("kelas.pdf", array('Attachment'=>0));
    }

    public function cetak_dosen($id)
    {
    	$row = $this->M_result->get_all_by_dosen($id);

    	$dosen_senin_tujuh = $this->M_result->dosen_senin_tujuh($id);
		$dosen_senin_sembilan = $this->M_result->dosen_senin_sembilan($id);
		$dosen_senin_sebelas = $this->M_result->dosen_senin_sebelas($id);
		$dosen_senin_tigabelas = $this->M_result->dosen_senin_tigabelas($id);
		$dosen_senin_limabelas = $this->M_result->dosen_senin_limabelas($id);
		$dosen_senin_tujuhbelas = $this->M_result->dosen_senin_tujuhbelas($id);
		$dosen_senin_sembilanbelas = $this->M_result->dosen_senin_sembilanbelas($id);

		$dosen_selasa_tujuh = $this->M_result->dosen_selasa_tujuh($id);
		$dosen_selasa_sembilan = $this->M_result->dosen_selasa_sembilan($id);
		$dosen_selasa_sebelas = $this->M_result->dosen_selasa_sebelas($id);
		$dosen_selasa_tigabelas = $this->M_result->dosen_selasa_tigabelas($id);
		$dosen_selasa_limabelas = $this->M_result->dosen_selasa_limabelas($id);
		$dosen_selasa_tujuhbelas = $this->M_result->dosen_selasa_tujuhbelas($id);
		$dosen_selasa_sembilanbelas = $this->M_result->dosen_selasa_sembilanbelas($id);

		$dosen_rabu_tujuh = $this->M_result->dosen_rabu_tujuh($id);
		$dosen_rabu_sembilan = $this->M_result->dosen_rabu_sembilan($id);
		$dosen_rabu_sebelas = $this->M_result->dosen_rabu_sebelas($id);
		$dosen_rabu_tigabelas = $this->M_result->dosen_rabu_tigabelas($id);
		$dosen_rabu_limabelas = $this->M_result->dosen_rabu_limabelas($id);
		$dosen_rabu_tujuhbelas = $this->M_result->dosen_rabu_tujuhbelas($id);
		$dosen_rabu_sembilanbelas = $this->M_result->dosen_rabu_sembilanbelas($id);

		$dosen_kamis_tujuh = $this->M_result->dosen_kamis_tujuh($id);
		$dosen_kamis_sembilan = $this->M_result->dosen_kamis_sembilan($id);
		$dosen_kamis_sebelas = $this->M_result->dosen_kamis_sebelas($id);
		$dosen_kamis_tigabelas = $this->M_result->dosen_kamis_tigabelas($id);
		$dosen_kamis_limabelas = $this->M_result->dosen_kamis_limabelas($id);
		$dosen_kamis_tujuhbelas = $this->M_result->dosen_kamis_tujuhbelas($id);
		$dosen_kamis_sembilanbelas = $this->M_result->dosen_kamis_sembilanbelas($id);

		$dosen_jumat_tujuh = $this->M_result->dosen_jumat_tujuh($id);
		$dosen_jumat_sembilan = $this->M_result->dosen_jumat_sembilan($id);
		$dosen_jumat_sebelas = $this->M_result->dosen_jumat_sebelas($id);
		$dosen_jumat_tigabelas = $this->M_result->dosen_jumat_tigabelas($id);
		$dosen_jumat_limabelas = $this->M_result->dosen_jumat_limabelas($id);
		$dosen_jumat_tujuhbelas = $this->M_result->dosen_jumat_tujuhbelas($id);
		$dosen_jumat_sembilanbelas = $this->M_result->dosen_jumat_sembilanbelas($id);

		$dosen_sabtu_tujuh = $this->M_result->dosen_sabtu_tujuh($id);
		$dosen_sabtu_sembilan = $this->M_result->dosen_sabtu_sembilan($id);
		$dosen_sabtu_sebelas = $this->M_result->dosen_sabtu_sebelas($id);
		$dosen_sabtu_tigabelas = $this->M_result->dosen_sabtu_tigabelas($id);
		$dosen_sabtu_limabelas = $this->M_result->dosen_sabtu_limabelas($id);
		$dosen_sabtu_tujuhbelas = $this->M_result->dosen_sabtu_tujuhbelas($id);
		$dosen_sabtu_sembilanbelas = $this->M_result->dosen_sabtu_sembilanbelas($id);
		
    	$data = array(
			'dataDosen' => $row,
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

        $this->load->view('report/cetak_dosen', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("dosen.pdf", array('Attachment'=>0));
    }

    public function cetak_ruangan($id)
    {
    	$row = $this->M_result->get_all_by_ruangan($id);

    	$ruang_senin_tujuh = $this->M_result->ruang_senin_tujuh($id);
        $ruang_senin_sembilan = $this->M_result->ruang_senin_sembilan($id);
        $ruang_senin_sebelas = $this->M_result->ruang_senin_sebelas($id);
        $ruang_senin_tigabelas = $this->M_result->ruang_senin_tigabelas($id);
        $ruang_senin_limabelas = $this->M_result->ruang_senin_limabelas($id);
        $ruang_senin_tujuhbelas = $this->M_result->ruang_senin_tujuhbelas($id);
        $ruang_senin_sembilanbelas = $this->M_result->ruang_senin_sembilanbelas($id);

        $ruang_selasa_tujuh = $this->M_result->ruang_selasa_tujuh($id);
        $ruang_selasa_sembilan = $this->M_result->ruang_selasa_sembilan($id);
        $ruang_selasa_sebelas = $this->M_result->ruang_selasa_sebelas($id);
        $ruang_selasa_tigabelas = $this->M_result->ruang_selasa_tigabelas($id);
        $ruang_selasa_limabelas = $this->M_result->ruang_selasa_limabelas($id);
        $ruang_selasa_tujuhbelas = $this->M_result->ruang_selasa_tujuhbelas($id);
        $ruang_selasa_sembilanbelas = $this->M_result->ruang_selasa_sembilanbelas($id);

        $ruang_rabu_tujuh = $this->M_result->ruang_rabu_tujuh($id);
        $ruang_rabu_sembilan = $this->M_result->ruang_rabu_sembilan($id);
        $ruang_rabu_sebelas = $this->M_result->ruang_rabu_sebelas($id);
        $ruang_rabu_tigabelas = $this->M_result->ruang_rabu_tigabelas($id);
        $ruang_rabu_limabelas = $this->M_result->ruang_rabu_limabelas($id);
        $ruang_rabu_tujuhbelas = $this->M_result->ruang_rabu_tujuhbelas($id);
        $ruang_rabu_sembilanbelas = $this->M_result->ruang_rabu_sembilanbelas($id);

        $ruang_kamis_tujuh = $this->M_result->ruang_kamis_tujuh($id);
        $ruang_kamis_sembilan = $this->M_result->ruang_kamis_sembilan($id);
        $ruang_kamis_sebelas = $this->M_result->ruang_kamis_sebelas($id);
        $ruang_kamis_tigabelas = $this->M_result->ruang_kamis_tigabelas($id);
        $ruang_kamis_limabelas = $this->M_result->ruang_kamis_limabelas($id);
        $ruang_kamis_tujuhbelas = $this->M_result->ruang_kamis_tujuhbelas($id);
        $ruang_kamis_sembilanbelas = $this->M_result->ruang_kamis_sembilanbelas($id);

        $ruang_jumat_tujuh = $this->M_result->ruang_jumat_tujuh($id);
        $ruang_jumat_sembilan = $this->M_result->ruang_jumat_sembilan($id);
        $ruang_jumat_sebelas = $this->M_result->ruang_jumat_sebelas($id);
        $ruang_jumat_tigabelas = $this->M_result->ruang_jumat_tigabelas($id);
        $ruang_jumat_limabelas = $this->M_result->ruang_jumat_limabelas($id);
        $ruang_jumat_tujuhbelas = $this->M_result->ruang_jumat_tujuhbelas($id);
        $ruang_jumat_sembilanbelas = $this->M_result->ruang_jumat_sembilanbelas($id);

        $ruang_sabtu_tujuh = $this->M_result->ruang_sabtu_tujuh($id);
        $ruang_sabtu_sembilan = $this->M_result->ruang_sabtu_sembilan($id);
        $ruang_sabtu_sebelas = $this->M_result->ruang_sabtu_sebelas($id);
        $ruang_sabtu_tigabelas = $this->M_result->ruang_sabtu_tigabelas($id);
        $ruang_sabtu_limabelas = $this->M_result->ruang_sabtu_limabelas($id);
        $ruang_sabtu_tujuhbelas = $this->M_result->ruang_sabtu_tujuhbelas($id);
        $ruang_sabtu_sembilanbelas = $this->M_result->ruang_sabtu_sembilanbelas($id);
		
    	$data = array(
			'dataRuangan' => $row,
			'model_obj' => $this->M_result, 
			'ruang_senin_tujuh' => $ruang_senin_tujuh,
            'ruang_senin_sembilan' => $ruang_senin_sembilan,
            'ruang_senin_sebelas' => $ruang_senin_sebelas,
            'ruang_senin_tigabelas' => $ruang_senin_tigabelas,
            'ruang_senin_limabelas' => $ruang_senin_limabelas,
            'ruang_senin_tujuhbelas' => $ruang_senin_tujuhbelas,
            'ruang_senin_sembilanbelas' => $ruang_senin_sembilanbelas,
            'ruang_selasa_tujuh' => $ruang_selasa_tujuh,
            'ruang_selasa_sembilan' => $ruang_selasa_sembilan,
            'ruang_selasa_sebelas' => $ruang_selasa_sebelas,
            'ruang_selasa_tigabelas' => $ruang_selasa_tigabelas,
            'ruang_selasa_limabelas' => $ruang_selasa_limabelas,
            'ruang_selasa_tujuhbelas' => $ruang_selasa_tujuhbelas,
            'ruang_selasa_sembilanbelas' => $ruang_selasa_sembilanbelas,
            'ruang_rabu_tujuh' => $ruang_rabu_tujuh,
            'ruang_rabu_sembilan' => $ruang_rabu_sembilan,
            'ruang_rabu_sebelas' => $ruang_rabu_sebelas,
            'ruang_rabu_tigabelas' => $ruang_rabu_tigabelas,
            'ruang_rabu_limabelas' => $ruang_rabu_limabelas,
            'ruang_rabu_tujuhbelas' => $ruang_rabu_tujuhbelas,
            'ruang_rabu_sembilanbelas' => $ruang_rabu_sembilanbelas,
            'ruang_kamis_tujuh' => $ruang_kamis_tujuh,
            'ruang_kamis_sembilan' => $ruang_kamis_sembilan,
            'ruang_kamis_sebelas' => $ruang_kamis_sebelas,
            'ruang_kamis_tigabelas' => $ruang_kamis_tigabelas,
            'ruang_kamis_limabelas' => $ruang_kamis_limabelas,
            'ruang_kamis_tujuhbelas' => $ruang_kamis_tujuhbelas,
            'ruang_kamis_sembilanbelas' => $ruang_kamis_sembilanbelas,
            'ruang_jumat_tujuh' => $ruang_jumat_tujuh,
            'ruang_jumat_sembilan' => $ruang_jumat_sembilan,
            'ruang_jumat_sebelas' => $ruang_jumat_sebelas,
            'ruang_jumat_tigabelas' => $ruang_jumat_tigabelas,
            'ruang_jumat_limabelas' => $ruang_jumat_limabelas,
            'ruang_jumat_tujuhbelas' => $ruang_jumat_tujuhbelas,
            'ruang_jumat_sembilanbelas' => $ruang_jumat_sembilanbelas,
            'ruang_sabtu_tujuh' => $ruang_sabtu_tujuh,
            'ruang_sabtu_sembilan' => $ruang_sabtu_sembilan,
            'ruang_sabtu_sebelas' => $ruang_sabtu_sebelas,
            'ruang_sabtu_tigabelas' => $ruang_sabtu_tigabelas,
            'ruang_sabtu_limabelas' => $ruang_sabtu_limabelas,
            'ruang_sabtu_tujuhbelas' => $ruang_sabtu_tujuhbelas,
            'ruang_sabtu_sembilanbelas' => $ruang_sabtu_sembilanbelas,
			);

        $this->load->view('report/cetak_ruangan', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'portrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("ruangan.pdf", array('Attachment'=>0));
    }

}

/* End of file Result.php */
/* Location: ./application/controllers/Result.php */