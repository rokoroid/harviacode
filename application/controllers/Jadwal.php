<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_jadwal');
        $this->load->model('M_semester');
        $this->load->model('M_fakultas');
        $this->load->model('M_prodi');
        $this->load->model('M_dosen');
        $this->load->model('M_matakuliah');
        $this->load->model('M_kelas');
        $this->load->library('form_validation');

        $userSession = $this->session->userdata('kaprodi');
        if ($userSession['bagian'] != "kaprodi"){
            redirect('Login');
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jadwal/index.html';
            $config['first_url'] = base_url() . 'jadwal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_jadwal->total_rows($q);
        // $jadwal = $this->M_jadwal->get_limit_data($config['per_page'], $start, $q);
        $jadwal = $this->M_jadwal->join();
        $fakultas = $this->M_fakultas->getallfakultas();
        $prodi = $this->M_prodi->getallprodi();
        $semester = $this->M_semester->getallsemester();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'dataFakultas' => $fakultas,
            'dataProdi' => $prodi,
            'dataSemester' => $semester,
        );
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('jadwal/tb_jadwal_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $semester = $this->M_semester->getallsemester();
        $dosen = $this->M_dosen->getalldosen();
        $makul = $this->M_matakuliah->getallmakul();
        $kelas = $this->M_kelas->getallkelas();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('jadwal/create_action'),
	    'id_jadwal' => set_value('id_jadwal'),
	    'id_semester' => set_value('id_semester'),
	    'id_makul' => set_value('id_makul'),
	    'id_kelas' => set_value('id_kelas'),
	    'id_dosen' => set_value('id_dosen'),
        'dataSemester' => $semester,
        'dataMakul' => $makul,
        'dataDosen' => $dosen,
        'dataKelas' => $kelas,
	);
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('jadwal/tb_jadwal_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_semester' => $this->input->post('id_semester',TRUE),
		'id_makul' => $this->input->post('id_makul',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_dosen' => $this->input->post('id_dosen',TRUE),
	    );

            $this->M_jadwal->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_jadwal->get_by_id($id);
        $semester = $this->M_semester->getallsemester();
        $dosen = $this->M_dosen->getalldosen();
        $makul = $this->M_matakuliah->getallmakul();
        $kelas = $this->M_kelas->getallkelas();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
		'id_jadwal' => set_value('id_jadwal', $row->id_jadwal),
		'id_semester' => set_value('id_semester', $row->id_semester),
		'id_makul' => set_value('id_makul', $row->id_makul),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'id_dosen' => set_value('id_dosen', $row->id_dosen),
        'dataSemester' => $semester,
        'dataMakul' => $makul,
        'dataDosen' => $dosen,
        'dataKelas' => $kelas,
	    );
            $this->load->view('template/header3');
            $this->load->view('template/sidebar3');
            $this->load->view('jadwal/tb_jadwal_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jadwal', TRUE));
        } else {
            $data = array(
		'id_semester' => $this->input->post('id_semester',TRUE),
		'id_makul' => $this->input->post('id_makul',TRUE),
		'id_kelas' => $this->input->post('id_kelas',TRUE),
		'id_dosen' => $this->input->post('id_dosen',TRUE),
	    );

            $this->M_jadwal->update($this->input->post('id_jadwal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_jadwal->get_by_id($id);

        if ($row) {
            $this->M_jadwal->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_semester', 'id semester', 'trim|required');
	// $this->form_validation->set_rules('id_makul', 'id makul', 'trim|required');
	// $this->form_validation->set_rules('id_kelas', 'nama kelas', 'trim|required');
	// $this->form_validation->set_rules('id_dosen', 'id dosen', 'trim|required');

	$this->form_validation->set_rules('id_jadwal', 'id_jadwal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function get_prodi()
    {
        $idFakultas = $_GET['id'];
        $prodi = $this->M_jadwal->getProdiByFakultas($idFakultas);
        print_r(json_encode($prodi));
    }

    public function get_data_table()
    {
        $idProdi = $_GET['id'];
        $table = $this->M_jadwal->getDatabyProdi($idProdi);
        print_r(json_encode($table));
    }

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-10-11 10:27:16 */
/* http://harviacode.com */