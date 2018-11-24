<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_matakuliah');
        $this->load->model('M_prodi');
        $this->load->model('M_semester');
        $this->load->model('M_fakultas');
        $this->load->library('form_validation');

        $userSession = $this->session->userdata('baaku');
        if ($userSession['bagian'] != "staff"){
            redirect('Login');
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'matakuliah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'matakuliah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'matakuliah/index.html';
            $config['first_url'] = base_url() . 'matakuliah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_matakuliah->total_rows($q);
        // $matakuliah = $this->M_matakuliah->join($config['per_page'], $start, $q);
        $matakuliah = $this->M_matakuliah->join();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $fakultas = $this->M_fakultas->getallfakultas();
        $prodi = $this->M_prodi->getallprodi();

        $data = array(
            'matakuliah_data' => $matakuliah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'dataFakultas' => $fakultas,
            'dataProdi' => $prodi,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('matakuliah/tb_makul_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $prodi = $this->M_prodi->getallprodi();
        $semester = $this->M_semester->getallsemester();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('matakuliah/create_action'),
	    'id_makul' => set_value('id_makul'),
	    'semester' => set_value('semester'),
	    'id_prodi' => set_value('id_prodi'),
	    'kode_makul' => set_value('kode_makul'),
	    'nama_makul' => set_value('nama_makul'),
	    'sks' => set_value('sks'),
        'jenis_makul' => set_value('jenis_makul'),
        'angkatan' => set_value('angkatan'),
        'dataProdi' => $prodi,
        'dataSemester' => $semester,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('matakuliah/tb_makul_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'semester' => $this->input->post('semester',TRUE),
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'kode_makul' => $this->input->post('kode_makul',TRUE),
		'nama_makul' => $this->input->post('nama_makul',TRUE),
		'sks' => $this->input->post('sks',TRUE),
        'jenis_makul' => $this->input->post('jenis_makul',TRUE),
        'angkatan' => $this->input->post('angkatan',TRUE),
	    );

            $this->M_matakuliah->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('matakuliah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_matakuliah->get_by_id($id);
        $prodi = $this->M_prodi->getallprodi();
        $semester = $this->M_semester->getallsemester();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('matakuliah/update_action'),
		'id_makul' => set_value('id_makul', $row->id_makul),
		'semester' => set_value('semester', $row->semester),
		'id_prodi' => set_value('id_prodi', $row->id_prodi),
		'kode_makul' => set_value('kode_makul', $row->kode_makul),
		'nama_makul' => set_value('nama_makul', $row->nama_makul),
		'sks' => set_value('sks', $row->sks),
        'jenis_makul' => set_value('jenis_makul', $row->jenis_makul),
        'angkatan' => set_value('angkatan', $row->angkatan),
        'dataProdi' => $prodi,
        'dataSemester' => $semester,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('matakuliah/tb_makul_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matakuliah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_makul', TRUE));
        } else {
            $data = array(
		'semester' => $this->input->post('semester',TRUE),
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'kode_makul' => $this->input->post('kode_makul',TRUE),
		'nama_makul' => $this->input->post('nama_makul',TRUE),
		'sks' => $this->input->post('sks',TRUE),
        'jenis_makul' => $this->input->post('jenis_makul',TRUE),
        'angkatan' => $this->input->post('angkatan',TRUE),
	    );

            $this->M_matakuliah->update($this->input->post('id_makul', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('matakuliah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_matakuliah->get_by_id($id);

        if ($row) {
            $this->M_matakuliah->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('matakuliah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('matakuliah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	$this->form_validation->set_rules('kode_makul', 'kode makul', 'trim|required');
	$this->form_validation->set_rules('nama_makul', 'nama makul', 'trim|required');
	$this->form_validation->set_rules('sks', 'sks', 'trim|required');

	$this->form_validation->set_rules('id_makul', 'id_makul', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function get_prodi()
    {
        $idFakultas = $_GET['id'];
        $prodi = $this->M_matakuliah->getProdiByFakultas($idFakultas);
        print_r(json_encode($prodi));
    }

    public function get_data_table()
    {
        $idProdi = $_GET['id'];
        $table = $this->M_matakuliah->getDatabyProdi($idProdi);
        print_r(json_encode($table));
    }

}

/* End of file Matakuliah.php */
/* Location: ./application/controllers/Matakuliah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 18:21:51 */
/* http://harviacode.com */