<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Validasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_validasi');
        $this->load->model('M_matakuliah');
        $this->load->model('M_prodi');
        $this->load->model('M_semester');
        $this->load->model('M_fakultas');
        $this->load->library('form_validation');

        // $userSession = $this->session->userdata('kaprodi');
        // if ($userSession['bagian'] != "kaprodi"){
        //     redirect('Login');
        // }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'validasi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'validasi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'validasi/index.html';
            $config['first_url'] = base_url() . 'validasi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_validasi->total_rows($q);
        // $validasi = $this->M_validasi->get_limit_data($config['per_page'], $start, $q);
        $validasi = $this->M_validasi->join();

        $fakultas = $this->M_fakultas->getallfakultas();
        $prodi = $this->M_prodi->getallprodi();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'validasi_data' => $validasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'dataFakultas' => $fakultas,
            'dataProdi' => $prodi,
        );
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('validasi/tb_makul_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $prodi = $this->M_prodi->getallprodi();
        $semester = $this->M_semester->getallsemester();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('validasi/create_action'),
	    'id_makul' => set_value('id_makul'),
	    'semester' => set_value('semester'),
	    'id_prodi' => set_value('id_prodi'),
	    'kode_makul' => set_value('kode_makul'),
	    'nama_makul' => set_value('nama_makul'),
	    'sks' => set_value('sks'),
	    'jenis_makul' => set_value('jenis_makul'),
	    'angkatan' => set_value('angkatan'),
	    'status' => set_value('status'),
        'dataProdi' => $prodi,
        'dataSemester' => $semester,
	);
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('validasi/tb_makul_form', $data);
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
		'status' => $this->input->post('status',TRUE),
	    );

            $this->M_validasi->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('validasi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_validasi->get_by_id($id);
        $prodi = $this->M_prodi->getallprodi();
        $semester = $this->M_semester->getallsemester();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('validasi/update_action'),
		'id_makul' => set_value('id_makul', $row->id_makul),
		'semester' => set_value('semester', $row->semester),
		'id_prodi' => set_value('id_prodi', $row->id_prodi),
		'kode_makul' => set_value('kode_makul', $row->kode_makul),
		'nama_makul' => set_value('nama_makul', $row->nama_makul),
		'sks' => set_value('sks', $row->sks),
		'jenis_makul' => set_value('jenis_makul', $row->jenis_makul),
		'angkatan' => set_value('angkatan', $row->angkatan),
		'status' => set_value('status', $row->status),
        'dataProdi' => $prodi,
        'dataSemester' => $semester,
	    );
            $this->load->view('template/header3');
            $this->load->view('template/sidebar3');
            $this->load->view('validasi/tb_makul_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('validasi'));
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
		'status' => $this->input->post('status',TRUE),
	    );

            $this->M_validasi->update($this->input->post('id_makul', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('validasi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_validasi->get_by_id($id);

        if ($row) {
            $this->M_validasi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('validasi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('validasi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	$this->form_validation->set_rules('kode_makul', 'kode makul', 'trim|required');
	$this->form_validation->set_rules('nama_makul', 'nama makul', 'trim|required');
	$this->form_validation->set_rules('sks', 'sks', 'trim|required');
	$this->form_validation->set_rules('jenis_makul', 'jenis makul', 'trim|required');
	$this->form_validation->set_rules('angkatan', 'angkatan', 'trim|required');
	// $this->form_validation->set_rules('status', 'status', 'trim|required');

	$this->form_validation->set_rules('id_makul', 'id_makul', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Validasi.php */
/* Location: ./application/controllers/Validasi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-12-09 17:01:30 */
/* http://harviacode.com */