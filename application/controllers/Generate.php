<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
		$this->load->model('M_jadwal');
		$this->load->model('M_matakuliah');
		$this->load->model('M_waktu');
		$this->load->model('M_hari');
		$this->load->model('M_jam');
		$this->load->model('M_result');

		$userSession = $this->session->userdata('baaku');
        if ($userSession['bagian'] != "staff"){
            redirect('Login');
        }
	}

	public function index(){
		//$dataJam = $this->db->select('*')->order_by('rand()')->get('tb_jam')->result();
		// $dataJam = $this->M_jam->random();
		
		$this->db->select('*');
		$this->db->join('tb_makul', 'tb_makul.id_makul = tb_jadwal.id_makul');
		$dataJadwal = $this->db->get('tb_jadwal')->result();
		foreach ($dataJadwal as $jadwal){
			if ($jadwal->jenis_makul == 'Teori'){
				$this->db->select('*');
				$this->db->where('jenis', 'Kelas');
				$dataRuangan = $this->db->order_by('rand()')->get('tb_ruangan')->result();
				foreach ($dataRuangan as $ruangan){
					//$dataHari = $this->db->select('*')->order_by('rand()')->get('tb_hari')->result();
					$dataWaktu = $this->db->select('*')->order_by('rand()')->get('tb_waktu')->result();
					foreach ($dataWaktu as $waktu){
						$this->db->select('*');
						$this->db->where('id_ruang', $ruangan->id_ruang);
						$this->db->where('id_waktu', $waktu->id_waktu);
						$dataJadwalSemester = $this->db->get('tb_jadwalsemester')->result();
						$dataInsert = [
							'id_ruang' => $ruangan->id_ruang,
							'id_jadwal' => $jadwal->id_jadwal,
							'id_waktu' => $waktu->id_waktu
						];
						if (count($dataJadwalSemester) <= 0){
							$this->db->where('id_jadwal', $jadwal->id_jadwal);
							$row = $this->db->get('tb_jadwalsemester')->result();
							if (count($row) <= 0){
								//print_r($row);
								$this->db->insert('tb_jadwalsemester', $dataInsert);
								//exit();
							}else{
								//print_r($row);
								//exit();
							}
						}
					}
				}
			}else{
				$this->db->select('*');
				$this->db->where('jenis', 'Lab');
				$dataRuangan = $this->db->order_by('rand()')->get('tb_ruangan')->result();
				foreach ($dataRuangan as $ruangan){
					// $dataHari = $this->db->select('*')->order_by('rand()')->get('tb_hari')->result();
					$dataWaktu = $this->db->select('*')->order_by('rand()')->get('tb_waktu')->result();
					foreach ($dataWaktu as $waktu){
						$this->db->select('*');
						$this->db->where('id_ruang', $ruangan->id_ruang);
						$this->db->where('id_waktu', $waktu->id_waktu);
						$dataJadwalSemester = $this->db->get('tb_jadwalsemester')->result();
						$dataInsert = [
							'id_ruang' => $ruangan->id_ruang,
							'id_jadwal' => $jadwal->id_jadwal,
							'id_waktu' => $waktu->id_waktu
						];
						if (count($dataJadwalSemester) <= 0){
							$this->db->where('id_jadwal', $jadwal->id_jadwal);
							$row = $this->db->get('tb_jadwalsemester')->result();
							if (count($row) <= 0){
								//print_r($row);
								$this->db->insert('tb_jadwalsemester', $dataInsert);
								//exit();
							}else{
								//print_r($row);
								//exit();
							}
						}
					}
				}	
			}
		}
		redirect('Result');
	}

}

/* End of file Generate.php */
/* Location: ./application/controllers/Generate.php */